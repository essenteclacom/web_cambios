@extends('layouts.principal')

@section('title', 'Inicio')

@section('content')
    {{-- slide --}}
    <div>
        <div class="sm:bg-no-repeat md:bg-no-repeat lg:relative lg:bg-cover lg:bg-center lg:bg-no-repeat xl:w-full xl:max-w-full xl:overflow-hidden xl:h-auto xl:grid xl:bg-cover xl:bg-no-repeat xl:bg-top justify-center items-center" style="background-image: url('{{ asset('/img/background_home.png')}}')">
            <div class="container relative z-30 pb-28">
                <div class="xxs:text-center xs:text-center sm:text-center md:text-left lg:text-left xxs:pt-8 xs:pt-8 sm:pt-20 xl:pt-32 sm:pr-0 md:pr-60 xl:pr-64">
                    <h1 class="font-body font-bolder text-white xxs:text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-5xl">
                        Operaciones cambiarias simples
                    </h1>
                    <div class="xxs:pt-12 xs:pt-12 sm:pt-12 md:pt-12 lg:pt-12 xl:pt-12 pl-0 md:pl-1 sm:pr-0 md:pr-60 xl:pr-64">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-xl">
                            Accede al Mercado Libre de Cambios (MULC) en forma rápida, segura y transparente. Brindamos asesoramiento para la ejecución de operaciones de cambio. Priorizamos el cumplimiento de todas las disposiciones regulatorias vigentes.
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
                            <span class="font-bold">CyC CAMBIOS S.A.</span>  es una casa de cambio autorizada, regulada y supervisada por el Banco Central de la República Argentina (BCRA) desde 2018 y miembro de la Cámara Argentina de Casas y Agencias de Cambio (CADECAC).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    {{-- cards --}}
    <div class="container xxs:px-0 lg:px-28 xl:px-48 text-center xxs:mt-28 xs:mt-28 sm:mt-28 md:mt-28 lg:mt-28 xl:mt-28">
        <div class="flex flex-col justify-center items-center">
            <span class="text-primary font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
                Lo que hacemos
            </span>
            <span class="text-primary font-body text-center pt-10">
                CyC CAMBIOS S.A. está habilitada a operar en el Mercado Libre de Cambios en todos los instrumentos y transacciones previstas en la normativa de Exterior y Cambios del BCRA.
            </span>
        </div>
        <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2 content-start">
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon-01.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon project"/>
                    </div>
                    <p class="text-center">
                        Compra y venta de moneda y billetes extranjeros
                    </p>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon-02.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon award"/>
                    </div>
                    <p class="text-center">
                        Compra, venta y emisión de cheques; transferencias postales, telegráficas y telefónicas; vales postales, giros y cheques de viajero, en moneda extranjera.
                    </p>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon-03.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon happy clients"/>
                    </div>
                    <p>
                        Compra y venta de oro amonedado y en barras de “buena entrega”
                    </p>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon-04.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon project"/>
                    </div>
                    <p class="text-center">
                        Ingreso y egreso del país de billetes extranjeros y oro amonedado y en barras de “buena entrega”
                    </p>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon-05.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon award"/>
                    </div>
                    <p class="text-center">
                        Arbitrajes con residentes
                    </p>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon-06.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon happy clients"/>
                    </div>
                    <p>
                        Liquidación de Importaciones / Exportaciones de bienes o servicios, deudas / créditos comerciales, etc.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards --}}
    {{-- need --}}
    <div class="bg-primary">
        <div class="container xxs:flex-col sm:flex-row md:flex-row lg:flex-row flex xl:flex-row  items-center justify-between py-16 md:py-20 lg:flex-row">
            <div class="sm:px-8 xl:pr-28">
                <h2 class="font-body xxs:pb-8 xs:text-base sm:text-2xl md:text-4xl lg:text-5xl font-bold text-white">
                    ¿Qué necesitás para realizar una operación?
                </h2>
            </div>
            <div class="flex xxs:gap-0 sm:gap-2">
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-primary rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center top-minus-10 h-28">
                                    <img src="{{ asset('/img/personas.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body text-white xxs:text-base xs:text-base lg:text-2xl sm:text-xl">
                                        Requisitos<br/>de identificación
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-primary rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:px-2 sm:px-2 xxs:pt-1 xs:pt-1 sm:pt-1 md:pt-1 md:px-2 lg:pl-5 lg:pt-2">
                                    <p class="font-body xxs:text-xxs xs:text-xxs sm:text-xxs lg:text-xs">
                                        <b>· Argeninos y Residentes:</b> DNI vigente.<br/>
                                        <b>· Residentes Precarios:</b> Resolución DNM y documento especificado.<br/>
                                        <b>· No Residentes:</b> Pasaporte.<br/>
                                        <b>· Excepciones para Mercosur:</b> DNI, Cédula o documento de viaje con constancia de ingreso sellada por DNM.<br/>
                                    </p>
                                </div>
                                <div class="text-left text-white pt-2 lg:pl-2">
                                    <p class="font-body xxs:text-xxs xs:text-xxs sm:text-xxs lg:text-xs">
                                        <u>Prevención de actividades ilícitas:</u>  Medidas para evitar lavado de activos, financiamiento del terrorismo, y otras actividades ilícitas. Las transacciones de montos elevados requieren documentación adicional que debe permitir constatar la actividad económica y el origen de los fondos.
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0-5 lg:pt-8 px-9 pb-4 underline underline-offset-4">
                                    <a href="" class="font-body font-bold text-a-color xxs:text-xxs xs:text-xxs sm:text-xxs md:text-xs lg:text-base"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end need --}}
    <div class="h-[10rem]"></div>
@endsection
