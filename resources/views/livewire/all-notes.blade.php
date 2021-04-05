<div 
  class="h-full p-4 overflow-auto rounded-lg shadow-lg"
>
  @foreach ($notes as $index => $note)
  <div 
    wire:key="$note->id" 
    class="relative flex items-stretch p-2 mb-4 break-all border-2 border-gray-100 rounded-md"
  >
    {{ $note->text }}
    <button 
      wire:click="deleteNote({{$note->id}})" 
      class="self-end ml-auto"
    >
      @livewire('trash-icon', key($note->id))
    </button>
    <button 
      x-data="{ shouldHighlight: {{ $index }} === 0 }"
      :class="[ shouldHighlight ? 'bg-blue-100' : 'bg-white' ]"
      class="absolute p-1 ml-2 text-xs rounded-full shadow-sm -right-3 -top-3"
    >
      @livewire('paperclip-icon', key($note->id))
    </button>
  </div>
  @endforeach
</div>