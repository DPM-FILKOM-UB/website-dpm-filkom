<script setup>
import logo_dpmfilkomub from '/public/images/logo_dpmfilkomub.png';
</script>
<template>
    <!-- TODO: BELUM RESPONSIF -->
  <nav class="bg-white py-4 pt-8 pb-8 text-[#5B352C] shadow-md">
    <div class="flex mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 justify-between items-center">
        <div class="flex items-center gap-10">
            <img :src="logo_dpmfilkomub" alt="Logo DPM FILKOM UB" class="w-[45px] h-[45px]">
            <div class="flex flex-col gap-4 sm:flex-row gap-4 sm:gap-10 text-lg font-semibold">
                <a href="/" class="hover:text-[#B48B52] transition">Beranda</a>
                <a href="#" class="hover:text-[#B48B52] transition">Struktur Organisasi</a>
                <a href="#" class="hover:text-[#B48B52] transition">Informasi</a>
                <a href="#" class="hover:text-[#B48B52] transition">Tentang</a>
            </div>
        </div>
        <div class="flex flex-row gap-4 text-lg font-semibold items-center">
            <a href="#" class="bg-[#B48B52] text-white p-2 pr-6 pl-6 rounded-sm outline-2 outline-[#B48B52] hover:text-neutral-800 transition">Portal Aspirasi</a>
            <a href="#" class="text-[#B48B52] p-2 rounded-sm outline-2 outline-[#B48B52] hover:text-cyan-700 transition">Jaringan dan Informasi Hukum</a>
        </div>
    </div>
  </nav>
</template>
