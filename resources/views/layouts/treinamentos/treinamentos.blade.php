<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> <!---Caraca! só aplica por CDN--->
  <script src="//unpkg.com/alpinejs" defer></script>
  <!-- @livewireStyles--->
</head>
<body>
    <x-main-screen>
    <div class="bg-purple-100 h-screen py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-purple-900">Treinamentos</h1>
            <p class="text-sm font-medium text-purple-400">Fique por dentro das dicas!</p>
        </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
            <div class="py-4">
                <div class="bg-white rounded-lg h-96">
                    <x-grid_videos/>
                </div>
            </div>
          <!-- /End replace -->
        </div>
      </div>
    </x-main-screen>
</body>
</html>
