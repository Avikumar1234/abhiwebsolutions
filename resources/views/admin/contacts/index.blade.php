@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-blue-800">Contact Messages</h1>

        <!-- Admin Dashboard Button -->
        <a href="{{ url('admin/dashboard') }}" 
           class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700 transition">
           Admin Dashboard
        </a>
    </div>

    <a href="{{ route('admin.contacts.export') }}"
       class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700 mb-4 inline-block">
        ⬇️ Download CSV
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border">
            <thead>
                <tr class="bg-blue-100 text-left">
                    <th class="py-2 px-4 border">#</th>
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Message</th>
                    <th class="py-2 px-4 border">Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $index => $contact)
                    <tr class="border-t">
                        <td class="py-2 px-4 border">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border">{{ $contact->name }}</td>
                        <td class="py-2 px-4 border">{{ $contact->email }}</td>
                        <td class="py-2 px-4 border">{{ Str::limit($contact->message, 50) }}</td>
                        <td class="py-2 px-4 border">{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
