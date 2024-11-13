/* @tailwind base;
@tailwind components;
@tailwind utilities; */

@import
url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

:root {
--dark-one: #333;
--dark-two: #7a7a7a;
--main-color: #40cc57;
--light-one: #fff;
--light-two: #f9fafb;
--light-three: #f6f7fb;
}

*, *::before, *::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body, button, input, textarea {
font-family: "Poppins", sans-serif;
font-weight: 100;
font-style: normal;
}

a {
text-decoration: none;
}

ul {
list-style: none;
}

img {
width: 100%;
}

.container {
position: relative;
z-index: 5;
max-width: 92rem;
padding: 0 4rem;
margin:0 auto;
}

.grid-2 {
display: grid;
grid-template-columns: repeat(2, 1fr);
align-items: center;
justify-content: center;
}

.text {
font-size: 1.25rem;
color: var(--dark-two);
line-height: 1.6;
}

.column-1 {
margin-right: 1.5rem;
}

.column-2 {
margin-left: 1.5rem;
}

.image {
display: flex;
align-items: center;
justify-content: center;
}

/* Header */
header {
width: 100%;
background-color: var(--ight-three);
overflow: hidden;
position: relative;
}

nav {
width: 100%;
position: relative;
z-index: 50;
}

nav .container {
display: flex;
justify-content: space-between;
height: 6rem;
align-items: center;
}

.logo {
width: 220px;
display: flex;
align-items: center;
}

.links ul {
display: flex;
}

.links a {
display: inline-block;
padding: 0.9rem 1.2rem;
color: var(--dark-one);
font-size: 1.05rem;
text-transform: uppercase;
font-weight: 500;
line-height: 1;
transition: 0.3s;
}

.links a.active {
background-color: var(--main-color);
color: var(--light-one);
border-radius: 2rem;
font-size: 1rem;
padding: 0.8rem 2.1rem;
margin-left: 1rem;
}

.links a:hover {
color: var(--main-color);
/* color: var(--light-one); */
/* background-color: #5fcf5f; */
}

.header-content .container.grid-2 {
grid-template-columns: 2.5fr 3.5fr;
min-height: calc(100vh - 6rem);
padding-bottom: 2.5rem;
text-align: left;
top: -200px;
}

.header-title {
font-size: 1.8rem;
line-height: 1.2;
color: var(--dark-one);
}

.header-content .text {
margin: 2.15rem 0;
}

.btn {
display: inline-block;
padding: .85rem 2rem;
background-color: var(--main-color);
color: var(--light-one);
border-radius: 1.2rem;
font-size: 1.05rem;
text-transform: uppercase;
font-weight: 500;
transition: .3s;
}

.btn:hover {
background-color: #5fcf5f
}


.header-content .image .img-element {
max-width: 750px;
border-radius: 20px;
}

.overlay {
position: absolute;
width: 100%;
height: 100%;
overflow: hidden;
top:0;
left:0;
}

{{--  --}}
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
            <div class="overlay overlay-lg">
                <img src="https://images.unsplash.com/photo-1555636222-cae831e670b3?q=80&w=877&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" class="bg-img">
            </div>
        </header>
    </main>

</body>

</html>
