<script setup lang="ts">
import { ref } from "vue";
import { HeartIcon, PhoneIcon, UserIcon } from "vue-tabler-icons";
const tab4 = ref(null);
</script>
<template>
    <div class="py-16 overflow-hidden imagessectionHome bg-hoverColor">
        <v-container>
           <div class="tabs_section">
            <h2 class="text-center about_us">Explore Restaurants</h2>
            <div class="svg_image mb-9"> <img src="@/assets/images/landingpage/separator1.svg"></div>
           </div>    
    <v-tabs v-model="tab4" color="primary" class="mt-5">
        <v-tab value="1111" class="tabs_head mx-0 rounded-0" style="border-right:2px solid #fff;"> National cities/regions </v-tab>
        <v-tab value="2222" class="tabs_head mx-0 rounded-0" style="border-right:2px solid #fff;"> International cities/regions </v-tab>
        <v-tab value="4444" class="tabs_head mx-0 rounded-0" style="border-right:2px solid #fff;"> Nearby </v-tab>
    </v-tabs>
    <v-divider></v-divider>
    <v-card-text class="bg-white">
        <v-window v-model="tab4">
            <v-window-item value="1111">
                <ul class="regions_list ms-0">
                    <li>
                        <a href="javascript:void(0)">Chicago</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Miami</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Los Angeles</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Shreveport</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Fort Lauderdale</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Alabama</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Central Texas</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Raleigh</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">North Georgia</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">New Orleans</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">San Antonio</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Jackson Hole</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Milwaukee</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Mississippi</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Detroit</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Dallas</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Tallahassee</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">San Francisco</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Portland</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Kansas City</a>
                    </li>
                    </ul>
                    </v-window-item>
                    <v-window-item value="2222">
                    <ul class="regions_list">
                        <li>
                            <a href="javascript:void(0)">Kirkcudbrights</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Tokyo</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Manitoba</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Oaxaca</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Guam</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Kyushu Area</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Philippines</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Kobe</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Beirut/Lebanon</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Canberra</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Herefordshire</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Greater Taipei</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Osaka</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Hamburg</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Stuttgart</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Coahuila</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Baja California Sur</a></li>
                        <li>
                            <a href="javascript:void(0)">Berlin</a></li>
                        <li>
                            <a href="javascript:void(0)">Chūgoku</a></li>
                        <li>
                            <a href="javascript:void(0)">Macau</a></li>
                    </ul>
                    </v-window-item>
                    <v-window-item value="4444">
                    <ul class="regions_list">
                        <li> <a href=""> Restaurants nearby </a></li>
                    </ul>
                    </v-window-item>
        </v-window>
    </v-card-text>
</v-container>
</div>
</template>
