<script setup lang="ts">
import { ref} from 'vue';
import Header from '@/components/landingpage/layout/Header.vue';
import Footer from '@/components/landingpage/layout/Footer.vue';



</script>

<template>
    <div class="lp-wraper">
        <!--Header-->
        <Header />

        <!----------->
        <!--Content-->
        <section class="contact-banner margin-top-80 d-flex align-center bg-primary">
            <v-container>
                <v-row class="pt-0">
                    <v-col cols="12" class="align-center">
                <div class="contact_bannercontent">
                <p>Contact Us</p>
                <h1 class="text-h1 text-white font-weight-bold">
                    Book, Dine, Delight <br> Elevate Your <span class="text-accent">Experience</span> with <br> Table
                    Reservation Magic!
                </h1>
            </div>
                    </v-col>
                    </v-row>
            </v-container>
     
        </section>

        <section class="contact_details">
            <v-container>
                <v-row class="pt-0">
                    <v-col cols="12" class="align-center">
                <div class="contact_detailscontent"> 
                    <div class="inner_detailcontent">
                        <div class="inner_details">
                           <img src="@/assets/images/landingpage/imgpsh_icon.png">
                           <h3 class="font-weight-medium text-h5">Any Query? Mail Us</h3>
                           <div class="icons_detail text-subtitle-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                              </svg>
                           <a href="">mytableam@gmail.com</a> 
                           </div>
                        </div>
                        <div class="inner_details">
                            <img src="@/assets/images/landingpage/icons_cal.png">
                            <h3 class="font-weight-medium text-h5">Call For Help</h3>
                            <div class="icons_detail text-subtitle-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-outgoing" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                    <path d="M15 9l5 -5" />
                                    <path d="M16 4l4 0l0 4" />
                                  </svg>
                                  <a href="">+456789326</a>
                               </div>
                            </div>

                            <div class="inner_details">
                                <img src="@/assets/images/landingpage/imgpshi.png">
                                <h3 class="font-weight-medium text-h5">Our Address</h3>
                                <div class="icons_detail text-subtitle-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                      </svg>
                                      <a href="">422,mytable United States</a>
                                   </div>
                            </div>

                    
                    </div>
            </div>
            </v-col>
            </v-row>
            </v-container>
     
        </section>

          <section class="contact_formdetails">
            <v-container>
            <v-row class="pt-0">
                <v-col cols="6" class="align-center contact_detailssection">
            <div class="contact_formcontent"> 
                <form action="#" class="contact-form">
                    <h5 class="title">Any Query? Contact us</h5>
                    <p class="description">Feel free to contact us if you need any assistance, any <br>help or another question.
                    </p>
                    <div>
                      <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                    </div>
                    <div>
                      <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                    </div>
                    <div>
                      <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required></textarea>
                    </div>
                    <div class="submit-button-wrapper">
                      <input type="submit" value="Submit">
                    </div>
                  </form>
        </div>
        </v-col>
      
        
            <v-col cols="6" class="align-center bg_cont">
        <div class="contact_formimage"> 
            <img src="@/assets/images/landingpage/images2.jpg">
    </div>
    </v-col>
</v-row>

            </v-container>
     
        </section>
      
        <!----------->
        <!--Footer-->
        <Footer />
        <!----------->
    </div>
</template>
