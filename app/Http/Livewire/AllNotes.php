<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class AllNotes extends Component
{
  public $notes;

  public $listeners = [
    'refreshNotes' => '$refresh'
  ];

  public function render()
  {
    $this->notes = Note::latest()->get();
    
    return view('livewire.all-notes');
  }
}
