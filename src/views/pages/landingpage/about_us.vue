<script setup lang="ts">
import { ref, onMounted } from 'vue';
import Header from '@/components/landingpage/layout/Header.vue';
import Footer from '@/components/landingpage/layout/Footer.vue';
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import { userReview } from '@/_mockApis/landingpage/lpPage';
import {testimonialSettings,testimonialBreakpoints} from '@/_mockApis/landingpage/curoselData';

import 'aos/dist/aos.css';
import AOS from 'aos';

onMounted(() => {
    AOS.init();
});

</script>

<template>
    <div class="lp-wraper">
        <!--Header-->
        <Header />

        <!----------->
        <!--Content-->
        <section class="about-banner margin-top-80 d-flex align-center bg-primary">
            <v-container>
                <div class="about_bannercontent">
                <p>About Us</p>
                <h1 class="text-h1 text-white font-weight-bold">
                    Book, Dine, Delight <br> Elevate Your <span class="text-accent">Experience</span> with <br> Table
                    Reservation Magic!
                </h1>
            </div>
            </v-container>
     
        </section>
        
        <section class="about_imageslide">

            <v-row class="pt-0">
                <v-col cols="12" class="align-center">
            <div class="wrapper_about">
                <div class="photobanner">
              <img src="@/assets/images/landingpage/images12.jpg">  
              <img src="@/assets/images/landingpage/images10.jpg">
             <img src="@/assets/images/landingpage/images11.jpg">
              <img src="@/assets/images/landingpage/images1.jpg">
              <img src="@/assets/images/landingpage/images5.jpg">
              <img src="@/assets/images/landingpage/images6.jpg">
              <img src="@/assets/images/landingpage/images7.jpg">
              <img src="@/assets/images/landingpage/images4.jpg">
              <img src="@/assets/images/landingpage/bg-parallax1new.jpg">
              <img src="@/assets/images/landingpage/images1.jpg">
              <img src="@/assets/images/landingpage/images3.jpg">
              <img src="@/assets/images/landingpage/images12.jpg">  
              <img src="@/assets/images/landingpage/images10.jpg">
             <img src="@/assets/images/landingpage/images11.jpg">

        
           </div>
           </div>
          </v-col>
              </v-row>




        </section>
        <section class="more_aboutus">
        <v-container>
            <v-row class="pt-0">
                <v-col cols="12" class="align-center head_cst">
              <div class="Our_story">
                 <h4>What we Provide</h4>
                 <h2>
                    Premium Services <br> For Everyone
                 </h2>
              </div>
          </v-col>
              </v-row>
        </v-container>
        <v-row class="pt-0">
            <v-col cols="6" class="align-center">
          <div class="Our_story_section">
            <img src="@/assets/images/landingpage/images7.jpg">
          </div>
      </v-col>
      <v-col cols="6" class="align-center">
        <div class="Our_story_sectiontwo">
            <p>We love what can happen around the restaurant table. And since 1998 we’ve been <br>committed to empowering that experience. From helping restaurants of all sizes thrive,<br> to enabling diners to find and book the perfect table for every occasion, our story is one <br> of human connection—among diners and restaurants, and between restaurants and their communities.</p>
            <p class="story_p">We love what can happen around the restaurant table. And since 1998 we’ve been <br>committed to empowering that experience. From helping restaurants of all sizes thrive,<br> to enabling diners to find and book the perfect table for every occasion, our story is one <br> of human connection—among diners and restaurants, and between restaurants and their communities.</p> <div class="book_button">
    <a href="">Book a Table</a>
 </div>

        </div>
    </v-col>
          </v-row>


        </section>
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

    <div class="testimonial_review mb-15">
        <v-container class="maxWidth">
            <v-row class="justify-center">
                <v-col cols="12" sm="8">
                    <h2 class="sectionTitle text-center font-weight-bold"> See what our client's say</h2>
                    <div class="svg_image"> <img src="@/assets/images/landingpage/separator1.svg"></div>
                </v-col>
            </v-row>
            <div class="mt-10 testimonials">
                <carousel :settings="testimonialSettings" :breakpoints="testimonialBreakpoints" class="overflow-hidden">
                    <slide v-for="card in userReview" :key="card.img" class="testi_cstm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote quots" width="54" height="54" viewBox="0 0 24 24" stroke-width="1.5" stroke="#314e57" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                          </svg>
                        <v-card elevation="10" class="ma-4 bg_cards">
                            <div class="pa-6 text-left">
                                <p class="text-15 testi_p">{{card.review}}</p>
                            </div>    
                            <div class="d-flex gap-2 testimonial_image">
                                <v-avatar size="60">
                                    <img :src="card.img" :alt="card.img" width="60" />
                                </v-avatar>
                                <div >
                                    <h6 class="text-h6 name_user">{{card.title}}</h6>
                                    <v-rating
                                    v-model="rating"
                                    hover size="small"
                                    density="compact"
                                    color="warning"
                                    class="d-sm-none"
                                    ></v-rating>
                                </div>   
                                
                            </div>
                        </v-card>    
                    </slide>
                    <template #addons>
                        <pagination class="mt-10" />
                    </template>
                 </carousel> 
            </div>
        </v-container>
    </div>
        <!----------->
        <!--Footer-->
        <Footer />
        <!----------->
    </div>
</template>
