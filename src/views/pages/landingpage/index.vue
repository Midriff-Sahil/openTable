<script setup lang="ts">
import { ref, onMounted } from 'vue';
import Header from '@/components/landingpage/layout/Header.vue';
import MainBanner from '@/components/landingpage/section/mainBanner.vue';
import Aboutus from '@/components/landingpage/section/Aboutus.vue';
import RestaurantList from '@/components/landingpage/section/restaurant_listing.vue';
import DisableTabs from "@/components/ui-components/tabs/DisableTabs.vue";
import Calltoaction from '@/components/landingpage/section/Calltoaction.vue';
// import OurProducts from '@/components/landingpage/section/ourProducts.vue';
import FrameWorks from '@/components/landingpage/section/frameWorks.vue';
import UserReview from '@/components/landingpage/section/userReview.vue';
// import Features from '@/components/landingpage/section/otherFeatures.vue';
// import AskQuestion from '@/components/landingpage/section/askQuestion.vue';
// import BuyNow from '@/components/landingpage/section/buyNow.vue';
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
        <MainBanner />
        <section class="py-12 bg-hoverColor">
         <Aboutus/>
        </section>
        <section class="py-12">
            <RestaurantList/>
        </section>
        <DisableTabs/>
        <!-- <Imagessection/> -->
        <Calltoaction/>
        <!-- <OurProducts /> -->
        <FrameWorks />
        <!-- <UserReview /> -->
        <!-- <Features /> -->
        <!-- <AskQuestion /> -->
        <!-- <BuyNow /> -->
        <!----------->
        <!--Footer-->
        <Footer/>
        <!----------->
    </div>
</template>
