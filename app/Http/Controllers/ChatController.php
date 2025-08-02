<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        Chat::create([
            'message' => $request->message,
        ]);

        return response()->json(['status' => 'Message received!']);
    }
}
