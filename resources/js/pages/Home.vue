<script setup>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import home_header from '/public/images/home_header.png';

</script>

<template>
    <Navbar/>
    <div class="home pt-10 pb-10">
        <header class="Header mt-20 pl-50 pr-50 flex flex-row justify-center items-center">
            <div class="text-container">
                <H2 class="text-medium text-[#B48B52] text-2xl font-semibold">DPM FILKOM UB - Katha Mantrana</H2>
                <H1 class="text-bold text-[#5B352C] text-5xl font-bold">Bangkitkan Asa,<br>Gelorakan Suara!</H1>
                <p class="text-medium text-neutral-700">Lembaga legislatif tingkat fakultas yang berperan sebagai penjembatan aspirasi mahasiswa,  bertanggung jawab atas pembentukan dan pengesahan hukum di tingkat mahasiswa, dan pengawas kinerja Badan Ekskutif Mahasiswa FILKOM UB.</p>
            </div>
            <div class="img-container">
                <img :src="home_header" alt="Gedung GKM" class="">
            </div>
        </header>
        <section class="proker mt-20">
            <h2 class="mb-10 text-4xl text-[#5B352C] font-bold" align="center">Program Kerja Unggulan</h2>
            <div class="proker-carousel">
                <div class="proker-card text-neutral-900">
                    <img src="" alt="">
                    <p>Portal Aspirasi</p>
                </div>
                <div class="proker-card text-neutral-900">
                    <img src="" alt="">
                    <p>Musyawarah Evaluasi Lembaga</p>
                </div>
                <div class="proker-card text-neutral-900">
                    <img src="" alt="">
                    <p>legislative Academy</p>
                </div>
            </div>
        </section>
        <section class="tagline bg-[#5B352C] m-0 p-0 h-24"></section>
        <section class="welcome bg-white m-0 p-0 h-100"></section>
    </div>
    <Footer/>
</template>

<style scoped>
</style>
