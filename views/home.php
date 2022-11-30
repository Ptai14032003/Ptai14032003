<?php include_once "header.php" ?>
<!-- Slide -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(./public/image/slide1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Food</h2>
                            <p class="animate__animated animate__fadeInUp">Chúng tôi giới thiệu đến các bạn các món
                                ăn ẩm thực đường phố Việt Nam và nước
                                nước ngoài tới với các bạn với mong muốn các bạn trải nghiệm và thưởng thức những
                                món ngon tuyệt vời này.
                            </p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                    Menu</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(./public/image/slide2.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Review</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Chúng tôi review các món ngon ở xung quanh chúng ta và trên khắp mọi nẻo đường để
                                giúp các bạn cảm nhận được
                                mùi vị của những món ngon, ẩm thực nước ta cũng như nước bạn.
                            </p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Review</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(./public/image/slide3.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Places with good food and beautiful
                                views</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Cùng tìm các quán có đồ ăn ngon và view đẹp ở xung quanh chúng ta.
                            </p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Blog</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            </a>

        </div>
    </div>
</section>
<!-- End Hero -->
<section id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("./public/image/about1.jpg");'>
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                <div class="content">
                    <h3>A little information about us</h3>
                    <p>
                        Chúng tôi chuyên cung cấp các món ăn ẩm thực từ đường phố đến các nhà hàng sang trọng đảm
                        bảo an toàn thực phẩm
                        và chất lượng món ăn luôn là tốt nhất.
                    </p>
                    <p class="fst-italic">
                        Ngoài ra chúng tôi còn cung cấp rất nhiều thông tin và một số dịch vụ tiêu biểu của chúng
                        tôi:
                    </p>
                    <ul>
                        <li><i class="fas fa-check"></i> Review về các món ăn ẩm thực từ đường phố đến các nhà hàng
                            sang trọng. </li>
                        <li><i class="fas fa-check"></i> Tìm các địa điểm check in đẹp và có đồ ăn ngon cho mọi
                            người trải nghiệm.</li>
                        <li><i class="fas fa-check"></i> Cung cấp các món ăn ẩm thực ngon và chất lượng tốt cho các
                            khách hàng.</li>
                        <li><i class="fas fa-check"></i> Chăm sóc khách hàng 24/7 giúp các bạn có được những trải
                            nghiệm tốt nhất.</li>
                    </ul>
                    <p>
                        Trang web của chúng tôi còn cung cấp cho các bạn những ưu đãi giảm giá tốt tại các nhà hàng
                        khác kết hợp với chúng tôi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->
<!--review  -->
<div class="review">
    <div class="grid wide">
        <h1>New Posts</h1>
        <p>New articles about our food reviews and locations appear here.</p>
        <div class="row">
            <div class="col l-4 m-12 c-12">
                <a href="#"><img src="./public/image/review1.jpg" alt=""></a>
                <a href="#">
                    <h5>Review Hamberger ngon nhất tại Hà Nội </h5>
                </a>
            </div>
            <div class="col l-4 m-12 c-12">
                <a href="#"><img src="./public/image/review2.jpg" alt=""></a>
                <a href="#">
                    <h5>Review bún chả Hà nội </h5>
                </a>
            </div>
            <div class="col l-4 m-12 c-12">
                <a href="#"><img src="./public/image/review3.jpg" alt=""></a>
                <a href="#">
                    <h5>6 Degrees Dink Eat Meat-Nhà hàng view đẹp tại Hà Nội </h5>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end review -->
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container-fluid">

        <div class="section-title">
            <h2>Gallery</h2>
        </div>
        <div class="row g-0">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review8.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review9.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review10.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="#" class="gallery-lightbox">
                        <img src="./public/image/review11.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Gallery Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2><span>Contact</span> Us</h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae
                autem.</p>
        </div>
    </div>

    <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814578!2d105.74459841530921!3d21.038132792833192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1669062579079!5m2!1svi!2s" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container mt-5">

        <div class="info-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6 info">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Phố Trịnh Văn Bô<br>Nam Từ Liêm, Hà Nội</p>
                </div>

                <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-clock"></i>
                    <h4>Open Hours:</h4>
                    <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
                </div>

                <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>du_an1_group2@example.com<br>contact_group2@example.com</p>
                </div>

                <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+84 923686868<br>+84 787140303</p>
                </div>
            </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

    </div>
</section><!-- End Contact Section -->

<?php include_once "footer.php" ?>