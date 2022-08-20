<?php

namespace App\Http\Controllers;

use App\Models\Prize;

class HomepageController extends Controller
{
    public function index()
    {
        $prize = Prize::query()->with('image')->paginate(10);

        return view('welcome', compact('prize'));
    }

    public function details($id)
    {
        $prize = Prize::query()->with('image')->find($id);

        return view('more_details', compact('prize'));
    }
}
