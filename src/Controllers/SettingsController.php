<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use App\Http\Requests;
use Illuminate\Routing\Controller;
use Artisan;

class SettingsController extends Controller
{
    /**
     * Display the settings check page.
     *
     * @return \Illuminate\View\View
     */
    public function settings()
    {
        try{
             Artisan::call('migrate');
        }
        catch(Exception $e){
             return $this->response($e->getMessage());
        }

        return view('vendor.installer.settings');
    }
}
