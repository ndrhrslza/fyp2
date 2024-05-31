<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrowserHistory;

class BrowserHistoryController extends Controller
{
    public function storeBrowserHistory($routeName, $title)
    {
        // Retrieve the authenticated user's ID
        $userId = auth()->id();

        // Create a new instance of the BrowserHistory model
        $browserHistory = new BrowserHistory();
        $browserHistory->url = $routeName;
        $browserHistory->title = $title;
        $browserHistory->user_id = $userId;

        // Save the browser history record to the database
        $browserHistory->save();
    }
}
