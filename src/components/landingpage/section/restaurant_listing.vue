<script setup lang="ts">
import { ref, onMounted } from 'vue';
import image1 from '@/assets/images/landingpage/images1.jpg';
import image2 from '@/assets/images/landingpage/images2.jpg';
import image3 from '@/assets/images/landingpage/images3.jpg';
import image4 from '@/assets/images/landingpage/images7.jpg';
import image5 from '@/assets/images/landingpage/images5.jpg';
import image6 from '@/assets/images/landingpage/images6.jpg';
import 'aos/dist/aos.css';
import AOS from 'aos';

const cardListing = ref([
    {
        'image': image1,
        'restName':'Delicious Delights',
        'addressResto': '4435 Lee Avenue Pennsauken, NJ 08110',
    },
    {
        'image': image2,
        'restName':'Taste Temptation',
        'addressResto': '201 Black Stallion Road Winchester, KY 40391',
    },
    {
        'image': image3,
        'restName':'Flavorful Feasts',
        'addressResto': '3940 Fieldcrest Road Lindenhurst, NY 11757',
    },
    {
        'image': image4,
        'restName':'Tantalizing Tastes',
        'addressResto': '3686 Timbercrest Road Anchorage, AK 99501',
    },
    {
        'image': image5,
        'restName':'Culinary Creations',
        'addressResto': '2621 Dovetail Estates Bennington, OK 74723',
    },
    {
        'image': image6,
        'restName':'Gastronomic Delights',
        'addressResto': '562 Roguski Road Shreveport, LA 71107',
    }
])

onMounted(() => {
    AOS.init();
});

</script>

<template>
    <div class="sectionListing ">
        <!--Header-->
        <v-container>
            <div class="text-center">
                <h2 class="text-center mt-4 mb-2 sectionTitle font-weight-bold">
                    Most Popular Restaurants
                </h2>
                <div class="svg_image mb-9"> <img src="@/assets/images/landingpage/separator1.svg"></div>
            </div>
            <v-row>
                <v-col cols="12" lg="4" md="6" v-for="items in cardListing" :key="items">
                    <router-link to="/rrrrrrrrr" class="text-decoration-none linkMainColumn">
                        <v-card class="bg-hoverColor" elevation="10">
                            <v-card-item class="pa-3">
                                <div class="imageCardStyle mb-4">
                                    <img :src="items.image" alt="image1">
                                </div>
                                <div class="d-flex">
                                    <div class="">
                                        <i class="mdi mdi-star text-accent"></i>
                                        <i class="mdi mdi-star text-accent"></i>
                                        <i class="mdi mdi-star text-accent"></i>
                                        <i class="mdi mdi-star text-accent"></i>
                                        <i class="mdi mdi-star text-accent"></i>
                                    </div>
                                    <p class="text-subtitle-1 ps-2 pt-1">(25 Reviews)</p>
                                </div>
                                <h3 class="mb-1 text-h5">{{items.restName}}</h3>
                                <p class="text-subtitle-1"><i class="mdi mdi-map-marker text-medium-emphasis"></i> {{items.addressResto}} </p>
                                <ul class="timingList">
                                    <li>
                                        <router-link class="text-decoration-none" to="/">3:00 PM</router-link>
                                    </li>
                                    <li>
                                        <router-link class="text-decoration-none" to="/">3:30 PM</router-link>
                                    </li>
                                    <li>
                                        <router-link class="text-decoration-none" to="/">4:00 PM</router-link>
                                    </li>
                                    <li>
                                        <router-link class="text-decoration-none" to="/">4:30 PM</router-link>
                                    </li>
                                </ul>
                            </v-card-item>
                        </v-card>
                    </router-link>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
