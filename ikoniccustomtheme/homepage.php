<?php
/**
* Template Name: Homepage
* Template Post Type: post, page
*
* @package WordPress
* @subpackage Ikonic_Custom_Theme
* @since Ikonic Custom Theme 1.0
*/
get_header();
?>
<main>
<section class="main-hero-banner-section" id="hero-banner-section" style="background-image: url('<?php echo get_field('hero_banner_image'); ?>'); background-size: cover; background-position: center center;">
    <div class="hero-banner-overlay"></div>
    <div class="container-wrapper">
        <div class="main-hero-inner-banner-section" data-aos="fade-right">
			<h1><?php echo get_field('homepage_banner_title'); ?></h1>
            <p><?php echo get_field('homepage_banner_subtitle'); ?></p>
        </div>
    </div>
</section>
<section class="main-corner-speciality-section" id="speciality-section">
    <div class="container-wrapper">
        <div class="main-corner-speciality-inner-section" data-aos="fade-up">
            <h2><?php echo get_field('southwest_louisiana_title'); ?></h2>
            <p><?php echo get_field('southwest_louisiana_description'); ?></p>
        </div>
        <div class="cards-row" data-aos="fade-up">
            <div class="card-box">
                <i class="fa fa-map" aria-hidden="true"></i>
                <p><?php echo get_field('location_card'); ?></p>
            </div>
            <div class="card-box">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p><?php echo get_field('phone_number_card'); ?></p>
            </div>
            <div class="card-box">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                <p><?php echo get_field('follow_card'); ?></p>
            </div>
            <div class="card-box">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <p><?php echo get_field('success_card'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="main-acreditation-section" id="acreditation-section">
    <div class="container-wrapper">
        <div class="inner-accreditation-section" data-aos="fade-up">
            <h2><?php echo get_field('accreditation_title'); ?></h2>
            <p><?php echo get_field('accreditation_description'); ?></p>
            <img src="<?php echo esc_url(get_field('accreditation_image')); ?>" alt="Accreditation Image">
        </div>
    </div>
</section>
<section class="main-video-section" id="video-section">
    <div class="container-wrapper">
        <div class="main-video-inner-section">
            <h2 class="text-white"><?php echo get_field('take_a_virtual_tour_title'); ?></h2>
        </div>
        <div class="video-box" data-aos="fade-up">
            <div class="overlay" onclick="playVideo()">
                <i class="fa fa-play-circle-o" aria-hidden="true"></i>
            </div>
            <video id="downloaded-video" controls>
                <source src="<?php echo esc_url(get_field('take_a_virtual_tour_video')); ?>" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<section class="main-multiple-video-slider-section" id="multiple-video-slide-section">
    <div class="container-wrapper">
        <div class="main-multiple-video-inner-slider-section" data-aos="fade-up">
            <div class="title-box">
                <h2>Why We Make A Difference in Southwest Louisiana</h2>
            </div>
            <div class="swiper mySwiper2" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video id="downloaded-video" controls>
                            <source src="<?php echo get_template_directory_uri(); ?>/images/banner-background-video.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video id="downloaded-video" controls>
                            <source src="<?php echo get_template_directory_uri(); ?>/images/banner-background-video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper thumbnail-images justify-content-center">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_297132446-scaled.jpg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_297132446-scaled.jpg"/>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<section class="main-our-specialized-program-section" id="specialized-program-section">
    <div class="container-wrapper">
        <div class="main-inner-specialized-program-section" data-aos="fade-up">
            <h2><?php echo get_field('our_specialized_programs_title'); ?></h2>
            <p><?php echo get_field('our_specialized_programs_desc'); ?></p>
        </div>
        <div class="specialized-card-row" data-aos="fade-up">
            <div class="special-card">
                <img src="<?php echo esc_url(get_field('critical_care_program_card_image')); ?>" alt="critical_care_program_card_image">
                <p><?php echo get_field('critical_care_program_card_title'); ?></p>
            </div>
            <div class="special-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/lungs.png" alt="lungs">
                <p>Pulmonary Program</p>
            </div>
        </div>
        <div class="specialized-card-row" data-aos="fade-up">
            <div class="special-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/desktop.png" alt="desktop">
                <p>Medically complex program</p>
            </div>
            <div class="special-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/virus.png" alt="virus">
                <p>Infectious Dicease Program</p>
            </div>
        </div>
        <div class="specialized-card-row" data-aos="fade-up">
            <div class="special-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/human-brain.png" alt="human-brain">
                <p>Neourology Program</p>
            </div>
            <div class="special-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/healthcare.png" alt="healthcare">
                <p>Wound Care Program</p>
            </div>
        </div>
        <div class="specialized-card-row justify-content-center" data-aos="fade-up">
            <div class="special-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/people.png" alt="people">
                <p>Neourology Program</p>
            </div>
        </div>
    </div>
</section>
<section class="main-faqs-section" id="faqs-section">
    <div class="container-wrapper">
        <div class="main-faqs-inner-section" data-aos="fade-up">
            <h2><?php echo get_field('frequently_asked_questions_title'); ?></h2>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h3 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
							<?php echo get_field('first_faqs_question'); ?>
						</button>
                    </h3>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p><?php echo get_field('first_faqs_answer'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Are Cornerstone Specialty Hospitals and nursing homes the same?
                    </button>
                    </h3>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas nihil, quam corporis quisquam illo!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        How are Cornerstone Specialty Hospitals different from general acute care hospitals?
                    </button>
                    </h3>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas nihil, quam corporis quisquam illo!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Why do patients and families choose Cornerstone Specialty Hospitals?
                        </button>
                    </h3>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas nihil, quam corporis quisquam illo!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Do Cornerstone Specialty Hospitals offer critical and intensive care?
                        </button>
                    </h3>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas nihil, quam corporis quisquam illo!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Who decides the patient’s length of stay?
                        </button>
                    </h3>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas nihil, quam corporis quisquam illo!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Is nutrition part of your treatment?
                        </button>
                    </h3>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas nihil, quam corporis quisquam illo!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        How often will a patient receive therapy?
                        </button>
                    </h3>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas nihil, quam corporis quisquam illo!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="last-section">
            <h4>In compliance with the Centers for Medicare and Medicaid Services, price transparency information is available below.</h4>
            <p>Your out-of-pocket costs may vary depending upon multiple factors, including the specifics of your insurance plan and your individualized treatment plan. Please reach out to our Central Billing Office with any questions at <span class="inner-phone-num">(469) 621-6671</span> .</p>
        </div>
        <div class="main-btns">
            <a href="#">Standard Charges</a>
            <a href="#">Shoppable Service</a>
        </div>
    </div>
</section>
</main>
<?php
get_footer();
