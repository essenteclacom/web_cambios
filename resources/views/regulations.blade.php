@extends('layouts.main')

@section('title', 'regulations')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/background-normativa.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    CYC Cambios S.A. specializes in providing comprehensive advice to individuals and businesses looking to operate in the Mercado Libre de Cambios, ensuring strict compliance with all current regulatory provisions.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <div class="text-white pt-32">
                    <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                        Regulations
                    </div>
                </div>
                <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-between pt-5 pb-32">
                    <div class="text-white xs:pr-0 lg:pr-20">
                        <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                            In Argentina,the foreign exchange marketis regulated by theBanco Central de la República Argentina (BCRA), which establishes guidelines to oversee and control currency transactions. TheBCRA serves as the supervisory and registry authority for currency exchange entities.<br><br>
                            Currency exchange houses, as authorized financial intermediaries, must obtain a license from theBCRA to operate legally. They are subjectto strict capital requirements, periodic reporting, and compliance with antimoney laundering and counter-terrorism financing regulations. Additionally,theBCRA implements limits and restrictions on currency transactions to regulate the flow of foreign exchange and ensure the stability ofthe financial system.<br><br>
                            TheBCRA's Foreign Exchange Regulations are a set of rules that establish guidelines for foreign exchange transactions and financial operations with other countries. These regulations aim to regulate and supervise the flow of foreign exchange, maintain stability in the foreign exchange market, and ensure compliance with financial laws and regulations within the country.<br><br>
                            Under this legalframework, since 2018, CYC Cambios S.A. has been registered as a Currency Exchange House under registration number 20.113 with theBanco Central de la República Argentina. The company conducts currency exchange operations in compliance with the current regulations.
                        </div>
                        <div class="pt-10 flex xxs:justify-center xs:justify-center sm:justify-start md:justify-start lg:justify-start xl:justify-start">

                        </div>
                    </div>
                    <div class="xxs:pt-10 xs:pt-10 sm:pt-0">
                        <a class="block text-primary bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-md w-72 mb-2">
                            Exchange House<br>Registry

                        </a>
                        <a class="block text-primary bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-md w-72 mb-2">
                            Normas de Exterior y<br>Cambios
                        </a>
                        <a class="block text-primary bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-md w-72 mb-2">
                            Financial User<br>web portal
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
