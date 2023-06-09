<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function order_check(Request $request)
    {
        $valid = $request-> validate([
            'name' => 'required',
            'surname' => 'required',
            'phone_number' => 'required|min:10|max:20'
        ]);

        $form = new Order();
        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        $form->phone_number = $request->input('phone_number');

        $form->save();

        return redirect()->route('form');
    }
}
