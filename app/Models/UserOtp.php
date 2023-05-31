<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
class UserOtp extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'otp',
        'expire_at',
    ];

    public function sendSMS($receiverNumber) {
        $message = 'Login otp is '. $this->otp;

        try {
            $account_id = getenv("NEXMO_KEY");
            $auth_token = getenv('NEXMO_SECRET');
            $nexmo = app('Nexmo\Client');
            $nexmo->messages->send([
                'to' => '14845551244',
                'from' => '16105552344',
                'text' => $message
            ]);
            info('sms sent successful');
        } catch(Exception $e) {
            info("Error: ".$e->getMessage());
        }
    }

}
