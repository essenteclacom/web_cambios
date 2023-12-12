<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <title>CUCCHIARA - @yield('title')</title>
        <meta property="og:title" content="Homepage | Cucchiara"/>
        <meta property="og:locale" content="en_US"/>
        <link rel="canonical" href="//"/>
        <meta property="og:url" content="//"/>
        <meta name="description" content="Agente de Negociación Liquidación y Compensación."/>
        <link rel="icon" type="image/png" href="{{ asset('/img/favicon-96x96.png') }}"/>
        <meta name="theme-color" content="#5540af"/>
        <meta property="og:site_name" content="Cucchiara"/>
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
                            <a href="/home">
                                <img src="{{ asset('/img/Logo_Color-01.png') }}" class=" xxs:w-28 xs:w-48 sm:w-60 md:w-60 lg:w-64 xl:w-60" alt="logo image"/>
                            </a>
                        </div>
                        <div class="flex justify-right flex-end flex-row items-center">
                            <div class="hidden lg:block">
                                <ul class="nav-lang flex items-center">
                                    <li class="text-color-cucchiara group pl-6">
                                        <a class="flex items-center justify-center rounded bg-white p-custom-esp-buttom text-base font-bold uppercase hover:bg-cyan-20">
                                            ENG
                                            <i class="bx bx-chevron-down relative -right-2 text-3xl"></i>
                                        </a>
                                        <ul>
                                            <li class="text-color-cucchiara text-base font-bold uppercase w-20">
                                                <a class="hover:bg-cyan-20 flex items-center justify-center rounded pr-41-custom py-2 pl-4" href="/esp">
                                                    ESP
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="block lg:hidden">
                                <button @click="mobileMenu = true">
                                    <i class="bx bx-menu text-4xl text-color-cucchiara"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container flex items-center justify-between border-menu-line-top mt-6 hidden lg:flex">
                        <div>
                        </div>
                        <div class="hidden lg:block">
                            <ul class="flex items-center pt-5">
                                <li class="group pl-20">
                                    <a href="/aboutus">
                                        <span @if(request()->is('aboutus')) class="selected-menu-underline hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>About Us</span>
                                    </a>
                                </li>
                                <li class="group pl-20">
                                    <a href="/services">
                                        <span @if(request()->is('services')) class="selected-menu-underline hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>Services</span>
                                    </a>
                                </li>
                                <li class="group pl-20">
                                    <a href="/home">
                                        <span @if(request()->is('home')) class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>Mutual Funds</span>
                                    </a>
                                </li>
                                <li class="group pl-20">
                                    <a href="/research">
                                        <span @if(request()->is('research')) class="selected-menu-underline hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>Research</span>
                                    </a>
                                </li>
                                <li class="group pl-20">
                                    <a href="/home">
                                        <span @if(request()->is('home')) class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>Trade online</span>
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
                                <a href="/aboutus"><span class="cursor-pointer font-body font-semibold text-white">About Us</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/services"><span class="cursor-pointer font-body font-semibold text-white">Services</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/home"><span class="cursor-pointer font-body font-semibold text-white">Mutual Funds</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/research"><span class="cursor-pointer font-body font-semibold text-white">Research</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/home"><span class="cursor-pointer font-body font-semibold text-white">Trade online</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
