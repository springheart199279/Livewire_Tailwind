  <div 
    class="relative flex items-stretch p-2 mb-4 break-all border-2 border-gray-100 rounded-md"
  >
    {{ $note->text }}
    <button 
      wire:click="delete({{$note->id}})" 
      class="self-end ml-auto"
    >
      @livewire('trash-icon')
    </button>
    <div 
      x-data="{ shouldHighlight: {{ $index }} === 0 }"
      :class="[ shouldHighlight ? 'bg-blue-100' : 'bg-white' ]" 
      class="absolute p-1 ml-2 text-xs rounded-full shadow-sm -right-3 -top-3"
    >
      @livewire('paperclip-icon')
    </div>
  </div>