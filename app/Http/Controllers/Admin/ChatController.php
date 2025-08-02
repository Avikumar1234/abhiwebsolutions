<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Admin/ChatController.php
public function index()
{
    $messages = \App\Models\Chat::latest()->get();
    return view('admin.chat.index', compact('messages'));
}

}
