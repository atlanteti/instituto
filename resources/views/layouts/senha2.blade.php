<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> <!---Caraca! só aplica por CDN--->

</head>
<body>

<div class="flex h-screen">

<div class="relative flex-1 hidden w-0 lg:block">
    <img class="absolute inset-0 object-cover w-full h-full" src="img/bg_portas2.png" alt="">

    <div class="flex flex-col w-2/5 h-screen px-4 py-12 opacity-80 bg-violet-300 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="w-full max-w-sm mx-auto lg:w-96">
            <div>
                <img class="inline-flex justify-center ml-20 scale-75" src="img/logo_instituto2.svg" alt="">
                <h2 class="mt-6 text-2xl font-extrabold text-center text-white">Banco de Currículos</h2>
                <p class="text-sm font-medium text-center text-white">Instituto de Quimioterapia e Beleza</p>
            </div>

            <div class="mt-8">
                <div>
                    <div>
                        <p class="pb-10 text-xl font-medium text-center text-white">Recuperar senha</p>
                    </div>
                </div>

                <div class="mt-6">
                    <form action="#" method="POST" class="space-y-6">
                        <h1 class="pb-10 text-purple-900 text-center text-bold">O link para alteração de senha já <br>foi enviado seu email :)</h1>
                        <div>
                            <!----<button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-purple-900 border border-transparent rounded-md shadow-sm">Ok, Entendi!</button>--->
                        </div>
                        <p class="text-sm font-medium text-center text-white">Ainda não tem uma conta? <strong>Cadastre-se Agora!</strong></p>
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
