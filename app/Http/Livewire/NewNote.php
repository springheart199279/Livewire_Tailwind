<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NewNote extends Component
{
  public $text;
  public $validationMessage = "Note cannot be empty";

  protected $rules = [
    'text' => 'required|string|filled'
  ];

  public function render()
  {
      return view('livewire.new-note');
  }

  public function createNote()
  {
    // validate incoming data
    $validatedText = $this->validate();
    
    // create a new note
    Note::create($validatedText);

    // reset the local property/UI
    $this->text = null;

    // Emit an event to refresh the notes
    $this->emit('noteAdded');
  }
}
