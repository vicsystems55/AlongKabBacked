<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Benwilkins\FCM\FcmMessage;

class SomeNotification extends Controller
{
    //
    public function via($notifiable)
    {
        return ['fcm'];
    }


    public function toFcm($notifiable) 
        {
            $message = new FcmMessage();
            $message->content([
                'title'        => 'Foo', 
                'body'         => 'Bar', 
                'sound'        => '', // Optional 
                'icon'         => '', // Optional
                'click_action' => '' // Optional
            ])->data([
                'param1' => 'baz' // Optional
            ])->priority(FcmMessage::PRIORITY_HIGH); // Optional - Default is 'normal'.
            
            return $message;
        }




}
