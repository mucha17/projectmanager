<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    public function getList() {
        $projects = Project::query()->orderBy('start_date', 'desc')->get();
        return view('pages.list', ['projects' => $projects]);
    }

    public function getDetails($id) {
        $project = Project::query()->where('id', $id)->first();
        return view('pages.details', ['project' => $project]);
    }
}
