<script setup lang="ts">
import { ref } from 'vue';

const personModel =ref(); 
const personItems =ref(['1 people','2 people','3 people','4 people','5 people','6 people','7 people','8 people','9 people','10 people','11 people','12 people']); 
const TimeModel =ref(); 
const TimeItems =ref(['12:00 AM','12:30 AM','1:00 AM','1:30 AM','2:00 AM','2:30 AM','3:00 AM','3:30 AM','4:00 AM','4:30 AM','5:00 AM','5:30 AM','6:00 AM','6:30 AM','7:00 AM','7:30 AM','8:00 AM','8:30 AM','9:00 AM','9:30 AM','10:00 AM','10:30 AM','11:00 AM','11:30 AM','12:00 PM','12:30 PM','1:00 PM','1:30 PM','2:00 PM','2:30 PM','3:00 PM','3:30 PM','4:00 PM','4:30 PM','5:00 PM','5:30 PM','6:00 PM','6:30 PM','7:00 PM','7:30 PM','8:00 PM','8:30 PM','9:00 PM','9:30 PM','10:00 PM','10:30 PM','11:00 PM','11:30 PM']); 
// const locationModel = ref('');
const locationItems = ref([
    'India','USA', 'Indonesia','Brisbane','Malaysia','New South Wales','Northern Territory','Perth' 
]);

</script>
<template>
    <div class="py-16 overflow-hidden mainBannerHome">
        <v-container>
            <v-row class="pt-8">
                <v-col cols="12" md="7" class="d-flex align-center">
                    <div class="mt-8 mt-lg-0">
                        <!-- <span class="text-h6 d-flex align-center gap-2" data-aos="fade-up" data-aos-duration="400"
                            ><RocketIcon size="18" class="text-secondary" /> Kick start your project with</span
                        > -->
                        <h1 class="bannerTitle pt-5 font-weight-bold text-background" data-aos="fade-up" data-aos-duration="500">
                            Table Booking System <span class="text-colorFill"> For Restaurants </span>  
                        </h1>
                        <p class="pt-8 pb-6 text-h5 font-weight-regular text-lightsecondary" data-aos="fade-up" data-aos-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh blandit, tristique elit vel, commodo libero.
                        </p>
                        <div class="mt-6 d-sm-flex gap-3" data-aos="fade-up" data-aos-duration="1000">
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
                </v-col>
                <v-col cols="12" md="5">
                    <div class="bannerSideRes">
                        <h2 class="text-center mb-1 text-primary">Reservation</h2>
                        <div class="text-center">
                            <div class="tableBnrCnt d-inline-block text-primary">Restaurants</div>
                        </div>
                        <form class="mt-4">
                            <v-row>
                                <v-col cols="12">
                                    <v-text-field  variant="outlined" type="date" hide-details>
                                        <template v-slot:prepend-inner>
                                            <CalendarIcon stroke-width="1.5" size="22" class=" text-medium-emphasis mr-3" />
                                        </template>
                                    </v-text-field>
                                </v-col>
                                <v-col cols="12">
                                    <v-select
                                        v-model="TimeModel"
                                        :items="TimeItems"
                                        item-title="state"
                                        item-value="abbr"
                                        label="Select Time"
                                        return-object
                                        single-line
                                        variant="outlined"
                                        hide-details
                                    >
                                    <template v-slot:prepend-inner>
                                        <ClockIcon stroke-width="1.5" size="22" class="text-medium-emphasis mr-3" />
                                    </template>
                                    </v-select>
                                </v-col>
                                <v-col cols="12">
                                    <v-select
                                    v-model="personModel"
                                    :items="personItems"
                                    item-title="state"
                                    item-value="abbr"
                                    label="Select People"
                                    return-object
                                    single-line
                                    variant="outlined"
                                    hide-details
                                    >
                                    <template v-slot:prepend-inner>
                                            <UserIcon stroke-width="1.5" size="22" class=" text-medium-emphasis mr-3" />
                                    </template>
                                    </v-select>
                                </v-col>
                                <v-col cols="12">
                                    <v-autocomplete  :items="locationItems" color="primary" placeholder="Search Location" variant="outlined" hide-details>
                                        <template v-slot:prepend-inner>
                                            <SearchIcon stroke-width="1.5" size="22" class="text-medium-emphasis mr-3" />
                                        </template>
                                    </v-autocomplete>
                                </v-col>
                                <v-col cols="12">
                                    <v-btn color="accent" size="large" class=" w-100">Find Restaurants</v-btn>
                                </v-col>
                            </v-row>
                        </form>
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
