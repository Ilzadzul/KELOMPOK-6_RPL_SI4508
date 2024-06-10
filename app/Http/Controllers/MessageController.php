<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import class Auth untuk mengakses informasi pengguna yang sedang login
use App\Models\AdminMessage;
use App\Models\SuperAdminMessage;

class MessageController extends Controller
{
    public function index()
    {
        $userType = Auth::user()->user_type;

        // Mendapatkan pesan admin
        $adminMessages = AdminMessage::all();

        return view('messages.index', compact('adminMessages', 'userType'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
            'user' => 'required|string|max:255',
        ]);
    
        $data = [
            'message' => $request->message,
            'user' => $request->user, // Ambil user dari input form
        ];
    
        AdminMessage::create($data);
    
        return redirect()->route('messages.index')->with('success', 'Message added successfully');
    }
    public function destroy($id)
    {
        $message = AdminMessage::find($id);

        if (!$message) {
            return redirect()->route('messages.index')->with('error', 'Message not found');
        }

        $userType = Auth::user()->user_type;

        if ($userType === 'Super Admin') {
            $message->delete();
            return redirect()->route('messages.index')->with('success', 'Message deleted successfully');
        }

        return redirect()->route('messages.index')->with('error', 'Unauthorized to delete message');
    }
}
