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
    <div class="py-16 overflow-hidden imagessectionHome">
        <v-container>
            <v-row class="pt-8">
                <v-col cols="12" md="7" class="d-flex align-center">
                    <div class="mt-8 mt-lg-0">
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
