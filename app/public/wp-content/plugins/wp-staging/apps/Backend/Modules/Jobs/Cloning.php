<?php
namespace WPStaging\Backend\Modules\Jobs;

use WPStaging\Backend\Modules\Jobs\Exceptions\JobNotFoundException;

/**
 * Class Cloning
 * @package WPStaging\Backend\Modules\Jobs
 */
class Cloning extends Job
{

    /**
     * Save Chosen Cloning Settings
     * @return bool
     */
    public function save()
    {
        if (!isset($_POST) || !isset($_POST["cloneID"]))
        {
            return false;
        }

        // Generate Options

        // Clone
        $this->options->clone               = $_POST["cloneID"];
        $this->options->cloneDirectoryName  = preg_replace("#\W+#", '-', strtolower($this->options->clone));
        $this->options->cloneNumber         = 1;
        $this->options->includedDirectories = array();
        $this->options->excludedDirectories = array();
        $this->options->extraDirectories = array();
        $this->options->excludedFiles = array('.htaccess', '.DS_Store', '.git', '.svn', '.tmp', 'desktop.ini', '.gitignore', '.log');

        // Job
        $this->options->job                 = new \stdClass();

        if (isset($this->options->existingClones[$this->options->clone]))
        {
            $this->options->cloneNumber = $this->options->existingClones[$this->options->clone]->number;
        }
        elseif (!empty($this->options->existingClones))
        {
            $this->options->cloneNumber =  count($this->options->existingClones)+1;
        }

        // Excluded Tables
        if (isset($_POST["excludedTables"]) && is_array($_POST["excludedTables"]))
        {
            $this->options->excludedTables = $_POST["excludedTables"];
        }

        // Excluded Directories
        if (isset($_POST["excludedDirectories"]) && is_array($_POST["excludedDirectories"]))
        {
            $this->options->excludedDirectories = $_POST["excludedDirectories"];
        }
        
        // Excluded Directories TOTAL
        // Do not copy these folders and plugins
        $excludedDirectories = array(
            ABSPATH . 'wp-content' . DIRECTORY_SEPARATOR . 'cache',
            ABSPATH . 'wp-content' . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . 'wps-hide-login'
            );
        
        $this->options->excludedDirectories = array_merge($excludedDirectories, $this->options->excludedDirectories);

        // Included Directories
        if (isset($_POST["includedDirectories"]) && is_array($_POST["includedDirectories"]))
        {
            $this->options->includedDirectories = $_POST["includedDirectories"];
        }

        // Extra Directories
        if (isset($_POST["extraDirectories"]) && !empty($_POST["extraDirectories"]) )
        {      
            $this->options->extraDirectories = $_POST["extraDirectories"];
        }

        // Directories to Copy
        $this->options->directoriesToCopy = array_merge(
            $this->options->includedDirectories,
            $this->options->extraDirectories
        );

        array_unshift($this->options->directoriesToCopy, ABSPATH);
                
        // Delete files to copy listing
        $this->cache->delete("files_to_copy");

        return $this->saveOptions();
    }

    /**
     * Start the cloning job
     */
    public function start()
    {
        if (null === $this->options->currentJob)
        {
            $this->log("Cloning job for {$this->options->clone} finished");
            return true;
        }

        $methodName = "job" . ucwords($this->options->currentJob);

        if (!method_exists($this, $methodName))
        {
            $this->log("Can't execute job; Job's method {$methodName} is not found");
            throw new JobNotFoundException($methodName);
        }

        // Call the job
        //$this->log("execute job: Job's method {$methodName}");
        return $this->{$methodName}();
    }

    /**
     * @param object $response
     * @param string $nextJob
     * @return object
     */
    private function handleJobResponse($response, $nextJob)
    {
        // Job is not done
        if (true !== $response->status)
        {
            return $response;
        }

        $this->options->currentJob              = $nextJob;
        $this->options->currentStep             = 0;
        $this->options->totalSteps              = 0;

        // Save options
        $this->saveOptions();

        return $response;
    }

    /**
     * Clone Database
     * @return object
     */
    public function jobDatabase()
    {
        $database = new Database();
        return $this->handleJobResponse($database->start(), "directories");
    }

    /**
     * Get All Files From Selected Directories Recursively Into a File
     * @return object
     */
    public function jobDirectories()
    {
        $directories = new Directories();
        return $this->handleJobResponse($directories->start(), "files");
    }

    /**
     * Copy Files
     * @return object
     */
    public function jobFiles()
    {
        $files = new Files();
        return $this->handleJobResponse($files->start(), "data");
    }

    /**
     * Replace Data
     * @return object
     */
    public function jobData()
    {
        $data = new Data();
        return $this->handleJobResponse($data->start(), "finish");
    }

    /**
     * Save Clone Data
     * @return object
     */
    public function jobFinish()
    {
        $finish = new Finish();
        return $this->handleJobResponse($finish->start(), '');
    }
}