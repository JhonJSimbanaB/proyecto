<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <title>Cursos para Ti</title>
</head>

<style>
    #General {
        border: 3px solid black;
        border-radius: 10px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        width: 850px;
        height: auto;
    }
</style>

<body>

    <!-- Barra de navegacion -->
    <nav class="bg-gray-300 p-6">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    <!-- Botón de menú móvil-->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>

                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">

                        <a href="https://www.esquel.org.ec/">
                            <img src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="logo_esquel" class="fill-current h-100 w-100 mr-2" width="250" height="250">
                        </a>
                        <a href="https://esquelclic.org/">
                            <img class="fill-current h-100 w-100 mr-2" width="250" height="250" src="https://esquelclic.org/images/logos/LogoCLIC%20.svg" alt="logo_esquel_clic">
                        </a>

                    </div>
                    <div class="hidden sm:block sm:m-8">
                        <div class="flex space-x-4">
                            <a href="cursos_recibidos" class=" px-4 py-2 text-white rounded hover:text-green-100 hover:bg-white text-xl font-semibold ">Certificados</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menú móvil, mostrar / ocultar según el estado del menú. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="cursos_recibidos" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Certificados</a>
            </div>
        </div>
    </nav>

    <!--titutlo-->
    <div class=" text-center pb-10 pt-10 ">
        <h1 class="font-bold text-green-100 break-normal text-3xl md:text-5xl">Mas Cursos Para TI</h1>
    </div>



    <!--tabla-->
    <div class="container">
        @yield('content')
    </div>



    <!--======= footer =========-->
    <footer class="mt-64 footer bg-green-200 relative pt-1 border-b-2 border-blue-700">
    <div class="container mx-auto p-6">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">

                    <!--======= Redes sociales =========-->
                    <span class="font-bold text-center text-gray-700 uppercase mb-2">Area Social</span>
                    <span class="my-2"><a href="https://www.facebook.com/fundacion.esquel/" class="text-blue-700  text-md hover:text-blue-500">Siguenos en Facebook</a></span>
                    <span class="my-2"><a href="https://twitter.com/FundacionEsquel" class="text-blue-700  text-md hover:text-blue-500">Siguenos en Twitter</a></span>
                    <span class="my-2"><a href="https://www.youtube.com/channel/UCS7JrWLBuGoJqhE7ZzNr3Og" class="text-blue-700  text-md hover:text-blue-500">Visítanos en Youtube</a></span>
                </div>
                <div class="flex flex-col">

                    <!--======= Contactos =========-->
                    <span class="font-bold text-center text-gray-700 uppercase mt-4 md:mt-0 mb-2">Contáctanos</span>
                        <div class="text-right text-white">
                            <i>Av. Colón E4-175 entre Amazonas y Foch, Ed.</i><br>
                            <i>Torres de la Colón, Mezzanine Of. 12 Quito - Ecuador</i><br>
                            <i><a href="fundacion@esquel.org.ec" class="text-blue-700  text-md hover:text-blue-500">fundacion@esquel.org.ec</a></i><br>
                            <i>+(5932) 252-0001</i><br>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black container mx-auto px-6">
        <div class="m-0 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">© 2021 Fundación Esquel</p>
            </div>
        </div>
    </div>
    </footer>
</body>
</html>
