<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class DeletedNotes extends Component
{
  public $notes;

  protected $listeners = [
    'notesDeleted' => '$refresh',
    'notesRestored' => '$refresh'
  ];

  public function render()
  {
    $this->notes = Note::withTrashed()
      ->whereNotNull('deleted_at')
      ->orderBy('id', 'desc')
      ->get();

    return view('livewire.deleted-notes');
  }
}
