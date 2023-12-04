<script setup lang="ts">
import { ref, watch, onMounted, onUnmounted } from 'vue';
import { useCustomizerStore } from '@/stores/customizer';
// import Logo from '@/layouts/full/logo/Logo.vue';
// import RtlLogo from '@/layouts/full/logo/RtlLogo.vue';
import Navigations from '@/components/landingpage/layout/Navigation.vue';
/*Mobile Sidebar*/
import MobileSidebar from '@/components/landingpage/layout/MobileSidebar.vue';
/*import tabler icons*/
import { Menu2Icon } from 'vue-tabler-icons';
const appsdrawer = ref(false);
const customizer = useCustomizerStore();
const isScrolled = ref(false);

    const handleScroll = () => {
      isScrolled.value = window.scrollY > 75;
    };

    onMounted(() => {
      window.addEventListener('scroll', handleScroll);
    });

    onUnmounted(() => {
      window.removeEventListener('scroll', handleScroll);
    });

</script>
<template>
    <div>
        <div :class="{ 'scrolled': isScrolled }" class="mainHeaderTop">
            <div class="topHeader">
                <v-container class="py-1">
                    <div class="innerHeaderTop text-center">
                        <p class="text-capitalize">Connect to your digital reservation book from any device you have</p>
                    </div>
                </v-container>
            </div>
            
            <!-- -----------------------------------------------
                    Start Header
                    ----------------------------------------------- -->
            <v-app-bar height="80" class="lp-header headerCustomStyle"  flat>
                <v-container class="maxWidth py-sm-4 py-0">
                    <v-toolbar class="d-flex align-center">
                        <!-- Logo -->
                        <span class="text-h3">MyTable</span>
                        
                        <!-- Desktop view Navigation -->
                        <div class="navigation ml-auto d-lg-flex d-none">
                            <Navigations />
                        </div>
                        <v-btn variant="text" class="hidden-lg-and-up ml-auto" icon @click.stop="appsdrawer = !appsdrawer">
                            <Menu2Icon size="22" stroke-width="1.5" />
                        </v-btn>
                    </v-toolbar>
                </v-container>
            </v-app-bar>
            <!-- -----------------------------------------------
                    End Header
                    ----------------------------------------------- -->
        </div>

        <!----sidebar menu drawer start----->
        <v-navigation-drawer class="lp-drawer" v-model="appsdrawer" location="left" temporary>
            <MobileSidebar />
        </v-navigation-drawer>
    </div>
</template>
