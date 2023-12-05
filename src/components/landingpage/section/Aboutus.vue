<script setup lang="ts">
import { ref } from 'vue';


</script>
<template>
    <div class="overflow-hidden  aboutusHome">
        <v-container>
            <div class="mt-5 mt-lg-0">
                <h2  class="text-center about_us"> About Us </h2>
                <div class="svg_image mb-9"> <img src="@/assets/images/landingpage/separator1.svg"></div>
                
                <!-- <p class="pt-4 pb-16 text-h5 font-weight-regular text-center about_uspara">One-stop solution for small restaurants convert your paper reservation book <br>into 
                easy-to-use yet advanced restaurant reservation management tool</p> -->
                <v-row>
                    <v-col cols="12" md="6" lg="4" >
                        <div class="about-block content-block">
                            <div class="inner-box wow fadeInUp">
                                <div class="text">Lorem Ipsum is simply dummy standard dummy text ever standard dummy text ever since the when an unknown printer tooka galley of type scrambled it to make a type printer tooka galley specimen book It has survived.</div>
                                <div class="book-a_table"><a href=""><span class="icon"> <img src="@/assets/images/landingpage/book-icon.png" alt="" title=""></span><span class="txt_about">Book a Table</span></a></div>
                                <div class="video-box">
                                    <div class="image_book">
                                        <div class="lightbox-image">
                                            <img src="@/assets/images/landingpage/bg-01.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </v-col>
                    <v-col cols="12" md="6" lg="4" >
                        <div class="about-block image-block">
                            <div class="inner-box wow fadeInUp">
                                <div class="image about_image"><img src="@/assets/images/landingpage/about-image-2.jpg" class="d-block mx-auto" alt=""></div>
                            </div>
                        </div>
                    </v-col>
                    <v-col cols="12" lg="4" >
                        <div class="about-block about_endblock">
                            <div class="inner-box wow fadeInUp">
                                <div class="last_block">Book Your Table From Any Device You Have</div>
                                <div class="svg_image_lastblok mb-6"> <img src="@/assets/images/landingpage/separators.svg"></div>
                                <ul class="info booking_point">
                                    <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                    <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                    <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                    <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                    <div class="list_about d-flex"><span class="list_icon"></span> <li>Get rid of the mess on your paper reservation book</li></div> 
                                </ul>
                            </div>
                        </div>
                    </v-col>
                </v-row>
                
            </div>
        </v-container>
    </div>
</template>

<style lang="scss" scoped>
.v-container {
    max-width: 1200px !important;
}
</style>
