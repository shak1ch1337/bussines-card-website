<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(Message $message)
    {
        return $message->all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "address" => "required|email",
            "message" => "required"
        ]);

        $message = Message::create($validated + ["created_at" => date("Y-m-d")]);
        return response()->json([
            "status" => "success",
            "message" => "Сообщение было отправлено!"
        ], 201);
    }

    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return response()->json([
            "status" => "success",
            "message" => "Сообщение было удалено!"
        ], 200);
    }
}
