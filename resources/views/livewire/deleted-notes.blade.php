<div 
  class="flex flex-row-reverse flex-wrap h-32 px-10 my-10"
>
  @foreach ($notes as $note)
   <livewire:deleted-note-view :note="$note" :key="$note->id" />
  @endforeach
</div>