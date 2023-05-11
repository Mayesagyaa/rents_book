<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function storeMessage (Request $request){
        $request->validate([
            'name' => 'required',
            'message' => 'required'
        ]);
        Message::create($request->all());

        return redirect('/')
        ->with('success', 'selamat!');
  }
}
