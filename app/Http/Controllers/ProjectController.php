<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::get();

        return new ProjectResource(true, 'sending data', $project);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'title' => 'required',
            'user_id' => 'required',
            'task_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $project = Project::create([
            'title' => $request->title,
            'user_id' => $request->user_id,
            'task_id' => $request->task_id,
        ]);
        return new ProjectResource(true, 'data telah masuk', $project);
    }

    public function show(Project $project)
    {
        return new ProjectResource(true, 'detail data', $project);
    }


    // UPDATE MASIH ERROR
    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), 
        [
            'title' => 'required',
            'user_id' => 'required',
            'task_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $project->update([
            'title' => $request->title,
            'user_id' => $request->user_id,
            'task_id' => $request->task_id,
        ]);

        return new ProjectResource(true, 'data berhasil diupdate', $project);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return new ProjectResource(true, 'data berhasil dihapus', $project);
    }
}
