<?php
/* Template Name: Custom Template */
get_header(); 
?>
<section class="header-section" style="background: url('<?php echo get_template_directory_uri(); ?>/asset/images/image49.png') no-repeat center center/cover !important;">
<div class="container">
    <div class="row align-items-center"> 
        <div class="col-md-4 col-sm-4 col-lg-4">
            <div class="logo-leftpart">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/logo.png" alt="Logo">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 text-center"> 
            <div class="header-middlepart">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/ocean.png" alt="Ocean">
            </div>
        </div>   
        <div class="col-md-4 col-sm-4 col-lg-4"> 
            <div class="row align-items-center justify-content-end">
                <div class="col-auto book-btn"> 
                    <button class="btn-book-now">Book Now</button>
                </div>                
                <div class="col-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/Vector.png" alt="Menu Icon" class="hamberger">
                </div>                
            </div>
        </div>
        <div class="banner">            
            <h2 class="heading-banner text-center">Embark on the journey of rejuvenation</h2>
            <p  class="text-center paragraph-text">With Custom-crafted, exquisite getaways designed exclusively for you.</p>
            <div class="text-center">
            <button class="learn-btn">Learn More</button>
           </div>
        </div> 
    </div>
</div>
</section>
<section class="middle-section">
 <h2 class="text-center main-heading">Our Exclusive Offerings</h2>
 <p class="text-center middle-content">Discover Unforgettable Exclusive Experiences only at at NH: Elevate Your Stay with Our Unique Offers</p> 
 <div class="text-center">
 <img src="<?php echo get_template_directory_uri(); ?>/asset/images/Frame 626622.png" alt="Menu Icon" class="offering-img">
</div>
</section>
 <section class="footer">
    <div class="container">
        <div class="row align-items-center"> 
            <div class="col-md-2 col-sm-2 col-lg-2">
                <div class="logo-footerpart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/Group.png" alt="Logo">
                </div>
            </div>

            <div class="col-md-8 col-sm-8 col-lg-8 d-flex justify-content-center">
                <div class="d-flex justify-content-center gap-4"> <!-- Beech ke columns ke liye -->
                    <div class="footer-column">
                        <ul class="list">
                            <li class="heading">QUICK LINKS</li>
                            <li>About Us</li>
                            <li>Blog</li>
                            <li>Contact</li>
                            <li>Covid-19 Advisory</li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <ul class="list">
                            <li class="heading">EXPLORE</li>
                            <li>Overnight Retreat Package</li>
                            <li>Day SPA Package</li>
                            <li>International Therapy</li>
                            <li>Ayurvedic Therapy</li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <ul class="list">
                            <li class="heading">EXPLORE</li>
                            <li>Experience</li>
                            <li>Wedding/Events</li>
                            <li>Gallery</li>
                            <li>Gift Cards</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 col-lg-2 text-end"> <!-- Last image ko right align karne ke liye -->
                <div class="logo-footerpart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/to-top.png" alt="Logo">
                </div>
            </div>
        </div>

        <div class="row footer-middle-part">
            <div class="col-md-4 col-sm-4 col-lg-4">
                <div class="logo-footerpart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/Line 35.png" alt="Logo">
                </div>
            </div>           

            <div class="col-md-4 col-sm-4 col-lg-4">
                <div class="logo-footerpart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/Group 626676.png" alt="Logo">
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-lg-4">
                <div class="logo-footerpart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/Line 35.png" alt="Logo">
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6">
                <div class="text-footerpart">
                    <p class="content">795 Northumberland Heights Rd Alnwick/Haldimand Township Cobourg, Ontario K9A 4J8 Canada</p>
                </div>
            </div>

            <div class="col-md-6 text-end"> <!-- Right align ke liye text-end -->
                <div class="social-icon-footerpart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/item.png" alt="Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images/item (1).png" alt="Logo">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


