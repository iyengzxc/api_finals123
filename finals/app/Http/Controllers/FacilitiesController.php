<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function index(){
        $students = Facilities::all();
        return response()->json($students);
    }
}
