<?php

namespace App\Http\Controllers;

use App\Models\NewClientForm;
use Illuminate\Http\Request;

class NewClientFormController extends Controller
{
    public function index()
    {
        return view('newclient');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required|max:32',
            'last_name' => 'required|max:48',
            'email' => 'required|email',
            'message' => 'required|string|required|max:255'
        ]);
        $newClient = new NewClientForm();
        $newClient->first_name = $request->input('first_name');
        $newClient->last_name = $request->input('last_name');
        $newClient->email = $request->input('email');
        $newClient->message = $request->input('message');
        $newClient->save();

        return redirect()->back()->with('success', 'Information sent successfull!');
    }
}
