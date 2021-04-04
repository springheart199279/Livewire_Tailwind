<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class DeletedNotes extends Component
{
    public $notes;

    protected $listeners = [
      'notesDeleted' => '$refresh',
      'restore' => 'restoreNote'
    ];

    public function render()
    {
        $this->notes = Note::withTrashed()
          ->whereNotNull('deleted_at')
          ->orderBy('id', 'desc')
          ->get();
          
        return view('livewire.deleted-notes');
    }

    public function restoreNote($note_id)
    {
      $note = Note::where('id', $note_id);
      $note->restore();

      $this->emit('refreshNotes');
    }

    public function formatString($string) {
      return strlen($string) > 130 ? substr($string, 0, 130) . '...' : $string;
    }
}
