<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class DeletedNoteView extends Component
{
  public $note;

  public function mount($note)
  {
    $this->note = $note;
  }

  public function render()
  {
    return view('livewire.deleted-note-view');
  }

  public function restoreNote($note_id)
  {
    $note = Note::withTrashed()->where('id', $note_id)->get()->first();
    $note->restore();

    $this->emitTo('all-notes', 'refreshNotes');
    $this->emitTo('deleted-notes', 'notesRestored');

  }
}
