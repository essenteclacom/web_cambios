<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <title>CYC CAMBIOS - @yield('title')</title>
        <meta property="og:title" content="Homepage | CYC Cambios"/>
        <meta property="og:locale" content="en_US"/>
        <link rel="canonical" href="//"/>
        <meta property="og:url" content="//"/>
        <meta name="description" content="Agente de Negociación Liquidación y Compensación."/>
        <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}"/>
        <meta name="theme-color" content="#5540af"/>
        <meta property="og:site_name" content="CYC Cambios"/>
        <meta property="og:image" content="{{ asset('/img/Fondocompletolinea.jpg') }}"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@tailwindmade"/>
        <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect"/>
        <!-- <link as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="preload"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet"/> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans:ital,wght@0,100,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <link crossorigin="anonymous" href="{{ asset('/css/custom.css') }}" media="screen" rel="stylesheet"/>
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://kit.fontawesome.com/68e2eb1b2d.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    </head>
    <body :class="{ 'overflow-hidden max-h-screen': mobileMenu }" class="relative" x-data="{ mobileMenu: false }">
        <div id="main" class="relative">
            <div x-data="{triggerNavItem(id) {$scroll(id)}, triggerMobileNavItem(id) {mobileMenu = false; this.triggerNavItem(id)}}">
                <div class="w-full z-50 top-0 py-3 sm:py-5 relative bg-white justify-center">
                    <div class="container flex items-center justify-between">
                        <div>
                            <a href="/inicio">
                                <img src="{{ asset('/img/Logo_Color-01.png') }}" class=" xxs:w-28 xs:w-48 sm:w-60 md:w-60 lg:w-64 xl:w-60" alt="logo image"/>
                            </a>
                        </div>
                        <div class="flex justify-right flex-end flex-row items-center">
                            <div class="hidden lg:block">
                                <ul class="nav-lang flex items-center">
                                    <li class="text-primary group pl-6">
                                        <a class="flex items-center justify-center rounded bg-white p-custom-esp-buttom text-base font-bold uppercase hover:bg-cyan-20">
                                            ESP
                                            <i class="bx bx-chevron-down relative -right-2 text-3xl"></i>
                                        </a>
                                        <ul>
                                            <li class="text-primary text-base font-bold uppercase w-20">
                                                <a class="hover:bg-cyan-20 flex items-center justify-center rounded pr-41-custom py-1 pl-4" href="/eng">
                                                    ENG
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="block lg:hidden">
                                <button @click="mobileMenu = true">
                                    <i class="bx bx-menu text-4xl text-primary"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container flex items-center justify-between border-menu-line-top mt-8 hidden lg:flex">
                        <div>
                        </div>
                        <div class="hidden lg:block">
                            <ul class="flex items-center pt-5">
                                <li class="group pl-28">

                                </li>
                                <li class="group pl-28">

                                </li>
                                <li class="group pl-28">

                                </li>
                                <li class="group pl-28">

                                </li>
                                <li class="group pl-28">
                                    <a href="/inicio">
                                        <span @if(request()->is('inicio')) class=" hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary" @endif>Operaciones online</span>
                                        <!--<span class="block h-0.5 w-full bg-transparent group-hover:bg-blue"></span>-->
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden">
                            <button @click="mobileMenu = true">
                                <i class="bx bx-menu text-4xl text-black"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden" :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
                    <div class="absolute right-0 min-h-screen w-1/2 bg-quarter py-4 px-8 shadow md:w-1/2">
                        <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
                            <img src="{{ asset('/img/icon-close.svg') }}"class="h-10 w-auto" alt="" />
                        </button>
                        <ul class="mt-8 flex flex-col">
                            <li class="py-4">
                                <a href="/nosotros"><span class="cursor-pointer font-body font-semibold text-white">Nosotros</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/servicios"><span class="cursor-pointer font-body font-semibold text-white">Servicios</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/inicio"><span class="cursor-pointer font-body font-semibold text-white">Fondos</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/investigacion"><span class="cursor-pointer font-body font-semibold text-white">Research</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/inicio"><span class="cursor-pointer font-body font-semibold text-white">Opere online</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('content')
                {{-- contact --}}
                <div class="bg-contact">
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
                    <div class="container bg-contact sm:pl-32 sm:pr-32 xxs:pl-8 xxs:pr-8" id="contact">
                        <div class="relative xs:top-minus-1-2 top-minus-11">
                            <h2 class="text-primary text-left font-bolder font-body xxs:text-3xl xs:text-3xl lg:text-5xl text-primary">
                                Contacto
                            </h2>
                        </div>
                        <form class="mx-auto w-full pt-10" action="/contact" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row items-start justify-center">
                                <div class="flex flex-col md:flex-col xxs:w-full mr-4">
                                    <input class="w-full rounded border-white py-5 font-body text-grey-custom" placeholder="Nombre y Apellido*" type="text" name="name" id="name"/>
                                    <input class="w-full rounded border-white py-5 font-body text-grey-custom mt-8" placeholder="Email*" type="text" name="email" id="email"/>
                                    <input class="w-full rounded border-white py-5 font-body text-grey-custom mt-8" placeholder="Teléfono*" type="text" name="phone" id="phone"/>
                                </div>
                                <div class="xs:ml-0 sm:ml-4 xxs:mt-8 xs:mt-8 sm:mt-0 sm:w-full md:w-full">
                                    <textarea class="w-full rounded border-white px-4 py-3 font-body text-grey-custom" placeholder="Mensaje" type="text" name="message" id="message" cols="160" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="flex items-end justify-end pb-20">
                                <button class="mt-6 flex items-center justify-center rounded py-3 font-body text-lg font-bold text-grey-custom underline underline-offset-4">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- end contact --}}
                {{-- map --}}
                <a href="https://goo.gl/maps/aD9gLy3DTLgALnwt5" target="blank">
                    <div class="bg-cover bg-center bg-no-repeat xxs:h-40 xs:h-64 sm:h-64 md:h-72 lg:h-96 xl:w-full border-primary border-y-4" style="background-image: url({{ asset('/img/mapa_footer.png')}})"></div>
                </a>
                {{-- end map --}}
                {{-- footer --}}
                <div class="bg-footer">
                    <div class="container py-10">
                        <div class="flex flex-row">
                            <div class="flex justify-between xxs:items-start xs:items-center sm:items-center md:items-center lg:items-start xxs:flex-col xs:flex-col sm:flex-col md:flex-col lg:flex-row xl:flex-row xxs:w-3/5 xs:w-3/5 sm:w-3/5 md:w-3/5 lg:w-3/4 lg:pr-12 xl:pr-12">
                                <div class="pt-1 xxs:pb-8 xs:pb-8">
                                    <img src="{{ asset('/img/Logo_Color-01.png') }}" class="w-48" alt="logo image"/>
                                </div>
                                <div class="mt-2 border-t-footer xxs:pb-8 xs:pb-8">
                                    <a href="/normativas">
                                        <div class="pt-1 font-bold">Normativas</div>
                                    </a>
                                </div>
                                <div class="pt-1 mt-2 border-t-footer xxs:pb-8 xs:pb-8 xs:ml-4 sm:ml-8 md:ml-8 lg:ml-0">
                                    info@cyccambios.com.ar<br/>Sarmiento 470, C1041 CABA<br/>Tel: +54 11 4394-7423
                                </div>
                            </div>
                            <div class="flex xxs:items-end xs:items-center sm:items-center md:items-center lg:items-start xxs:justify-end xs:justify-end sm:justify-end md:justify-end lg:justify-between xxs:flex-col-reverse xs:flex-col-reverse xs:flex-col-reverse sm:flex-col-reverse md:flex-col-reverse lg:flex-row xl:flex-row xxs:w-2/5 xs:w-2/5 sm:w-2/5 md:w-2/5 lg:w-1/4 lg:pl-4 xl:pl-12">
                                <div class="flex flex-row pt-1 border-t-footer xxs:mt-10 xs:mt-10 sm:mt-10 md:mt-10 lg:mt-2 xs:pb-8"></div>
                                <div class="xs:pb-8">
                                    <img src="{{ asset('/img/logos_Data Fiscal.png') }}" class="w-20" alt="footer_data_fiscal"/>
                                </div>
                            </div>
                        </div>
                        <div class="border-menu-line-top-moregrey mt-8">

                        </div>
                        <div class="text-center py-6">
                            <div>
                                © 2023 Cucchiara Todos los derechos reservados. Diseño y desarollo porFolklore
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end footer --}}
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
