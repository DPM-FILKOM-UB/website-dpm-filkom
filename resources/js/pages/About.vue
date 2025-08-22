<script setup>
import { Head } from '@inertiajs/vue3'
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
</script>
<template>
    <Head title="DPM FILKOM UB - Tentang"/>
    <Navbar :default-white="false"/>
    <div class="about">
        <!-- Header -->
        <header class="relative py-20 px-4 sm:px-6 md:px-16 lg:px-20 flex justify-center items-center text-center
                bg-[url('/images/home_parlemen.png')] bg-center bg-cover bg-no-repeat h-screen">
            <div class="absolute inset-0 bg-gradient-to-b from-black/90 to-black/0"></div>
            <div class="relative z-10 text-center text-white">
                <p class="bg-[#B48B52] mx-auto w-[150px] px-2 py-2 rounded-4xl text-lg mb-6 lg:mb-2 animate-bounce">Tentang</p>
                <h1 class="text-3xl lg:text-5xl font-medium mb-2">DPM FILKOM UNIVERSITAS BRAWIJAYA</h1>
                <h2 class="text-lg lg:text-2xl">Tak Kenal Maka Kenalan Yuk!</h2>
            </div>
            <div class="absolute flex justify-center -bottom-8 lg:-bottom-12 bg-[#5B352C] h-16 lg:h-24 items-center rounded-full">
                <p class="text-lg lg:text-2xl text-white px-6 md:px-16 lg:px-60 xl:px-96">Parlemen Katha Mantrana 2025</p>
            </div>
        </header>
        <!-- Visi -->
        <section class="mt-20 lg:mt-40 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col items-center justify-center">
            <div class="gap-5 flex flex-col items-center px-10 py-5 text-center">
                <h2 class="text-2xl md:text-4xl text-[#5B352C] font-medium">Visi</h2>
                <p class="md:text-lg text-gray-700">Mewujudkan DPM FILKOM Sebagai lembaga yang menjalankan fungsi aspirasi, legislasi, dan pengawasan dengan mengutamakan nilai integritas serta Keterbukaan untuk kemaslahatan KBM FILKOM.</p>
            </div>
        </section>
        <!-- Misi -->
        <section class="mt-12 lg:mt-24 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col justify-center gap-6 items-center">
            <h2 class="text-2xl md:text-4xl text-[#5B352C] font-medium">Misi</h2>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#F8F4EC] rounded-xl text-gray-900">
                    <h1 class="font-semibold text-lg md:text-xl">1</h1>
                    <p class="text-lg md:text-xl"><strong>Proaktif dan Responsif</strong> dalam menindaklanjuti aspirasi KBMFILKOM.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#5B352C] rounded-xl text-white">
                    <h1 class="font-semibold text-lg md:text-xl">2</h1>
                    <p class="text-lg md:text-xl"><strong>Meningkatkan partisipasi publik</strong> dengan mendorong penetapan keputusan bersifat kolektif dan inklusif.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#F8F4EC] rounded-xl text-gray-900">
                    <h1 class="font-semibold text-lg md:text-xl">3</h1>
                    <p class="text-lg md:text-xl"><strong>Mengutamakan akuntabilitas</strong> guna menciptakan pengawasan yang optimal.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#5B352C] rounded-xl text-white">
                    <h1 class="font-semibold text-lg md:text-xl">4</h1>
                    <p class="text-lg md:text-xl"><strong>Mengoptimalkan transparasi</strong> dengan mendorong penetapan keputusan bersifat kolektif dan inklusif.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#F8F4EC] rounded-xl text-gray-900">
                    <h1 class="font-semibold text-lg md:text-xl">5</h1>
                    <p class="text-lg md:text-xl"><strong>Mengedepankan kesetaraan</strong> untuk mewujudkan demokrasi yang bebas dan adil</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#5B352C] rounded-xl text-white">
                    <h1 class="font-semibold text-lg md:text-xl">6</h1>
                    <p class="text-lg md:text-xl"><strong>Mendorong kolaborasi</strong> sebagai bentuk keharmonisan untuk mencapai tujuan bersama.</p>
                </div>
            </div>
        </section>
        <!-- Nilai -->
        <section class="mt-12 lg:mt-24 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col gap-6 justify-around items-center">
            <h2 class="text-2xl md:text-4xl text-[#5B352C] font-medium">Nilai</h2>
            <div class="grid grid-cols-2 lg:flex gap-6 justify-start">
                <p class="text-[#5B352C] text-center md:text-xl py-4 px-8 rounded-sm border-1 border-[#5B352C]">Demokrasi</p>
                <p class="text-[#5B352C] text-center md:text-xl py-4 px-8 rounded-sm border-1 border-[#5B352C]">Inklusif</p>
                <p class="text-[#5B352C] text-center md:text-xl py-4 px-8 rounded-sm border-1 border-[#5B352C]">Kebebasan</p>
                <p class="text-[#5B352C] text-center md:text-xl py-4 px-8 rounded-sm border-1 border-[#5B352C]">Integritas</p>
                <p class="text-[#5B352C] text-center md:text-xl py-4 px-8 rounded-sm border-1 border-[#5B352C]">Transparasi</p>
                <p class="text-[#5B352C] text-center md:text-xl py-4 px-8 rounded-sm border-1 border-[#5B352C]">Akuntabilitas</p>
            </div>
        </section>
        <!-- Logo -->
        <section class="my-14 lg:my-20 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20">
            <h2 class="text-2xl md:text-4xl text-[#5B352C] font-medium text-center lg:text-left">LOGO DPM FILKOM UB</h2>
            <div class="justify-center items-center flex flex-col mt-36 lg:mt-60 mb-44 lg:mb-80">
                <div class="absolute ml-76 lg:ml-196 -mt-64 lg:-mt-160 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo-5-orang.png" alt="" class="h-9 lg:h-20">
                    <p class="text-center text-sm lg:text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-1.png" alt="" class="h-20 lg:h-50 absolute ml-32 lg:ml-72 -mt-44 lg:-mt-[400px]">
                <div class="absolute mr-72 lg:mr-208 -mt-36 lg:-mt-96 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo-5-orang.png" alt="" class="h-9 lg:h-20 ">
                    <p class="text-center text-sm lg:text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-3.png" alt="" class="h-16 lg:h-40 absolute mr-28 lg:mr-72 -mt-20 lg:-mt-44">
                <img src="/public/images/logo_dpmfilkomub.png" alt="" class="h-36 lg:h-80 w-auto justify-center mx-auto">
                <div class="absolute ml-72 lg:ml-180 -mb-52 lg:-mb-120 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo-buku-terbuka.png" alt="" class="h-9 lg:h-20">
                    <p class="text-center text-sm lg:text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-2.png" alt="" class="h-16 lg:h-40 absolute ml-28 lg:ml-72 -mb-32 lg:-mb-80">
                <div class="absolute mr-72 lg:mr-196 -mb-64 lg:-mb-140 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo_dpmfilkomub.png" alt="" class="h-9 lg:h-20">
                    <p class="text-center text-sm lg:text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-4.png" alt="" class="h-24 lg:h-56 absolute mr-20 lg:mr-56 -mb-32 lg:-mb-72">
            </div>
        </section>
        <!-- Warna -->
        <section class="mt-12 lg:mt-24 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col gap-10 justify-center items-center">
            <div class="grid grid-cols-3 gap-20 md:gap-72">
                <div class="flex flex-col items-center">
                    <div class="w-16 md:w-24 h-16 md:h-24 bg-[#5C342A] rounded-xl"></div>
                    <p class="text-gray-900 md:text-lg mt-2">#5C342A</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 md:w-24 h-16 md:h-24 bg-[#B48B52] rounded-xl"></div>
                    <p class="text-gray-900 md:text-lg mt-2">#B48B52</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 md:w-24 h-16 md:h-24 bg-[#F8F4EC] rounded-xl"></div>
                    <p class="text-gray-900 md:text-lg mt-2">#F8F4EC</p>
                </div>
            </div>
            <p class="text-center md:text-lg text-gray-900 mx-auto lg:mx-44">Warna emas dan coklat sebagai simbol kebijaksanaan, kematangan, dan kredibilitas dalam menjalankan tugas organisasi.</p>
        </section>
    </div>
    <Footer/>
</template>
