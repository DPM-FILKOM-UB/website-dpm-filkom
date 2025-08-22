<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import StrukurOrganisasi from '/public/images/so_struktur_organisasi.png';
import Jildan from '/public/images/home_welcome_jildan.png';
import logoKoor from '/public/images/logo_koor.png';
import logoSekjen from '/public/images/logo_sekjen.png';
import logoKomisi from '/public/images/logo_komisi.png';
import logoBaas from '/public/images/logo_baas.png';
import logoBaleg from '/public/images/logo_baleg.png';
import logoMedkom from '/public/images/logo_medkom.png';

const showModalKoor = ref(false);
const showModalSekjen = ref(false);
</script>
<template>
    <Head title="DPM FILKOM UB - Struktur Orgasisasi"/>
    <Navbar/>
    <div class="structure">
        <!-- Header -->
        <header class="relative bg-[url('/images/home_parlemen.png')] bg-center py-65 mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="absolute inset-0 bg-bottom bg-gradient-to-b from-[#5B352C]/70 from-5% via-white/40 via-70% to-white flex items-center justify-center">
                <h1 class="text-6xl font-bold text-white text-shadow-md text-shadow-black">Struktur Organisasi</h1>

            </div>
        </header>
        <!-- Kayaknya gambar struktur organisasinya (yang kaya pohon itu)
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8 flex items-center justify-center">
            <img :src="StrukurOrganisasi" alt="Struktur Organisasi DPM FILKOM UB" class="p-12 outline-2 rounded-xl shadow-lg outline-[#5B352C] bg-linear-to-bl from-slate-100 to-[#B48B52]">
        </section> -->
        <!-- Struktur Organisasi -->
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8 flex flex-col gap-4 text-white text-center">
            <h2 class="text-[#5B352C] text-4xl font-semibold mb-4">Kenali Kami Lebih Lanjut!</h2>
            <div class="grid grid-cols-2 gap-4 justify-center text-2xl font-semibold">
                <div @click="showModalKoor = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Koordinator</div>
                <div @click="showModalSekjen = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Sekertaris Jendral</div>
            </div>
            <div class="grid grid-cols-3 gap-4 justify-center text-2xl font-semibold">
                <div class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Komisi 1</div>
                <div class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Komisi 2</div>
                <div class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Komisi 3</div>
                <div class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Badan Legislasi</div>
                <div class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Badan Aspirasi</div>
                <div class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Biro Media dan Komunikasi</div>
            </div>
        </section>
        <!-- POP UP STRUKTUR ORGANISASI -->
        <!-- Koordinator -->
        <div v-if="showModalKoor" @click="showModalKoor = false" class="fixed inset-0 bg-black/50 bg-opacity-70 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-xl shadow-lg max-w-4xl w-[100%] relative flex flex-row items-center justify-center gap-5" @click.stop>
                <div class="p-2">
                    <img :src="Jildan" alt="Koordinator DPM FILKOM UB" class="w-300 h-auto">
                </div>
                <div class="selamat-datang flex flex-col relative text-justify">
                    <!-- Ini masih belum nimpa gambar (mungkin bisa pake absolute atau semacamnya) -->
                    <div class="flex flex-row gap-4 items-center mb-5">
                        <div class="card bg-[#F8F4EC] p-2 border-[#5B352C] border-2 rounded-[100%]">
                            <img :src="logoKoor" alt="Logo Koordinator" class="w-15 h-auto">
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#5B352C] text-4xl font-bold ">Koordinator</h3>
                            <h4 class="text-[#B48B52] text-lg font-semibold">Jildan Adam Zein</h4>
                        </div>
                    </div>
                    <p class="text-neutral-700 text-lg">Mengatur arah gerak serta bertanggung jawab terhadap seluruh kinerja dari anggota dewan dan mengkoordinasi antar badan dan komisi, membangun hubungan antar lembaga baik di dalam maupun di luar lingkungan KBM FILKOM.</p>
                </div>
                <button @click="showModalKoor = false" class="absolute top-3 right-3 px-3 py-1 bg-[#B48B52] text-white rounded-md hover:bg-[#8c6a3c] transition">✕</button>
            </div>
        </div>
        <!-- Sekjen -->
        <div v-if="showModalSekjen" @click="showModalSekjen = false" class="fixed inset-0 bg-black/50 bg-opacity-70 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-xl shadow-lg max-w-4xl w-[100%] relative flex flex-row items-center justify-center gap-5" @click.stop>
                <div class="p-2">
                    <img :src="Jildan" alt="Koordinator DPM FILKOM UB" class="w-300 h-auto">
                </div>
                <div class="selamat-datang flex flex-col relative text-justify">
                    <!-- Ini masih belum nimpa gambar (mungkin bisa pake absolute atau semacamnya) -->
                    <div class="flex flex-row gap-4 items-center mb-5">
                        <div class="card bg-[#F8F4EC] p-2 border-[#5B352C] border-2 rounded-[100%]">
                            <img :src="logoSekjen" alt="Logo Sekertat" class="w-15 h-auto">
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#5B352C] text-4xl font-bold ">Sekertaris Jendral</h3>
                            <h4 class="text-[#B48B52] text-lg font-semibold">Jovita Dhea Mardiana</h4>
                        </div>
                    </div>
                    <p class="text-neutral-700 text-lg">Memiliki tugas dan wewenang untuk mengatur rumah tangga lembaga DPM FILKOM serta menjaga arah gerak lembaga, dan menjaga hubungan internal dan eksternal lembaga</p>
                </div>
                <button @click="showModalSekjen = false" class="absolute top-3 right-3 px-3 py-1 bg-[#B48B52] text-white rounded-md hover:bg-[#8c6a3c] transition">✕</button>
            </div>
        </div>
    </div>
    <Footer/>
</template>
