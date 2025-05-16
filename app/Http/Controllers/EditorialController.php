<?php

namespace App\Http\Controllers;
use App\Models\Editorial;

use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function getEditoriales()
    {
        return response()->json(Editorial::all());
    }
}
