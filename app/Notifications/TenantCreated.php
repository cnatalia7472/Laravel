<?php
/**
 * Copyright (C) 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 *
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;

class TenantCreated extends Notification implements ShouldQueue
{
    use Queueable;

    private $hostname;

    public function __construct($hostname)
    {
        $this->hostname = $hostname;
    }
    public function via()
    {
        return ['mail'];
    }
    public function toMail($notifiable)
    {
        $token = Password::broker()->createToken($notifiable);
        $resetUrl = "https://{$this->hostname->fqdn}/password/create/{$token}";
        $app = config('app.name');
        return (new MailMessage)
            ->subject('Your {$app} system is ready')
            ->greeting("Hello {$notifiable->first_name},")
            ->action('Login', $resetUrl);
    }
}
