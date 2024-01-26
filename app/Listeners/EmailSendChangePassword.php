<?php

namespace App\Listeners;

use App\Http\Controllers\TokenController;
use App\Mail\EmailSetPassword;
use App\Mail\EmailVerify;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EmailSendChangePassword
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
    public function handle(object $event): void
    {
        $email = new EmailSetPassword($event->user);
        Mail::to($event->user)->send($email);
    }
}
