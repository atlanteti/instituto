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
<div class="bg-purple-100 h-full py-6">
    <div class="md:flex md:flex-row md:justify-between md:max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
           <div>
           <h1 class="text-2xl font-semibold text-purple-900">Cadastre seu currículo</h1>
           </div>
            <div class="md:w-2/3 md:h-20 md:bg-indigo-600">Teste</div>
    </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
            <div class="py-4">

    <div class="bg-white h-full rounded-lg">
        <form class="mt-5 ml-5 space-y-8 divide-y divide-gray-200">
            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-purple-900">Dados Pessoais</h3>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Já tenho meu cv (Nao precisa preencher o form)</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Fazer o Upload</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">Ou arraste o arquivo para cá!</p>
                            </div>
                            <p class="text-xs text-gray-500">PDF, DOCX, PNG, JPG até 10MB</p>
                        </div>
                        </div>
                    </div>
                </div>

            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="photo" class="block text-sm font-medium text-gray-700"> Foto </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <div class="flex items-center">
                        <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                    <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Alterar</button>
                    </div>
                </div>
                </div>

            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Nome Completo</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Contato* (email ou telefone)</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Estado* </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <select id="country" name="country" autocomplete="country-name" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <option>Selecione</option>
                            <option>Rio de Janeiro</option>
                            <option>Minas Gerais</option>
                            </select>
                        </div>
                    </div>
                    <p class="mt-2 text-sm text-gray-500" id="email-description">Campo Obrigatório</p>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> CEP*</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <p class="mt-2 text-sm text-gray-500" id="email-description">Campo Obrigatório</p>
                        </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cidade*</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <p class="mt-2 text-sm text-gray-500" id="email-description">Campo Obrigatório</p>
                        </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Endereço</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                        </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5 pb-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Número</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

<div class="bg-white h-full rounded-lg">
            <form class="mt-5 ml-5 space-y-8 divide-y divide-gray-200">
                <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-purple-900">Formação Acadêmica</h3>
                        <div class="mt-5 sm:border-t sm:border-gray-200 sm:pt-5 pb-5">
                    </div>
                <div class="flex flex-row">
                        <div class="mb-5 flex flex-row">
                            <div class="w-80 mr-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Curso</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div class="mr-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Ano de conclusão</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div>
                                <img class="pt-8" src="img/button_add.svg" alt="">
                            </div>
                        </div>
                </div>
                <div class="mt-5 sm:border-t sm:border-gray-200 sm:pt-3 pb-3">
                <div class="flex flex-row">
                        <div class="mb-5 flex flex-row">
                            <div class="w-80 mr-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Idiomas</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div>
                                <img class="pt-8" src="img/button_add.svg" alt="">
                            </div>
                        </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Experiência profissional </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="flex flex-row ">
                        <p class="mt-2 text-sm text-gray-500">O que já fez, com o que trabalhou e habilidades que possui .</p>
                        <p class="mt-2 ml-20 text-sm text-bod text-purple-900">200</p>
                        </div>
                            <textarea id="about" name="about" rows="3" class="mb-5 max-w-lg shadow-sm block w-full h-60 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>

                </div>
            </form>
       </div>

       <div class="bg-white h-full rounded-lg">
            <form class="mt-5 ml-5 space-y-8 divide-y divide-gray-200">
                <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-purple-900">Tajetória profissional</h3>
                        <div class="mt-5 sm:border-t sm:border-gray-200 sm:pt-5 pb-5">
                    </div>
                <div class="flex flex-row">
                        <div class="mb-5 flex flex-row">
                            <div class="w-80 mr-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Empresa</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div class="mr-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Cargo</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div class="mr-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Atividade que exerceu</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div class="mr-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Período</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div>
                                <img class="pt-8" src="img/button_add.svg" alt="">
                            </div>
                        </div>
                </div>
                    <div class="pt-5 pb-5">
                        <div class="flex justify-center">
                            <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-slate-700">Cancelar</button>
                            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-900 focus:outline-none">Salvar</button>
                        </div>
                    </div>
            </form>
       </div>

    </div>
</div>





</x-main-screen>
</body>
</html>
