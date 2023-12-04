<script setup lang="ts">
import { ref } from 'vue';
// import QuickLinks from '@/components/landingpage/layout/PageMenuQuicklinks.vue';
// import AppsLink from '@/components/landingpage/layout/PageMegamenu.vue';
// import { demosMegamenu, appsMegamenu } from '@/_mockApis/landingpage/lpPage';
import { HelpIcon, ChevronDownIcon } from 'vue-tabler-icons';
</script>

<template>
    <v-btn variant="text" color="primary" class="text-white custom-hover-primary nav-links" href="/">About us</v-btn>
    <v-btn variant="text" color="primary" class="text-white custom-hover-primary nav-links" href="/">Contact us</v-btn>
    <v-btn class="custom-hover-primary bg-accent ml-2 text-white" flat href="/auth/login" target="_blank"><span class="text-white">Sign Up</span></v-btn>
    <v-btn class="custom-hover-primary bg-accent ml-2 text-white" flat href="/auth/login" target="_blank"><span class="text-white">Login</span></v-btn>
</template>
