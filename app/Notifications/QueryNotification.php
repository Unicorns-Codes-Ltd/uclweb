<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QueryNotification extends Notification
{
    use Queueable;
    public $querydata;
    /**
     * Create a new notification instance.
     */
    public function __construct($querydata)
    {
        $this->querydata = $querydata;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }



    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'model_id'=> $this->querydata['model_id'],
            'route'=> $this->querydata['route'],
            'message'=> $this->querydata['message'],
        ];
    }
}