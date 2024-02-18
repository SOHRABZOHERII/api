<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ReservationCreated;

class SendReservationEmail implements ShouldQueue
{

    use InteractsWithQueue;
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
     * @param  object  $event
     * @return void
     */
    public function handle(ReservationCreated  $event)
    {
        $reservation = $event->reservation;

        $firstname = $reservation->user->firstname;
        $room_number = $reservation->room->number;
        $email = $reservation->user->email;
    }
}
