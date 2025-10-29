<?php

namespace App\Livewire\Features;

use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layout.app')]
    public $title = 'Dashboard';
    public $pendingCount;
    public $prosesCount;
    public $selesaiCount;
    public $totalCount;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();

        // Ambil semua data tanpa filter user
        $this->pendingCount = Laporan::where('status', 'pending')->count();
        $this->prosesCount  = Laporan::where('status', 'proses')->count();
        $this->selesaiCount = Laporan::where('status', 'selesai')->count();
        $this->totalCount   = Laporan::count();
    }


    public function render()
    {
        return view('livewire.features.dashboard');
    }
}
