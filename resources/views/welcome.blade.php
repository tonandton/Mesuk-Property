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
    <main>
        <header>
            <nav>
                <div class="container">
                    <div class="logo">
                        <img src="https://bigbuckclub.com/wp-content/uploads/2018/05/logo-dummy-4.png" alt="">
                    </div>

                    <div class="links">
                        <ul>
                            <li><a href="/">หน้าแรก</a></li>
                            <li><a href="/">เกี่ยวกับ</a></li>
                            <li><a href="/">รายการสินค้า</a></li>
                            <li><a href="/">เข้าสู่ระบบ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="header-content">
                <div class="container grid-2">
                    <div class="column-1">
                        <h1 class="header-title">บริษัท มีสุข คอร์ปอเรชั่น (2006) จำกัด</h1>
                        <p class="text">
                            รับสร้างโรงงานโกดังระบบสำเร็จรูปอันดับหนึ่งของเมืองไทย
                            ให้บริการครบวงจรพร้อมการควบคุมมาตราฐานการก่อสร้างด้วยวิศวกรมืออาชีพ
                        </p>
                        <a href="/" class="btn">อ่านต่อ</a>
                    </div>
                    <div class="column-2 image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSatJoRrPwbVSvw5r6sHdLG-Gmw45GXhoe6HA&s"
                            alt="" class="img-element" alt="">
                    </div>
                </div>
            </div>
        </header>
    </main>

</body>

</html>
