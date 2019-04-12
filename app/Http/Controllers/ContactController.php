<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function save(Request $request)
    {
        $model = new Contact();
        $model->name         = $request->input('name');
        $model->email        = $request->input('email');
        $model->phone_number = $request->input('phone');
        $model->subject      = $request->input('subject');
        $model->message      = $request->input('message');

        $model->save();

        $request->session()->flash('successMessage', 'Terima kasih telah menghubungi kami.');
        return redirect(url('/contact'));
    }
}
