<!DOCTYPE html>
<html">

  <head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>LiquidFishDemo</title>
    @livewireStyles
  </head>

  <body>
    <div 
      class="px-10 h-80 mt-10 grid grid-rows-1 grid-cols-2 grid-flow-col gap-10"
    >
      @livewire('new-note')
      @livewire('all-notes')
    </div>

    @livewire('deleted-notes')

    @livewireScripts
  </body>

  </html>