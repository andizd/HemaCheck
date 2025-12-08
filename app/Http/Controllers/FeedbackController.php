<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store (Request $request){
        $request->validate(['message' => 'required|string']);
        Feedback::create([
            'name' => $request->name,
            'message' => $request->message
        ]);
        return back()->with('success', 'Terima kasih atas feedback Anda!');
    }
}
