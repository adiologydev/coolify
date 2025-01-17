<?php

namespace App\Http\Livewire\Server;

use App\Models\Server;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class All extends Component
{
    public ?Collection $servers = null;

    public function mount () {
        $this->servers = Server::ownedByCurrentTeam()->get();
    }
    public function render()
    {
        return view('livewire.server.all');
    }
}
