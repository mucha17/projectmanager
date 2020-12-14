<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
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

    public function getCreateProject() {
        return view('pages.manage', ['formType' => 'create']);
    }

    public function getUpdateProject($id) {
        $project = Project::query()->find($id);
        return view('pages.manage', ['formType' => 'update', 'project' => $project, 'projectId' => $id]);
    }

    public function getDeleteProject($id) {
        $project = Project::query()->find($id);
        try {
            $project->delete();
        } catch (Exception $e) {
            return back()->withErrors('delete.fail', 'Niepowodzenie usuwania projektu');
        }
        return redirect()->route('pages.manage')->with('info', 'Usunięto projekt');
    }

    public function postCreateProject(Request $request) {
        $request->validate([
            'name' => 'required|min:2',
            'author' => 'required',
            'short_description' => 'required|min:20',
            'long_description' => 'required|min:20'
        ]);
        $project = new Project([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
            'start_date' => $request->input('start_date'),
            'finish_date' => $request->input('finish_date'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
        ]);
        $project->save();

        return redirect()->route('pages.manage')->with('info', 'Dodano projekt');
    }

    public function postUpdateProject(Request $request) {
        $request->validate([
            'name' => 'required|min:2',
            'author' => 'required',
            'short_description' => 'required|min:20',
            'long_description' => 'required|min:20'
        ]);
        $project = Project::query()->find($request->input('id'));
        $project->fill([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
            'start_date' => $request->input('start_date'),
            'finish_date' => $request->input('finish_date'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
        ]);
        $project->save();

        return redirect()->route('pages.manage')->with('info', 'Zaktualizowano projekt');
    }
}
