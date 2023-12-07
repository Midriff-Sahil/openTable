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
        'specialDish':'French',
        'addressResto': '4435 Lee Avenue Pennsauken, NJ 08110',
    },
    {
        'image': image2,
        'restName':'Taste Temptation',
        'specialDish':'American',
        'addressResto': '201 Black Stallion Road Winchester, KY 40391',
    },
    {
        'image': image3,
        'restName':'Flavorful Feasts',
        'specialDish':'Southern',
        'addressResto': '3940 Fieldcrest Road Lindenhurst, NY 11757',
    },
    {
        'image': image4,
        'restName':'Tantalizing Tastes',
        'specialDish':'Italian',
        'addressResto': '3686 Timbercrest Road Anchorage, AK 99501',
    },
    {
        'image': image5,
        'restName':'Culinary Creations',
        'specialDish':'Mediterranean',
        'addressResto': '2621 Dovetail Estates Bennington, OK 74723',
    },
    {
        'image': image6,
        'restName':'Gastronomic Delights',
        'specialDish':'Californian',
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
                        <v-card class="shadowAdded" elevation="10">
                            <v-card-item class="pa-0">
                                <div class="imageCardStyle mb-1">
                                    <img :src="items.image" alt="image1">
                                </div>
                                <div class="pa-3">
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
                                    <h3 class="mt-1 mb-2 text-h5">{{items.restName}}</h3>
                                    <v-chip color="primary" size="small" class="rounded-1 mb-3"><p class="text-subtitle-1 text-accent font-weight-medium" ><ToolsKitchen2Icon size="16" color="accent"  class="text-accent me-1 text-subtitle-1"/>{{items.specialDish}}</p></v-chip>
                                    <p class="text-subtitle-1 mb-1"><i class="mdi mdi-map-marker text-medium-emphasis"></i> {{items.addressResto}} </p>
                                </div>
                                <div class="px-3 py-2 border-top card-footer-listing">
                                    <ul class="timingList mt-0">
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
                                </div>
                            </v-card-item>
                        </v-card>
                    </router-link>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
