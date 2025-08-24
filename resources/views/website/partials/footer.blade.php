   <footer class="ftco-footer">
       <div class="container mb-5 pb-4">
           <div class="row">
               <div class="col-lg col-md-6">
                   <div class="ftco-footer-widget">
                       <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                       <p>Far far away, behind the word mountains, far from the countries.</p>
                       <ul class="ftco-footer-social list-unstyled mt-4">
                           <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                           <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                           <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                       </ul>
                   </div>
               </div>

               <div class="col-lg-4 col-md-6">
                   <div class="ftco-footer-widget">
                       <h2 class="ftco-heading-2">Links</h2>
                       <div class="d-flex">
                           <ul class="list-unstyled mr-md-4">
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Project</a></li>
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog Posts</a>
                               </li>
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Industries</a>
                               </li>
                           </ul>
                           <ul class="list-unstyled ml-md-5">
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help</a></li>
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a>
                               </li>
                               <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>

               <div class="col-lg col-md-6">
                   <div class="ftco-footer-widget">
                       <h2 class="ftco-heading-2">Services</h2>
                       <ul class="list-unstyled">
                           <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Customer Services</a>
                           </li>
                           <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Prompt Delivery</a>
                           </li>
                           <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reliable Equipment</a>
                           </li>
                           <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New Heavy
                                   Equipment</a></li>
                       </ul>
                   </div>
               </div>

               <div class="col-lg col-md-6">
                   <div class="ftco-footer-widget">
                       <h2 class="ftco-heading-2">Have a Questions?</h2>
                       <div class="block-23 mb-3">
                           <ul>
                               <li><span class="fa fa-map-marker mr-3"></span><span class="text">Flat No. 202, Plot
                                       No. 647 Vishambhar Sadan, Vikash Nagar, Kanpur</span></li>
                               <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+91
                                           7311 122 392</span></a></li>
                               <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span
                                           class="text">info@blocinfra.com</span></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="container-fluid bg-primary">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 aside-stretch py-3">

                       <p class="mb-0">
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           Copyright &copy;
                           <script>
                               document.write(new Date().getFullYear());
                           </script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i>
                           by <a href="https://colorlib.com" target="_blank">BlockInfra</a>
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </footer>

   @include('website.partials.auth')

   <!-- loader -->
   <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
           <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
               stroke="#eeeeee" />
           <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
               stroke-miterlimit="10" stroke="#F96D00" />
       </svg></div>
   <script src="{{ asset('template/js/jquery.min.js') }}"></script>
   <script src="{{ asset('template/js/jquery-migrate-3.0.1.min.js') }}"></script>
   <script src="{{ asset('template/js/popper.min.js') }}"></script>
   <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
   <script src="{{ asset('template/js/jquery.waypoints.min.js') }}"></script>
   <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
   <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('template/js/jquery.animateNumber.min.js') }}"></script>
   <script src="{{ asset('template/js/bootstrap-datepicker.js') }}"></script>
   <script src="{{ asset('template/js/jquery.timepicker.min.js') }}"></script>
   <script src="{{ asset('template/js/scrollax.min.js') }}"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
   <script src="{{ asset('template/js/google-map.js') }}"></script>
   <script src="{{ asset('template/js/main.js') }}"></script>
   <script src="{{ asset('js/auth/auth.js') }}?v={{ time() }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
