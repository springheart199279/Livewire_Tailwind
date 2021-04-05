<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteView extends Component
{
  public $index;
  public $note;

  protected $listeners = [
    'refreshNotes' => '$refresh'
  ];

  public function mount($index, $note)
  {
    $this->index = $index;
    $this->note = $note;
  }

  public function render()
  {
    return view('livewire.note-view');
  }

  public function delete($note_id)
  {
    $note = Note::find($note_id);
    $note->delete();

    $this->emitTo('all-notes', 'refreshNotes');
    $this->emitTo('deleted-notes', 'notesDeleted');
  }
}
