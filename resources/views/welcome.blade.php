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



                    </div>

                    {{-- image --}}
                    <div class="w-full relative lg:w-1/2">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1450851100967-1a8368a583c4?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">


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
                    <img class="rounded-md w-full"
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

                        <img class="rounded-md"
                            src="https://www.happyfranchise.co.th/store/resources/img/category/h1n_catess_20241006171516.jpeg"
                            alt="">
                    </div>

                </div>


            </div>
        </div>

        {{-- หมวดสินค้า --}}
        <section class="review">
            <div class="flex flex-col items-center gap-3 text-center mb-10">
                <h2 class="title">หมวดสินค้า</h2>
                <p class="max-w-2xl"></p>
            </div>

            <div class="container">
                <div class="swiper py-12">
                    <div class="swiper-wrapper mb-10">
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 rounded-md p-6">

                                <img src="https://img2.pic.in.th/pic/e2201bf0-05b7-4b05-89a4-3bd92dea5b16.jpeg"
                                    alt="e2201bf0 05b7 4b05 89a4 3bd92dea5b16" border="0" class="rounded-lg">

                                <div class="relative px-4 -mt-24">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">

                                        <h3 class="mb-2 text-slate-700">HW - Happy Warehouse</h3>
                                        <p class="text-slate-600 mb-5">โครงสร้างโกดังสำเร็จรูปแบบถอดประกอบหน้างาน
                                            สำหรับผู้ที่สนใจที่จะสร้างโกดังมีหลายรูปแบบ และหลายขนาดไม่ว่าจะเป็น เล็ก
                                            กลลาง ใหญ่</p>
                                        <a href=""
                                            class="items-center rounded-md bg-emerald-400 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-green-400 focus:outline-none focus:ring-4">อ่านต่อ
                                            -></a>
                                    </div>
                                </div>
                                <div class="mt-4">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 rounded-md p-6">


                                <img src="https://img5.pic.in.th/file/secure-sv1/9dc2b4c3-4c7e-4995-8fbf-dee36e9c1e72.jpeg"
                                    alt="9dc2b4c3 4c7e 4995 8fbf dee36e9c1e72" border="0" class="rounded-lg">

                                <div class="relative px-4 -mt-24">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        {{-- <span
                                                    class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full uppercase font-semibold tracking-wide">HW</span> --}}
                                        <h3 class="mb-2 text-slate-700">HR - Happy Realestate</h3>
                                        <p class="text-slate-600 mb-5">
                                            อสังหาริมทรัพย์โกดังสำเร็จรูปให้เช่าทั่วกรุงเทพมหานคร
                                            ปริมณฑล และจังหวัดใกล้เคียง โกดังเหมาะสำหรับเอาไว้เก็บสินค้าต่างๆ</p>
                                        <a href=""
                                            class="items-center rounded-md bg-emerald-400 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-green-400 focus:outline-none focus:ring-4">อ่านต่อ
                                            -></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 rounded-md p-6">
                                <img src="https://img5.pic.in.th/file/secure-sv1/aa6fc013-1b93-4811-9ec9-20e8ba608e7c.jpeg"
                                    alt="" class="rounded-lg invisible sm:visible">

                                <div class="relative px-4 -mt-24">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        {{-- <span
                                                    class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full uppercase font-semibold tracking-wide">HW</span> --}}
                                        <h3 class="mb-2 text-slate-700">HP - Happy Precast</h3>
                                        <p class="text-slate-600 mb-5">งานคอนกรีต สำหรับงานก่อสร้าง งานโครงสร้าง ฐานราก
                                            เสาตอม่อ คานคอดิน งานพื้น งานรั้ว</p>
                                        <a href=""
                                            class="items-center rounded-md bg-emerald-400 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-green-400 focus:outline-none focus:ring-4">อ่านต่อ
                                            -></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"> </div>
                </div>
            </div>
        </section>

        {{-- About --}}
        <section id="about" class="relative overflow-hidden">

            <div class="flex flex-col items-center gap-3 text-center mb-10 md:mb-20">
                <h2 class="title">จุดเด่นของระบบสำเร็จรูป PEB</h2>
                <h2 class="title">มาตราฐาน Mesuk</h2>

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
                            <h3><span class="text-green-500">มีมาตราฐาน</span>
                                <br>
                            </h3>
                            <p class="text-slate-600 ">ระบบสำเร็จรูป PEB (Pre Engineering Build)
                                เป็นโครงสร้างเหล็กสำเร็จรูป เป็นระบบการก่อสร้างอาคารแบบ น็อคดาวน์โดยจะผลิตชิ้นส่วนจาก
                                โรงงานโดยที่โครงสร้างทุกชิ้นส่วน จะถูกออกแบบอย่างถูกต้องตามหลัก
                                วิศวกรรมชิ้นส่วนโครงสร้าง จะถูกนำมาประกอบที่หน้างาน</p>
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

            <div class="flex flex-col items-center gap-3 text-center mb-10">
                <h2 class="title">สินค้าแนะนำ</h2>
            </div>
            {{--
            <div
                class="container w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-25">

                <div
                    class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                    <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                        <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="object-cover w-full">
                    </a>

                    <div class="mt-4 px-5 pb-5">
                        <a href="">
                            <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                            <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet Process
                            </h4>
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
                            class="flex items-center justify-center rounded-md bg-emerald-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                    </div>
                </div>
            </div> --}}

            <div class="container">
                <div class="swiper py-12">
                    <div class="swiper-wrapper mb-10">
                        <div class="swiper-slide">
                            <div
                                class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                                <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="object-cover w-full">
                                </a>

                                <div class="mt-4 px-5 pb-5">
                                    <a href="">
                                        <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                                        <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet
                                            Process
                                        </h4>
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
                                        class="flex items-center justify-center rounded-md bg-emerald-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                                <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="object-cover w-full">
                                </a>

                                <div class="mt-4 px-5 pb-5">
                                    <a href="">
                                        <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                                        <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet
                                            Process
                                        </h4>
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
                                        class="flex items-center justify-center rounded-md bg-emerald-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                                <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="object-cover w-full">
                                </a>

                                <div class="mt-4 px-5 pb-5">
                                    <a href="">
                                        <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                                        <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet
                                            Process
                                        </h4>
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
                                        class="flex items-center justify-center rounded-md bg-emerald-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                                <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="object-cover w-full">
                                </a>

                                <div class="mt-4 px-5 pb-5">
                                    <a href="">
                                        <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                                        <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet
                                            Process
                                        </h4>
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
                                        class="flex items-center justify-center rounded-md bg-emerald-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                                <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="object-cover w-full">
                                </a>

                                <div class="mt-4 px-5 pb-5">
                                    <a href="">
                                        <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                                        <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet
                                            Process
                                        </h4>
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
                                        class="flex items-center justify-center rounded-md bg-emerald-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="popular__card relative flex w-full  flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md mt-5 hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">

                                <a href="" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="object-cover w-full">
                                </a>

                                <div class="mt-4 px-5 pb-5">
                                    <a href="">
                                        <p class="text-sm text-slate-500">HTเครื่องผสมปูน,รถเข็นปูน</p>
                                        <h4 class="text-lg tracking-tight text-slate-900">เครื่องพ่นปูนฉาบ SP10W Wet
                                            Process
                                        </h4>
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
                                        class="flex items-center justify-center rounded-md bg-emerald-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-blue-300">ซื้อสินค้า</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
