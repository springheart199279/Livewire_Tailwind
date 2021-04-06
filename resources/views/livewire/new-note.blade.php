<div 
  class="h-full p-4 rounded-lg shadow-lg"
>
  <h1 
    class="mb-2 font-medium"
  > 
    New Note
  <h1>
  <textarea 
    class="w-full h-40 p-2 border-2 border-gray-100 rounded-md" 
    placeholder="Type a new note..." 
    wire:model="text"
  ></textarea>
  <div class="flex">

  {{-- I wrapped this error in an if statement so that it would disappear when the the user starts typing --}}
  @if (empty(trim($text)))
    @error('text')
    <span class="text-sm text-red-500">
      {{ $validationMessage }}
    </span>
    @enderror
  @endif

    <button 
      class="inline-grid px-2 py-1 ml-auto align-bottom bg-blue-100 rounded-md shadow-sm" 
      wire:click="createNote"
    >
      Save
    </button>
  </div>
</div>