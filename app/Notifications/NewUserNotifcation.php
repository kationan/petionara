<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserNotifcation extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $name;
    public function __construct($user)
    {
        $this->name = $user["name"];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $salutation = $this->determineGreeting();
        // $name = $user["name"];
        return (new MailMessage)
                    ->greeting($salutation." ".$this->name)
                    ->line('La Mutelle de developpement de Petionara vous remercie d\'avoir rejoind ses membres.
                    Pour commencer à profiter en toute securité de cette plateforme, nous vous conseillons de changer votre mot de passe
                    qui vous a été attribuer par defaut')
                    ->action('Changer le mot de passe', url('/'))
                    ->line('La MUDEPE vous remercie!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    public function determineGreeting(){
        // Fonction à completer
        return "Bonjour";
    }
}
