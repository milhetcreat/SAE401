<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    // Liste tous les types
    public function list(Request $request)
    {
        $types = Type::get();
        return response()->json($types);
    }
}
