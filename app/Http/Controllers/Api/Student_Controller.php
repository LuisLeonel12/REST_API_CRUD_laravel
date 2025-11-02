<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class Student_Controller extends Controller
{
    public function index()
    {
        $Students = Student::all();

        if ($Students->count() === 0) {
            return response()->json([
                'status' => 404,
                'message' => 'No se encontraron estudiantes'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'data' => $Students
        ], 200);
    }
}
