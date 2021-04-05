<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class AllNotes extends Component
{
  public $notes;

  protected $listeners = [
    'refreshNotes' => '$refresh'
  ];

  public function mount()
  {
    $this->notes = Note::all();
  }

  public function render()
  {
    return view('livewire.all-notes');
  }

  public function deleteNote($note_id)
  {
    $note = Note::where('id', $note_id);
    $note->delete();

    $this->emit('notesDeleted');
  }
}
