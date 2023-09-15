<?php

namespace App\Http\Controllers;

use App\Models\User;

class CoopController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('coop.index', compact('user'));
    }
}
