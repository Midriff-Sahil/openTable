<script setup lang="ts">
import { ref } from 'vue';


</script>
<template>
    <div class="py-16 overflow-hidden  calltoactionHome">
        <v-container>
            <v-row class="pt-0">
                <v-col cols="12" class="align-center">
                    <div class="mt-5 mt-lg-0">
                            <div class="calltoaction">
                                <section class="cta-card mt-8">
                                  <v-row class="align-center">
                                    <v-col cols="12" md="6" class="py-4 ps-md-12">
                                        <div class="cta-card__container">
                                            <div class="cta-card__header">
                                            <h2 class="text-white text-h1">Restaurateurs: Dig into the world's most complete restaurant platform</h2>
                                            <div class="mt-6 d-flex gap-3" >
                                                <v-btn target="_blank" href="/auth/login" color="accent" size="large" class="m-btn-full btn-custom-lg" flat
                                                    >Login</v-btn
                                                >
                                                <v-btn
                                                    to=""
                                                    color="white"
                                                    variant="outlined"
                                                    class="mt-sm-0 mt-4 lp-btn-shadow m-btn-full btn-custom-lg"
                                                    size="large"
                                                    >Learn More</v-btn
                                                >
                                                </div>
                                            </div>
                                        </div>
                                    </v-col>
                                    <v-col cols="12" md="6" class="pa-0 px-md-6 mt-md-n12">
                                        <div class="">
                                            <img src="@/assets/images/landingpage/responsive.png" alt="lapi" class="max-width100"/>
                                        </div>
                                    </v-col>
                                  </v-row>
                                </section>
                            </div>
                            </div>
                    </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<style lang="scss" scoped>
.v-container {
    max-width: 1200px !important;
}
</style>
