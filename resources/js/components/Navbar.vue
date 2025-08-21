<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";
import logo_dpmfilkomub from "/public/images/logo_dpmfilkomub.png";

const props = defineProps({
  defaultWhite: { type: Boolean, default: false },
});

const mobileMenuOpen = ref(false);
const toggleMobileMenu = () => (mobileMenuOpen.value = !mobileMenuOpen.value);

const scrolled = ref(false);

onMounted(() => {
  if (!props.defaultWhite) {
    const handleScroll = () => {
      scrolled.value = window.scrollY > 50;
    };
    window.addEventListener("scroll", handleScroll);
    handleScroll();
    onUnmounted(() => window.removeEventListener("scroll", handleScroll));
  } else {
    scrolled.value = true;
  }
});
</script>

<template>
  <nav
    :class="[
      'py-6 px-4 sm:px-6 md:px-16 lg:px-20 shadow-md w-full fixed top-0 z-50 transition-all duration-300',
      scrolled ? 'bg-white text-[#5B352C]' : 'bg-transparent text-white'
    ]"
  >
    <div class="flex justify-between items-center mx-6 xl:mx-20">
      <div class="flex items-center gap-6">
        <img :src="logo_dpmfilkomub" alt="Logo" class="w-[46px] h-[44px]" />
        <div class="hidden lg:flex gap-8 text-base lg:text-lg font-medium">
          <a href="/" class="transition" :class="scrolled ? 'hover:text-[#B48B52]' : 'hover:text-gray-300'">Beranda</a>
          <a href="#" class="transition" :class="scrolled ? 'hover:text-[#B48B52]' : 'hover:text-gray-300'">Struktur Organisasi</a>
          <a href="#" class="transition" :class="scrolled ? 'hover:text-[#B48B52]' : 'hover:text-gray-300'">Informasi</a>
          <a href="/tentang" class="transition" :class="scrolled ? 'hover:text-[#B48B52]' : 'hover:text-gray-300'">Tentang</a>
        </div>
      </div>

      <div class="hidden lg:flex gap-4 text-base lg:text-lg font-medium items-center">
        <a
          href="https://s.ub.ac.id/portalaspirasi"
          class="bg-[#B48B52] text-white px-5 py-2.5 rounded-sm hover:text-neutral-800 transition"
        >
          Portal Aspirasi
        </a>
        <a
          href="#"
          :class="scrolled ? 'text-[#B48B52] border-[#B48B52]' : 'text-white border-white hover:text-gray-300'"
          class="px-5 py-2.5 rounded-sm transition border-2"
        >
          Jaringan dan Informasi Hukum
        </a>
      </div>

      <button @click="toggleMobileMenu" class="lg:hidden">
        <Bars3Icon v-if="!mobileMenuOpen" class="h-7 w-7" />
        <XMarkIcon v-else class="h-7 w-7" />
      </button>
    </div>

    <!-- Mobile Menu -->
    <div
      v-if="mobileMenuOpen"
      class="lg:hidden mt-4 flex flex-col gap-4 text-lg font-medium bg-white text-[#5B352C] p-4 rounded-md shadow-lg"
    >
      <a href="/" @click="mobileMenuOpen=false" class="hover:text-[#B48B52]">Beranda</a>
      <a href="#" @click="mobileMenuOpen=false" class="hover:text-[#B48B52]">Struktur Organisasi</a>
      <a href="#" @click="mobileMenuOpen=false" class="hover:text-[#B48B52]">Informasi</a>
      <a href="/tentang" @click="mobileMenuOpen=false" class="hover:text-[#B48B52]">Tentang</a>
      <a
        href="https://s.ub.ac.id/portalaspirasi"
        class="bg-[#B48B52] text-white px-5 py-2.5 rounded-sm hover:text-neutral-800 transition"
      >
        Portal Aspirasi
      </a>
      <a href="#" class="text-[#B48B52] border-[#B48B52] px-5 py-2.5 rounded-sm transition border-2">
        Jaringan dan Informasi Hukum
      </a>
    </div>
  </nav>
</template>
