@extends('layouts.principal')

@section('title', 'Inicio')

@section('content')
    {{-- slide --}}
    <div>
        <div class="sm:bg-no-repeat md:bg-no-repeat lg:relative lg:bg-cover lg:bg-center lg:bg-no-repeat xl:w-full xl:max-w-full xl:overflow-hidden xl:h-auto xl:grid xl:bg-cover xl:bg-no-repeat xl:bg-top justify-center items-center" style="background-image: url('{{ asset('/img/background_home.png')}}')">
            <div class="container relative z-30 xxs:pb-48 xs:pb-52 sm:pb-72 md:pb-96 lg:pb-96">
                <div class="xxs:text-center xs:text-center sm:text-center md:text-left lg:text-left xxs:pt-8 xs:pt-8 sm:pt-20 xl:pt-32">
                    <h1 class="font-body font-bolder text-white xxs:text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-5xl">
                        Soluciones financieras<br/>integrales
                    </h1>
                    <div class="xxs:pt-12 xs:pt-12 sm:pt-12 md:pt-12 lg:pt-12 xl:pt-12 pl-0 md:pl-1">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-xl">
                            Te acompañamos a tomar las mejores decisiones de inversión,<br/>
                            ofreciéndote una amplia gama de instrumentos financieros<br/>
                            según tu objetivo, plazo y perfil de riesgo.
                        </p>
                    </div>
                    {{-- <div class="absolute md:top-16 lg:-top-4 xl:-top-16 right-0 z--1">
                        <img src="img/Animacion Cucchiara_Mesa de trabajo 1.png" class="xxs:hidden xs:hidden sm:hidden md:block md:w-[48rem] lg:w-[56rem] xl:w-[65rem]">
                    </div> --}}
                    <div class="xxs:h-32 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-40"></div>
                </div>
                <div class="xxs:text-center xs:text-center md:text-left lg:text-left xl:text-left">
                    <span class="text-white font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
                        Nosotros
                    </span>
                    <div class="xxs:pt-8 xs:pt-8 sm:pt-8 md:pt-8 lg:pt-8 xl:pt-8">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-2xl">
                            <span class="font-bold">Cucchiara y Cía. S. A. es un Agente de Negociación, Liquidación y Compensación</span> que ofrece servicios integrales de gestión de carteras de inversión fomentando relaciones directas con sus clientes, individuales o corporativos, proporcionando soluciones financieras guiadas por la prudencia, transparencia, y responsabilidad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    {{-- cards --}}
    <div class="container absolute inset-x-0 fieldset z-30 xxs:px-0 lg:px-28 xl:px-48 xxs:text-center xs:text-center md:text-left lg:text-left xl:text-left xxs:-mt-32 xs:-mt-36 sm:-mt-48 md:-mt-80 lg:-mt-48 xl:-mt-64">
        <span class="text-white font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
            Lo que hacemos
        </span>    
        <div class="grid grid-cols-2 xxs:gap-1 gap-y-10 pt-10 sm:gap-x-6 md:gap-x-14 lg:gap-x-14 xl:gap-x-20 md:pt-12">
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        Administración<br/>de cartera
                    </h3>
                </div>
                <div>
                   <img src="{{ asset('/img/card_01.png') }}" alt="development icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        Research
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_02.png') }}" alt="content marketing icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        Operaciones<br/>financieras
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_03.png') }}" alt="Mobile Application icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        Fondos comunes<br/>de inversión
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_04.png') }}" alt="Email Marketing icon" class="xxs:w-20"/>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards --}}
    <div class="xxs:h-c-32 xs:h-c-34 sm:h-[23rem] md:h-60 lg:h-[25rem] xl:h-[30rem]"></div>
    {{-- open account --}}
    <div class="container text-center">
        <span class=" font-bolder text-color-cucchiara text-center font-body xxs:text-3xl lg:text-3xl">
            Abrí tu cuenta hoy
        </span>
        <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
            <div class="grid grid-cols-4 gap-0 content-start">
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconphone.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon project"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconarrows.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon award"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconbars.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon happy clients"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconboxes.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon puzzle"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-0 justify-content items-center mt-4">
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Abrí tu<br>cuenta
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl pb-8">
                        Asesorate
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Definí tu cartera<br/>de inversión
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Monitoreá<br/>tus inversiones
                    </h4>
                </div>
            </div>
        </div>
    </div>
    {{-- end open account --}}
    {{-- need --}}
    <div class="bg-quarter">
        <div class="container xxs:flex-col sm:flex-row md:flex-row lg:flex-row flex xl:flex-row  items-center justify-between py-16 md:py-20 lg:flex-row">
            <div>
                <h2 class="font-body xxs:pb-8 xs:text-base sm:text-2xl md:text-4xl lg:text-5xl font-bold text-white">
                    ¿Qué necesitas <br>para abrir tu <br>cuenta?                  
                </h2>
            </div>
            <div class="flex xxs:gap-0 sm:gap-2">
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center top-minus-10 h-28">
                                    <img src="{{ asset('/img/personas.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xxs:text-base xs:text-base lg:text-3xl sm:text-xl">
                                        Personas<br/>Físicas
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:px-5 sm:px-5 xxs:pt-6 xs:pt-6 sm:pt-6 md:pt-6 md:px-5 lg:px-9 lg:pt-10">
                                    <p class="font-body xxs:text-xxs xs:text-xxs sm:text-xxs lg:text-xs">
                                        · Documento de Identidad.<br/>
                                        · Verificación de domicilio.<br/>
                                        · Justificación de ingresos y patrimonio.<br/>
                                        · En caso de contar con apoderado, documento de identidad de éste, así como copia del poder otorgado ante Escribano Público.
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0-5 lg:pt-8 px-9 pb-4 underline underline-offset-4">
                                    <a href="" class="font-body font-bold text-a-color xxs:text-xxs xs:text-xxs sm:text-xxs md:text-xs lg:text-base">Abrir cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center top-minus-10 h-28">
                                    <img src="{{ asset('/img/contratos.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xxs:text-base xs:text-base lg:text-3xl sm:text-xl">
                                        Personas<br/>Jurídicas
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:px-5 sm:px-5 xxs:pt-2 xs:pt-2 sm:pt-6 md:pt-6 md:px-5 lg:px-9 lg:pt-10">
                                    <p class="font-body xxs:text-xxs xs:text-xxs sm:text-xxs lg:text-xs">
                                        · Actas de Directorio / Asamblea con designación de cargos.<br/>
                                        · Estatuto de la Sociedad.<br/>
                                        · Registro de accionistas actualizado.<br/>
                                        · Estados contables.<br/>
                                        · Verificación de domicilio de la sociedad.<br/>
                                        · De los representantes de la sociedad y beneficiarios finales. 
                                    </p>
                                    <p class="font-body xxs:text-xxs xs:text-xxs pl-4 sm:text-xxs lg:text-xs">
                                        · Documento de identidad<br/>
                                        · Verificación de domicilio
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0 lg:pt-2 px-9 pb-4 underline underline-offset-4">
                                    <a href="" class="font-body font-bold text-a-color xxs:text-xxs xs:text-xxs sm:text-xxs md:text-xs lg:text-base">Abrir cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    {{-- end need --}} 
    {{-- last research --}}
    <div class="bg-white">
        <div class="container py-16 md:py-20">
            <h3 class="text-left font-header text-xl font-bolder sm:text-xl lg:text-3xl text-color-cucchiara">
                Últimos Informes de Research
            </h3>
            <div class="mx-auto grid w-full grid-cols-3 pt-4 w-full xxs:gap-2 xl:gap-10">
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-01.png')}})" class="rounded-top-xl group relative xxs:h-28 sm:h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                    </div>
                    <div class="bg-white py-6 xxs:px-1 sm:px-5 xl:py-8 rounded-xl">
                        <span class="block font-body xxs:text-xxs sm:text-lg font-semibold text-color-cucchiara">
                            Compañia general de combustible
                        </span>
                        <span class="block pt-2 font-body xxs:text-xxs sm:text-lg text-color-cucchiara">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-02.png')}})" class="rounded-top-xl group relative xxs:h-28 sm:h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                    </div>
                    <div class="bg-white py-6 xxs:px-1 sm:px-5 xl:py-8 rounded-xl">
                        <span class="block font-body xxs:text-xxs sm:text-lg font-semibold text-color-cucchiara">
                            Telecom Argentina S.A.
                        </span>
                        <span class="block pt-2 font-body xxs:text-xxs sm:text-lg text-color-cucchiara">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-03.png')}})" class="rounded-top-xl group relative xxs:h-28 sm:h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <!--<span class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">
                            Leer nota
                        </span>-->
                    </div>
                    <div class="bg-white py-6 xxs:px-1 sm:px-5 xl:py-8 rounded-xl">
                        <span class="block font-body xxs:text-xxs sm:text-lg font-semibold text-color-cucchiara">
                            La macroeconomía Argentina para 2023
                        </span>
                        <span class="block pt-2 font-body xxs:text-xxs sm:text-lg text-color-cucchiara">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- newsletter --}}
    <div class="bg-quarter" id="newsletter">
        @if (session('status'))
        <div class="text-center text-white font-body text-base pt-10">
            {{ session('status') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="text-center text-white font-body text-base pt-10">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container flex justify-between py-12 grid grid-cols-2 gap-2 flex items-center xl:pr-60 xl:pl-52">
            <div>
                <h2 class="text-white font-body xxs:text-2xl xs:text-3xl lg:text-5xl font-bolder">
                    Recibí nuestros<br/>informes
                </h2>
            </div>
            <div class="text-right">
                <button data-modal-target="newsletter-modal" data-modal-toggle="newsletter-modal" class="text-color-cucchiara rounded bg-button text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring xxs:px-4 sm:px-12 py-2 text-center">
                    Suscribite
                </button>
            </div>
        </div>
    </div>
    <div id="newsletter-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="newsletter-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-20 bg-quarter flex flex-col items-center rounded-lg">
                    <h3 class="mb-4 text-2xl font-bold text-white">Recibí nuestro Newsletter semanal</h3>
                    <form class="space-y-6" action="/newsletter" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="flex flex-row justify-between gap-3">
                            <div class="">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-white"></label>
                                <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nombres *" required>
                            </div>
                            <div class="">
                                <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 text-white"></label>
                                <input type="lastname" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Apellidos *" required>
                            </div>
                        </div>
                        <div class="w-full">
                            <input type="email" name="email" id="email" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email*" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <div>
                                    <h3 class="text-base text-white mb-4">
                                        Elegí cuál querés recibir:
                                    </h3>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-white">Resumen Estadistico</label><br>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-white">Resumen Economico</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button class="text-color-cucchiara rounded bg-cyan-20 px-12 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end newsletter --}}
    <div class="h-[10rem]"></div>
@endsection