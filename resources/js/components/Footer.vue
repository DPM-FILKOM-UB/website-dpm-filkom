<script setup>
import logo_tiktok from '/public/images/logo_tiktok.png'
import logo_instagram from '/public/images/logo_instagram.png'
import logo_line from '/public/images/logo_line.png'
import logo_mail from '/public/images/logo_mail.png'
import logo_linkedin from '/public/images/logo_linkedin.png'

</script>
<template>
    <!-- TODO: BELUM RESPONSIF -->
    <div class="footer bg-[url('/images/bg_footer.png')] pt-10 pb-10 h-[100vh] w-auto bg-no-repeat bg-cover bg-top content-end justify-center">
         <!-- Social media icons -->
        <div class="flex flex-col font-regular text-xl text-center">
            <div class="logo-links flex flex-row gap-6 justify-center items-center mb-5">
                <a href="https://www.tiktok.com/@dpmfilkomub"><img :src="logo_tiktok" alt="TikTok" class="h-10 w-10 object-contain"></a>
                <a href="https://www.instagram.com/dpmfilkomub/"><img :src="logo_instagram" alt="Instagram" class="h-10 w-10 object-contain"></a>
                <a href="https://line.me/R/ti/p/@sej8408e?from=page&searchId=sej8408e"><img :src="logo_line" alt="LINE" class="h-10 w-10 object-contain"></a>
                <a href="mailto:dpm_filkom.ub@ub.ac.id"><img :src="logo_mail" alt="mail" class="h-10 w-10 object-contain"></a>
                <a href="https://www.linkedin.com/in/dpm-filkom-ub-44702521b/"><img :src="logo_linkedin" alt="LinkedIn" class="h-10 w-10 object-contain"></a>
            </div>
            <h5 class="text-white mb-5">Gedung Kreativitas Mahasiswa FILKOM UB Jln. Veteran No.8, Malang, 65145, Indonesia</h5>
            <span class="text-neutral-300 ">Dikelola oleh Biro Media dan Komunikasi, DPM FILKOM UB 2025</span>
        </div>
     </div>
</template>
