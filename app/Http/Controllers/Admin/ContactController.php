<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function export(): StreamedResponse
    {
        $filename = 'contacts.csv';
        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
        ];

        $callback = function () {
            $handle = fopen('php://output', 'w');

            // ✅ Phone column removed from header
            fputcsv($handle, ['Name', 'Email', 'Message', 'Submitted At']);

            foreach (Contact::all() as $contact) {
                fputcsv($handle, [
                    $contact->name,
                    $contact->email,
                    $contact->message,
                    $contact->created_at->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }
}
