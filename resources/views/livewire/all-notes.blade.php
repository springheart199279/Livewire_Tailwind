<div 
  class="rounded-lg shadow-lg h-full p-4 overflow-auto"
>
  @foreach ($notes as $note)
  <div 
    wire:key="{{ $note->id }}" 
    class="relative flex items-stretch rounded-md border-2 border-gray-100 p-2 mb-4 break-all"
  >
    {{ $note->text }}
    <button 
      wire:click="$emit('delete', {{ $note->id }})" 
      class="self-end ml-auto"
    >
      @livewire('trash-icon', key($note->id))
    </button>
    <button 
      wire:click="$emit('restore', {{ $note->id }})" 
      class="p-1 absolute -right-3 -top-3 rounded-full text-xs ml-2 shadow-sm bg-white"
    >
      @livewire('paperclip-icon', key($note->id))
    </button>
  </div>
  @endforeach
</div>