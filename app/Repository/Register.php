<?php

namespace App\Repository;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register implements authenticationInterface
{
    public function create(Request $request):void
    {
        $code = rand(1111,9999);
         User::insert([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'code'       => $code,
            'password' => Hash::make($request->password),
        ]);

        $basic  = new \Vonage\Client\Credentials\Basic("f693c2af", "p2yYN7j43v1pNoQx");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS('+088'.(int)$request->phone, "Akash Boos", 'Verify Your Mobile Number: '.$code)
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
//         $nexmo->message()->send([
//             'to' => '+088'.(int) $request->phone,
//             'from' => 'Akash Boss',
//             'text' => 'Verify Your Mobile Number: '.$code,
//         ]);

    }
}
