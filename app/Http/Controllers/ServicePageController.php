<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicePageController extends Controller
{
    public function index()
    {
        $services = Service::all(); // agar service table me data hai
        return view('frontend.services', compact('services'));
    }
}
