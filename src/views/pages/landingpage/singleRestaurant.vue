<script setup lang="ts">
import { ref, onMounted, computed } from 'vue';
import Header from '@/components/landingpage/layout/Header.vue';
import Footer from '@/components/landingpage/layout/Footer.vue';

import 'aos/dist/aos.css';
import AOS from 'aos';
const timeListing = ref(false)
const personModel =ref(); 
const personItems =ref(['1 people','2 people','3 people','4 people','5 people','6 people','7 people','8 people','9 people','10 people','11 people','12 people']); 
const TimeModel =ref(); 
const TimeItems =ref(['12:00 AM','12:30 AM','1:00 AM','1:30 AM','2:00 AM','2:30 AM','3:00 AM','3:30 AM','4:00 AM','4:30 AM','5:00 AM','5:30 AM','6:00 AM','6:30 AM','7:00 AM','7:30 AM','8:00 AM','8:30 AM','9:00 AM','9:30 AM','10:00 AM','10:30 AM','11:00 AM','11:30 AM','12:00 PM','12:30 PM','1:00 PM','1:30 PM','2:00 PM','2:30 PM','3:00 PM','3:30 PM','4:00 PM','4:30 PM','5:00 PM','5:30 PM','6:00 PM','6:30 PM','7:00 PM','7:30 PM','8:00 PM','8:30 PM','9:00 PM','9:30 PM','10:00 PM','10:30 PM','11:00 PM','11:30 PM']); 
const tab4 = ref(null);
const toggleTimeListing =()=>{
    timeListing.value = !timeListing.value 
}
const foodSelectDialog =ref(false)
onMounted(() => {
    AOS.init();
});

import { useGalleryStore } from '@/stores/apps/userprofile/gallery';

import image1 from '@/assets/images/landingpage/images1.jpg';
import image2 from '@/assets/images/landingpage/images2.jpg';
import image3 from '@/assets/images/landingpage/images3.jpg';
import image4 from '@/assets/images/landingpage/images4.jpg';
import image5 from '@/assets/images/landingpage/images5.jpg';
import image6 from '@/assets/images/landingpage/images6.jpg';
import image7 from '@/assets/images/landingpage/images7.jpg';
import image8 from '@/assets/images/landingpage/images8.jpg';
import image9 from '@/assets/images/landingpage/bg-parallax1new.jpg.jpg';
import image10 from '@/assets/images/landingpage/bg-01.jpg';
// import image11 from '@/assets/images/landingpage/s11.jpg';
// import image12 from '@/assets/images/landingpage/s12.jpg';

const store = useGalleryStore();

onMounted(() => {
    store.fetchGallery();
});

const getPhotos: any = computed(() => {
    return store.gallery;
});
const foodList = ref ([
    {
        "foodImage": 'https://quomodosoft.com/html/reservq/assets/images/thumb/popular-4.png',
        "foodTitle" : "Grilled Pork Chop Chutney",
        "foodContent" :"This is the perfect pairing for a delicious pork dinner. Add in grilled sweet potatoes, grilled open-faced feta pita and a salad",
    },
    {
        "foodImage": 'https://quomodosoft.com/html/reservq/assets/images/thumb/popular-4.png',
        "foodTitle" : "Grilled Pork Chop Chutney",
        "foodContent" :"This is the perfect pairing for a delicious pork dinner. Add in grilled sweet potatoes, grilled open-faced feta pita and a salad",
    },
    {
        "foodImage": 'https://quomodosoft.com/html/reservq/assets/images/thumb/popular-4.png',
        "foodTitle" : "Grilled Pork Chop Chutney",
        "foodContent" :"This is the perfect pairing for a delicious pork dinner. Add in grilled sweet potatoes, grilled open-faced feta pita and a salad",
    }
]);
const filterImage = ref([
    image1,
    image2,
    image3,
    image4,
    image5,
    image6,
    image7,
    image8,
    image9,
    image10,
]);

//Fancybox
const visibleRef = ref(false)
const visibleRef2 = ref(false)
const indexRef = ref(0)
const indexRef2 = ref(0)
const imgs = [
    image1,
    image2,
    image3,
    image4,
    image5,
    image6,
    image7,
    image8,
    image9,
    image10,
]
const showImg = (index: number) => {
    indexRef.value = index
    visibleRef.value = true
}
const showImg2 = (index: number) => {
    indexRef2.value = index
    visibleRef2.value = true
}

const onHide = () => visibleRef.value = false;
const onHide2 = () => visibleRef2.value = false;
const moveDisabled = ref(true);


let counter = 0;

const changeCounter = (num: number) => {
  counter += num;
  console.log(counter);

  if (!isNaN(counter) && counter > 0) {
    counter = counter;
  } else {
    counter = 0;
  }
};

const orderCancel = ref(false)


function selectOrderCancel(index:any) {
      // Show the "Select Item" button for the clicked card
      orderCancel.value = true;
}
function hideOrder(index:any) {
      // Show the "Select Item" button for the clicked car
      orderCancel.value = false;
}



        



</script>

<template>
    <div class="lp-wraper">
        <!--Header-->
        <Header />

        <!----------->
        <!--Content-->
        <main>
            <section class="pt-10 pb-16 overflow-hidden mainBannerHome mt-8">
                <v-container>
                    <v-row class="pt-8 pb-16">
                        <v-col cols="12" md="7" class="d-flex align-center">
                            <div class="mt-8 mt-lg-0">
                                <!-- <span class="text-h6 d-flex align-center gap-2" data-aos="fade-up" data-aos-duration="400"
                                    ><RocketIcon size="18" class="text-secondary" /> Kick start your project with</span
                                > -->
                                <h1 class="bannerTitle pt-5 font-weight-bold text-background">
                                    Le Petit Paris  
                                </h1>
                            </div>
                        </v-col>
                    </v-row>
                </v-container>
            </section>
            <section>
                <v-container class="pt-0">
                    <v-row class="pt-8 mt-md-n16">
                        <v-col cols="12" md="7" lg="8" class="mt-md-n16">
                            <div class="">
                                <v-card class="shadowAdded">
                                    <v-card-item>
                                        <h2 class="text-h2 mb-4">Le Petit Paris</h2>
                                        <v-row>
                                            <v-col cols="auto" class="py-2">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <i class="mdi mdi-star text-accent"></i>
                                                        <i class="mdi mdi-star text-accent"></i>
                                                        <i class="mdi mdi-star text-accent"></i>
                                                        <i class="mdi mdi-star text-accent"></i>
                                                        <i class="mdi mdi-star text-accent"></i>
                                                    </div>
                                                    <p class="text-subtitle-1 ps-2 pt-1">4.5</p>
                                                </div>
                                            </v-col>
                                            <v-col cols="auto" class="py-2">
                                                <div class="d-flex align-center">
                                                    <MessageIcon size="18" class="me-1 text-accent"/>
                                                    3 Reviews
                                                </div>
                                                
                                            </v-col>
                                            <v-col cols="auto" class="py-2">
                                                <div class="d-flex align-center">
                                                    <CashIcon size="18" class="me-1 text-accent"/>
                                                    $30 and under
                                                </div>
                                            </v-col>
                                            <v-col cols="auto" class="py-2">
                                                <div class="d-flex align-center">
                                                    <ToolsKitchen2Icon size="18" class="me-1 text-accent"/>
                                                    French
                                                </div>
                                            </v-col>
                                            <v-col cols="12" class="pt-2">
                                                <span class="me-2 text-h5 mb-2 d-block">Top Tags:</span>
                                                <div class="d-flex gap-2 ">
                                                    <v-chip  size="small" class="font-weight-medium">Good for special occasions</v-chip>
                                                    <v-chip  size="small" class="font-weight-medium">Romantic</v-chip>
                                                    <v-chip  size="small" class="font-weight-medium">Charming</v-chip>  
                                                </div>
                                            </v-col>
                                        </v-row>
                                    </v-card-item>
                                </v-card>
                                <v-card class="shadowAdded mt-5">
                                    <v-card-item class="pa-3">
                                        <v-tabs v-model="tab4" color="primary"> 
                                            <v-tab value="1111" class="tabs_head mx-0 rounded-0 smallHeht text-subtitle-1" style="border-right:2px solid #fff;"><EyeIcon size="17" class="me-md-1"/> Overview </v-tab>
                                            <v-tab value="2222" class="tabs_head mx-0 rounded-0 smallHeht text-subtitle-1" style="border-right:2px solid #fff;"><PhotoIcon size="17" class="me-md-1"/>Photos</v-tab>
                                            <v-tab value="3333" class="tabs_head mx-0 rounded-0 smallHeht text-subtitle-1" style="border-right:2px solid #fff;"><ToolsKitchen2Icon size="17" class="me-md-1"/>Menu</v-tab>
                                            <v-tab value="4444" class="tabs_head mx-0 rounded-0 smallHeht text-subtitle-1" style="border-right:2px solid #fff;"><ThumbUpIcon size="17" class="me-md-1"/>Reviews</v-tab>
                                        </v-tabs>
                                        <!-- <v-divider></v-divider> -->
                                        <v-card-text class="bg-white">
                                            <v-window v-model="tab4">
                                                <v-window-item value="1111">
                                                    <div class="detailContentList">
                                                        <p>If you ask the brilliant minds behind Le Petit Paris, Fanny and David Rolland, They will say “We were born in a restaurant, literally”. From Grandpa to father, the restaurant business has been a natural part of their daily life.</p>
                                                        <p>They decided 15 years ago to create their first restaurant in Cannes, Le Petit Paris, Parisian brasserie, located in the middle of the international film festival city.</p>
                                                        <p>In order to give the opportunity of an unforgettable experience in Cannes to their international clientele, they decided to run a business on the beach with the combination of well being, relaxed and lay down on the beach with a cocktail and enjoying a gastronomic food.</p>
                                                        <ul>
                                                            <li>David and Fanny were always striving to be surrounded by great collaborators in order to provide a real “savoir-faire” to their clients.</li>
                                                            <li>They have been known worldwide now thanks to their hard work and dedication.</li>
                                                        </ul>
                                                    </div>
                                                </v-window-item>
                                                <v-window-item value="2222">
                                                    <div class="">
                                                        <h2 class="mb-3 text-h5">{{filterImage.length}} Photos</h2>
                                                        <v-row>
                                                            <v-col cols="12" md="6">
                                                                <v-row>
                                                                    <v-col cols="12">
                                                                            <v-card elevation="10" v-if="filterImage.length>0" class="card-hover overflow-hidden" @click="() => showImg(0)">

                                                                                <v-avatar size="275" class="rounded-0 w-100">
                                                                                    <img :src="filterImage[0]" alt="gallery" width="450" class="fullWdthImg" />
                                                                                </v-avatar>
                                                                                
                                                                            </v-card>

                                                                            <vue-easy-lightbox :visible="visibleRef" :moveDisabled  ="moveDisabled"  :imgs="imgs" :index="indexRef" @hide="onHide" />
                                                                    </v-col>
                                                                </v-row>
                                                            </v-col>
                                                            <v-col cols="12" md="6">
                                                                <v-row>
                                                                    <v-col cols="12" md="6"  v-for="(card, index) in filterImage" class="classCardImage"  :key="index" >
                                                                        <template v-if="index >= 1 && index < 5">
                                                                            <div class="mainCardGallery">
                                                                                <v-card elevation="10" class="card-hover overflow-hidden" @click="() => showImg2(index)">
                                                                                    <v-avatar size="125" class="rounded-0 w-100">
                                                                                        <img :src="card" alt="gallery" width="450" class="fullWdthImg" />
                                                                                    </v-avatar>
                                                                                </v-card>
                                                                                <div class="totalListData" v-show="index==4">
                                                                                    <h3> + {{filterImage.length-5}} More</h3>
                                                                                </div>
                                                                            </div>
                                                                            <vue-easy-lightbox :visible="visibleRef2" :moveDisabled  ="moveDisabled"  :imgs="imgs" :index="indexRef2" @hide="onHide2" />
                                                                        </template>
                                                                    </v-col>
                                                                    
                                                                </v-row>
                                                            </v-col>
                                                        </v-row>
                                                    </div>
                                                </v-window-item>
                                                <v-window-item value="3333">
                                                    <div class="">
                                                        <div class="text-end mb-3">
                                                            <v-btn color="accent" @click="foodSelectDialog = true" flat="variant">Proceed Select Item</v-btn>
                                                            <v-dialog v-model="foodSelectDialog" max-width="800">
                                                                <v-card>
                                                                    <v-card-text>
                                                                        <h4 class="text-h6 mb-4">Your Order List</h4>
                                                                        <v-row>
                                                                            <v-col cols="12" md="6" v-for="(food, index) in foodList" :key="index">
                                                                                <div class="mainFoodCard d-flex h-100">
                                                                                    <div class="foodImage">
                                                                                        <img :src="food.foodImage" alt="popular"/>
                                                                                    </div>
                                                                                    <div class="foodContent">
                                                                                        <h3 class="text-h6 mb-2">{{food.foodTitle}}</h3>
                                                                                        <!-- <p class="text-subtitle-1">{{ food.foodContent.substring(0, 50) + '...' }}</p> -->
                                                                                        <div class="qty-input">
                                                                                            <button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
                                                                                            <input class="product-qty" type="number" name="product-qty" min="0" max="10" value="1">
                                                                                            <button class="qty-count qty-count--add" data-action="add" type="button">+</button>
                                                                                        
                                                                                        </div>
                                                                                        <div class="d-flex justify-space-between align-center">
                                                                                            <v-btn size="small" color="accent">Cancel Item</v-btn>
                                                                                            <h4 class="text-h6 text-primary">$100</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </v-col>
                                                                        </v-row>
                                                                        <div class="mt-5">
                                                                            <v-row>
                                                                                  <v-col cols="4" class="py-1">
                                                                                    <v-text-field  variant="outlined" type="date" hide-details>
                                                                                        <template v-slot:prepend-inner>
                                                                                            <CalendarIcon stroke-width="1.5" size="22" class=" text-medium-emphasis mr-3" />
                                                                                        </template>
                                                                                    </v-text-field>
                                                                                </v-col>
                                                                                <v-col cols="4" class="py-1">
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
                                                                                <v-col cols="4" class="py-1">
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
                                                                              
                                                                               
                                                                                
                                                                                <v-col cols="12" class="py-1">
                                                                                    <v-btn color="accent" size="large"  @click="toggleTimeListing" class="w-100 mt-3 mb-5">Find a time</v-btn>
                                                                                </v-col>
                                                                                
                                                                                
                                                                                <v-col cols="12" class="pt-2" v-if="timeListing">
                                                                                    <h3 class="text-h6 mb-2">Select a time</h3>
                                                                                    <ul class="timingList mt-0">
                                                                                        <li>
                                                                                            <router-link class="text-decoration-none disabled" to="/"></router-link>
                                                                                        </li>
                                                                                        <li>
                                                                                            <router-link class="text-decoration-none disabled"  to="/"></router-link>
                                                                                        </li>
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
                                                                                </v-col>
                                                                            </v-row>
                                                                        </div>
                                                                    </v-card-text>
                                                                    <!-- <v-card-actions>
                                                                        <v-btn color="primary" @click="addNote">Save</v-btn>
                                                                        <v-btn color="primary" @click="foodSelectDialog = false">Close Dialog</v-btn>
                                                                    </v-card-actions> -->
                                                                </v-card>
                                                            </v-dialog>
                                                        </div>
                                                        <v-row>
                                                            <v-col cols="12" md="6" v-for="(food, index) in foodList" :key="index">
                                                                <div class="mainFoodCard d-flex h-100">
                                                                    <div class="foodImage">
                                                                        <img :src="food.foodImage" alt="popular"/>
                                                                    </div>
                                                                    <div class="foodContent">
                                                                        <h3 class="text-h6 mb-2">{{food.foodTitle}}</h3>
                                                                        <p class="text-subtitle-1">{{ food.foodContent.substring(0, 50) + '...' }}</p>
                                                                        <div class="wrapper">
                                                                            <p>Counter: {{ counter }}</p>
                                                                        <button @click="changeCounter(1)">Increment</button>
                                                                        <button @click="changeCounter(-1)">Decrement</button>
                                                                        
                                                                        </div>
                                                                        <div class="d-flex justify-space-between align-center">
                                                                            <v-btn size="small" color="accent" @click="selectOrderCancel(index)">Select Item</v-btn>
                                                                            <h4 class="text-h6 text-primary">$100</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="orderCancel" v-if="orderCancel">
                                                                        <v-btn  flat="variant" color="accent" @click="hideOrder(index)">Cancel Item</v-btn>
                                                                    </div>
                                                                </div>
                                                            </v-col>
                                                        </v-row>
                                                    </div>
                                                </v-window-item>
                                                <v-window-item value="4444">
                                                    <div class="">
                                                        <div class="">
                                                            <v-row class="pa-4">
                                                                <v-col cols="12" sm="5" md="4" >
                                                                    <div class="bg-lightsecondary h-100 text-center d-flex justify-center align-center">
                                                                        <div class="text-center">
                                                                            <h3 class="text-h2">5.0</h3>
                                                                            <div class="d-flex justify-center">
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                            </div>
                                                                            <h4 class="text-h5">3 reviews</h4>
                                                                        </div>
                                                                    </div>
                                                                </v-col>
                                                                <v-col cols="12" sm="7" md="8">
                                                                    <div class="bg-lightsecondary pa-3">
                                                                        <div class="d-flex mb-1 align-center">
                                                                            <span class="d-inline-block me-2 text-subtitle-1 font-weight-medium">5</span>
                                                                            <div class="progressBarList">
                                                                                <div class="innerResultPro" style="width:95%"></div>
                                                                            </div>     
                                                                        </div>
                                                                        <div class="d-flex mb-1 align-center">
                                                                            <span class="d-inline-block me-2 text-subtitle-1 font-weight-medium">4</span>
                                                                            <div class="progressBarList">
                                                                                <div class="innerResultPro" style="width:40%"></div>
                                                                            </div>     
                                                                        </div>
                                                                        <div class="d-flex mb-1 align-center">
                                                                            <span class="d-inline-block me-2 text-subtitle-1 font-weight-medium">3</span>
                                                                            <div class="progressBarList">
                                                                                <div class="innerResultPro" style="width:30%"></div>
                                                                            </div>     
                                                                        </div>
                                                                        <div class="d-flex mb-1 align-center">
                                                                            <span class="d-inline-block me-2 text-subtitle-1 font-weight-medium">2</span>
                                                                            <div class="progressBarList">
                                                                                <div class="innerResultPro" style="width:20%"></div>
                                                                            </div>     
                                                                        </div>
                                                                        <div class="d-flex mb-1 align-center">
                                                                            <span class="d-inline-block me-2 text-subtitle-1 font-weight-medium">1</span>
                                                                            <div class="progressBarList">
                                                                                <div class="innerResultPro" style="width:10%"></div>
                                                                            </div>     
                                                                        </div>
                                                                    </div>
                                                                </v-col>
                                                            </v-row>
                                                        </div>
                                                        <div class="pa-3 pt-0">
                                                            <div class="py-4 border-bottom">
                                                                <v-row>
                                                                    <v-col cols="auto">
                                                                        <v-avatar size="60" class="rounded-50 mt-2">
                                                                            <img src="@/assets/images/landingpage/images1.jpg" alt="gallery"  class="fullWdthImg" />
                                                                        </v-avatar>
                                                                    </v-col>
                                                                    <v-col cols="col">
                                                                        <div class="">
                                                                            <div class="d-flex align-center">
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <span class="d-inline-block ms-3 text-subtitle-1 font-weight-medium">1 day ago</span>
                                                                            </div>
                                                                            <h3 class="text-h6 mb-1">Margaret J. Heins</h3>
                                                                            <p class="text-body-1">Delicious food and great service! We definitely look forward to going back.</p>
                                                                        </div>
                                                                    </v-col>
                                                                </v-row>
                                                            </div>
                                                            <div class="py-4 border-bottom">
                                                                <v-row>
                                                                    <v-col cols="auto">
                                                                        <v-avatar size="60" class="rounded-50 mt-2">
                                                                            <img src="@/assets/images/landingpage/images1.jpg" alt="gallery"  class="fullWdthImg" />
                                                                        </v-avatar>
                                                                    </v-col>
                                                                    <v-col cols="col">
                                                                        <div class="">
                                                                            <div class="d-flex align-center">
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <span class="d-inline-block ms-3 text-subtitle-1 font-weight-medium">2 day ago</span>
                                                                            </div>
                                                                            <h3 class="text-h6 mb-1">Robert A. King</h3>
                                                                            <p class="text-body-1">Everything was amazing food excellent service excellent had a perfect romantic dinner ! thank you</p>
                                                                        </div>
                                                                    </v-col>
                                                                </v-row>
                                                            </div>
                                                            <div class="py-4 border-bottom">
                                                                <v-row>
                                                                    <v-col cols="auto">
                                                                        <v-avatar size="60" class="rounded-50 mt-2">
                                                                            <img src="@/assets/images/landingpage/images1.jpg" alt="gallery"  class="fullWdthImg" />
                                                                        </v-avatar>
                                                                    </v-col>
                                                                    <v-col cols="col">
                                                                        <div class="">
                                                                            <div class="d-flex align-center">
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star-outline text-accent text-h5"></i>
                                                                                <i class="mdi mdi-star-outline text-accent text-h5"></i>
                                                                                <span class="d-inline-block ms-3 text-subtitle-1 font-weight-medium">3 day ago</span>
                                                                            </div>
                                                                            <h3 class="text-h6 mb-1">Kelly A. Logsdon</h3>
                                                                            <p class="text-body-1">We went for the Thanksgiving dinner. While the prix fixe menu was a bit on the pricey side at $85/piece, we liked the selection and given the holiday,  thought it was worth the splurge. The food was good, the service was as well. However, when we got the bill, we had a 20% and *then* 4% service fees on top of the previous total added to the bill. I had my $85 meal plus one $18 drink and paid over $145. A bit outrageous - and thankfully the food was good - though not THAT good. Why is it so difficult for restaurants to be transparent with charges? (And no, fine print does not count.)</p>
                                                                        </div>
                                                                    </v-col>
                                                                </v-row>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </v-window-item>
                                            </v-window>
                                        </v-card-text>
                                    </v-card-item>
                                </v-card>
                            </div>
                        </v-col>
                        <v-col cols="12" md="5" lg="4" class="mt-md-n16">
                            <div class="">
                                <v-card class="shadowAdded pa-0">
                                    <v-card-item class="pa-0">
                                        <div class="pa-4 border-bottom border-primary">
                                            <h2 class="text-h4 text-center">Make a reservation</h2>
                                        </div>
                                        <div class="px-4 py-3 my-3">
                                            <form>
                                                <v-row>
                                                    <v-col cols="12" class="py-1">
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
                                                    <v-col cols="12" class="py-1">
                                                        <v-text-field  variant="outlined" type="date" hide-details>
                                                            <template v-slot:prepend-inner>
                                                                <CalendarIcon stroke-width="1.5" size="22" class=" text-medium-emphasis mr-3" />
                                                            </template>
                                                        </v-text-field>
                                                    </v-col>
                                                    <v-col cols="12" class="py-1">
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
                                                    
                                                    <v-col cols="12" class="py-1">
                                                        <v-btn color="accent" size="large"  @click="toggleTimeListing" class="w-100">Find a time</v-btn>
                                                    </v-col>
                                                    
                                                    
                                                    <v-col cols="12" class="pt-2" v-if="timeListing">
                                                        <h3 class="text-h6 mb-2">Select a time</h3>
                                                        <ul class="timingList mt-0">
                                                            <li>
                                                                <router-link class="text-decoration-none disabled" to="/"></router-link>
                                                            </li>
                                                            <li>
                                                                <router-link class="text-decoration-none disabled"  to="/"></router-link>
                                                            </li>
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
                                                    </v-col>
                                                </v-row>
                                            </form>
                                        </div>
                                    </v-card-item>
                                </v-card>
                                <v-card class="shadowAdded mt-4">
                                    <v-card-item class="pa-3 ">
                                        <!-- <h3 class="text-h4 mb-3">Address</h3> -->
                                        <iframe src="https://maps.google.com/maps?q=USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 300px;"></iframe>  
                                    </v-card-item>
                                </v-card>
                            </div>
                        </v-col>
                    </v-row>
                </v-container>
            </section>
        </main>

        <!----------->
        <!--Footer-->
        <Footer />
        <!----------->
    </div>
</template>
