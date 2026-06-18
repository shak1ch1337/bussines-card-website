<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    public function index(Project $project)
    {
        return $project->all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|max:30",
            "description" => "required",
            "link_project" => "required",
            "link_github" => "required",
        ]);

        $project = Project::create($validated + ["created_at" => date("Y-m-d")]);

        return response()->json([
            'status' => "success",
            'message' => "Проект добавлен",
            'data' => $project
        ], 201);
    }


    public function destroy(string $id)
    {

        $project = Project::findOrFail($id);
        $project->delete();

        return response()->json([
            'status' => "success",
            'message' => "Проект был удален"
        ], 200);
    }
}
