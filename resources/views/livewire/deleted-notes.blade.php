<div 
  class="flex flex-wrap flex-row-reverse h-32 px-10 mt-10"
>
  @foreach ($notes as $note)
  <div 
    wire:key="{{ $note->id }}" 
    class="relative shadow-sm h-full w-60 rounded-md border-2 border-gray-100 p-3 flex m-1 break-all"
  >
    {{ $this->formatString($note->text) }}
    <button 
      class="p-1 absolute -right-3 -top-3 rounded-full text-xs text-white ml-2 bg-blue-200" 
      wire:click="$emit('restore', {{ $note->id }})"
    >
      @livewire('corner-right-up-icon', key($note->id))
    </button>
  </div>
  @endforeach
</div>