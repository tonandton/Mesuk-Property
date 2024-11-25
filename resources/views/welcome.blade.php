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
                        <a href="#home" class="nav-link active">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="#hightlight" class="nav-link">หมวดแนะนำ</a>
                    </li>
                    <li>
                        <a href="#popular" class="nav-link">รายการสินค้า</a>
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
                        <p class="text-slate-900 text-3xl">
                            รับสร้างโรงงาน โกดังระบบสำเร็จรูปอันดับหนึ่งของเมืองไทย <br />
                            ให้บริการครบวงจรพร้อมการควบคุมมาตราฐานการก่อสร้าง<br />ด้วยวิศวกรมืออาชีพ
                        </p>

                        <div class="flex flex-col gap-2 sm:flex-row">
                            <button class="btn text-white hover:bg-green-600">
                                <span><a href="#hightlight">อ่านต่อ</a></span>
                                <i class="ri-arrow-right-circle-line"></i>
                            </button>
                            {{-- <button class="btn btn_outline">
                                <span>Company Profile</span>
                                <i class="ri-file-download-line"></i>
                            </button> --}}
                        </div>



                    </div>

                    {{-- image & video --}}
                    <div class="w-full relative lg:w-1/2">
                        {{-- <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1450851100967-1a8368a583c4?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt=""> --}}
                        <iframe width="100%" height="440" class="rounded-xl"
                            src="https://www.youtube.com/embed/gaBz9Lq95XA?si=SuKoEZ7Jq2fZYoxq"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        {{-- ประเภทสินค้า --}}
        <section class="-mt-20 -mb-35">
            <div class="flex flex-col items-center gap-3 text-center mb-40">
                <h2 class="title">ประเภทสินค้า</h2>
            </div>

            <div class="py-20 mt-16 -mb-20">
                <div
                    class="container w-full grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 -mt-40 ">
                    {{-- card 1 --}}
                    <div
                        class="border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                        {{-- <img class="rounded-md w-full"
                        src="https://www.happyfranchise.co.th/store/resources/img/category/1hq_catess_20241005125714.jpeg"
                        alt=""> --}}
                        <img src="https://img2.pic.in.th/pic/13cbc2b799b64ef7b.png" alt="1" border="0"
                            class="rounded-md w-full">
                    </div>
                    {{-- card 2 --}}
                    <div
                        class=" border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                        {{-- <img class="rounded-md w-full"
                        src="https://img2.pic.in.th/pic/2f9f4bd0-2e1b-48d4-82ef-517fd18077cb.jpeg"
                        alt="%DISPLAY_TITLE%"> --}}
                        <img src="https://img2.pic.in.th/pic/295d5d11cd448a2bd5c.png" alt="295" border="0"
                            class="rounded-md w-full">
                    </div>
                    {{-- card 3 --}}
                    <div
                        class="border  cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                        {{-- <img class="rounded-md w-full"
                        src="https://img2.pic.in.th/pic/0134891e-2048-4de7-a32b-e3e1f853bc14.jpeg"
                        alt="%DISPLAY_TITLE%"> --}}
                        <img src="https://img5.pic.in.th/file/secure-sv1/296bbf89a8d9c6a13c8.png" alt="296"
                            border="0" class="rounded-md w-full">
                    </div>
                    {{-- card 4 --}}
                    <div
                        class="border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                        {{-- <img class="rounded-md w-full"
                        src="https://img5.pic.in.th/file/secure-sv1/aa6fc013-1b93-4811-9ec9-20e8ba608e7c.jpeg"
                        alt="%DISPLAY_TITLE%" border="0"> --}}
                        <img src="https://img5.pic.in.th/file/secure-sv1/2975630b7395972d319.png" alt="297"
                            border="0" class="rounded-md w--full">
                    </div>
                    {{-- card 5 --}}
                    <div
                        class="border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                        <div class="flex items-center gap-5">

                            {{-- <img class="rounded-md"
                            src="https://www.happyfranchise.co.th/store/resources/img/category/h1n_catess_20241006171516.jpeg"
                            alt=""> --}}
                            <img src="https://img5.pic.in.th/file/secure-sv1/298325aa9b10a4e3f18.png" alt="298"
                                border="0" class="rounded-md w-full">
                        </div>

                    </div>
                    {{-- card 6 --}}
                    <div
                        class="border cursor-pointer rounded-sm hover:shadow-2xl hover:-translate-y-3 duration-300 space-y-5">
                        <div class="flex items-center gap-5">

                            {{-- <img class="rounded-md"
                            src="https://www.happyfranchise.co.th/store/resources/img/category/h1n_catess_20241006171516.jpeg"
                            alt=""> --}}
                            <img src="https://img2.pic.in.th/pic/299e5f3cb48d86d2f50.png" alt="299" border="0"
                                class="rounded-md w-full">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- หมวดสินค้า --}}
        <section id="" class="review -mt-50 -mb-35">
            <div class="flex flex-col items-center gap-3 text-center mb-10">
                <h2 class="title">หมวดแนะนำ</h2>
                <p class="max-w-2xl"></p>
            </div>

            <div class="container">
                <div class="swiper py-12">
                    <div class="swiper-wrapper mb-10">
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 rounded-md p-6">

                                {{-- <img src="https://img2.pic.in.th/pic/e2201bf0-05b7-4b05-89a4-3bd92dea5b16.jpeg"
                                    alt="e2201bf0 05b7 4b05 89a4 3bd92dea5b16" border="0" class="rounded-lg"> --}}
                                <img src="https://img2.pic.in.th/pic/302a6a63a75608f5638.png" border="0"
                                    class="rounded-lg">

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


                                <img src="https://img5.pic.in.th/file/secure-sv1/303d64a632431f9a615.png"
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
                                {{-- <img src="https://img5.pic.in.th/file/secure-sv1/aa6fc013-1b93-4811-9ec9-20e8ba608e7c.jpeg"
                                    alt="" class="rounded-lg invisible sm:visible"> --}}
                                <img src="https://www.happyfranchise.co.th/store/resources/img/category/1hq_catess_20241005125714.jpeg"
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

        {{-- เกี่ยวกับจุดเด่น --}}
        <section id="hightlight" class="-mt-50 -mb-35">
            <div class="flex flex-col items-center gap-3 text-center mb-10">
                <h2 class="title">จุดเด่นของระบบสำเร็จรูป PEB</h2>
                <h2 class="title">มาตราฐาน MESUK</h2>
            </div>

            <div class="container">
                <div class="swiper py-12">
                    <div class="swiper-wrapper mb-10">

                        {{-- Card 1 --}}
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 rounded-md p-6">
                                <div class="relative px-4">
                                    <div class="rounded-xl border-b-4 border-emerald-400 bg-white shadow -mb-40">
                                        <div class="bg-white p-7 rounded-lg h-full">
                                            <h1 class="mb-5 text-slate-700 text-center">มีมาตราฐาน</h1>
                                            <p class="text-slate-600 mb-20 p-2 text-2xl text-center">ระบบสำเร็จรูป
                                                <br />PEB (Pre
                                                Engineering
                                                Build)
                                                </br>
                                                เป็นโครงสร้างเหล็กสำเร็จรูปเป็นระบบการก่อสร้างอาคารแบบ
                                                <br />
                                                น็อคดาวน์โดยจะผลิตชิ้นส่วนจากโรงงานโดยที่โครงสร้างทุกชิ้นส่วน
                                                <br />
                                                จะถูกออกแบบอย่างถูกต้องตามหลักวิศวกรรมชิ้นส่วนโครงสร้างจะถูก
                                                <br />
                                                นำมาประกอบที่หน้างาน
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center py-10 relative">
                                <div class="mt-10 flex items-center justify-center  text-white w-24 h-24">
                                    <img src="https://img2.pic.in.th/pic/3067515e7ba94a96d2d.png" alt="306">
                                </div>
                            </div>
                        </div>

                        {{-- Card 2 --}}
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 rounded-md p-6">
                                <div class="relative px-4">
                                    <div class="rounded-xl border-b-4 border-emerald-400 bg-white shadow -mb-40">
                                        <div class="bg-white p-7 rounded-lg h-full">
                                            <h1 class="mb-5 text-slate-700 text-center">ความแข็งแรง</h1>
                                            <p class="text-slate-600 mb-20 p-2 text-2xl text-center">ระบบสำเร็จรูป
                                                <br />
                                                รูปแบบของโครงสร้างหลัก
                                                (Primary Structure) จะมีเป็น
                                                <br />
                                                โครงข้อแข็ง
                                                (Steel
                                                port frame of Rigid frame)
                                                ซึ่งมีเสถียรภาพในการต้านทานทั้งแรงในแนวดิ่งจากน้ำหนักตัวของโครงสร้างและแรงให้แนวราบจากแรงลมแและแรงแผ่นดินไหวได้อย่างมีประสิทธิภาพ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center py-10 relative ">
                                <div
                                    class="mt-10 flex w-24 h-24 items-center justify-center rounded-full bg-emerald-500 text-white">
                                    <img src="https://img5.pic.in.th/file/secure-sv1/3077101a4aea3aa69e3.png"
                                        alt="307" border="0">
                                </div>
                            </div>
                        </div>

                        {{-- Card 3 --}}
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 rounded-md p-6">
                                <div class="px-4">
                                    <div class="rounded-xl border-b-4 border-emerald-400 bg-white shadow -mb-40">
                                        <div class="bg-white p-7 rounded-lg h-full">
                                            <h1 class="mb-5 text-slate-700 text-center">ประหยัด</h1>
                                            <p>
                                            <p class="text-slate-600 mb-14 p-2 text-2xl text-center">
                                                ระบบสำเร็จรูป
                                                <br />
                                                มีข้อได้เปรียบในเรื่องของความประหยัดเวลาในการก่อสร้าง
                                                <br />
                                                เมื่อเปรียบเทียบกับวิธีการก่อสร้างแบบทั่วไป
                                                และเพิ่มประสิทธิ์ภาพใน
                                                <br />
                                                การจัดสรรทรัพยากรต่างๆ
                                                อย่างมีประสิทธิภาพ
                                                เช่นจำนวนงานที่ใช้
                                                <br />
                                                ลดลงและจากการ
                                                ลดระยะเวลาในนการก่อสรา้งจึงทำให้ค่าใช้จ่ายใน
                                                <br />
                                                การก่อสรา้งถูกลง
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center py-10 relative ">
                                <div
                                    class="mt-10 flex h-24 w-24 items-center justify-center rounded-full bg-emerald-500 text-white">
                                    <img src="https://img5.pic.in.th/file/secure-sv1/305b0ff9d412e3cc838.png"
                                        alt="305" border="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"> </div>
                </div>
            </div>
        </section>

        <section class="-mt-40 -mb-35">
            <div class="flex flex-col items-center gap-3 text-center mt-5 mb-10">
                <h2 class="title">ผลงาน</h2>
            </div>

            <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
                <div class="-m-1 flex flex-wrap md:-m-2">
                    <div class="flex w-1/2 flex-wrap">
                        <div class="w-1/2 p-1 md:p-2">
                            <div
                                class="relative h-full max-w-sm mx-auto px-5 py-2 group rounded-md bg-gray-200 overflow-hidden shadow-xl">
                                <img src="https://img2.pic.in.th/pic/30862becb5ef9ffa7ee.png" alt=""
                                    class="absolute w-full h-full inset-0 ">
                                <div
                                    class="absolute inset-0 w-full h-full rounded-2xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
                                </div>
                                <div
                                    class="flex flex-col absolute inset-x-2 text-white text-xs sm:text-sm md:text-md lg:text-lg">
                                    <a href="#" class="text-xs md:text-md xl:text-2xl font-semibold text-right">
                                        66PP052
                                    </a>
                                    <p class="font-medium uppercase tracking-wider mb-6 text-right"> HW-H
                                    </p>
                                    <p class="hidden group-hover:block text-white">ผลงานโกดังสำเร็จรูป Happy
                                        Prefabricated Warehouse - โครงสร้างเกล็กรีดร้อน (Hot Roll Wide Falnge) ขนาด 15 x
                                        19.5 x 5 เมตร</p>
                                </div>
                                <button
                                    class="absolute inset-x-5 bottom-8 py-3 rounded-2xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block">ฮ่านต่อ</button>
                            </div>
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <div
                                class="relative h-full lg:h-96 max-w-sm mx-auto px-5 py-2 group rounded-md bg-gray-200 overflow-hidden shadow-xl">
                                <img src="https://img2.pic.in.th/pic/309a956969fc72554e1.png" alt=""
                                    class="absolute w-full h-full inset-0 ">
                                <div
                                    class="absolute inset-0 w-full h-full rounded-2xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
                                </div>
                                <div class="absolute inset-x-2 text-white text-xs md:text-md lg:text-lg">
                                    <a class="text-xs md:text-md xl:text-2xl font-semibold text-right">67PP001</a>
                                    <p class="font-medium uppercase tracking-wider mb-6 text-right"> HW-HC
                                    </p>
                                    <p class="hidden group-hover:block text-white">Whether you're looking to save money
                                        spending
                                        abroad or sticking to
                                        your
                                        budget with our built-in budgeting, get more from your money with our Standard
                                        account.</p>
                                </div>
                                <button
                                    class="absolute inset-x-5 bottom-8 py-3 rounded-2xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block">ฮ่านต่อ</button>
                            </div>

                            {{-- <div class="w-1/2 p-1">
                                <img alt="gallery" class="block h-full w-full rounded-lg  object-center"
                                    src="https://img2.pic.in.th/pic/30862becb5ef9ffa7ee.png" />
                            </div> --}}
                        </div>
                        <div class="w-full p-1 md:p-2">
                            {{-- <img alt="gallery" class="block h-full w-full rounded-lg  object-center"
                                src="https://img5.pic.in.th/file/secure-sv1/3108a51a1ddd6282146.png" /> --}}
                            <div class="overflow-hidden shadow-xl">
                                <img src="https://img5.pic.in.th/file/secure-sv1/3108a51a1ddd6282146.png"l
                                    alt="" class="block h-full w-full rounded-lg  object-center">
                            </div>
                        </div>
                    </div>
                    <div class="flex w-1/2 flex-wrap">
                        <div class="w-full p-1 md:p-2">

                            <img alt="gallery" class="block h-full w-full rounded-lg  object-center"
                                src="https://img5.pic.in.th/file/secure-sv1/31167c50f724a25163c.png" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg  object-center"
                                src="https://img5.pic.in.th/file/secure-sv1/312800ab0c9b46f590f.png" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg  object-center"
                                src="https://img2.pic.in.th/pic/313.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- สินแนะนำ --}}
        <section id="popular" class="-mt-50 -mb-35">
            <div class="flex flex-col items-center gap-3 text-center mt-5 mb-10">
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
                    <div class="swiper-wrapper mb-20">
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

    {{-- Footer --}}
    <footer class="bg-green-100 text-green-900 pt-20 pb-10 md:pt-28 relative mt-20">
        <div class="container text-white absolute top-0 right-0 left-0 -translate-y-1/2">
            <div class="bg-emerald-500 px-10 pt-5 pb-10 space-y-5 rounded-md">
                <h3><span class="text-green-700">subscribe</span>to our newsletter</h3>
                <div class="flex flex-col md:flex-row gap-1">
                    <input type="eamil" placeholder="Your email address"
                        class="w-full px-5 py-3 text-green-900 rounded-md outline-none mb-2">
                    <button
                        class="flex h-full items-center justify-center gap-1 bg-green-950 px-5 py-3 rounded-md hover:opacity-80 duration-300">
                        <span>subscribe</span>
                        <i class="ri-send-plane-2-fill"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- Icon Social --}}
        <div class="container mt-16 mb-10">
            <div class="border-b border-green-500 relative">
                <div
                    class="absolute top-0 transform -translate-y-1/2
                            left-0 right-0 max-w-36 mx-auto">
                    <div class="bg-green-100 text-xl text-center space-x-2">
                        <i
                            class="ri-facebook-fill text-blue-500 hover:text-blue-600/80 duration-300 cursor-pointer"></i>
                        <i class="ri-line-fill text-green-500 hover:text-green-600/80 duration-300 cursor-pointer"></i>
                        <i class="ri-youtube-line text-red-600 hover:text-red-500/80 duration-300 cursor-pointer"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact --}}
        <div
            class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-8 text-center md:text-start">
            <div>
                <div class="text-7xl text-green-700 text-center inline-block">
                    <i class="ri-leaf-fill"> </i>
                    <p class="text-xl sm:text-md font-bold">มีสุข คอร์ปอเรชั่น (2006) จำกัด</p>
                    <p class="text-xl sm:text-sm font-bold">MESUK CORPORATION (2006) Co.,Ltd</p>
                    <p class="text-xl sm:text-sm">152/2 ซอยประชาอุทิศ 54 แยก 6 ถนนพุทธบูชา บางมด ทุ่งครุ กรุงเทพมหานคร
                        10140 ประเทศไทย</p>
                </div>
            </div>

            <div>
                <p class="mb-5 font-bold text-xl">สินค้าบริการ</p>
                <div class="flex flex-col gap-1">
                    <a href="">item1</a>
                    <a href="">item2</a>
                    <a href="">item3</a>
                    <a href="">item4</a>
                    <a href="">item5</a>
                </div>
            </div>

            <div>
                <p class="mb-5 font-bold text-xl">ติดต่อ</p>
                <div class="flex flex-col gap-1">
                    <a href="">024059717</a>
                    <a href="">แจ้งปัญหา</a>
                    <a href="">it@me-suk.com</a>
                    <br>
                    <p>152/2 ซอยประชาอุทิศ 54 แยก 6 ถนนพุทธบูชา บางมด ทุ่งครุ กรุงเทพมหานคร
                        10140 ประเทศไทย</p>
                </div>
            </div>


        </div>
        <div class="container">
            <p class="text-center mt-10 opacity-50">Copyright &copy; 2024 HappyMesuk. All Right reserved.</p>
        </div>
    </footer>


    <a href="#"
        class="fixed right-4 -bottom-1/2 bg-green-500 shadow-sm inline-block px-3 py-1 md:px-4 md:py-2 rounded-md text-lg text-white z-50 hover:-translate-y-1 duration-300"
        id="scroll-up">
        <div class="ri-arrow-up-line"></div>
    </a>


    {{-- JS --}}
    @vite('resources/js/main.js')
    {{-- <script src="main.js"></script> --}}

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
</body>

</html>
