 <!-- Footer section Start -->
 <section id="footer">
     <!-- Section padding -->
     <!-- <div class="square"></div> -->

     <div class="container py-5">
         <div class="row">
             <div class="col-md-8 col-lg-4">
                 <div class="logo mb-30">
                     <a href="{{ url('/') }}">
                         <img src="{{ asset('/website/images/thank_you_image.jpg') }}" style="height:150px; width:120px;"
                             alt="" class="img-fluid" />
                     </a>
                 </div>

                 <div class="paragraph mb-20">
                     <h4> Lorem Ipsum</h4>
                     "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                 </div>


             </div>
             <div class="col-md-4 col-lg-2">
                 <h3 class="heading3">Link</h3>

                 <ul>
                     <li><a href={{ url('/') }}>Home</a></li>
                     <li><a href='#'>About Us</a></li>
                     <li><a href="###">text</a></li>
                     <li><a href='###'>Team Section</a></li>


                 </ul>
             </div>
             <div class="col-md-8 col-lg-3">
                 <h3 class="heading3">Get In Touch</h3>
                 <ul class="addresses">
                     <li>
                         <a href="tel:+91-00000000">
                             <i class="fa fa-phone"></i> +91-0000000000
                         </a>
                     </li>
                     <li>
                         <a href="mailto:registrar@niperahm.ac.in">
                             <i class="fa fa-envelope"></i> registrar[at]demo[dot]ac[dot]in
                         </a>
                     </li>
                     <li>
                         <a href="###">
                             <i class="fa fa-map-pin"></i>
                             Lorem Ipsum
                         </a>
                     </li>
                 </ul>
             </div>
             <div class="col-md-4 col-lg-3">
                 <h3 class="heading3">Follow Us On</h3>
                 <div class="social-links">
                     <a href="https://facebook.com/"><i class="fa fa-facebook me-2"></i></a>
                     <a href="https://twitter.com/"><i class="fa  fa-twitter me-2"></i></a>
                     <a href="https://instagram.com/"><i class="fa fa-instagram me-2"></i></a>
                     <a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>
                 </div>
                 {{-- <ul>
                     <li><a href="##" class="my-4 rounded"><img src="{{ asset('/website/images/icon/ph.jpeg') }}"
                                 class="rounded" style="width:200px; height:40px;" alt=""></a></li>
                     <li><a href="##"><img src="{{ asset('/website/images/icon/ph.png') }}"
                                 style="width:200px; height:80px;" alt="" class="rounded"></a></li>
                 </ul> --}}
             </div>
         </div>
     </div>

     <!-- Section padding -->
     <!-- <div class="square"></div> -->

     <div class="divider"></div>


 </section>

 <div id="popup-overlay">
     <div class="popup d-flex">
         <div class="img-wrapper">
             <img src="{{ asset('/website/images/popup/1.png') }}" alt="" class="img-fluid" />
         </div>
         <div onclick="closePopup()" class="close">
             <i class="fa fa fa-circle-xmark"></i>
         </div>
         <div class="content">
             <h3 class="heading3">Aliquam vel</h3>
             <div class="price d-flex mb-20">
                 <span class="line-through">$12</span>

                 <span>$10</span>
             </div>

             <div class="paragraph">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed
                 nulla eu dui suscipit ultricies. Mauris vestibulum volutpat nisl vel
                 cursus. Cras finibus nec mauris tincidunt condimentum. Cras vel
                 interdum arcu.
             </div>

             <div class="rating d-flex">
                 <span><i class="fa fa-star"></i></span>
                 <span><i class="fa fa-star"></i></span>
                 <span><i class="fa fa-star"></i></span>
                 <span><i class="fa fa-star"></i></span>
                 <span><i class="fa fa-star"></i></span>
             </div>

             <h4 class="heading4 mb-30">Category : Small Plant</h4>

             <div class="d-flex quantity-wrapper align-items-center">
                 <h4 class="heading">Quantity</h4>
                 <div class="d-flex quantity">
                     <span class="quantity-down"><i class="fa fa-minus"></i></span>
                     <input type="number" min="1" max="100" step="1" value="1" readonly />
                     <span class="quantity-up"><i class="fa fa-plus"></i></span>
                 </div>
             </div>

             <a href='cart.html'>
                 <button class="button-1 mt-30">Add to cart</button>
             </a>
         </div>

         <div onclick="closePopup()" class="overlay-popup-bg"></div>
     </div>
 </div>

 <div class="header-cart-wrap" id="headerCartWrap">
     <div onclick="closeCart()" class="cart-overlay"></div>

     <div class="cart-list">
         <div class="title">
             <h3 class="heading3">Shopping Cart</h3>
             <button onclick="closeCart()" class="cart-close">
                 <i class="fa fa-circle-xmark"></i>
             </button>
         </div>
         <ul>
             <li>
                 <a href="shop-details.html">
                     <div class="part-img">
                         <img src="{{ asset('/website/images/products/1.png') }}" alt="Image" />
                     </div>
                     <div class="part-txt">
                         <span class="heading5">Diamond wedding ring</span>
                         <span>1 <i class="fa fa-xmark"></i> $5.00</span>
                     </div>
                 </a>
                 <button class="delete-btn">
                     <i class="fa fa-trash-can"></i>
                 </button>
             </li>
             <li>
                 <a href="shop-details.html">
                     <div class="part-img">
                         <img src="{{ asset('/website/images/products/2.png') }}" alt="Image" />
                     </div>
                     <div class="part-txt">
                         <span class="heading5">Living Summer Chair</span>
                         <span>1 <i class="fa fa-xmark"></i> $5.00</span>
                     </div>
                 </a>
                 <button class="delete-btn">
                     <i class="fa fa-trash-can"></i>
                 </button>
             </li>
             <li>
                 <a href="shop-details.html">
                     <div class="part-img">
                         <img src="{{ asset('/website/images/products/3.png') }}" alt="Image" />
                     </div>
                     <div class="part-txt">
                         <span class="heading5">Wireless Headphone</span>
                         <span>1 <i class="fa fa-xmark"></i> $5.00</span>
                     </div>
                 </a>
                 <button class="delete-btn">
                     <i class="fa fa-trash-can"></i>
                 </button>
             </li>
         </ul>
         <div class="total">
             <p>Subtotal: <span>$15:00</span></p>
         </div>
         <div class="btn-box">
             <a class='button-1' href='cart.html'>Checkout</a>
         </div>
     </div>
 </div>

 <script src="{{ asset('/website/js/vendor/jquery-3.6.3.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
 </script>
 <script src="{{ asset('/website/js/bootstrap.min.js') }}"></script>
 <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
     integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- sweet alert Library -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- bootstrap select  -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
 <script src="{{ asset('/website/js/owl.min.js') }}"></script>
 <script src="{{ asset('/website/js/aos.js') }}"></script>
 <script src="{{ asset('/website/js/magnific-popup.min.js') }}"></script>
 <script src="{{ asset('/website/js/scrollUp.min.js') }}"></script>
 <script src="{{ asset('/website/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('/website/js/main.js') }}"></script>
 <script src="{{ asset('/website/js/flip-clock.js') }}"></script>
 <script src="{{ asset('/website/js/simple-lightbox.js') }}"></script>
 <script src="{{ asset('/website/js/custom.js') }}"></script>
 <!-- flip-clock cdn -->
 <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>-->
 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
 <a id="scrollUp" href="#top" style="position:fixed;"></a>
 <script>
     // init Isotope
     var $grid1 = $(".arrival-card-body").isotope({
         filter: ".top-rated-list",
     });
     // filter items on button click
     $(".arrival-head-list").on("click", "p", function() {
         var filterValue = $(this).attr("data-filter");
         $grid1.isotope({
             filter: filterValue
         });
     });

     var $grid2 = $(".best-card-body").isotope({
         filter: ".all",
     });
     // filter items on button click
     $(".best-head-list").on("click", "p", function() {
         var filterValue = $(this).attr("data-filter");
         $grid2.isotope({
             filter: filterValue
         });
     });
 </script>

 <script>
     $(".flip-demo").on("done", function() {});
     $(".flip-demo").on(
         'before<a href="https://www.jqueryscript.net/tags.php?/Flip/">Flip</a>ping',
         function(e, data) {
             console.log("beforeFlipping:", data);
         }
     );
     $(".flip-demo").on("afterFlipping", function(e, data) {
         console.log("afterFlipping:", data);
     });
 </script>

 <script>
     var $grid = $(".item-details").isotope({
         layoutMode: "fitRows",
     });
     $(".filters-button-group").on("click", "button", function() {
         var filterValue = $(this).attr("data-filter");
         $grid.isotope({
             filter: filterValue
         });
         $(".filters-button-group button").removeClass("active");
         $(this).addClass("active");
     });
 </script>

 <!-- script of font-size changer  -->
 <script>
     $(document).ready(function() {
         var defaultFontSize = parseInt($('html').css('font-size')); // Get the default font size
         var originalSizes = {};

         // Store the original sizes of each target element
         $('.fs-t').each(function() {
             var element = $(this);
             originalSizes[element[0]] = parseInt(element.css('font-size'));
         });

         function updateFontSize(size) {
             $('html').css('font-size', size + 'px');
             $('.fs-t').each(function() {
                 var element = $(this);
                 var originalSize = originalSizes[element[0]];
                 var newSize = (size / defaultFontSize) * originalSize;
                 element.css('font-size', newSize + 'px');
             });
         }

         $(".decrease").on("click", function() {
             var count = $('html').css('font-size');
             var fontVariable = parseInt(count);
             fontVariable--;
             if (fontVariable > 13) {
                 updateFontSize(fontVariable);
             }
             console.log(fontVariable);
         });

         $(".increase").on("click", function() {
             var count = $('html').css('font-size');
             var fontVariable = parseInt(count);
             fontVariable++;
             if (fontVariable < 19) {
                 updateFontSize(fontVariable);
             }
             console.log(fontVariable);
         });

         $(".reset").on("click", function() {
             updateFontSize(defaultFontSize);
             console.log(defaultFontSize);
         });
     });
 </script>


 <!-- script for search toggle -->
 <!-- script for search -->
 <script>
     $(document).ready(function() {
         // Toggle search box visibility and focus on click
         $('.header-search-wrapper .search-main').click(function(event) {
             event.stopPropagation(); // Prevents the document click event from firing immediately
             $('.search-form-main').toggleClass('active-search');
             $('.search-form-main .search-field').focus();
         });

         // Close search box when clicking outside
         $(document).click(function(event) {
             if (!$(event.target).closest('.header-search-wrapper').length) {
                 $('.search-form-main').removeClass('active-search');
             }
         });

         // Prevent closing when clicking inside the search box
         $('.header-search-wrapper .search-form-main').click(function(event) {
             event.stopPropagation();
         });
     });
 </script>
 <!-- script for modal visitor not selecting the image more than 1 MB -->
 <script>
     // Image size validation
     document.getElementById('image').addEventListener('change', function() {
         const file = this.files[0];
         if (file && file.size > 1048576) { // 1MB in bytes
             alert('Image size must not exceed 1MB');
             this.value = ''; // Clear the input
         }
     });
 </script>

 <!-- script for testimonial -->
 <script>
     jQuery(document).ready(function($) {
         var feedbackSlider = $(".feedback-slider");
         feedbackSlider.owlCarousel({
             items: 3,
             nav: true,
             dots: true,
             autoplay: true,
             loop: true,
             mouseDrag: true,
             touchDrag: true,
             navText: [
                 "<i class='fa fa-long-arrow-left'></i>",
                 "<i class='fa fa-long-arrow-right'></i>"
             ],
             responsive: {
                 0: { // breakpoint from 0 up to 479
                     items: 1
                 },
                 480: { // breakpoint from 480 up to 767
                     items: 1
                 },
                 768: { // breakpoint from 768 up to 1023
                     items: 1
                 },
                 1024: { // breakpoint from 1024 up to higher resolution
                     items: 2
                 },
                 1200: {
                     items: 3
                 }
             }
         });

         feedbackSlider.on("translate.owl.carousel", function() {
             $(".feedback-slider-item h3")
                 .removeClass("animated fadeIn")
                 .css("opacity", "0");
             $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
                 .removeClass("animated zoomIn")
                 .css("opacity", "0");
         });

         feedbackSlider.on("translated.owl.carousel", function() {
             $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
             $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
                 .addClass("animated zoomIn")
                 .css("opacity", "1");
         });
         feedbackSlider.on("changed.owl.carousel", function(property) {
             var current = property.item.index;
             var prevThumb = $(property.target)
                 .find(".owl-item")
                 .eq(current)
                 .prev()
                 .find("img")
                 .attr("src");
             var nextThumb = $(property.target)
                 .find(".owl-item")
                 .eq(current)
                 .next()
                 .find("img")
                 .attr("src");
             var prevRating = $(property.target)
                 .find(".owl-item")
                 .eq(current)
                 .prev()
                 .find("span")
                 .attr("data-rating");
             var nextRating = $(property.target)
                 .find(".owl-item")
                 .eq(current)
                 .next()
                 .find("span")
                 .attr("data-rating");
             $(".thumb-prev").find("img").attr("src", prevThumb);
             $(".thumb-next").find("img").attr("src", nextThumb);
             $(".thumb-prev")
                 .find("span")
                 .next()
                 .html(prevRating + '<i class="fa fa-star"></i>');
             $(".thumb-next")
                 .find("span")
                 .next()
                 .html(nextRating + '<i class="fa fa-star"></i>');
         });
         $(".thumb-next").on("click", function() {
             feedbackSlider.trigger("next.owl.carousel", [300]);
             return false;
         });
         $(".thumb-prev").on("click", function() {
             feedbackSlider.trigger("prev.owl.carousel", [300]);
             return false;
         });
     }); //end ready
 </script>

 <script>
     $('#visitor-carousel').owlCarousel({
         loop: true,
         margin: 15,
         padding: 20,
         dots: true,
         nav: true,
         autoplay: true,
         navText: ["<span class='owl-prev'>&lt;</span>", "<span class='owl-next'>&gt;</span>"],
         responsive: {
             0: {
                 items: 1
             },
             480: {
                 items: 1
             },
             600: {
                 items: 2
             },
             1024: {
                 items: 3
             },
             1200: {
                 items: 4
             }
         }

     })



     // <!--plant carousel-->
     $('#Plant-Slider').owlCarousel({
         loop: true,
         margin: 30,
         dots: false,
         nav: true,
         autoplay: true,
         navText: ["<span class='owl-prev'>&lt;</span>", "<span class='owl-next'>&gt;</span>"],
         responsive: {
             0: {
                 items: 1
             },
             480: {
                 items: 1
             },
             768: {
                 items: 1
             },
             1024: {
                 items: 2
             },
             1200: {
                 items: 2
             }
         }

     })

     // <!--plant modal carousel-->
     $('.Plant-Modal-Slider').owlCarousel({
         loop: true,
         margin: 30,
         dots: false,
         nav: true,
         autoplay: true,
         navText: ["<span class='owl-prev'>&lt;</span>", "<span class='owl-next'>&gt;</span>"],
         responsive: {
             0: {
                 items: 1
             },
             480: {
                 items: 1
             },
             768: {
                 items: 1
             },
             1024: {
                 items: 2
             },
             1200: {
                 items: 2
             }
         }

     })
 </script>




 <script>
     $(document).ready(function() {
         $("#photo-carousel").owlCarousel({
             loop: true,
             margin: 30,
             nav: true,
             dots: false,
             autoplay: true,
             navText: ["<span class='owl-prev'>&lt;</span>", "<span class='owl-next'>&gt;</span>"],
             responsive: {
                 0: { // breakpoint from 0 up to 479
                     items: 1
                 },
                 480: { // breakpoint from 480 up to 767
                     items: 1
                 },
                 768: { // breakpoint from 768 up to 1023
                     items: 1
                 },
                 1024: { // breakpoint from 1024 up to higher resolution
                     items: 2
                 },
                 1200: {
                     items: 3
                 }
             }
         });

         var videoCarouselInitialized = false;
         $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
             if (e.target.id === 'video-tab' && !videoCarouselInitialized) {
                 $("#video-carousel").owlCarousel({
                     loop: true,
                     margin: 30,
                     autoplay: true,
                     nav: true,
                     dots: false,
                     navText: ["<span class='owl-prev'>&lt;</span>",
                         "<span class='owl-next'>&gt;</span>"
                     ],
                     responsive: {
                         0: { // breakpoint from 0 up to 479
                             items: 1
                         },
                         480: { // breakpoint from 480 up to 767
                             items: 1
                         },
                         768: { // breakpoint from 768 up to 1023
                             items: 1
                         },
                         1024: { // breakpoint from 1024 up to higher resolution
                             items: 2
                         },
                         1200: {
                             items: 3
                         }
                     }
                 });
                 videoCarouselInitialized = true;
             }
         });
     });
 </script>

 <script>
     (function() {
         var $gallery = new SimpleLightbox('.gallery a', {});
     })();
 </script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
