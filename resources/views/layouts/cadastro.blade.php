<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> <!---Caraca! só aplica por CDN--->
  <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body>

<div class="flex">

	<div class="relative flex-1 hidden w-0 lg:block">
    	<img class="absolute inset-0 object-cover w-full h-full" src="img/bg_portas2.png" alt="">

    	<div class="flex flex-col w-2/5 px-4 py-12 opacity-80 bg-violet-300 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        	<div class="w-full max-w-sm mx-auto lg:w-96">
            	<div>
                	<img class="inline-flex justify-center ml-20 scale-75" src="img/logo_instituto2.svg" alt="">
                	<h2 class="mt-6 text-2xl font-extrabold text-center text-white">Banco de Currículos</h2>
                	<p class="text-sm font-medium text-center text-white">Instituto de Quimioterapia e Beleza</p>
            	</div>

            	<div class="mt-8">
                	<div>
                    	<div>
                        	<p class="pb-5 text-xl font-medium text-center text-white">Login</p>

                  	      <div class="grid grid-cols-2 gap-3 mt-1">
                            	<div>
                                	<a href="#" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-purple-900 rounded-md shadow-sm">
                                    	<span class="sr-only">Gmail</span>
                                    	<img class="w-5 h-5" src="img/icon_gmail.svg" alt="">
                                	</a>
                            	</div>

  	                          <a href="#" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-purple-900 rounded-md shadow-sm">
                                	<span class="sr-only">Facebook</span>
                  	              <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20" aria-hidden="true">
                                    	<path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" />
                                	</svg>
                            	</a>
                        	</div>

                    	</div>

    	                <div class="relative mt-6">
                        	<div class="absolute inset-0 flex items-center" aria-hidden="true">
                        	</div>
                        	<div class="relative flex justify-center text-sm">
                                <span class="text-white"> OU </span>
                        	</div>
                    	</div>
                	</div>

                	<div class="mt-6">
                    	<form action="#" method="POST" class="space-y-6">
                        	<div>
                            	<label for="email" class="block text-sm font-medium text-white"> Nome completo </label>
                            	<div class="mt-1">
                                	<input id="email" name="email" type="email" autocomplete="email" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            	</div>
                        	</div>

                        	<div class="space-y-1">
                            	<label for="password" class="block text-sm font-medium text-white"> Telefone </label>
        	                    <div class="mt-1">
                                	<input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            	</div>
                        	</div>

                        	<div>
                            	<label for="email" class="block text-sm font-medium text-white"> Email </label>
                            	<div class="mt-1">
                                	<input id="email" name="email" type="email" autocomplete="email" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            	</div>
                        	</div>

                        	<div class="space-y-1">
                            	<label for="password" class="block text-sm font-medium text-white"> Senha </label>
        	                    <div class="mt-1">
                                	<input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            	</div>
                        	</div>

                        	<div class="pt-5">
                            	<button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-purple-900 border border-transparent rounded-md shadow-sm">Finalizar</button>
                        	</div>
                        	<div class="flex flex-row items-center justify-center">
                            	<div>
                                	<img class="scale-50" src="img/logo_tokio_marine_mobile.png" alt="">
                            	</div>
                        	</div>
                    	</form>
                	</div>
         	   </div>
        	</div>
    	</div>
	</div>
</div>

</body>
</html>
