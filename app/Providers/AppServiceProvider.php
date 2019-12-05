<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        VerifyEmail::toMailUsing(function ($notifiable,$url) {
            $verifyUrl = URL::temporarySignedRoute(
                'verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]
            );

            return (new MailMessage)
                ->subject('Welcome!')
                ->markdown('emails.verify', ['url' => $url]);
        });
    }

    public function register()
    {
        //
    }
}