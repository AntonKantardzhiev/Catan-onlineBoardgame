<?php

namespace App\Events;

use App\Models\Roll;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DiceRoll implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $player;
    public Roll $roll;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $player, Roll $roll)
    {
        $this->player = $player;
        $this->roll = $roll;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('Game');
    }

    public function broadcastAs(): string
    {
        return 'roll';
    }
}
