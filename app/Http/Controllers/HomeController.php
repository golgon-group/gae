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

    $fullname = $request->input('fullname');
    $contact = $request->input('contact');
    $email = $request->input('email');
    $SalesMsg = $request->input('keterangan');
    $ClientMsg = "Terima kasih telah mengirim email ke kami.
                  Tim kami akan menindaklanjuti email kamu dan menghubungi mu di nomor $contact.
                      
                  Mohon Jangan mengirim SPAM
                  terima kasih.";
    $dataSales = array('name' => $fullname, "body" => $SalesMsg, "contact" => $contact, "email" => $email);
    $dataClient = array('name' => $fullname, "body" => $ClientMsg);
    
    try {
      // Send to Sales
      Mail::send('emails.sales', $dataSales, function($message) {
        $message->to('marketing@garudaekspres.com', 'PT. Garuda Angkasa Ekspres')
                ->subject('GAE Web Quotation');
        $message->from('no-reply@garudaekspres.com','noreply');
      });
  
      // Send to Client
      Mail::send('emails.client', $dataClient, function($message) use ($fullname, $email) {
        $message->to($email, $fullname)
                ->subject('GAE Web Quotation');
        $message->from('no-reply@garudaekspres.com','noreply');
      });
  
      $output = array(
        "success" => TRUE,
        "msg" => "Your Quotation is Listed wait we contact you"
      );
    } catch (\Throwable $th) {
  
      $output = array(
        "success" => FALSE,
        "msg" => "Something wrong check you connection <br />".$th
      );
    }

    return json_encode($output, JSON_PRETTY_PRINT);
  }
}