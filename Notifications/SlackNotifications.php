<?php

namespace Modules\CoreHelper\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;

class SlackNotifications extends Notification
{

    //    use Queueable;
    use Notifiable;

    /**
     * Public Properties
    */
    public $channel;
    public $emoji;
    public $from;
    public $message;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->channel = $dados['channel'];
        $this->emoji = $dados['emoji'];
        $this->from = $dados['from'];
        $this->message = $dados['message'];
        $this->notify($this);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * Send slack notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toSlack($notifiable)
    {

        return (new SlackMessage)
            ->content($this->message)
            ->to($this->channel)
            ->from($this->from, $this->emoji);
    }

    public function routeNotificationForSlack()
    {
        return env('SLACK_URL', '');
    }
}
