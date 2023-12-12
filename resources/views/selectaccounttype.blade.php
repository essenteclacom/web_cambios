@extends('layouts.operation')

@section('title', 'Select Account Type')

@section('content')
<div class="grid place-items-center h-[45rem]">
    <div class="flex flex-col">
        <div class="mb-10">
            <h1 class="font-bolder text-color-cucchiara text-center font-body xxs:text-3xl lg:text-3xl">
                What type of<br/>account you want open?
            </h1>
        </div>
        <div class="grid grid-cols-2 xxs:gap-1 gap-y-10 sm:gap-x-6 md:gap-x-14 lg:gap-x-14 xl:gap-x-20 ">
            <a href="/">
                <div class="rounded-lg sm:px-8 md:px-8 lg:px-32 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center group hover:bg-primary">
                    <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                        <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl group-hover:text-white">
                            Natural<br/>Person
                        </h3>
                    </div>
                    <div>
                    <img src="{{ asset('/img/personas.png') }}" alt="development icon" class="w-40"/>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="group">
                    <div class="rounded-lg sm:px-8 md:px-8 lg:px-32 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center hover:bg-primary">
                        <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                            <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl group-hover:text-white">
                                Corporate<br/>Entities
                            </h3>
                        </div>
                        <div>
                            <img src="{{ asset('/img/contratos.png') }}" alt="content marketing icon" class="w-40"/>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
