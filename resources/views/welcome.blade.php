<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="flex-col bg-black">
    {{-- nav --}}
    <nav class="bg-black dark:bg-black w-full mb-[35px]">
        <div class="max-w-screen-xl flex  items-center justify-between mx-auto p-4">
            <div class="w-[150px] h-[52px] ">
                <img src="/img/Logo.png" alt="">
            </div>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-white bg-red-700 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-[20px] text-sm px-4 py-2 text-center dark:bg-red-700 dark:hover:bg-red-700 dark:focus:ring-red-600">Get started</button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-transparent md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="#" class="block underline underline-offset-4 py-2 px-3 text-white rounded md:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 hover:underline underline-offset-4 px-3 text-gray-900 rounded  md:hover:bg-transparent  dark:text-slate-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                    </li>
                    <li>
                        <a href="#footer" class="block py-2 px-3 hover:underline underline-offset-4 text-gray-900 rounded  md:hover:bg-transparent dark:text-slate-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- nav end --}}
    {{-- contine1--}}
    <section class="bg-no-repeat bg-center bg-[length:1550px_750px] place-content-center" style="background-image: url('{{ asset('img/bg1.svg')}}')">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
            <div class="mr-auto place-self-center lg:col-span-7">
                <div class="w-[397px] h-[107px] flex">
                    <img src="img/Sambel Abyss.svg" alt="">
                </div>
                <p class="text-white text-lg font-semibold capitalize mb-[12px]">Semua orang juga bisa makan pedas</p>
                <p class="w-[471px] text-white text-sm font-semibold leading-[147.6%]">Sambel Abyss di adalah brand yang memproduksi Sambal Hitam khas Madura, mengapa kami membuat inovasi ini ? Karena sambal ini berbeda dari kebanyakan sambal dari segi warna, sedangkan sambal ini berwarna hitam dan juga tidak hanya soal warna, tetapi rasa juga berbeda.<br>
                    <br>
                    Banyak orang yang tidak suka pedas dikarenakan rasa pedas yang terlalu pedas bagi orang tersebut, maka kami menyediakan pedas dengan 3 Level yang dimana agar orang orang dapat merasakan pedas yang mereka mampu rasakan.</p>
                <a class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse mt-[30px]" href="/">
                    <button type="button" class="text-white bg-red-700 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-[20px] text-sm px-4 py-2 text-center dark:bg-red-700 dark:hover:bg-red-700 dark:focus:ring-red-600">About Us</button>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rotate-[26.72deg]">
                <img src="./img/botol.png" alt="sambal">
            </div>
        </div>
    </section>

    {{-- contine --}}

    {{-- contine 2 --}}
    <section class="bg-no-repeat bg-center bg-[length:1550px_750px] place-content-center" style="background-image: url('{{ asset('img/bg2.svg')}}')">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rotate-[26.72deg]">
                <img src="./img/botol.png" alt="sambal">
            </div>
            <div class="mr-auto place-self-center lg:col-span-7 text-right">
                <div class="w-[397px] h-[107px] flex">
                    <img class="ml-[239px]" src="img/filosofi.svg" alt="">
                </div>
                <p class="text-white text-lg font-semibold capitalize mb-[12px]">makna</p>
                <p class="w-[471px] text-white text-sm font-semibold leading-[147.6%]">Sambel Abyss adalah produk sambel yang terdiri dari dua kata, yaitu “sambal” dan “Abyss”. Sambal adalah saus pedas yang terbuat dari cabai dan bahan-bahan lainnya, sedangkan Abyss adalah istilah yang berarti jurang neraka yang dalam dan gelap.<br>
                    <br>
                    Sambal Abyss menggabungkan kedua konsep ini den membuatsambel hitam
                    khas Madura yang memiliki tingkat kepedasan yang berbeda-beda, mulai dari yang ringan hingga yang ekstrem. Sambel Abyss memiliki jargon “semua orang bisa makan pedas” karena menawarkan pilihan pedas sesuai selera konsumen.
                </p>
            </div>
        </div>
    </section>
    {{-- contine 2 --}}

    {{-- footer --}}
    <!--Footer container-->
    <footer id="footer" class="footer items-center p-4 bg-black text-neutral-content ">
        <aside class="items-center grid-flow-col">
            <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current">
                <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p>Copyright © 2023 - All right reserved</p>
        </aside>
        <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
            <a href="https://wa.link/ww3mbm">
                <img src="img/wa.svg" alt="">
            </a>
            <p>+62 895-4140-01110</p>
            <a>
                <img src="img/email.svg" alt="">
            </a>
            <p>Sambel_Abyss@gmail.com</p>
        </nav>
    </footer>
    {{-- footer end --}}

</body>
</html>
