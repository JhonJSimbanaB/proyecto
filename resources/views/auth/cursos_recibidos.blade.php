<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Cursos Recibidos</title>
</head>

<body>
{{-- 
    <div class="p-10">
        {{$userLogueado}}
    </div> --}}

    <div>

        <!--======= Inicio de Navegacion =========-->
        <nav class="flex items-center justify-between flex-wrap bg-grey-100 px-6 py-5">

            <div class="flex lg:w-auto w-full">
                <a href="https://www.esquel.org.ec/" class="mx-4 lg:w-auto w-full">
                    <img src="https://www.esquel.org.ec/templates/g5_hydrogen/custom/images/Logo%20Esquel%20Horizontal.svg" alt="logo" width="250" height="250">
                </a>
                <a href="https://esquelclic.org/" class="mx-4 lg:w-auto w-full">
                    <img width="250" height="250" src="https://esquelclic.org/images/logos/LogoCLIC%20.svg" alt="esquel clic" awidth="250" height="250">
                </a> 
            </div>
            
            <!--- sm md lg xl 2xl -->
            <div class="flex sm:justify-end">
                
                <div class="block lg:hidden mt-5 ml-3">
                    <button id='boton' class="flex items-center px-4 py-3 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>

                <div id='menu' class="text-left sm:text-right lg:text-left lg:flex w-full lg:py-0 pt-20 hidden">
                    <!-- Campos que aparecen en el menu desplegable -->
                    <div class="text-sm lg:py-0 py-2">
                        @auth
                            <a href="{{ url('masCursos') }}" class="px-5 py-3 text-green-300 rounded hover:text-green-100 hover:bg-white text-xl font-semibold text-left">Cursos Para ti</a>
                        @endauth         
                    </div>
                    <div class="text-sm lg:py-0 py-2">
                        @auth
                            <form style="display: inline" action="logout" method="POST">
                                <a href="{{ url('logout') }}" onclick="this.closest('form').submit()" class="px-5 py-3 text-green-300 rounded hover:text-green-100 hover:bg-white text-xl font-semibold text-left">Cerrar sesión</a>
                            </form>
                        @endauth         
                    </div>
                </div>

            </div>

          </nav>
          
          <!-- Verifica eventos del mouse en el menu desplegable del nav -->
          <script>
            const boton = document.querySelector('#boton');
            const menu = document.querySelector('#menu');

            boton.addEventListener('click', () => {
                console.log('click')
                menu.classList.toggle('hidden')
            })
          </script>
        <!--======= Fin de Navegacion =========-->


        <!--======= Inicio header =========-->
        <header class="bg-white shadow">
            <div class="py-6 px-4 sm:px-6 lg:items-center ">
                <h1 class="text-3xl font-bold text-green-300 text-center">Cursos Recibidos</h1>
            </div>
        </header>
        <!--======= Fin header=========-->

    </div>



    <!-- Contendor del contenido -->
    <div class="container h-screen">
        @auth
            <!-- Imprimimos datos del usuario ( nombre y num.cedula ) -->
            <div class="py-6 px-4 sm:px-10 lg:items-center">
                <ul>
                    <li>
                        <div class="flex justify-end mb-5">
                            <h3 class="text-xl font-bold leading-none mr-2">Nombre del usuario :</h3>
                            <p class="text-xl leading-none">{{ auth()->user()->name }}</p>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-end">
                            <h3 class="text-xl font-bold leading-none mr-2">Número de Cedula :</h3>
                            <p class="text-xl leading-none">{{ auth()->user()->cedula }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <!-- Imprimimos cursos aprobados del usuario -->
            <div class="container py-20 mb-80">
                <table class="container border-collapse border border-grey-100 text-lg">
                    <thead class="text-left border-collapse border border-text-white  bg-grey-100 font-bold">
                        <tr>
                            <th class="p-3 w-1/2 ">Cursos</th>
                            <th class="p-3 w-1/4 ">Horas Realizadas</th>
                            <th class="p-3 w-1/4 ">Descarga</th>
                        </tr>
                    </thead>
                    <tbody class="border-collapse border border-grey-100 ">
                        
                        @if (isset($cursosAprobado))
                            @foreach($cursosAprobado as $curso)
                            <tr class="border-collapse border border-grey-100 ">
                                <td class="p-3">{{$curso->nombre}}</td>
                                <td class="p-3">{{$curso->horas}}</td>
                                <td class="p-3 text-black text-opacity-40 hover:text-opacity-100"><a href="{{ url('formulario') }}">858</a></td>
                            </tr>
                            @endforeach()
                        @endif
                        
                    </tbody>
                </table>
            </div>
            
        @endauth
    </div>

    <!--======= footer =========-->
    <div class=" bg-white shadow">
        <div class="text-right text-green-300 shadow font-sans text-lg">
            <div class="flex justify-end py-3 px-5 hover:text-green-300 hover:bg-grey-100">
                <ul>
                    <h3 class="font-bold">CONTÁCTANOS</h3>
                    <li>Av. Colón E4-175 entre Amazonas y Foch, Ed.</li>
                    <li>Torres de la Colón, Mezzanine Of. 12 Quito - Ecuador</li>
                    <li>fundacion@esquel.org.ec</li>
                    <li>+(5932) 252-0001</li>
                </ul>
            </div>
        </div>
    </div>

    <!--======= footer =========-->
    <footer class=" bg-black shadow">
        <ul class="py-5 border border-b-0 border-l-0">
            <li class="text-center text-white "><a href="#">© 2021 Fundación Esquel</a></li>
        </ul>
    </footer>
 
</body>
</html>