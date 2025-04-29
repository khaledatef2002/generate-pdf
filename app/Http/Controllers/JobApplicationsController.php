<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;

class JobApplicationsController extends Controller
{
    public function print(Request $request)
    {
        
        $job_application = new JobApplication($request->job_application);
        $settings = new SystemSetting($request->settings);
        $asset_path = $request->asset_path;

        return Pdf::view('application', compact('job_application', 'settings', 'asset_path'))
            // ->withBrowsershot(function(Browsershot $browsershot){
            //     $browsershot->setNodeBinary('/opt/nodejs/bin/node')
            //     ->setNpmBinary('/opt/nodejs/bin/npm')
            //     ->noSandbox();
            // })
            ->format(Format::A4)
            ->name($job_application->name . ".pdf")
            ->inline()->download();
    }
}