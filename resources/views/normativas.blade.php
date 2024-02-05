@extends('layouts.principal')

@section('title', 'Normativas')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/background-normativa.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    CYC Cambios S.A. se especializa en ofrecer asesoramiento integral a individuos y empresas que buscan operar en el Mercado Libre de Cambios, asegurando el cumplimiento riguroso de todas las disposiciones regulatorias vigentes.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <div class="text-white pt-32">
                    <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                        Marco regulatorio
                    </div>
                </div>
                <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-between pt-5 pb-32">
                    <div class="text-white xs:pr-0 lg:pr-20">
                        <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                            En Argentina, el mercado cambiario está regulado por el Banco Central de la República Argentina (BCRA), que establece normativas para supervisar y controlar las transacciones de divisas. El BCRA es la autoridad de fiscalización y registro de las entidades cambiarias.<br><br>
                            Las Casas de Cambio, como intermediarios financieros autorizados, deben obtener una licencia del BCRA para operar legalmente. Están sujetas a estrictos requisitos de capital, informes periódicos y cumplimiento de normativas anti-lavado de dinero y financiamiento del terrorismo. Además, el BCRA implementa límites y restricciones en las operaciones cambiarias con el fin de regular el flujo de divisas y asegurar la solidez del sistema financiero.<br><br>
                            Las Normas de Exterior y Cambios del BCRA son un conjunto de regulaciones que establecen las normativas para las transacciones de cambio y las operaciones financieras con el exterior. Estas normas buscan regular y supervisar el flujo de divisas, mantener la estabilidad del mercado cambiario, y asegurar el cumplimiento de las leyes y regulaciones financieras en el país. Bajo este marco legal, desde 2018, CYC Cambios S.A. esta registrada como Casa de Cambio bajo el Nro. de registro 20.113 ante el Banco Central de la República Argentina y realiza operaciones de cambio respetando la normativa vigente.
                        </div>
                        <div class="pt-10 flex xxs:justify-center xs:justify-center sm:justify-start md:justify-start lg:justify-start xl:justify-start">

                        </div>
                    </div>
                    <div class="xxs:pt-10 xs:pt-10 sm:pt-0">
                        <a class="block text-primary bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-md w-72 mb-2">
                            Registro de Casas<br>de Cambio
                        </a>
                        <a class="block text-primary bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-md w-72 mb-2">
                            Normas de Exterior y<br>Cambios
                        </a>
                        <a class="block text-primary bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-md w-72 mb-2">
                            Portal de Usuarios<br>Finacieros
                        </a>
                        <a class="block text-primary bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-md w-72 mb-2">
                            Normas de Protección<br>de los Usuarios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
