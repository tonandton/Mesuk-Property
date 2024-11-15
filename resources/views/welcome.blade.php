<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- @vite('resources/css/app.css') --}}
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- CDN ICON --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" />

    {{-- Swiper's CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
</head>

<body>

    {{-- Header --}}
    <header id="navbar" class="fixed w-full top-0 left-0 z-50 backdrop-blur-sm ">
        <nav class="container flex items-center justify-between h-16 sm:h-20">
            <div class="sm:text-2xl">HAPPY | MESUK</div>

            <div id="nav-menu"
                class="absolute top-0 left-[-100%] min-h-[80vh] w-full flex items-center bg-slate-100/90 justify-center duration-300 overflow-hidden lg:static lg:min-h-fit lg:bg-transparent lg:w-auto">
                <ul class="flex flex-col items-center gap-8 lg:flex-row ">
                    <li>
                        <a href="/" class="nav-link">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="/" class="nav-link">เกี่ยวกับ</a>
                    </li>
                    <li>
                        <a href="/" class="nav-link">รายการสินค้า</a>
                    </li>
                    <li>
                        <a href="/" class="nav-link">เข้าสู่ระบบ</a>
                    </li>
                </ul>

                {{-- <div class="absolute bottom-0 -right-10 opacity-90 lg:hidden">
                    <img src="https://images.unsplash.com/photo-1555636222-cae831e670b3?q=80&w=1177&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-32">
                </div>
                <div class="absolute -top-5 left-0 rotate-50 opacity-90 lg:hidden">
                    <img src="https://plus.unsplash.com/premium_photo-1677782975062-56111703e90e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-32">
                </div> --}}
            </div>

            <div class="text-xl sm:text-3xl cursor-pointer z-50 lg:hidden">
                <i class="ri-menu-line" id="hamburger"></i>
            </div>
        </nav>
    </header>


    {{-- HOME --}}
    <main>
        <section id="home" class="relative">
            <div class="container">
                {{-- 1 --}}
                <div
                    class="w-64 h-64 bg-green-700 rounded-full blur-3xl -z-10 opacity-40 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                </div>
                {{-- 2 --}}
                <div class="w-64 h-64 bg-green-700 rounded-full blur-3xl -z-10 opacity-40 absolute right-0 bottom-0">
                </div>

                <div class="flex flex-col items-center gap-5 lg:flex-row">
                    {{-- content --}}
                    <div class="w-full space-y-5 lg:w-1/2">
                        <h1>
                            <span class="text-green-500">บริษัท มีสุข</span> คอร์ปอเรชั่น (2006) จำกัด
                            </span>
                            {{-- <span class="text-green-500">impact</span> on <br> your evironment
                            </span> --}}
                        </h1>
                        <p class="text-slate-900 text-xl">
                            รับสร้างโรงงาน โกดังระบบสำเร็จรูปอันดับหนึ่งของเมืองไทย
                            ให้บริการครบวงจรพร้อมการควบคุมมาตราฐานการก่อสร้างด้วยวิศวกรมืออาชีพ
                        </p>

                        <div class="flex flex-col gap-2 sm:flex-row">
                            <button class="btn text-white hover:bg-green-600">
                                <span>อ่านต่อ</span>
                                <i class="ri-arrow-right-circle-line"></i>
                            </button>
                            <button class="btn btn_outline">
                                <span>Company Profile</span>
                                <i class="ri-file-download-line"></i>
                            </button>
                        </div>

                        {{-- <p class="text-xs text-slate-800">You will get 30-days free trial.</p> --}}


                    </div>

                    {{-- image --}}
                    <div class="w-full relative lg:w-1/2">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1450851100967-1a8368a583c4?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">

                        {{-- warehosue --}}
                        {{-- <div class="absolute -top-10 right-0 opacity-30 xl:top-5 animate-movingY">
                            <i class="ri-home-office-line text-6xl text-green-500"></i>
                        </div> --}}
                    </div>
                </div>
            </div>

        </section>

        {{-- Services --}}
        <div class="bg-white text-green-900 py-20 mt-16">
            <div class="container w-full grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 -mt-40 ">
                {{-- card 1 --}}
                <div
                    class="border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                    <img class="rounded-md"
                        src="https://www.happyfranchise.co.th/store/resources/img/category/1hq_catess_20241005125714.jpeg"
                        alt="">
                </div>
                {{-- card 2 --}}
                <div
                    class=" border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                    <div clsss="flex items-center gap-5">
                        <i class="ri-truck-line text-3xl md:text-4xl xl:text-5xl"></i>
                        <p>Fast <br> Delivery</p>
                    </div>
                    <p class="md:text-lg font-bold">Lorem i 111 </p>
                </div>
                {{-- card 3 --}}
                <div
                    class="border  cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                    <div class="flex items-center gap-5">
                        <i class="ri-truck-line text-3xl md:text-4xl xl:text-5xl"></i>
                        <p>Fast <br> Delivery</p>
                    </div>
                    <p class="md:text-lg font-bold">Lorem i 111 </p>
                </div>
                {{-- card 4 --}}
                <div
                    class="border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                    <div class="flex items-center gap-5">
                        <i class="ri-truck-line text-3xl md:text-4xl xl:text-5xl"></i>
                        <p>Fast <br> Delivery</p>
                    </div>
                    <p class="md:text-lg font-bold">Lorem i 111 </p>
                </div>
                {{-- card 5 --}}
                <div
                    class="border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                    <div class="flex items-center gap-5">
                        {{-- <i class="ri-truck-line text-3xl md:text-4xl xl:text-5xl"></i>
                    <p>Fast <br> Delivery</p> --}}
                        <img class="rounded-md"
                            src="https://www.happyfranchise.co.th/store/resources/img/category/h1n_catess_20241006171516.jpeg"
                            alt="">
                    </div>
                    {{-- <p class="md:text-lg font-bold">Lorem i 111 </p> --}}
                </div>
                {{-- card 6 --}}
                {{-- <div
                class="border border-green-900 p-5  cursor-pointer rounded-md hover:shadow-2xl hover:-translate-y-1 duration-300 space-y-5 ">
                <div class="flex items-center gap-5">
                    <i class="ri-truck-line text-3xl md:text-4xl xl:text-5xl"></i>
                    <p>Fast <br> Delivery</p>
                </div>
                <p class="md:text-lg font-bold">Lorem i 111 </p>
            </div> --}}

            </div>
        </div>

        {{-- About --}}
        <section id="about" class="relative overflow-hidden">
            {{-- <div class="absolute -top-8 -right-12 opacity-50">
            <img src="https://images.unsplash.com/flagged/photo-1558954157-aa76c0d246c6?q=80&w=1031&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" class="w-40 md:w-52 xl:w-64">
        </div> --}}
            <div class="flex flex-col items-center gap-3 text-center mb-10 md:mb-20">
                <h2 class="title">จุดเด่นของระบบสำเร็จรูป PEB</h2>
                <h2 class="title">มาตราฐาน Mesuk</h2>
                {{-- <p class="max-w-2xl">มาตราฐาน Mesuk</p> --}}
            </div>

            <div class="container space-y-10 xl:space-y-0">
                {{-- item1 --}}
                <div class="flex flex-col items-center lg:flex-row gap-5">
                    {{-- image --}}
                    <div class="w-full lg:w-1/2">
                        <img src="https://images.unsplash.com/photo-1455849318743-b2233052fcff?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full sm:w-2/3 lg:w-full xl:w-2/3 mx-auto rounded-md">
                    </div>
                    {{-- content --}}
                    <div class="w-full lg:w-1/2">
                        <div class="space-y-5">
                            <h3>Make Make <span class="text-green-500">Save Time</span>
                                <br> PEB
                            </h3>
                            <p class="text-slate-600 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni,
                                repellendus ea optio
                                necessitatibus sapiente perferendis molestias unde dolor molestiae similique obcaecati
                                sit,
                                autem et ad commodi labore maiores consequatur aliquam!</p>
                        </div>
                    </div>
                </div>

                {{-- item2 --}}
                <div class="flex flex-col items-center lg:flex-row-reverse gap-5">
                    {{-- image --}}
                    <div class="w-full lg:w-1/2">
                        <img src="https://images.unsplash.com/photo-1455849318743-b2233052fcff?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full sm:w-2/3 lg:w-full xl:w-2/3 mx-auto rounded-md">
                    </div>
                    {{-- content --}}
                    <div class="w-full lg:w-1/2">
                        <div class="space-y-5">
                            <h3>Make Make <span class="text-green-500">Save Time</span>
                                <br> PEB
                            </h3>
                            <p class="text-slate-600 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni,
                                repellendus ea optio
                                necessitatibus sapiente perferendis molestias unde dolor molestiae similique obcaecati
                                sit,
                                autem et ad commodi labore maiores consequatur aliquam!</p>
                        </div>
                    </div>
                </div>
                {{-- item3 --}}
                <div class="flex flex-col items-center lg:flex-row gap-5">
                    {{-- image --}}
                    <div class="w-full lg:w-1/2">
                        <img src="https://images.unsplash.com/photo-1455849318743-b2233052fcff?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full sm:w-2/3 lg:w-full xl:w-2/3 mx-auto rounded-md">
                    </div>
                    {{-- content --}}
                    <div class="w-full lg:w-1/2">
                        <div class="space-y-5">
                            <h3>Make Make <span class="text-green-500">Save Time</span>
                                <br> PEB
                            </h3>
                            <p class="text-slate-600 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni,
                                repellendus ea optio
                                necessitatibus sapiente perferendis molestias unde dolor molestiae similique obcaecati
                                sit,
                                autem et ad commodi labore maiores consequatur aliquam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Popular --}}
        <section id="popular">
            {{-- <div class="flex flex-col items-center gap-3 text-center mb-40 ">
            <h2 class="title">You Choice Warehouse</h2>
            <p class="max-w-2xl">Follow instruction for more</p>
        </div> --}}
            <div class="flex flex-col items-center gap-3 text-center mb-10">
                <h2 class="title">สินค้าแนะนำ</h2>
                {{-- <h2 class="title">มาตราฐาน Mesuk</h2> --}}
                {{-- <p class="max-w-2xl">มาตราฐาน Mesuk</p> --}}
            </div>

            <div
                class="container w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-25">
                {{-- card 1 --}}
                {{-- <div class="popular__card bg-emerald-400 p-10 pt-24 rounded-md relative">

                    <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="w-56 absolute -top-5 left-1/2 transform -translate-x-1/2 -translate-y-1/2 duration-500 rounded-md">

                    <h3>เครื่องตัดเหล็ก 32 มม. (GQ40A) 3 Phase</h3>
                    <p>HTเครื่องตัดเหล็ก</p>

                    <div class="flex items center justify-between">
                        <p class="text-xl">5 / บาท</p>

                        <button class="bg-white px-2 py-1 rounded-sm text-xl">
                            <i class="ri-shopping-cart-fill"></i>
                        </button>
                    </div>
                </div> --}}
                {{-- card 2 --}}
                <div
                    class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                    <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                        <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="object-cover w-full">
                    </a>

                    <div class="mt-4 px-5 pb-5">
                        <a href="">
                            <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                            <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet Process</h4>
                        </a>

                        <div class="mt-2 mb-2 flex items-center">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">฿10 / ชิ้น</span>
                            </p>
                        </div>
                        <div class="mt-2 mb-5 flex items-center">
                            <p>
                                <span class="text-sm text-slate-900 line-though">T70-001-039-D5</span>
                        </div>
                        <a href=""
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                    </div>
                </div>
                <div
                    class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                    <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                        <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="object-cover w-full w-full">
                    </a>

                    <div class="mt-4 px-5 pb-5">
                        <a href="">
                            <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                            <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet Process</h4>
                        </a>

                        <div class="mt-2 mb-2 flex items-center">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">฿10 / ชิ้น</span>
                            </p>
                        </div>
                        <div class="mt-2 mb-5 flex items-center">
                            <p>
                                <span class="text-sm text-slate-900 line-though">T70-001-039-D5</span>
                        </div>
                        <a href=""
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                    </div>
                </div>
                <div
                    class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                    <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                        <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="object-cover w-full">
                    </a>

                    <div class="mt-4 px-5 pb-5">
                        <a href="">
                            <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                            <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet Process</h4>
                        </a>

                        <div class="mt-2 mb-2 flex items-center">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">฿10 / ชิ้น</span>
                            </p>
                        </div>
                        <div class="mt-2 mb-5 flex items-center">
                            <p>
                                <span class="text-sm text-slate-900 line-though">T70-001-039-D5</span>
                        </div>
                        <a href=""
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                    </div>
                </div>
                <div
                    class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                    <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                        <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="object-cover w-full">
                    </a>

                    <div class="mt-4 px-5 pb-5">
                        <a href="">
                            <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                            <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet Process</h4>
                        </a>

                        <div class="mt-2 mb-2 flex items-center">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">฿10 / ชิ้น</span>
                            </p>
                        </div>
                        <div class="mt-2 mb-5 flex items-center">
                            <p>
                                <span class="text-sm text-slate-900 line-though">T70-001-039-D5</span>
                        </div>
                        <a href=""
                            class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                    </div>
                </div>

                {{-- card 3 --}}
                {{-- <div class="popular__card bg-emerald-400 p-10 pt-24 rounded-md relative">

                    <img src="https://images.unsplash.com/photo-1592928302636-c83cf1e1c887?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="w-56 absolute -top-5 left-1/2 transform -translate-x-1/2 -translate-y-1/2 duration-500">

                    <p>Happy Warehouse</p>
                    <h3>Mesuk Location</h3>

                    <div class="text-green-500 text-xs py-3">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <i class="ri-star-line text-gray-400"></i>
                        <i class="ri-star-line text-gray-400"></i>
                    </div>

                    <div class="flex items center justify-between">
                        <p class="text-xl">5 / บาท</p>

                        <button class="bg-white px-2 py-1 rounded-sm text-xl">
                            <i class="ri-shopping-cart-fill"></i>
                        </button>
                    </div>
                </div> --}}

                {{-- card 4 --}}
                {{-- <div class="popular__card bg-emerald-400 p-10 pt-24 rounded-md relative">

                    <img src="https://images.unsplash.com/photo-1592928302636-c83cf1e1c887?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="w-56 absolute -top-5 left-1/2 transform -translate-x-1/2 -translate-y-1/2 duration-500">

                    <p>Happy Warehouse</p>
                    <h3>Mesuk Location</h3>

                    <div class="text-green-500 text-xs py-3">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <i class="ri-star-line text-gray-400"></i>
                        <i class="ri-star-line text-gray-400"></i>
                    </div>

                    <div class="flex items center justify-between">
                        <p class="text-xl">5 / บาท</p>

                        <button class="bg-white px-2 py-1 rounded-sm text-xl">
                            <i class="ri-shopping-cart-fill"></i>
                        </button>
                    </div>
                </div> --}}
            </div>
        </section>

        {{-- Review --}}
        <section class="review">
            <div class="flex flex-col items-center gap-3 text-center mb-10 ">
                <h2 class="title">Customer Review</h2>
                <p class="max-w-2xl"></p>
            </div>

            <div class="container">
                <div class="swiper py-12">
                    <ul class="swiper-wrapper mb-10">
                        <li class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-green-300 rounded-md p-6">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi numquam,
                                    necessitatibus sequi eius eveniet dolores cumque commodi facere doloribus debitis!
                                </p>
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="w-12 h-12 rounded-full">
                                    <div class="ml-2">
                                        <p class="uppercase">John Doe</p>
                                        <p>Designer</p>
                                    </div>
                                    <i class="ri-double-quotes-r text-4xl ml-auto"></i>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-green-300 rounded-md p-6">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi numquam,
                                    necessitatibus sequi eius eveniet dolores cumque commodi facere doloribus debitis!
                                </p>
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="w-12 h-12 rounded-full">
                                    <div class="ml-2">
                                        <p class="uppercase">Jane Doe</p>
                                        <p>Designer</p>
                                    </div>
                                    <i class="ri-double-quotes-r text-4xl ml-auto"></i>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-green-300 rounded-md p-6">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi numquam,
                                    necessitatibus sequi eius eveniet dolores cumque commodi facere doloribus debitis!
                                </p>
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="w-12 h-12 rounded-full">
                                    <div class="ml-2">
                                        <p class="uppercase">Kate Doe</p>
                                        <p>Designer</p>
                                    </div>
                                    <i class="ri-double-quotes-r text-4xl ml-auto"></i>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-green-300 rounded-md p-6">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi numquam,
                                    necessitatibus sequi eius eveniet dolores cumque commodi facere doloribus debitis!
                                </p>
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?q=80&w=744&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="w-12 h-12 rounded-full">
                                    <div class="ml-2">
                                        <p class="uppercase">Katy Doe</p>
                                        <p>Designer</p>
                                    </div>
                                    <i class="ri-double-quotes-r text-4xl ml-auto"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-pagination"> </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Icon Social --}}
    <div class="flex items-center gap-5 text-lg lg:pt-10">
        <i class="ri-facebook-fill text-blue-500 hover:text-blue-600/80 duration-300 cursor-pointer"></i>
        <i class="ri-line-fill text-green-500 hover:text-green-600/80 duration-300 cursor-pointer"></i>
        <i class="ri-youtube-line text-red-600 hover:text-red-500/80 duration-300 cursor-pointer"></i>
    </div>



    {{-- JS --}}
    @vite('resources/js/main.js')
    {{-- <script src="main.js"></script> --}}

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
