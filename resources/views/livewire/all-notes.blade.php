<div 
  class="h-full p-4 overflow-auto rounded-lg shadow-lg"
>
  @foreach ($notes as $index => $note)
    <livewire:note-view :index="$index" :note="$note" :key="$note->id" />
  @endforeach
</div>