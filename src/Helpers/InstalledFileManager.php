<?php

namespace RachidLaasri\LaravelInstaller\Helpers;
use Artisan;

class InstalledFileManager
{
    /**
     * Create installed file.
     *
     * @return int
     */
    public function create()
    {
        file_put_contents(storage_path('installed'), '');

        $result = file_get_contents(base_path('.env'));
        $newLine = $result."SESSION_DRIVER=database\n";
        file_put_contents(base_path('.env'), $newLine);
        Artisan::call('storage:link');
    }

    /**
     * Update installed file.
     *
     * @return int
     */
    public function update()
    {
        return $this->create();
    }
}