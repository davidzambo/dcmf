<?php

namespace App\Http\Controllers;

require '../../../vendor/autoload.php';
use Illuminate\Http\Request;
use Mailgun\Mailgun;

class EmailController extends Controller
{
  protected $guarded = ['_token'];

  public function send(Request $request){
          # Instantiate the client.
    $mgClient = new Mailgun('key-ed3ebc28f7c657e042ee64edaacddf3c');
    $domain = "www.dcmf.hu";
    $message = "Új üzenet jött a DCMF.hu-ról.\r\n".
               "Feladó: $request->name\r\n".
               "Email-cím: $request->email\r\n".
               "Üzenet: $request->message\r\n";

    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from'    => 'DCMF <mailgun@www.dcmf.hu>',
        'to'      => 'David <david@dcmf.hu>',
        'subject' => "DCMF - új üzenet",
        'text'    => $message
    ));

    }
}
