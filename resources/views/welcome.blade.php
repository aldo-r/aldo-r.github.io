<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-black">

    {{-- nav --}}
    <nav class="flex justify-around items-center py-3 bg-black h-[100px]">
        <div class="w-[150px] h-[52px]">
            <img src="/img/Logo.png" alt="">
        </div>
        <div class="grid grid-flow-col justify-stretch">
            <a class="mx-7 font-semibold underline underline-offset-4 text-white " href="">Home</a>
            <a href="/About Us" class="mx-7 font-semibold text-[#CACACA] decoration-black underline hover:underline-offset-4  hover:decoration-white ">About Us</a>
            <a class="mx-7 font-semibold text-[#CACACA] decoration-black underline hover:underline-offset-4  hover:decoration-white ">Contact</a>
        </div>
        <div class="flex">
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Order Now</button>
        </div>
    </nav>
    {{-- nav end --}}
    
    {{-- Conten_1 --}}
    <div class="bg-no-repeat bg-center bg-[length:1550px_750px] place-content-center" style="background-image: url('{{ asset('img/bg1.svg')}}')">
        <div class="flex grid-rows-3 grid-flow-col gap-4 content-center mt-[20px]">
            <div class="pt-[18px]">
                <article class="bg-transparan w-[514px] h-[470px] ml-[120px] mr-[147px] mt-[81px] text-white">
                    <div class="w-[407px] h-[110px] flex">
                        <img src="img/Sambel Abyss.svg" alt="">
                    </div>
                    <h1 class="font-semibold text-[19px] pb-[13px]"> Semua orang juga bisa makan pedas</h1>
                    <p class="font-semibold line-clamp-5 pb-[13px] leading-relaxed text-[14px]">ambel Abyss di adalah brand yang memproduksi Sambal Hitam khas Madura, mengapa kami membuat inovasi ini? Karena sambal ini berbeda dari kebanyakan sambal dari segi warna, sedangkan sambal ini berwarna hitam dan juga tidak hanya soal warna, tetapi rasa juga berbeda.</p>
                    <p class="font-semibold line-clamp-5 leading-relaxed text-[14px]">Banyak orang yang tidak suka pedas dikarenakan rasa pedas yang terlalu pedas bagi orang tersebut, maka kami menyediakan pedas dengan 3 Level yang dimana agar orang orang dapat merasakan pedas yang mereka mampu rasakan.</p>
                </article>
            </div>
            <div class="flex justify-around row-span-3 w-[588.78px] h-[588.78px] rotate-[26.72deg] ">
                <img src="./img/botol.png" alt="sambal">
            </div>
        </div>
    </div>
    {{-- Conten_1 end --}}
    
    {{-- Conten_2 --}}
    <div class="bg-no-repeat bg-center bg-[length:1550px_750px] place-content-center" style="background-image: url('{{ asset('img/bg2.svg')}}')">
        <div class="grid grid-rows-3 grid-flow-col gap-4 pt-[400px]">
            <div class="row-span-3 flex justify-around w-[588.78px] h-[588.78px] rotate-[-26.72deg]">
                <img src="./img/botol.png" alt="sambal">
            </div>
            <div class="row-span-2 col-span-2 ...">
                <div class="flex grid-rows-3 grid-flow-col gap-4 content-center">
                    <div class="pt-[18px]">
                        <article class="bg-transparan w-[514px] h-[470px] ml-[120px] mr-[147px] mt-[81px] text-white text-right">
                            <div class="w-[407px] h-[110px] flex ml-[100px]">
                                <img src="img/Sambel Abyss.svg" alt="">
                            </div>
                            <h1 class="font-semibold text-[19px] pb-[13px]"> Semua orang juga bisa makan pedas</h1>
                            <p class="font-semibold line-clamp-5 pb-[13px] leading-relaxed text-[14px]">ambel Abyss di adalah brand yang memproduksi Sambal Hitam khas Madura, mengapa kami membuat inovasi ini? Karena sambal ini berbeda dari kebanyakan sambal dari segi warna, sedangkan sambal ini berwarna hitam dan juga tidak hanya soal warna, tetapi rasa juga berbeda.</p>
                            <p class="font-semibold line-clamp-5 leading-relaxed text-[14px]">Banyak orang yang tidak suka pedas dikarenakan rasa pedas yang terlalu pedas bagi orang tersebut, maka kami menyediakan pedas dengan 3 Level yang dimana agar orang orang dapat merasakan pedas yang mereka mampu rasakan.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Conten_2 end --}}
</body>
</html>
