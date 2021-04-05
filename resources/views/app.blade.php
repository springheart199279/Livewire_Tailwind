<!DOCTYPE html>
<html lang="en">

<head>
  <title>LiquidFishDemo</title>

  <!-- TailWind CSS-->
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

  <!-- Alpine JS-->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  @livewireStyles
</head>

<body>
  <div>
    <div class="px-10 h-80 mt-10 grid grid-rows-1 grid-cols-2 grid-flow-col gap-10">
      @livewire('new-note')
      @livewire('all-notes')
    </div>
    @livewire('deleted-notes')
  </div>

  @livewireScripts
</body>

</html>