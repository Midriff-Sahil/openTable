<script setup lang="ts">
import { ref, onMounted } from 'vue';
import Header from '@/components/landingpage/layout/Header.vue';
import Aboutus from '@/components/landingpage/section/Aboutus.vue';
import Footer from '@/components/landingpage/layout/Footer.vue';

import 'aos/dist/aos.css';
import AOS from 'aos';

onMounted(() => {
    AOS.init();
});

</script>

<template>
    <div class="lp-wraper">
        <!--Header-->
        <Header />

        <!----------->
        <!--Content-->
        <section class="about-banner margin-top-80 d-flex align-center bg-primary">
            <v-container>
                <p>About Us</p>
                <h1 class="text-h1 text-white font-weight-bold">
                    Book, Dine, Delight <br> Elevate Your <span class="text-accent">Experience</span> with <br> Table
                    Reservation Magic!
                </h1>
            </v-container>
        </section>

        <!----------->
        <!--Footer-->
        <Footer />
        <!----------->
    </div>
</template>
<style>
.about-banner {
    min-height: 400px;
}

.about-banner {
    background: url(../../../assets/images/mytable/blog-bg.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.about-banner h1 {
    line-height: 1.5em;
}

.margin-top-80 {
    margin-top: 80px;
}
</style>