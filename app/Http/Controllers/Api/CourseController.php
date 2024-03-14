<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'url' => 'required|string',
            'view_count' => 'required|integer',
        ]);

        $course = Course::create($validatedData);

        return response()->json($course, 201);
    }

    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }
}
