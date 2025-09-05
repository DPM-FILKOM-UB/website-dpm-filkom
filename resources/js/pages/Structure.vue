<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import StrukurOrganisasi from '/public/images/so_struktur_organisasi.png';
// Logo
import logoKoor from '/public/images/logo_koor.png';
import logoSekjen from '/public/images/logo_sekjen.png';
import logoKomisi from '/public/images/logo_komisi.png';
import logoBaas from '/public/images/logo_baas.png';
import logoBaleg from '/public/images/logo_baleg.png';
import logoMedkom from '/public/images/logo_medkom.png';
// KOOR
import Jildan from '/public/images/fungsionaris/Jildan Adam Zein_Koordinator.jpeg';
// SEKJEN
import Jovita from '/public/images/fungsionaris/Jovita Dhea M_Sekretaris Jenderal.jpeg';
import Azzra from '/public/images/fungsionaris/AZZRA SABILLA_Staf Khusus.jpeg';
import Dina from '/public/images/fungsionaris/Annisa Maulidina_Staf Khusus.jpeg';
// MEDKOM
import Devinda from '/public/images/fungsionaris/Devinda Herast_Biro Media Komunikasi.jpeg';
import Erpan from '/public/images/fungsionaris/Irfan A_Biro Medkom.jpeg';
import Ibnu from '/public/images/fungsionaris/Ibnu Fauzi_Komunikasi.jpeg';
import Althaf from '/public/images/fungsionaris/Muhammad Althaf Izzur Rizal_Biro Medkom.jpeg';
import Akhtar from '/public/images/fungsionaris/Akhtar Hafiz P_Biro Medkom.jpeg';
import Anya from '/public/images/fungsionaris/Anya_Biro Medkom.jpeg';
import Abbyan from '/public/images/fungsionaris/Abbyan E.Y_Biro Medkom.jpeg';
import Syafi from '/public/images/fungsionaris/Akhmad Syafiul_Biro Medkom.jpeg';
import Damar from '/public/images/fungsionaris/Yohanes Damar_Komunikasi.jpeg';
// import Raden from '/';
import Vara from '/public/images/fungsionaris/Vara Vaulina_Komunikasi.jpeg';
// import Rafi from '/';

const showModalKoor = ref(false);
const showModalSekjen = ref(false);
const showModalMedkom = ref(false);
</script>
<template>
    <Head title="DPM FILKOM UB - Struktur Orgasisasi"/>
    <!-- <Navbar/> -->
    <Navbar :default-white="false"/>
    <div class="structure">
        <!-- Header -->
        <header class="relative bg-[url('/images/structure_header.png')] bg-center bg-contain bg-no-repeat py-[20%] px-4 sm:px-6 md:px-16 lg:px-20 text-center">
            <div class="absolute inset-0 bg-bottom bg-gradient-to-b from-black/60 from-5% via-white/40 via-70% to-white flex items-center justify-center">
                <h1 class="text-6xl font-bold text-white text-shadow-md text-shadow-black">Struktur Organisasi</h1>
            </div>
        </header>
        <!-- Kayaknya gambar struktur organisasinya (yang kaya pohon itu)-->
        <section class="my-10 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8 flex items-center justify-center">
            <img :src="StrukurOrganisasi" alt="Struktur Organisasi DPM FILKOM UB" class="p-12 outline-2 rounded-xl shadow-lg outline-[#5B352C] bg-linear-to-bl from-slate-100 to-[#B48B52]">
        </section>
        <!-- Struktur Organisasi -->
        <section class="my-20 mx-auto max-w-[80%] px-4 sm:px-6 lg:px-8 flex flex-col gap-4 text-white text-center">
            <h2 class="text-[#5B352C] text-4xl font-semibold mb-4">Kenali Kami Lebih Lanjut!</h2>
            <div class="grid grid-cols-2 gap-4 justify-center text-2xl font-semibold">
                <div @click="showModalKoor = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Koordinator</div>
                <div @click="showModalSekjen = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Sekertaris Jendral</div>
            </div>
            <div class="grid grid-cols-3 gap-4 justify-center text-2xl font-semibold">
                <div @click="showModalMedkom = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Komisi 1</div>
                <div @click="showModalMedkom = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Komisi 2</div>
                <div @click="showModalMedkom = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Komisi 3</div>
                <div @click="showModalMedkom = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Badan Legislasi</div>
                <div @click="showModalMedkom = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Badan Aspirasi</div>
                <div @click="showModalMedkom = true" class="p-35 outline-1 rounded-xl bg-[#B48B52] bg-[url('/images/home_parlemen.png')] bg-top bg-blend-multiply cursor-pointer transition duration-150 ease-in-out hover:-translate-y-2">Biro Media dan Komunikasi</div>
            </div>
        </section>
        <!-- POP UP STRUKTUR ORGANISASI -->
        <!-- Koordinator -->
        <div v-if="showModalKoor" @click="showModalKoor = false" class="fixed inset-0 bg-black/50 bg-opacity-70 flex items-center justify-center z-50">
            <div class="bg-white p-10 rounded-xl shadow-lg max-w-5xl min-h-[500px] w-full relative flex flex-row items-center justify-center gap-5" @click.stop>
                <div class="p-2">
                    <img :src="Jildan" alt="Koordinator DPM FILKOM UB" class="w-255 h-auto rounded-2xl shadow-lg">
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
            <div class="bg-white p-10 rounded-xl shadow-lg max-w-5xl min-h-[500px] w-full relative flex flex-row items-center justify-center gap-5" @click.stop>
                <div class="p-2">
                    <img :src="Jovita" alt="Sekertaris Jendral DPM FILKOM UB" class="w-200 h-auto rounded-2xl shadow-lg">
                </div>
                <div class="selamat-datang flex flex-col relative text-justify">
                    <!-- Ini masih belum nimpa gambar (mungkin bisa pake absolute atau semacamnya) -->
                    <div class="flex flex-row gap-4 items-center mb-5">
                        <div class="card bg-[#F8F4EC] p-2 border-[#5B352C] border-2 rounded-[100%]">
                            <img :src="logoSekjen" alt="Logo Sekertaris Jendral" class="w-15 h-auto">
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#5B352C] text-4xl font-bold ">Sekertaris Jendral</h3>
                            <h4 class="text-[#B48B52] text-lg font-semibold">Jovita Dhea Mardiana</h4>
                        </div>
                    </div>
                    <p class="text-neutral-700 text-lg mb-8">Memiliki tugas dan wewenang untuk mengatur rumah tangga lembaga DPM FILKOM serta menjaga arah gerak lembaga, dan menjaga hubungan internal dan eksternal lembaga</p>
                    <p class="text-neutral-700 text-lg mb-2">Staf Khusus Kesekretariatan</p>
                    <div class="flex gap-4">
                        <div class="flex flex-col items-center">
                            <img :src="Azzra" alt="Azzra" class="w-16 h-16 rounded-full shadow-md">
                        </div>
                        <div class="flex flex-col items-center">
                            <img :src="Dina" alt="Dina" class="w-16 h-16 rounded-full shadow-md">
                        </div>
                    </div>
                    <span class="text-neutral-700 text-md mt-1">Azzra - Dina</span>
                </div>
                <button @click="showModalSekjen = false" class="absolute top-3 right-3 px-3 py-1 bg-[#B48B52] text-white rounded-md hover:bg-[#8c6a3c] transition">✕</button>
            </div>
        </div>
        <!-- Media dan Komunikasi -->
        <div v-if="showModalMedkom" @click="showModalMedkom = false" class="fixed inset-0 bg-black/50 bg-opacity-70 flex items-center justify-center z-50">
            <div class="bg-white p-10 rounded-xl shadow-lg max-w-5xl min-h-[500px] w-full relative flex flex-col gap-5" @click.stop>
                <!-- Nama Divisi -->
                <div class="flex flex-row gap-4 items-center mb-5">
                    <div class="bg-[#F8F4EC] p-2 border-[#5B352C] border-2 rounded-[100%]">
                        <img :src="logoMedkom" alt="Logo Biro Media dan Komunikasi" class="w-15 h-auto">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-[#5B352C] text-4xl font-bold ">Biro Media dan Komunikasi</h3>
                        <h4 class="text-[#B48B52] text-lg font-md">3 Anggota Badan Pengurus Harian, 10 Staf Ahli</h4>
                    </div>
                </div>
                <!-- Foto BPH -->
                <div class="flex items-center justify-center">
                    <div class="flex flex-row gap-4">
                        <!-- Deskripsi -->
                        <div class="bg-[url('/images/logo_medkom.png')] bg-no-repeat flex flex-col max-w-80 p-4 bg-white/80 rounded-2xl shadow-lg flex-1">
                            <div class="bg-white/80">
                                <p class="text-neutral-700 text-md">Bertanggung jawab mengelola serta mengembangkan konten kreatif baik dalam bentuk visual maupun audio visual untuk keperluan promosi, informasi, dan dokumentasi kegiatan DPM FILKOM UB.</p>
                            </div>
                        </div>
                        <!-- Devinda -->
                        <div class="flex flex-col items-center text-center bg-white rounded-2xl shadow-lg p-4 flex-1">
                            <img :src="Devinda" alt="Ketua Biro Media dan Komunikasi" class="w-50 h-auto rounded-2xl shadow-lg">
                            <h4 class="font-bold my-3">Devinda Herast</h4>
                            <p class="text-md">Ketua Biro Media dan Komunikasi</p>
                        </div>
                        <!-- Erpan -->
                        <div class="flex flex-col items-center text-center bg-white rounded-2xl shadow-lg p-4 flex-1">
                            <img :src="Erpan" alt="Wakil Ketua Biro Media" class="w-50 h-auto rounded-2xl shadow-lg">
                            <h4 class="font-bold my-3">Irfan Abdurrahman</h4>
                            <p class="text-md">Wakil Ketua Biro Media</p>
                        </div>
                        <!-- Ibnu -->
                        <div class="flex flex-col items-center text-center bg-white rounded-2xl shadow-lg p-4 flex-1">
                            <img :src="Ibnu" alt="Wakil Ketua Biro Komunikasi" class="w-50 h-auto rounded-2xl shadow-lg">
                            <h4 class="font-bold my-3">Ibnu Nabel</h4>
                            <p class="text-md">Wakil Ketua Biro Komunikasi</p>
                        </div>
                    </div>
                </div>
                <!-- Staf Media dan Komunikasi -->
                <div class="flex flex-row relative text-justify gap-10 align-center justify-center mt-6">
                    <p class="text-neutral-700 text-lg mb-2">Staf Ahli Biro</p>
                    <!-- Media -->
                    <div class="flex flex-col">
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <img :src="Althaf" alt="Althaf" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                            <div class="flex flex-col items-center">
                                <img :src="Akhtar" alt="Akhtar" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                            <div class="flex flex-col items-center">
                                <img :src="Anya" alt="Anya" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                            <div class="flex flex-col items-center">
                                <img :src="Abbyan" alt="Abbyan" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                            <div class="flex flex-col items-center">
                                <img :src="Syafi" alt="Syafi" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                        </div>
                        <span class="text-neutral-700 text-md mt-1">Media | Althaf - Akhtar - Anya - Abbyan - Syafi</span>
                    </div>
                    <!-- Komunikasi -->
                    <div class="flex flex-col">
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <img :src="Azzra" alt="Azzra" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                            <div class="flex flex-col items-center">
                                <img :src="Dina" alt="Dina" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                            <div class="flex flex-col items-center">
                                <img :src="Dina" alt="Dina" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                            <div class="flex flex-col items-center">
                                <img :src="Dina" alt="Dina" class="w-16 h-16 rounded-full shadow-md">
                            </div>
                        </div>
                        <span class="text-neutral-700 text-md mt-1">Komunikasi | Damar - Raden - Vara - Rafi</span>
                    </div>
                </div>
                <button @click="showModalMedkom = false" class="absolute top-3 right-3 px-3 py-1 bg-[#B48B52] text-white rounded-md hover:bg-[#8c6a3c] transition">✕</button>
            </div>
        </div>
    </div>
    <Footer/>
</template>
