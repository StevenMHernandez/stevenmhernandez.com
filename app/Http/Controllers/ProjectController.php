<?php namespace App\Http\Controllers;

use App\Project;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.project.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:projects',
            'image' => 'required',
            'summary' => 'required',
        ]);
        $project = new Project(Input::all());
        $project->save();
        return redirect()->route('admin.project.index');
    }

    public function show($slug)
    {
        $project = Project::where('slug', '=', $slug)->first();
        return view('site.project.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::where('id', '=', $id)->first();
        return view('admin.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'summary' => 'required',
        ]);
        Project::find($id)->update(Input::all());
        return redirect()->route('admin.project.index');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect()->route('admin.project.index');
    }
}
