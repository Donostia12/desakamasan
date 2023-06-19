<?php

namespace App\Http\Livewire;

use App\Models\berita;
use Livewire\Component;
use Livewire\withPagination;

class BeritaIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $berita = berita::orderBy('created_at','desc')->paginate(3);
        
        return view('livewire.berita-index',[
            'berita' => $berita,
        ]);
    }
}
