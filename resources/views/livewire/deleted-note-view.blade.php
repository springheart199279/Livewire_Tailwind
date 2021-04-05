<div 
  :key="$note->id" 
  class="relative z-10 flex h-full p-3 text-gray-500 break-all border-2 border-gray-200 rounded-md shadow-md w-60"
  >
    <div
      class="overflow-y-scroll"
    >
      {{ $note->text }}
      <button 
        class="absolute p-1 ml-2 text-xs text-white bg-blue-200 rounded-full -right-4 -top-4" 
        wire:click="restoreNote({{ $note->id }})"
      >
        @livewire('corner-right-up-icon')
      </button>
    </div>
  </div>

