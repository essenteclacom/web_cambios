@extends('layouts.principal')

@section('title', 'Nosotros')

@section('content')
    {{-- slide --}}
    <div>
        <div class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('/img/bg_about.png')}}')">
            <div class="container relative z-30">
                <div class="flex flex-col items-center justify-center">
                    <div class="xxs:pt-6 xs:pt-6 sm:pt-20 md:pt-20 lg:pt-20 xl:pt-20">
                        <h2 class="text-center font-body text-3xl text-white font-bold">
                            Nuestra Historia
                        </h2>
                        <div class="xxs:pt-6 xs:pt-6 sm:pt-10 md:pt-10 lg:pt-10 xl:pt-10">
                            <p class="font-body text-white text-center text-shadow xs:text-xs md:text-lg lg:text-lg xl:text-lg pb-12">
                                Cucchiara y Cía. S.A. tiene una rica historia dentro del mercado de valores argentino, lo<br>que refuerza su amplia experiencia en la industria.
                            </p>
                        </div>
                        <div class="absolute bg-contain bg-center bg-no-repeat mx-auto inset-0 w-auto h-auto" style="background-image: url('{{ asset('/img/map_about.png')}}')"></div>
                    </div>
                    <div class="xxs:h-88 xs:h-112 sm:h-[40rem] md:h-[40rem] lg:h-[40rem] xl:h-[50rem]"></div>
                </div>
            </div>
        </div>
        <div class="container relative xxs:-top-24 xs:-top-36 sm:-top-44 md:-top-44 lg:-top-44 xl:-top-44">
            <div class="xxs:pb-5 xs:pb-5 sm:pb-10 md:pb-10 lg:pb-10 xl:pb-10">
                <h2 class="text-center font-body text-3xl text-white font-bold">
                    Dónde Estamos
                </h2>
            </div>
            <div class="grid grid-cols-3 sm:mx-0 md:mx-10 lg:mx-40 xl:mx-40">
                <div class="flex items-center justify-center group z-50">
                    <div style="background-image: url({{ asset('/img/ObeliscoBA2015.jpg')}})" class="rounded-full group relative xxs:w-24 xs:w-52 sm:w-52 md:w-52 lg:w-52 xl:w-52 xxs:h-24 xs:h-44 sm:h-52 md:h-52 lg:h-52 xl:h-52 bg-cover bg-center bg-no-repeat">
                        <span class="rounded-full absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="hidden group-hover:block z-1 rounded-full text-center xxs:text-xs xs:text-base sm:text-base text-white mx-auto inset-0 xxs:pt-10 xs:pt-20 sm:pt-24 md:pt-24 lg:pt-24 xl:pt-24">
                            Buenos Aires
                        </span>
                    </div>
                </div>
                <div class="flex items-center justify-center group z-50">
                    <div style="background-image: url({{ asset('/img/uruguay.jpg')}})" class="rounded-full group relative xxs:w-24 xs:w-52 sm:w-52 md:w-52 lg:w-52 xl:w-52 xxs:h-24 xs:h-44 sm:h-52 md:h-52 lg:h-52 bg-cover bg-center bg-no-repeat">
                        <span class="rounded-full absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="hidden group-hover:block z-1 rounded-full text-center xxs:text-xs xs:text-base sm:text-base text-white mx-auto inset-0 xxs:pt-10 xs:pt-20 sm:pt-24 md:pt-24 lg:pt-24 xl:pt-24">
                            Montevideo
                        </span>
                    </div>
                </div>
                <div class="flex items-center justify-center group z-50">
                    <div style="background-image: url({{ asset('/img/nuevazelanda.jpg')}})" class="rounded-full group relative xxs:w-24 xs:w-52 sm:w-52 md:w-52 lg:w-52 xl:w-52 xxs:h-24 xs:h-44 sm:h-52 md:h-52 lg:h-52 bg-cover bg-center bg-no-repeat">
                        <span class="rounded-full absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="hidden group-hover:block z-1 rounded-full text-center xxs:text-xs xs:text-base sm:text-base text-white mx-auto inset-0 xxs:pt-10 xs:pt-20 sm:pt-24 md:pt-24 lg:pt-24 xl:pt-24">
                            Auckland
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 pt-10 sm:mx-10 md:mx-10 lg:mx-40 xl:mx-40">
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/about_logo_01.png') }}"class="w-auto h-auto" alt="icon happy clients"/>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/about_logo_02.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/about_logo_03.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
