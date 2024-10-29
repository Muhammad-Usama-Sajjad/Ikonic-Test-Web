<footer class="main-footer-section" id="footer-section">
    <div class="container-wrapper">
        <div class="inner-main-footer-section">
            <div class="first-footer-sec">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-logo.png" alt="footer-website-logo">
                <p>Our mission is to make a difference by providing exceptional care and delivering the best experience. We pride ourselves on our quality of care, responsive service, and commitment to excellence.</p>
            </div>
            <div class="second-footer-sec">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Who We Serve</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="second-footer-sec">
                <ul>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Specialty Hospitals</a></li>
                    <li><a href="#">Senior Living</a></li>
                    <li><a href="#">Behavioral Health</a></li>
                </ul>
            </div>
            <div class="fourth-footer-sec">
                <div class="inner-social-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin">
                </div>
                <div class="last-after-text">
                    <p>2200 Ross Avenue, Suite 5400 Dallas, TX 75201</p>
                    <p>(469) 621-6700</p>
                </div>
            </div>
        </div>
    </div>
    <section class="last-main-footer-section">
            <div class="inner-last-main-footer-section">
                <div class="copy-right-sec">
                    <p>© 2022 Cornerstone Healthcare Group. All rights reserved.</p>
                </div>
            </div>
    </section>
</footer>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
function playVideo() {
    const video = document.getElementById("downloaded-video");
    const overlay = document.querySelector(".overlay");
    if (video) {
        overlay.style.display = "none";
        
        video.play().catch(function(error) {
        console.error("Error playing the video:", error);
    });
    } else {
        console.error("Video element not found!");
    }
}   
var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
    },
});
AOS.init({
      offset: 200,
      duration: 1000,
      easing: 'ease-in-out',
      delay: 100,
});
</script>
</body>
</html>