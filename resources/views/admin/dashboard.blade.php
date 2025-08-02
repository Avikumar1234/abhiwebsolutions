@extends('layouts.app')

@section('title', 'Admin Dashboard - Abhiwebsolutions')

@section('content')
<div class="p-6 md:p-16">

    <!-- Top Bar with Title and Logout -->
    <div class="flex justify-between items-center mb-8 flex-wrap gap-4">
        <div>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-indigo-700 tracking-tight">
                🛠️ Admin Dashboard
            </h1>
            <p class="text-gray-700 text-base sm:text-lg">
                Welcome, Admin! Manage all website services and data from this panel.
            </p>
        </div>

        <!-- Logout Button -->
<form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
    @csrf
</form>
<button
    onclick="event.preventDefault(); this.disabled = true; this.innerText = 'Logging out...'; document.getElementById('logout-form').submit();"
    class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow transition"
    aria-label="Logout"
>
    🔒 Logout
</button>

    </div>

    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Add Service -->
        <a href="{{ route('admin.services.create') }}"
           class="bg-gradient-to-br from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold py-6 px-6 rounded-2xl text-center shadow-lg hover:shadow-2xl transition transform hover:scale-105">
            ➕ Add New Service
        </a>

        <!-- Manage Services -->
        <a href="{{ route('admin.services.index') }}"
           class="bg-gradient-to-br from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-semibold py-6 px-6 rounded-2xl text-center shadow-lg hover:shadow-2xl transition transform hover:scale-105">
            📋 Manage Services
        </a>

        <!-- Contact Messages -->
        <a href="{{ route('admin.contacts.index') }}"
           class="bg-gradient-to-br from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white font-semibold py-6 px-6 rounded-2xl text-center shadow-lg hover:shadow-2xl transition transform hover:scale-105">
            💬 View Contact Messages
        </a>
    </div>
</div>
@endsection
