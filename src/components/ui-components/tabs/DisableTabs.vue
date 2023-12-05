<script setup lang="ts">
import { ref } from "vue";
import { HeartIcon, PhoneIcon, UserIcon } from "vue-tabler-icons";
const tab4 = ref(null);
</script>
<template>
    <div class="py-16 overflow-hidden imagessectionHome">
        <v-container>
           <div class="tabs_section">
            <h2 class="text-center about_us">Explore Restaurants</h2>
            <div class="svg_image mb-9"> <img src="@/assets/images/landingpage/separator1.svg"></div>
           </div>    
    <v-tabs v-model="tab4" color="primary" class="mt-5">
        <v-tab value="1111" class="tabs_head"> National cities/regions </v-tab>
        <v-tab value="2222" class="tabs_head"> International cities/regions </v-tab>
        <v-tab value="4444" class="tabs_head"> Nearby </v-tab>
    </v-tabs>
    <v-divider></v-divider>
    <v-card-text class="bg-grey100 mt-4 rounded-md">
        <v-window v-model="tab4">
            <v-window-item value="1111">
<ul class="regions_list">
  <li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Chicago" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Chicago</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Miami" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Miami</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Los Angeles" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Los Angeles</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Shreveport" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Shreveport</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Fort Lauderdale" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Fort Lauderdale</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Alabama" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Alabama</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Central Texas" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Central Texas</a>
</li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Raleigh" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Raleigh</a>
</li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="North Georgia" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">North Georgia</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="New Orleans" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">New Orleans</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="San Antonio" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">San Antonio</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Jackson Hole" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Jackson Hole</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Milwaukee" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Milwaukee</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Mississippi" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Mississippi</a>
</li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Detroit" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Detroit</a>
</li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Dallas" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Dallas</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Tallahassee" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Tallahassee</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="San Francisco" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">San Francisco</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Portland" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Portland</a>
</li>
<li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g">
    <a aria-label="Kansas City" href="" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Kansas City</a></li>
</ul>
            </v-window-item>
            <v-window-item value="2222">
                <ul class="regions_list">
                    <li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Kirkcudbrights" href="https://www.opentable.com/metro/kirkcudbrightshire-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Kirkcudbrights</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Tokyo" href="https://www.opentable.com/metro/tokyo-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Tokyo</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Manitoba" href="https://www.opentable.com/metro/winnipeg-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Manitoba</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Oaxaca" href="https://www.opentable.com/metro/oaxaca-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Oaxaca</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Guam" href="https://www.opentable.com/metro/guam" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Guam</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Kyushu Area" href="https://www.opentable.com/metro/kyushu-area-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Kyushu Area</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Philippines" href="https://www.opentable.com/metro/philippines" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Philippines</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Kobe" href="https://www.opentable.com/metro/kobe-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Kobe</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Beirut/Lebanon" href="https://www.opentable.com/metro/beirut-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Beirut/Lebanon</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Canberra" href="https://www.opentable.com/metro/canberra-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Canberra</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Herefordshire" href="https://www.opentable.com/metro/herefordshire-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Herefordshire</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Greater Taipei" href="https://www.opentable.com/metro/taiwan" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Greater Taipei</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Osaka" href="https://www.opentable.com/metro/osaka-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Osaka</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Hamburg" href="https://www.opentable.com/metro/raum-hamburg-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Hamburg</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Stuttgart" href="https://www.opentable.com/metro/raum-stuttgart-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Stuttgart</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Coahuila" href="https://www.opentable.com/metro/coahuila-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Coahuila</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Baja California Sur" href="https://www.opentable.com/metro/los-cabos-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Baja California Sur</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Berlin" href="https://www.opentable.com/metro/berlin-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Berlin</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Chūgoku" href="https://www.opentable.com/metro/chugoku-shikoku-restaurants" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Chūgoku</a></li><li class="QP5Lz9GCUG8WVgKdHbOg NCJpGD_Bdj32d5GSwV9g"><a aria-label="Macau" href="https://www.opentable.com/metro/macau" class="E0TKtEpttd6Ds4kqqAPg aqBt8GEfHa8tUN4Kud9f">Macau</a></li>
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
