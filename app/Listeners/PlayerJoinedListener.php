<?php

namespace App\Listeners;

use App\Events\JoinLobby;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PlayerJoinedListener
{
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
     * @param JoinLobby $event
     * @return void
     */
    public function handle(JoinLobby $event)
    {
        broadcast(new JoinLobby(($event->testmsg)));
    }
}
