<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Cursos para Ti</title>
</head>

<style>
    #General {
        border: 1px solid black;
        border-radius: 10px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        width: 850px;
        height: auto;
    }
</style>

<body>

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
                        {{-- return view('auth.mas_cursos', compact('cursosNuevo')); --}}
                            <a href="{{ url('cursosAprobadosUser', auth()->user()->id) }}" class="px-5 py-3 text-green-300 rounded hover:text-green-100 hover:bg-white text-xl font-semibold text-left">Certificados</a>
                        @endauth
                    </div>

                    <div class="text-sm lg:py-0 py-2">
                        @auth
                            <form style="display: inline" action="logout" method="POST">
                                <a href="logout" onclick="this.closest('form').submit()" class="px-5 py-3 text-green-300 rounded hover:text-green-100 hover:bg-white text-xl font-semibold text-left">Cerrar sesión</a>
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

    </div>

    
    <!-- titutlo -->
    <div class="text-center py-14 mt-10">
        <h1 class="font-bold text-green-100 break-normal text-3xl md:text-5xl mb-28">Mas cursos para ti</h1>
    </div>

    @auth
        <!-- tabla -->
        <div class="container mx-auto bg-green-200 rounded py-8 px-2 text-center overflow-y-auto shadow-md">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 border-4 shadow-md border-t-0 border-l-0 border-r-0">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center text-sm font-bold bg-negro uppercase ">CURSO</th>
                        <th scope="col" class="px-6 py-3 text-center text-sm font-bold bg-negro uppercase ">FECHA DE INICIO</th>
                        <th scope="col" class="px-6 py-3 text-center text-sm font-bold bg-negro uppercase ">INFORMACION</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    <!-- Imprimimos todos los cursos -->
                    @if (isset($cursosNuevo))
                        @foreach($cursosNuevo as $nuevo)
                            <tr>
                                <td class="px-6 py-2 whitespace-nowrap text-center m-auto">
                                
                                    <div class="sm:flex block text-center">
                                        <img class="sm:m-0 m-auto h-10 w-10 rounded-full" src="https://image.flaticon.com/icons/png/512/1567/1567341.png" alt="icono del curso">
                                        <p class="text-lg px-5 py-2 text-gray-900 text-center border-2 shadow-sm border-t-0 border-l-0 border-r-0">{{$nuevo->nombre}}</p>
                                    </div>
                                
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <span class="text-sm px-4 py-2 inline-flex leading-5 font-semibold rounded bg-green-100 text-white">{{$nuevo->horas}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <button href="#" class="transition duration-500 ease-in-out transform hover:scale-110 bg-green-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-full">VER</button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <!-- mas tablas tr -->
                </tbody>
            </table>
        </div>
    @endauth
    

    <!--======= footer =========-->
    <footer class="mt-80 footer bg-green-200 relative pt-1 border-b-2 border-blue-700">
        <div class="container mx-auto p-6">
            <div class="sm:flex sm:mt-8">
                <div class="px-10 mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
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
                        <div class="sm:text-right text-left text-white">
                            <i>Av. Colón E4-175 entre Amazonas y Foch, Ed.</i><br>
                            <i>Torres de la Colón, Mezzanine Of. 12 Quito - Ecuador</i><br>
                            <i><a href="fundacion@esquel.org.ec" class="text-blue-700  text-md hover:text-blue-500">fundacion@esquel.org.ec</a></i><br>
                            <i>+(5932) 252-0001</i><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--======= footer =========-->
        <div class=" bg-black shadow">
            <ul class="py-5 border border-b-0 border-l-0">
                <li class="text-center text-white "><a href="#">© 2021 Fundación Esquel</a></li>
            </ul>
        </div>

    </footer>

</body>
</html>
