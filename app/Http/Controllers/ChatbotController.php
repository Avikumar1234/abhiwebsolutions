<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        $userMessage = strtolower($request->message);

        $responses = [
            'hi' => 'Hello! Welcome to Abhiwebsolutions. How can I help you today?',
            'services' => 'We offer website design, logo design, social media posters, and more.',
            'contact' => 'You can contact us at abhiwebsln@outlook.com or call us on 7379210635.',
            'email' => 'Our email is abhiwebsln@outlook.com.',
            'phone' => 'Our contact number is 7379210635.',
            'website' => 'Abhiwebsolutions builds digital dreams through modern web development.',
            'thanks' => 'You\'re welcome! 😊',
            'bye' => 'Goodbye! Have a great day!',
        ];

        $reply = 'Sorry, I didn’t understand that. You can ask about our services, contact, or business info.';

        foreach ($responses as $key => $response) {
            if (str_contains($userMessage, $key)) {
                $reply = $response;
                break;
            }
        }

        return response()->json(['reply' => $reply]);
    }
}
