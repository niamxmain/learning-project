<?php

namespace App\Http\Controllers\Api;

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
        $validate = Validator::make($request->all(), 
        [
            
        ]);
    }
}
