<script setup lang="ts">
import { ref } from 'vue';


</script>
<template>
    <div class="py-8 overflow-hidden aboutusHome">
        <v-container>
            <v-row class="pt-0">
                <v-col cols="12" class="align-center">

                    <div class="mt-5 mt-lg-0">
                       <h2  class="text-center about_us"> About Us </h2>
                       <div class="svg_image mb-9"> <img src="@/assets/images/landingpage/separator1.svg"></div>
                      
                       <!-- <p class="pt-4 pb-16 text-h5 font-weight-regular text-center about_uspara">One-stop solution for small restaurants convert your paper reservation book <br>into 
                        easy-to-use yet advanced restaurant reservation management tool</p> -->
                        <div class="row clearfix d-flex">
                            <!--Block-->
                            <div class="about-block content-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and the <br> typesetting industry lorem Ipsum has been the industrys<br>standard dummy text ever since the when an unknown printer tooka galley of type scrambled it to make a type specimen book It has survived.</div>
                                    <div class="book-a_table"><a href=""><span class="icon"> <img src="@/assets/images/landingpage/book-icon.png" alt="" title=""></span><span class="txt_about">Book a Table</span></a></div>
                                    <div class="video-box">
                                        <div class="image_book"><a href="https://www.youtube.com/watch?v=ZETY_l3GVQg" class="lightbox-image"><img src="@/assets/images/landingpage/bg-01.jpg" alt=""></a>
                                        <a href="https://www.youtube.com/watch?v=ZETY_l3GVQg" class="lightbox-image play-btn"><span class="icon fal fa-play"><i class="ripple"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
            
                            <!--Block-->
                            <div class="about-block image-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                    <div class="image about_image"><img src="@/assets/images/landingpage/about-image-2.jpg" alt=""></div>
                                </div>
                            </div>
            
                            <!--Block-->
                            <div class="about-block  about_endblock info-block col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                    <div class="last_block">Book Your Table From Any Device You Have</div>
                                    <div class="svg_image_lastblok mb-2"> <img src="@/assets/images/landingpage/separators.svg"></div>
                                    <ul class="info booking_point">
                                      <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                      <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                      <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                      <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                    </ul>
                                </div>
                            </div>
            
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
