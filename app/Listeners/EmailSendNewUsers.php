<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\EmailVerify;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class EmailSendNewUsers
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        $email = new EmailVerify($event->user);
        Mail::to($event->user)->send($email);
    }
}
