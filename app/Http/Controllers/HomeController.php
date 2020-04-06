<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

use App\Mail\GarudaEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
  public function index()
  {
    return view('welcome');
  }

  public function quotation(Request $request)
  {
    // $validator = $request->validate(
    //   [
    //     'fullname' => 'required',
    //     'email' => 'required',
    //     'contact' => 'required',
    //     'subject' => 'required',
    //     'keterangan' => 'required'
    //   ]
    // );

    $keterangan = $request->input('keterangan');
    $to_name = $request->input('fullname');
    $to_email = $request->input('email');
    $dataSales = array('name' => "No-Reply", "body" => "A test mail<br />" . $keterangan);
    
    // Send to Sales
    Mail::send('emails.sales', $dataSales, function($message) use ($to_name, $to_email) {
      $message->to($to_email, $to_name)
              ->subject('GAE Web Quotation');
      $message->from('no-reply@garudaekspres.com','Test Mail');
    });

    // // Send to Client
    // Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
    //   $message->to('golgongroup@gmail.com', 'PT. Golgon')
    //           ->subject('GAE Web Quotation');
    //   $message->from('no-reply@garudaekspres.com','Test Mail');
    // });

    $output = [
      'success' => 1,
      'class' => 'sent-message',
      'msg' => 'Your Quotation is Listed wait we contact you'
    ];

    return redirect('/')->with('status', $output);
  }
}