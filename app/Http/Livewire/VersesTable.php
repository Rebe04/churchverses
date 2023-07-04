<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use App\Models\Verse;
use Livewire\Component;

class VersesTable extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $verses = Verse::where('book', 'LIKE', '%' . $this->search . '%')
            ->orWhere('chapter', 'LIKE', '%' . $this->search . '%')
            ->orWhere('verse', 'LIKE', '%' . $this->search . '%')
            ->orWhere('content', 'LIKE', '%' . $this->search . '%')
            ->paginate(2);

        // $verses = Verse::paginate();
        return view('livewire.verses-table', compact('verses'));
    }

    public function limpiar_page()
    {
        $this->resetPage();
    }
}
