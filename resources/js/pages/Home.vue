<script setup>
import { Head } from '@inertiajs/vue3'
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import home_header from '/public/images/home_header.png';
import logoDPM from '/public/images/logo_dpmfilkomub.png';
import prokerPA from '/public/images/home_proker_pa.png';
import prokerLA from '/public/images/home_proker_la.png';
import prokerMEL from '/public/images/home_proker_mel.png';
import welcomePotrait from '/public/images/home_welcome_jildan.png';
import fotoParlemen from '/public/images/home_parlemen.png';
import logoKoor from '/public/images/logo_koor.png';
import logoSekjen from '/public/images/logo_sekjen.png';
import logoKomisi from '/public/images/logo_komisi.png';
import logoBaas from '/public/images/logo_baas.png';
import logoBaleg from '/public/images/logo_baleg.png';
import logoMedkom from '/public/images/logo_medkom.png';
</script>

<template>
    <Head title="DPM FILKOM UB - Beranda"/>
    <Navbar/>
    <div class="home mt-40">
        <!-- Header -->
        <header class="header my-16 md:my-20 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col lg:flex-row justify-center items-center gap-10">
            <div class="text-container lg:max-w-1/2 gap-4">
                <H2 class="text-[#B48B52] text-lg md:text-2xl mb-2">DPM FILKOM UB - Katha Mantrana</H2>
                <H1 class="text-[#5B352C] text-3xl md:text-5xl font-semibold mb-10">Bangkitkan Asa,<br>Gelorakan Suara!</H1>
                <p class="md:text-lg text-neutral-700 max-w-fit container text-left md:text-justify">Lembaga legislatif tingkat fakultas yang berperan sebagai penjembatan aspirasi mahasiswa,  bertanggung jawab atas pembentukan dan pengesahan hukum di tingkat mahasiswa, dan pengawas kinerja Badan Ekskutif Mahasiswa FILKOM UB.</p>
            </div>
            <img :src="home_header" alt="Gedung GKM" class="w-full lg:w-1/2 shadow-[0px_10px_20px_0px_rgba(0,0,0,0.25)] rounded-3xl">
        </header>
        <!-- Program Kerja -->
        <section class="proker my-16 md:my-20 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20">
            <h2 class="mb-15 text-2xl md:text-4xl text-[#5B352C] font-semibold text-center">Program Kerja Unggulan</h2>
            <div class="proker-carousel flex flex-col lg:flex-row gap-8 lg:gap-4 items-center justify-around">
                <div class="proker-card text-neutral-900 flex flex-row lg:flex-col items-center gap-4">
                    <img :src="prokerPA" alt="Program Kerja Portal Aspirasi" class="w-1/2 lg:w-auto">
                    <div class="flex flex-col items-center">
                        <hr class="lg:hidden w-full border-[#B48B52] border-1 rounded ml-auto">
                        <h5 class="text-center text-lg lg:text-xl font-normal lg:mt-4">Portal Aspirasi</h5>
                        <hr class="lg:hidden w-full border-[#B48B52] border-1 rounded ml-auto">
                    </div>
                </div>
                <div class="proker-card text-neutral-900 flex flex-row-reverse lg:flex-col items-center gap-4">
                    <img :src="prokerMEL" alt="Program Kerja Musyawarah Evaluasi Lembaga" class="w-1/2 lg:w-auto">
                    <div class="flex flex-col items-center">
                        <hr class="lg:hidden w-full border-[#B48B52] border-1 rounded ml-auto">
                        <h5 class="text-center text-lg lg:text-xl font-normal lg:mt-4">Musyawarah Evaluasi Lembaga</h5>
                        <hr class="lg:hidden w-full border-[#B48B52] border-1 rounded ml-auto">
                    </div>
                </div>
                <div class="proker-card text-neutral-900 flex flex-row lg:flex-col items-center gap-4">
                    <img :src="prokerLA" alt="Program Kerja Legislative Academy" class="w-1/2 lg:w-auto">
                    <div class="flex flex-col items-center">
                        <hr class="lg:hidden w-full border-[#B48B52] border-1 rounded ml-auto">
                        <h5 class="text-center text-lg lg:text-xl font-normal lg:mt-4">Legislative Academy</h5>
                        <hr class="lg:hidden w-full border-[#B48B52] border-1 rounded ml-auto">
                    </div>
                </div>
            </div>
        </section>
        <!-- Tagline -->
        <section class="relative w-full py-20 md:py-35 h-24 md:h-40 bg-[#6a3b32] flex items-center justify-center text-white overflow-hidden">
            <!-- Watermark di kanan -->
            <img :src="logoDPM" alt="Logo DPM"
                class="absolute right-4 top-1/2 -translate-y-1/2 opacity-20 grayscale brightness-200 w-60 md:w-90 h-auto pointer-events-none select-none">

            <!-- Teks di tengah -->
            <div class="text-center">
                <p class="md:text-xl mb-2">Parlemen Katha Mantrana</p>
                <h4 class="text-2xl md:text-4xl italic font-semibold">#BangkitkanAsaGelorakanSuara</h4>
            </div>
        </section>
        <!-- Ucapan Selamat Datang -->
        <section class="my-16 md:my-20 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col lg:flex-row gap-15 justify-center items-center">
            <!-- Gambar dan Identitas -->
             <div class="flex">
                <img :src="welcomePotrait" class="lg:max-w-100 lg:h-auto" alt="Koordinator DPM FILKOM 2025 Jildan Adam Zein">
                <div class="flex lg:hidden gap-8 items-center mt-16">
                    <div class="absolute left-36 -mb-56 card bg-white border-[#5B352C] border-r-4 border-b-4 py-2.5 px-5 rounded-[10px] w-64">
                        <h4 class="text-[#5B352C]">Jildan Adam Zein</h4>
                        <h5 class="text-neutral-700 text-sm">Koordinator DPM FILKOM 2025</h5>
                    </div>
                </div>
             </div>
            <!-- Teks Selamat datang -->
            <div class="selamat-datang flex flex-col relative">
                <h4 class="text-[#B48B52] text-lg font-medium ">Selamat Datang!</h4>
                <h3 class="text-[#5B352C] text-3xl md:text-4xl font-semibold mb-5">Laman Resmi DPM FILKOM UB</h3>
                <p class="text-neutral-700 md:text-lg md:mb-10">Sebagai representasi suara mahasiswa, kami berkomitmen untuk menjadi jembatan aspirasi, pengawal kebijakan, dan mitra strategis dalam memajukan FILKOM. Mari bersama membangun lingkungan akademik yang inspiratif dan berprestasi.</p>
                <div class="hidden lg:flex gap-8 items-center mt-16">
                    <div class="absolute -left-52 card bg-white border-[#5B352C] border-r-4 border-b-4 py-2.5 px-5 rounded-[10px] w-68">
                        <h4 class="text-[#5B352C] text-xl">Jildan Adam Zein</h4>
                        <h5 class="text-neutral-700">Koordinator DPM FILKOM 2025</h5>
                    </div>
                    <hr class="w-7/8 border-[#B48B52] border-1 rounded ml-auto">
                </div>
            </div>
        </section>
        <!-- Foto Bareng Parlemen dan Logonya -->
        <section class="my-16 md:my-20 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20 flex flex-col gap-10">
            <img :src="fotoParlemen" class="w-full shadow-[0px_10px_20px_0px_rgba(0,0,0,0.25)] rounded-xl" alt="Foto Parlemen Katha Mantrana">
            <div class="flex flex-row items-center justify-center gap-4 md:gap-10 mt-6">
                <a href="#"><img class="w-20 h-auto transition-transform duration-100 hover:animate-spin" :src="logoKoor" alt="logo Koordinator"></a>
                <a href="#"><img class="w-20 h-auto transition-transform duration-100 hover:animate-spin" :src="logoSekjen" alt="logo Sekertaris Jendral"></a>
                <a href="#"><img class="w-20 h-auto transition-transform duration-100 hover:animate-spin" :src="logoKomisi" alt="logo Komisi"></a>
                <a href="#"><img class="w-20 h-auto transition-transform duration-100 hover:animate-spin" :src="logoBaas" alt="logo Badan Aspirasi"></a>
                <a href="#"><img class="w-20 h-auto transition-transform duration-100 hover:animate-spin" :src="logoBaleg" alt="logo Badan Legislasi"></a>
                <a href="#"><img class="w-20 h-auto transition-transform duration-100 hover:animate-spin" :src="logoMedkom" alt="logo Biro Media dan Komunikasi"></a>
            </div>
        </section>
        <!-- Kegiatan, sumpah ini brarti isinya data kan ya? -->
        <section class="my-16 md:my-20 mx-8 xl:mx-20 px-4 sm:px-6 md:px-16 lg:px-20">
            <h2 class="mb-15 text-2xl md:text-4xl text-[#5B352C] font-semibold text-center">Kegiatan DPM FILKOM UB</h2>
            <div class="flex flex-row gap-4 items-center justify-around mb-10">
                <div class=" text-neutral-900">
                    <img :src="prokerPA" alt="Program Kerja Portal Aspirasi">
                </div>
                <div class="proker-card text-neutral-900">
                    <img :src="prokerMEL" alt="Program Kerja Musyawarah Evaluasi Lembaga">
                </div>
                <div class="proker-card text-neutral-900">
                    <img :src="prokerLA" alt="Program Kerja Legislative Academy">
                </div>
            </div>
            <div class="flex justify-end items-center">
                <a href="#" class="bg-[#B48B52] text-white text-xs md:text-base p-2 px-6 rounded-sm outline-2 outline-[#B48B52] hover:text-neutral-900 transition">Lihat Lebih Banyak Kegiatan DPM FILKOM UB →</a>
            </div>
        </section>
    </div>
    <Footer/>
</template>

<style scoped>
</style>
