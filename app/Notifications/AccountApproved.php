<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\ViberNetUa\ViberNetUaMessage;

class AccountApproved extends Notification
{
    public function via($notifiable)
    {
        return ['vibernetua'];
    }

    public function toViberNetUa($notifiable)
    {
        return (new ViberNetUaMessage(
            \NotificationChannels\ViberNetUa\ViberNetUaMessageType::TYPE_ONLY_MESSAGE(),
            'Account approved',
            'Congratulations, your account was approved!'));
    }
}
