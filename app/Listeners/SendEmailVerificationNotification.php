<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification as Notification;

class SendEmailVerificationNotification extends Notification implements ShouldQueue
{
    
}
