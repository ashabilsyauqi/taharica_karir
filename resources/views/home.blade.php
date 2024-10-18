<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <!-- navbar -->

        <div class="max-w-[1500px] lg:h-fit 2xl:p-0 lg:p-5 mx-auto">
            <div class="flex flex-col mx-auto 2xl:py-4 lg:py-0">
                <div
                    class=" bg-cover bg-no-repeat 2xl:w-[95%] lg:w-[1175px] 2xl:h-[940px] lg:h-[777px] mx-auto relative" style="background-image: url('/images/hero.svg');">
                    <nav class="flex">
                        <img src="{{ asset('images/taharica_logo.svg') }}" alt="taharica_logo" />
                        <ul
                            class="flex my-auto 2xl:ml-56 lg:ml-44 bg-[rgba(245,245,245,0.60)] shadow-md items-center rounded-[30px] py-6 px-4 gap-5 h-10 font-semibold text-[#243D92] text-[20px]">
                            <li class="py-2">
                                <a href="">Lowongan</a>
                            </li>
                            <li class="py-2">
                                <a href="">Tentang Kami</a>
                            </li>
                            <li class="py-2">
                                <a href="">Faq</a>
                            </li>
                            <li class="py-2">
                                <a href="">Status</a>
                            </li>
                        </ul>
                        <div class="my-auto flex 2xl:ml-52 lg:ml-24 gap-x-4">
                            <button
                                class="text-white text-[20px] py-2 px-4 bg-[#243D92] rounded-[30px]">
                                <a href="">Masuk</a>
                            </button>
                            <button
                                class="text-[#243D92] text-[20px] py-2 px-4 bg-[rgba(245,245,245,0.60)] shadow-[0px_8px_36px_0px_rgba(0,0,0,0.15)] rounded-[30px]">
                                <a href="">Daftar</a>
                            </button>
                        </div>
                    </nav>

                    <div class="2xl:mt-36 lg:mt-20 w-[959px] mx-auto">
                        <h1 class="text-center text-7xl text-white font-bold">
                            Ayo Kembangkan Karirmu di PT Taharica!
                        </h1>
                        <p
                            class="max-w-[796px] mx-auto text-white text-center text-[18px] 2xl:mt-32 lg:mt-24">
                            Temukan kesempatan kerja yang sesuai dengan keahlianmu dan
                            bergabunglah dengan kami untuk tumbuh dan sukses bersama.
                        </p>
                    </div>

                    <div
                        class="border border-white py-2 px-4 text-white rounded-[30px] 2xl:w-[517px] lg:w-[417px] text-center box-border font-bold text-lg 2xl:mt-[120px] lg:mt-[90px] ml-[120px]">
                        Cari lowongan sesuai keahlianmu!
                    </div>

                    <div
                        class=" bg-cover 2xl:w-[92%] 2xl:h-[210px] lg:w-[1079px] 2xl:lg- lg:h-[169px] flex flex-col justify-center 2xl:-mt-14 lg:-mt-10 mx-auto" style="background-image: url('/images/search_bg.svg');">
                        <p class="2xl:ml-[80%] lg:ml-[75%] text-white 2xl:mt-6 lg:mt-4">
                            999 lowongan tersedia
                        </p>
                        <form action="" class="flex w-[91%] ml-16 gap-x-8 2xl:mt-6 lg:mt-4">
                            <div
                                class="2xl:w-[82.5%] lg:w-[741px] relative flex items-center">
                                <input
                                    type="search"
                                    name=""
                                    id=""
                                    class="w-[100%] py-2 px-4 bg-transparent border border-white rounded-[30px] placeholder:text-white text-white focus:outline-none focus:ring-0"
                                    placeholder="Cari Lowongan" />
                                <img src="seacrh_icon.svg" alt="" class="absolute right-5" />
                            </div>
                            <button class="w-[143px] bg-white rounded-[35px]">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- end navbar -->


        <!-- tentang kami -->
        <section
            class="tentang-kami 2xl:max-w-[1500px] lg:max-w[1200px] mt-36 mx-auto flex flex-col items-center">
            <h1 class="text-center text-6xl font-semibold">Tentang Kami</h1>
            <div
                class=" w-[95%] bg-no-repeat bg-cover 2xl:h-[545px] lg:h-[456px] mt-8" style="background-image: url('/images/tentang_kami.svg');">
                <div class="py-3 pl-10">
                    <h1 class="text-5xl font-semibold mt-1">
                        Your <span class="text-[#EA222B]">Industrial</span>
                        <span class="text-[#243D92]">Solution</span>
                    </h1>
                </div>
            </div>
            <div
                class="2xl:w-[480px] lg:w-[400px] py-2 px-4 rounded-[30px] border border-black 2xl:ml-[765px] lg:ml-[640px] 2xl:-mt-24 lg:-mt-[85px] 2xl:text-[22px] lg:text-[18px]">
                PT. Taharica berdiri tahun 1997, berlokasi di Duren Sawit, Jakarta
                Timur, Indonesia. PT. Taharica bergerak di bidang perdagangan dan
                teknologi monitoring atau IOT. Melayani berbagai industri, lembaga riset
                dan lainnya.
            </div>
            <div
                class=" w-[95%] 2xl:h-[523px] lg:h-[435px] bg-no-repeat bg-cover 2xl:-mt-44 lg:-mt-36 flex flex-col justify-end items-center pb-5 box-border" style="background-image: url('/images/tentang_kami2.svg');">
                <div
                    class="2xl:max-w-[900px] lg:max-w-[800px] flex flex-col items-center">
                    <p class="text-center 2xl:text-[18px]">
                        Mau tahu lebih dalam tentang siapa kami dan apa yang membuat PT
                        Taharica beda dari yang lain? Jelajahi kisah, visi, dan nilai-nilai
                        yang kami pegang teguh untuk membangun masa depan yang lebih baik.
                    </p>
                    <div class="w-[660px] h-[8px]"></div>
                </div>
            </div>
            <a href="" class="mt-4">
                <button class="w-[660px] bg-[#243D92] text-white rounded-[10px] py-2">
                    Baca Selengkapnya
                </button>
            </a>
        </section>
        <!-- end tentang kami -->

        <main>
            <section class="py-10">
                <h1 class="text-3xl font-bold text-center">Selamat Datang di Website Taharica Career</h1>
                <p class="text-center mt-4">PT Taharica</p>
                <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
            </section>
            <section class="py-10">
                <h2 class="text-3xl font-bold text-center">Testimoni Karyawan</h2>
                <div class="relative overflow-hidden w-full h-auto p-12">
                    <div class="flex justify-between absolute top-1/2 transform -translate-y-1/2 w-full">
                    </div>

                    <div id="slider" class="slider flex p-12 space-x-8 transition-transform duration-300 cursor-grab active:cursor-grabbing">
                        <!-- Card 1 -->
                        <div class="slide flex flex-col rounded-2xl w-80 bg-white shadow-xl">
                            <figure class="flex justify-center items-center rounded-2xl">
                                <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png" alt="Card Preview" class="rounded-t-2xl">
                            </figure>
                            <div class="flex flex-col p-8">
                                <div class="text-xl font-bold text-center text-gray-700 pb-6">Chief Technology Officer</div>
                                <div class="text-sm text-center text-gray-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="flex justify-end pt-6">
                                    <button class="bg-blue-700 text-white w-full font-bold text-sm p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Tyler Joseph</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="slide flex flex-col rounded-2xl w-80 bg-white shadow-xl">
                            <figure class="flex justify-center items-center rounded-2xl">
                                <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png" alt="Card Preview" class="rounded-t-2xl">
                            </figure>
                            <div class="flex flex-col p-8">
                                <div class="text-xl font-bold text-center text-gray-700 pb-6">Product Designer</div>
                                <div class="text-sm text-center text-gray-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="flex justify-end pt-6">
                                    <button class="bg-blue-700 text-white w-full font-bold text-sm p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Hanni Pham</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="slide flex flex-col rounded-2xl w-80 bg-white shadow-xl">
                            <figure class="flex justify-center items-center rounded-2xl">
                                <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png" alt="Card Preview" class="rounded-t-2xl">
                            </figure>
                            <div class="flex flex-col p-8">
                                <div class="text-xl font-bold text-center text-gray-700 pb-6">Software Developer</div>
                                <div class="text-sm text-center text-gray-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="flex justify-end pt-6">
                                    <button class="bg-blue-700 text-white w-full font-bold text-sm p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Tyler Pham</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="slide flex flex-col rounded-2xl w-80 bg-white shadow-xl">
                            <figure class="flex justify-center items-center rounded-2xl">
                                <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png" alt="Card Preview" class="rounded-t-2xl">
                            </figure>
                            <div class="flex flex-col p-8">
                                <div class="text-xl font-bold text-center text-gray-700 pb-6">FrontEnd</div>
                                <div class="text-sm text-center text-gray-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="flex justify-end pt-6">
                                    <button class="bg-blue-700 text-white w-full font-bold text-sm p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Tyler Pham</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="slide flex flex-col rounded-2xl w-80 bg-white shadow-xl">
                            <figure class="flex justify-center items-center rounded-2xl">
                                <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png" alt="Card Preview" class="rounded-t-2xl">
                            </figure>
                            <div class="flex flex-col p-8">
                                <div class="text-xl font-bold text-center text-gray-700 pb-6">BackEnd</div>
                                <div class="text-sm text-center text-gray-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="flex justify-end pt-6">
                                    <button class="bg-blue-700 text-white w-full font-bold text-sm p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Tyler Pham</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="slide flex flex-col rounded-2xl w-80 bg-white shadow-xl">
                            <figure class="flex justify-center items-center rounded-2xl">
                                <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png" alt="Card Preview" class="rounded-t-2xl">
                            </figure>
                            <div class="flex flex-col p-8">
                                <div class="text-xl font-bold text-center text-gray-700 pb-6">UIUX</div>
                                <div class="text-sm text-center text-gray-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="flex justify-end pt-6">
                                    <button class="bg-blue-700 text-white w-full font-bold text-sm p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Tyler Pham</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 7 -->
                        <div class="slide flex flex-col rounded-2xl w-80 bg-white shadow-xl">
                            <figure class="flex justify-center items-center rounded-2xl">
                                <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png" alt="Card Preview" class="rounded-t-2xl">
                            </figure>
                            <div class="flex flex-col p-8">
                                <div class="text-xl font-bold text-center text-gray-700 pb-6">QA</div>
                                <div class="text-sm text-center text-gray-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="flex justify-end pt-6">
                                    <button class="bg-blue-700 text-white w-full font-bold text-sm p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Tyler Pham</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div>

    <!-- footer -->
    <div class="flex flex-col w-full h-fit bg-[#243D92] text-[#f9f9f9] px-48 py-4 rounded-tl-[10px] rounded-tr-[10px]"">
    <div class=" flex flex-row">
        <div class="flex flex-col gap-2 justify-center w-[14%] w-[11%]">
            <div class="flex items-center w-full gap-4">
                <img src="{{ asset('images/logoTHC.png') }}" alt="logoCompany">
            </div>
            <div class="grid grid-cols-3 gap-6 w-fit p-4"><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127
                        1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29
                        2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949
                        4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 
                        4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 
                        4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 
                        12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>

            </div>
        </div>


        <div class="flex flex-row w-[86%] justify-end gap-28 text-nowrap">
            <div class="grid grid-cols-2 gap-2">
                <div class="flex flex-col gap-2">
                    <div class="font-bold text-[#F5F5F5] pb-3 text-xl">Navigasi</div>
                    <a href="#xxx" class="hover:underline">Lowongan</a>
                    <a href="#xxx" class="hover:underline">Tentang Kami</a>
                    <a href="#xxx" class="hover:underline">FAQ</a>
                    <a href="#xxx" class="hover:underline">Status</a>

                </div>
                <div class="flex flex-col gap-2">
                    <div class="font-bold text-[#F5F5F5] pb-3 text-xl">Kontak</div>
                    <a href="#xxx" class="hover:underline">Email</a>
                    <a href="#xxx" class="hover:underline">Whatsapp</a>
                    <span class="block">Jalan Radin II No.62</span>
                    <span class="block">Duren Sawit, Jakarta Timur</span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full border-t border-white-500 my-6"></div>
    <div class="text-center">© 2024 PT Taharica - All rights reserved.</div>
    </div>

    <!-- end footer -->
</body>

</html>