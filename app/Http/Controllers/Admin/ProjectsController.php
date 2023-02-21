<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $projects = project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->all();

        $request->validate([
            'title' => 'required|string|min:2|max:200',
            'start_date' => 'required',
            'end_date' => 'required',
            'place' => 'required|string|min:2|max:200',
            'description' => 'required|string|min:2'
        ],
        [
            'title.required' => 'Il campo TITOLO è obbligatorio!',
            'title.string' => 'Il campo TITOLO deve essere una STRINGA!',
            'title.min' => 'Il campo TITOLO deve essere lungo ALMENO 2 CARATTERI!',
            'title.max' => 'Il campo TITOLO deve essere lungo AL MASSINO 200 CARATTERI!',

            'start_date.required' => 'Il campo START DATE è obbligatorio!',

            'end_date.required' => 'Il campo END DATE è obbligatorio!',

            'place.required' => 'Il campo PLACE è obbligatorio!',
            'place.string' => 'Il campo PLACE deve essere una STRINGA!',
            'place.min' => 'Il campo PLACE deve essere lungo ALMENO 2 CARATTERI!',
            'place.max' => 'Il campo PLACE deve essere lungo AL MASSINO 200 CARATTERI!',

            'description.required' => 'Il campo DESCRIPTION è obbligatorio!',
            'description.string' => 'Il campo DESCRIPTION deve essere una STRINGA!',
            'description.min' => 'Il campo DESCRIPTION deve essere lungo ALMENO 2 CARATTERI!',
        ]);
        
        $newProject = new Project();
        $newProject->title = $data['title'];
        $newProject->start_date = $data['start_date'];
        $newProject->end_date = $data['end_date'];
        $newProject->place = $data['place'];
        $newProject->description = $data['description'];
        $newProject->save();
        
        return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $project = Project::find($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project) {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project) {
        $data = $request->all();
        $project->update($data);

        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
