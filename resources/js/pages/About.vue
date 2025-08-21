<script setup>
import { Head } from '@inertiajs/vue3'
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
</script>
<template>
    <Head title="DPM FILKOM UB - Tentang"/>
    <Navbar class=""/>
    <div class="about">
        <!-- Header -->
        <header class="relative py-20 px-4 sm:px-6 md:px-16 lg:px-20 flex justify-center items-center text-center
                bg-[url('/images/home_parlemen.png')] bg-center bg-cover bg-no-repeat h-screen">
            <div class="absolute inset-0 bg-gradient-to-b from-black/90 to-black/0"></div>
            <div class="relative z-10 text-center text-white">
                <p class="bg-[#B48B52] mx-auto w-[150px] px-2 py-2 rounded-4xl text-lg mb-2">Tentang</p>
                <h1 class="text-5xl font-medium mb-2">DPM FILKOM UNIVERSITAS BRAWIJAYA</h1>
                <h2 class="text-2xl">Tak Kenal Maka Kenalan Yuk!</h2>
            </div>
            <div class="absolute flex justify-center -bottom-12 bg-[#5B352C] h-24 items-center rounded-full">
                <p class="text-2xl text-white py-6 px-96">Parlemen Katha Mantrana 2025</p>
            </div>
        </header>
        <!-- Visi -->
        <section class="mt-40 mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col items-center justify-center">
            <div class="gap-5 flex flex-col items-center px-10 py-5 text-center">
                <h2 class="text-4xl text-[#5B352C] font-medium">Visi</h2>
                <p class="text-lg text-gray-700">Mewujudkan DPM FILKOM Sebagai lembaga yang menjalankan fungsi aspirasi, legislasi, dan pengawasan dengan mengutamakan nilai integritas serta Keterbukaan untuk kemaslahatan KBM FILKOM.</p>
            </div>
        </section>
        <!-- Misi -->
        <section class="mt-24 mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col justify-center gap-6 items-center">
            <h2 class="text-4xl text-[#5B352C] font-medium">Misi</h2>
            <div class="grid gap-6 grid-cols-3">
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#F8F4EC] rounded-xl text-gray-900">
                    <h1 class="font-semibold text-xl">1</h1>
                    <p class="text-xl"><strong>Proaktif dan Responsif</strong> dalam menindaklanjuti aspirasi KBMFILKOM.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#5B352C] rounded-xl text-white">
                    <h1 class="font-semibold text-xl">2</h1>
                    <p class="text-xl"><strong>Meningkatkan partisipasi publik</strong> dengan mendorong penetapan keputusan bersifat kolektif dan inklusif.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#F8F4EC] rounded-xl text-gray-900">
                    <h1 class="font-semibold text-xl">3</h1>
                    <p class="text-xl"><strong>Mengutamakan akuntabilitas</strong> guna menciptakan pengawasan yang optimal.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#5B352C] rounded-xl text-white">
                    <h1 class="font-semibold text-xl">4</h1>
                    <p class="text-xl"><strong>Mengoptimalkan transparasi</strong> dengan mendorong penetapan keputusan bersifat kolektif dan inklusif.</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#F8F4EC] rounded-xl text-gray-900">
                    <h1 class="font-semibold text-xl">5</h1>
                    <p class="text-xl"><strong>Mengedepankan kesetaraan</strong> untuk mewujudkan demokrasi yang bebas dan adil</p>
                </div>
                <div class="p-10 h-64 gap-2.5 flex flex-col text-center bg-[#5B352C] rounded-xl text-white">
                    <h1 class="font-semibold text-xl">6</h1>
                    <p class="text-xl"><strong>Mendorong kolaborasi</strong> sebagai bentuk keharmonisan untuk mencapai tujuan bersama.</p>
                </div>
            </div>
        </section>
        <!-- Nilai -->
        <section class="mt-24 mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col gap-6 justify-around items-center">
            <h2 class="text-4xl text-[#5B352C] font-medium">Nilai</h2>
            <div class="flex gap-6 justify-start">
                <p class="text-[#5B352C] text-xl py-4 px-10 rounded-sm border-1 border-[#5B352C]">Demokrasi</p>
                <p class="text-[#5B352C] text-xl py-4 px-10 rounded-sm border-1 border-[#5B352C]">Inklusif</p>
                <p class="text-[#5B352C] text-xl py-4 px-10 rounded-sm border-1 border-[#5B352C]">Kebebasan</p>
                <p class="text-[#5B352C] text-xl py-4 px-10 rounded-sm border-1 border-[#5B352C]">Integritas</p>
                <p class="text-[#5B352C] text-xl py-4 px-10 rounded-sm border-1 border-[#5B352C]">Transparasi</p>
                <p class="text-[#5B352C] text-xl py-4 px-10 rounded-sm border-1 border-[#5B352C]">Akuntabilitas</p>
            </div>
        </section>
        <!-- Logo -->
        <section class="my-20 mx-20 px-4 sm:px-6 md:px-16 lg:px-20">
            <h2 class="text-4xl text-[#5B352C] font-medium">LOGO DPM FILKOM UB</h2>
            <div class="justify-center items-center flex flex-col mt-60 mb-80">
                <div class="absolute ml-196 -mt-160 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo-5-orang.png" alt="" class="h-20 ">
                    <p class="text-center text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-1.png" alt="" class="h-50 absolute ml-72 -mt-[400px]">
                <div class="absolute mr-208 -mt-96 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo-5-orang.png" alt="" class="h-20 ">
                    <p class="text-center text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-3.png" alt="" class="h-40 absolute mr-72 -mt-44">
                <img src="/public/images/logo_dpmfilkomub.png" alt="" class="h-80 w-auto justify-center mx-auto">
                <div class="absolute ml-180 -mb-120 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo-buku-terbuka.png" alt="" class="h-20 ">
                    <p class="text-center text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-2.png" alt="" class="h-40 absolute ml-72 -mb-80">
                <div class="absolute mr-196 -mb-140 justify-center items-center flex flex-col gap-5">
                    <img src="/public/images/logo_dpmfilkomub.png" alt="" class="h-20 ">
                    <p class="text-center text-lg">Lorem ipsum</p>
                </div>
                <img src="/public/images/vector-4.png" alt="" class="h-56 absolute mr-56 -mb-72">
            </div>
        </section>
        <!-- Warna -->
        <section class="mt-28 mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col gap-10 justify-center items-center">
            <div class="grid grid-cols-3 gap-72">
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 bg-[#5C342A] rounded-xl"></div>
                    <p class="text-gray-900 text-lg mt-2">#5C342A</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 bg-[#B48B52] rounded-xl"></div>
                    <p class="text-gray-900 text-lg mt-2">#B48B52</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 bg-[#F8F4EC] rounded-xl"></div>
                    <p class="text-gray-900 text-lg mt-2">#F8F4EC</p>
                </div>
            </div>
            <p class="text-center text-lg text-gray-900 mx-68">Warna emas dan coklat sebagai simbol kebijaksanaan, kematangan, dan kredibilitas dalam menjalankan tugas organisasi.</p>
        </section>
    </div>
    <Footer/>
</template>
