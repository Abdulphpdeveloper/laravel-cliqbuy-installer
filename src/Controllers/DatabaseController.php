<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use RachidLaasri\LaravelInstaller\Helpers\DatabaseManager;
use Input;
use Hash;
use App\Models\SiteSettings;
use App\Models\Admin;
use Request;

class DatabaseController extends Controller
{

    /**
     * @var DatabaseManager
     */
    private $databaseManager;

    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    /**
     * Migrate and seed the database.
     *
     * @return \Illuminate\View\View
     */
    public function database()
    {
     
            $response = $this->databaseManager->migrateAndSeed();           

            return redirect()->route('LaravelInstaller::final')
                            ->with(['message' => $response]);
   
     }



}
