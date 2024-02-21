<?php

namespace App\Listeners;

use App\Events\EmailEntered;
use App\Mail\TestMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class SendEmailToUsers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\EmailEntered  $event
     * @return void
     */
    public function handle(EmailEntered $event,Request $request)
    {
        // $email = $event->email;
        // $users = User::all();
        // foreach ($users as $user){
        //     Mail::to($user->email)->send(new email($email));
        // }


    
    }
}
