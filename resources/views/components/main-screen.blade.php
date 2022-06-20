<div>
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 flex z-40">
      <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
      <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-purple-900">
        <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div x-show="!showSideBar"  class="absolute top-0 right-0 -mr-12 pt-2">
          <button @click="showSideBar = false" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4">
          <img class="h-8 w-auto" src="img/logo_instituto2.svg" alt="Banco de Curriculo">
        </div>
        <div class="mt-5 flex-1 h-0 overflow-y-auto">
          <nav class="px-2 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
            <a href="/home" class="bg-purple-500 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/home -->
              <!--se for colocar icone. o svg em nessa linha-->
              Cadastrar currículo
            </a>

            <a href="/vagas" class="text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/users -->
              <!--se for colocar icone. o svg em nessa linha-->
              Vagas
            </a>

            <a href="/treinamentos" class="text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/folder -->
             <!--se for colocar icone. o svg em nessa linha-->
              Treinamentos
            </a>

            <a href="/login" class="text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/folder -->
             <!--se for colocar icone. o svg em nessa linha-->
              Sair
            </a>
          </nav>
          <div class="mb-5 mt-96 pt-10 flex flex-row justify-center items-center">
                    <div>
                        <img class="scale-50" class="" src="img/logo_tokio_marine_mobile.png" alt="">
                    </div>
                </div>
      </div>
        </div>
      </div>

      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-grow pt-5 bg-purple-900 overflow-y-auto">
      <div class="flex items-center flex-shrink-0 px-4">
        <img class="scale-75" src="img/logo_instituto2.svg" alt="Workflow">
      </div>
      <div class="mb-20">
            <h2 class="mt-6 text-xl font-extrabold text-center text-white">Banco de Currículos</h2>
            <p class="text-sm font-medium text-center text-white">Inst. de Quimioterapia e Beleza</p>
        </div>
      <div class="mt-5 flex-1 flex flex-col">

        <nav class="flex-1 px-2 pb-4 space-y-1">
          <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
          <a href="/home" class="text-white hover:bg-purple-700 group flex items-center px-2 py-2 text-sm font-medium rounded-md">

            <!-- Heroicon name: outline/home -->
           <!--se for colocar icone. o svg em nessa linha-->
            Cadastrar currículo
          </a>

          <a href="/vagas" class="text-white hover:bg-purple-700 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/users -->
            <!--se for colocar icone. o svg em nessa linha-->
            Vagas
          </a>

          <a href="/treinamentos" class="text-white hover:bg-purple-700 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/folder -->
            <!--se for colocar icone. o svg em nessa linha-->
            Treinamentos
          </a>

          <a href="/login" class="text-white hover:bg-purple-700 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/folder -->
            <!--se for colocar icone. o svg em nessa linha-->
            Sair
          </a>
        </nav>

        <div class="mb-5 pt-10 flex flex-row justify-center items-center">
                    <div>
                        <img class="scale-50" src="img/logo_tokio_marine_mobile.png" alt="">
                    </div>
                </div>
      </div>
    </div>
  </div>
  <div class="md:pl-64 flex flex-col flex-1">
    <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
      <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu-alt-2 -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">

        </div>
        <div class="ml-4 flex items-center md:ml-6">
          <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: outline/bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            <div>
              <button type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
            </div>

            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
           <!---
             <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: ""
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
    <main>

        {{$slot}}

    </main>
  </div>
</div>
