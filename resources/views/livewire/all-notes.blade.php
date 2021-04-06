<div 
  class="h-full p-4 overflow-auto rounded-lg shadow-lg"
>
  @foreach ($notes as $index => $note)
    {{-- This is a bit hacky but, because data properties in nested components aren't reactive like they are in Vue, I can force the component to re-render itself by using the now() function. This functionality is allowing me to make sure the correct note is has the highlighted paperclip. --}}
    <livewire:note-view :index="$index" :note="$note" :key="now().$note->id" />
  @endforeach
</div>