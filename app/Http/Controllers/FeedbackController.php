<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Google\Client;
use Google\Service\Sheets as GoogleSheets;
use Revolution\Google\Sheets\Facades\Sheets;

class FeedbackController extends Controller
{
    public function store (Request $request){
        $request->validate(['message' => 'required|string']);
        $feedback = Feedback::create([
            'name' => $request->name,
            'message' => $request->message
        ]);

        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/credentials.json'));
        $client->setScopes([GoogleSheets::SPREADSHEETS]);
        $client->useApplicationDefaultCredentials();

        $service = new GoogleSheets($client);
        Sheets::setService($service);
        
        Sheets::spreadsheet('18Jr9KC1WevkxbSOlU9rMPQppvjP__h_SW54ZXomhIh8')
            ->sheet('Sheet2')
            ->append([
                [
                    now()->format('Y-m-d H:i'),
                    $feedback->name,
                    $feedback->message,
                ]
            ]);

        return back()->with('success', 'Terima kasih atas feedback Anda!');
    }
    public function create(){
        return view('feedback');
    }
}
