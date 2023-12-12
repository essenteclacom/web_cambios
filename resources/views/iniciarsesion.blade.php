<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans:ital,wght@0,100,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link crossorigin="anonymous" href="{{ asset('/css/custom.css') }}" media="screen" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CUCCHIARA - Iniciar Sesion</title>
</head>
<body>
    <div class="grid place-items-center h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('/img/background_home_old.png')}}')">
        <form>
            <div class="flex flex-col">
                <div class="flex flex-col">
                    <div class="flex justify-center pb-16" >
                        <a href="/">
                            <img src="{{ asset('/img/Logo_Blanco-04.png') }}" class="xxs:w-56 xs:w-96 sm:w-[30rem] md:w-[34rem] lg:w-[34rem] xl:w-[34rem]" alt="logo image"/>
                        </a>
                    </div>
                    <div class="my-5">
                        <input type="email" name="email" class="xxs:w-56 xs:w-96 sm:w-[35rem] md:w-[40rem] lg:w-[40rem] xl:w-[40rem] rounded border-white py-4 font-body text-grey-custom" placeholder="Email *"/>
                    </div>
                    <div>
                        <input type="text" name="document" class="xxs:w-56 xs:w-96 sm:w-[35rem] md:w-[40rem] lg:w-[40rem] xl:w-[40rem] rounded border-white py-4 font-body text-grey-custom" placeholder="Documento *"/>
                    </div>
                    <div class="mt-5 mb-8 pl-4">
                        <a href="/" class="font-body text-white text-base font-bold">Olvide mi contraseña</a>
                    </div>
                    <div class="my-5 pl-4">
                        <div class="mb-2">
                            <span class="font-body text-white text-base font-bold">Validación de seguridad *</span><br />
                        </div>
                        <div>
                            <input type="checkbox" />
                            <span class="font-body text-white text-base pl-1">No soy un robot</span>
                        </div>
                    </div>
                    <div class="flex flex-row justify-end">
                        <div class="px-2">
                            <a class="font-body ml-1 text-color-cucchiara flex items-center justify-center rounded bg-cyan-20 button-border-color xxs:text-xs xxs:px-1 xs:px-5 sm:px-8 md:px-8 lg:px-8 xxs:py-2 xs:py-2 sm:py-2 md:py-2 lg:py-2 xl:py-2 xs:text-base lg:text-base font-bold hover:bg-white">Iniciar Sesión</a>
                        </div>
                        <div class="px-2">
                            <a href="/seleccionartipocuenta" class="font-body text-color-cucchiara flex items-center justify-center rounded bg-white button-border-color xxs:text-xs xxs:px-1 xs:px-5 sm:px-8 md:px-8 lg:px-8 xxs:py-2 xs:py-2 sm:py-2 md:py-2 lg:py-2 xl:py-2 xs:text-base lg:text-base font-bold hover:bg-cyan-20">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>