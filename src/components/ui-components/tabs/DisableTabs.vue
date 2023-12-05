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
           hhhh
            </v-window-item>
            <v-window-item value="2222">
               item two
            </v-window-item>
            <v-window-item value="4444">
               item three
            </v-window-item>
        </v-window>
    </v-card-text>
</v-container>
</div>
</template>
