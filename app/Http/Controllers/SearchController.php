<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::where('title', 'LIKE', '%' . request('search') . '%')->get();

        return Inertia::render('Results', [
            'jobs' => $jobs
        ]);
    }
}
