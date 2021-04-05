<!DOCTYPE html>
<html lang="en">

{{-- NOTE: See README for notes --}}

<head>
  <title>LiquidFishDemo</title>
  <!-- TailWind CSS-->
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
  <!-- Alpine JS-->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  @livewireStyles
</head>

<body>
  <div class="grid grid-flow-col grid-cols-2 grid-rows-1 gap-10 px-10 mt-10 h-80">
    <livewire:new-note />
    <livewire:all-notes />
  </div>
  
  <livewire:deleted-notes />

  @livewireScripts
</body>

</html>