<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Http\Requests\StoreProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Fetch all projects from the database
        $projects = Projects::paginate('6');
        return view('dashboard',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectsRequest $request)
    {
       
        $validatedData = $request->validate(
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'category' => 'required|string',
                'technologies' => 'required',
                'demo_link' => 'nullable|string|url',
                'github_link' => 'nullable|string|url',
            ]
        );
        
        // Handle file upload if needed
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $path;
        }
        // Convert technologies to JSON if it's an array
        if (is_array($validatedData['technologies'])) {
            $validatedData['technologies'] = json_encode($validatedData['technologies']);
        }
        // Create the project
        $project = Projects::create($validatedData);
        
        return redirect()->route('projects.show', $project)
                        ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $project)
    {
        // dd($project);
        // Decode the JSON string back to an array
        $project->technologies = json_decode($project->technologies, true);
        // dd($project->technologies);
        return view('projects.create', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectsRequest $request, Projects $project)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'category' => 'required|string',
                'technologies' => 'required',
                'demo_link' => 'nullable|string|url',
                'github_link' => 'nullable|string|url',
            ]
        );
        // Handle file upload if needed
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $path;
        }
        // Convert technologies to JSON if it's an array
        if (is_array($validatedData['technologies'])) {
            $validatedData['technologies'] = json_encode($validatedData['technologies']);
        }
        // Update the project
        $project->update($validatedData);
        return redirect()->route('dashboard', $project)
                        ->with('success', 'Project updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $project)
    {
        $project->delete();
        return redirect()->route('dashboard')
                        ->with('success', 'Project deleted successfully.');
    }
}
