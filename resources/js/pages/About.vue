<script setup>
import { Head } from '@inertiajs/vue3'
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import fotoParlemen from '/public/images/home_parlemen.png';
</script>
<template>
    <Head title="DPM FILKOM UB - Tentang"/>
    <Navbar/>
    <div class="about">
        <!-- Header -->
        <header class="relative py-20 px-4 sm:px-6 lg:px-8 flex justify-center items-center text-center
                bg-[url('/images/home_parlemen.png')] bg-center bg-cover bg-no-repeat h-200">
            <div class="absolute inset-0 bg-neutral-950/50"></div>
            <div class="relative z-10 text-center text-white">
                <p class="bg-[#B48B52] mx-auto w-[150px] px-2 py-2 rounded-4xl font-medium text-xl mb-2">Tentang</p>
                <h1 class="text-6xl font-bold mb-2">DPM FILKOM UNIVERSITAS BRAWIJAYA</h1>
                <p class="text-xl mb-5">Parlemen Katha Mantrana 2025</p>
                <h2 class="text-2xl font-semibold">Tak Kenal Maka Kenalan Yuk!</h2>
            </div>
        </header>
        <!-- Visi -->
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8 flex flex-col items-center text-center">
            <h2>Visi</h2>
            <p>Mewujudkan DPM FILKOM Sebagai lembaga yang menjalankan fungsi aspirasi, legislasi, dan pengawasan dengan mengutamakan nilai integritas serta Keterbukaan untuk kemaslahatan KBM FILKOM.</p>
        </section>
        <!-- Misi -->
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <h2>Misi</h2>
            <div class="grid">
                <div class="">
                    <span>1</span>
                    <p><strong>Proaktif dan Responsif</strong> dalam menindaklanjuti aspirasi KBMFILKOM.</p>
                </div>
                <div class="">
                    <span>2</span>
                    <p><strong>Meningkatkan partisipasi publik</strong> dengan mendorong penetapan keputusan bersifat kolektif dan inklusif.</p>
                </div>
                <div class="">
                    <span>3</span>
                    <p><strong>Mengutamakan akuntabilitas</strong> guna menciptakan pengawasan yang optimal.</p>
                </div>
                <div class="">
                    <span>4</span>
                    <p><strong>Mengoptimalkan transparasi</strong> dengan mendorong penetapan keputusan bersifat kolektif dan inklusif.</p>
                </div>
                <div class="">
                    <span>5</span>
                    <p><strong>Mengedepankan kesetaraan</strong> untuk mewujudkan demokrasi yang bebas dan adil</p>
                </div>
                <div class="">
                    <span>6</span>
                    <p><strong>Mendorong kolaborasi</strong> sebagai bentuk keharmonisan untuk mencapai tujuan bersama.</p>
                </div>
            </div>
        </section>
        <!-- Nilai -->
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8 flex flex-col justify-around items-center">
            <h2>Nilai</h2>
            <div class="flex flex-row gap-4">
                <p class="text-[#5B352C] p-2 rounded-sm outline-2 outline-[#5B352C]">Demokrasi</p>
                <p class="text-[#5B352C] p-2 rounded-sm outline-2 outline-[#5B352C]">inklusif</p>
                <p class="text-[#5B352C] p-2 rounded-sm outline-2 outline-[#5B352C]">Kebebasan</p>
                <p class="text-[#5B352C] p-2 rounded-sm outline-2 outline-[#5B352C]">integritas</p>
                <p class="text-[#5B352C] p-2 rounded-sm outline-2 outline-[#5B352C]">Transparasi</p>
                <p class="text-[#5B352C] p-2 rounded-sm outline-2 outline-[#5B352C]">Akuntabilitas</p>
            </div>
        </section>
        <!-- Logo -->
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8">
            <h2></h2>
        </section>
        <!-- Warna -->
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8">
            <h2></h2>
        </section>
    </div>
    <Footer/>
</template>
