@extends('layouts.principal')

@section('title', 'Servicios')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/services_02.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara forma parte de la comunidad inversora local como socio de la Cámara de Agentes de Bolsa y tiene presencia internacional como asociado del EMTA, comunidad internacional de inversión enfocada en el desarrollo de mercados emergentes.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Administración<br>de carteras
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5">
                            A través de profesionales idóneos te<br>
                            brindamos soluciones de inversión a medida,<br>
                            planteando estrategias que se alineen con tu<br>
                            perfil de riesgo y tus objetivos.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/Group 1.png') }}" class="xxs:w-20 sm:w-auto" alt="about image"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/_219_Duty_Finance_Marketing_Money.png') }}" class="xxs:w-20 sm:w-auto" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Research
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            Publicamos regularmente informes económicos y<br>
                            de investigación de mercado con información<br>
                            valiosa para la toma de decisiones. Organizamos<br>
                            charlas y seminarios web con el fin de promover el<br>
                            intercambio de conocimiento y opinión entre<br>
                            clientes y especialistas.
                        </div>
                    </div>
                    
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Operaciones financieras
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5">
                            Te damos acceso a todos los mercados argentinos para<br>
                            operar los instrumentos de oferta pública autorizados<br>
                            por la CNV: Títulos públicos, obligaciones negociables,<br>
                            acciones, CEDEARs, fideicomisos financieros, cauciones<br>
                            bursátiles, opciones, futuros, pagarés bursátiles,<br>
                            cheques de pago diferidos, Fondos Comunes de<br>
                            Inversión, etc.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/_202_Analytics_Finances_Gains_Investments.png') }}" class="xxs:w-20 sm:w-auto" alt="about image"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/Group 26.png') }}" class="xxs:w-20 sm:w-auto" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Fondos comunes<br>de inversión
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            Como agente ACDI, te ofrecemos acceso a un amplio<br>
                            abanico de fondos comunes de inversión gestionados<br>
                            activamente por especialistas. Fondos en pesos o en<br>
                            dólares que invierten en instrumentos de renta fija,<br>
                            variable o mixta.
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection