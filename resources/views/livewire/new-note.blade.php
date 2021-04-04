<div 
  class="rounded-lg shadow-lg h-full p-4"
>
  <h1 
    class="font-medium mb-2"
  > 
    New Note
  <h1>
  <textarea 
    class="rounded-md border-2 border-gray-100 p-2 h-40 w-full" 
    placeholder="Type a new note..." 
    wire:model="text"
  ></textarea>
  <div class="flex">

  @if (empty(trim($text)))
    @error('text') 
      <span class="text-red-500 text-sm">
        {{ $validationMessage }}
      </span> 
    @enderror
  @endif

    <button 
      class="align-bottom ml-auto inline-grid bg-blue-100 py-1 px-2 shadow-sm rounded-md" wire:click="createNote"
    >
      Save
    </button>
  </div>
</div>