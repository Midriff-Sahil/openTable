<script setup lang="ts">
import { ref, onMounted } from 'vue';
import image1 from '@/assets/images/landingpage/images1.jpg';
import image2 from '@/assets/images/landingpage/images2.jpg';
import image3 from '@/assets/images/landingpage/images3.jpg';
import image4 from '@/assets/images/landingpage/images4.jpg';
import image5 from '@/assets/images/landingpage/images5.jpg';
import image6 from '@/assets/images/landingpage/images6.jpg';
import 'aos/dist/aos.css';
import AOS from 'aos';

onMounted(() => {
    AOS.init();
});

</script>

<template>
    <section class="sectionListing ">
        <!--Header-->
        <v-container>
            <v-row>
                <v-col cols="12" lg="4" md="6">
                    <v-card class="bg-hoverColor" elevation="10">
                        <v-card-item class="pa-3">
                            <img :src="image1" alt="image1">
                            <div class="">
                                <StarFillIcon/>
                                <StarFillIcon/>
                                <StarFillIcon/>
                                <StarFillIcon/>
                                <StarFillIcon/>
                            </div>
                            <h3>Restaurant Name</h3>
                            <p>Address City Landmark </p>
                            <div class="">
                                <a href="">
                                    3:00 PM
                                </a>
                            </div>
                        </v-card-item>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </section>
</template>
