<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Null_;

class JoinLobby implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $msg;
    public string $username;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username,$testmsg)
    {
        $this->msg = $testmsg;
        $this->username = $username;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('Lobby');
    }
    public function broadcastAs()
    {
        return 'chatmsg';
    }
}
