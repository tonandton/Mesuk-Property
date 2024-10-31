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

    <!-- Styles -->
    <style>

    </style>
</head>

<body>
    <div class="overflow-x-hidden">
        <header class="bg-white text-black py-6 px-4 fixed top-0 left-0 right-0 z-10">
            <div class="container mx-auto flex justify-between items-center h-full">
                <div>
                    <a href="/">Happy | Mesuk</a>
                </div>

                <div class="hidden md:flex flex-grow justify-end">
                    <nav>
                        <ul
                            class="flex flex-col md:flex-row lg-space-x-8 sm:space-x-4 space-y-2 md:space-y-0 p-4 md:p-0">
                            <li>หน้าแรก</li>
                            <li>เกี่ยวกับ</li>
                            <li>รายการสินค้า</li>
                            <li>ติดต่อ</li>
                            <li>เข้าสู่ระบบ</li>
                        </ul>
                    </nav>
                </div>

                {{-- <div class="hidden md:block">
                    <a href="" class="text-white bg-green-500 hover:bg-green-500/90 px-4 py-2 rounded">
                        ติดต่อ
                    </a>
                </div> --}}

                <div class="block md:hidden">
                    <button class="text-black focus:outline-none"></button>
                </div>
            </div>
        </header>
    </div>
</body>

</html>
