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
<!---@livewireScripts-->
<x-main-screen>
<div class="bg-purple-100 h-full py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-purple-900">Vagas</h1>
            <p class="text-sm font-medium text-purple-400">Encontre vagas com o seu perfil :)</p>
        </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
            <div class="py-4">
                <div class="bg-white rounded-lg h-96">

                <div class="mt-5 ml-5">
    <div class="flex flex-row h-full ">
            <div class="w-2/5">
                <!--div A-->
                <div class="bg-white lg:min-w-0 lg:flex-1">
        <div class="pl-4 pr-6 pt-4 pb-4 border-b border-t border-gray-200 sm:pl-6 lg:pl-8 xl:pl-6 xl:pt-6 xl:border-t-0">
          <div class="flex items-center">
            <h1 class="flex-1 text-lg font-medium">Ofertas de vagas</h1>
            <div class="relative">
              <button type="button" class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="sort-menu-button" aria-expanded="false" aria-haspopup="true">
                <!-- Heroicon name: solid/sort-ascending -->
                <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                </svg>
                Filtrar
                <!-- Heroicon name: solid/chevron-down -->
                <svg class="ml-2.5 -mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- Dropdown menu, show/hide based on menu state. -->
              <div class="origin-top-right z-10 absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="sort-menu-button" tabindex="-1">

               <!--profile menu--->


              </div>
            </div>
          </div>

            <x-card-vaga/>

            </div>

            <div class="w-3/5">
                <!--div B-->
                <div class="bg-gray-50 pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0 lg:border-l lg:border-gray-200 xl:pr-0">
                <div class="pt-6 pb-2">
          <h2 class="ml-5 text-sm font-semibold">Descrição da Vaga</h2>
        </div>
        <div>
          <ul role="list" class="divide-y divide-gray-200">
            <li class="py-4">
              <div class="ml-5 flex space-x-3">
                <div class="flex-1 space-y-1">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium">Título da vaga</h3>
                    <!--<p class="text-sm text-gray-500">1h</p>-->
                  </div>
                    <p class="mr-5 pb-5 text-sm text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </br> </br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    </p>
                  <button type="submit" class="w-80 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-900">Quero esse job!</button>
                </div>
            </div>
            </li>

            <!-- More items... -->
          </ul>
        </div>
      </div>
            </div>
    </div>

</div>

                </div>
            </div>
          <!-- /End replace -->
        </div>
      </div>
    <x-pagination/>
</x-main-screen>

</body>
</html>
