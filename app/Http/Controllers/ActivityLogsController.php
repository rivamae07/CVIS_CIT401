<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Response;
use Spatie\Activitylog\Traits\LogsActivity;

class ActivityLogsController extends Controller
{
    public function index()
    {
        $activities = Activity::orderby('created_at', 'DESC')->get();
        return view('activityLogs.index', compact('activities'));
    }


    //HANDLE AJAX REQUEST
    public function getActivityLogsJson()
    {
        $activities = Activity::all();

        return response()->json([
            'success' => true,
            'data' => $activities
        ], \Illuminate\Http\Response::HTTP_OK);
    }
}
