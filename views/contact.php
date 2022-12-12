<?php include_once "header.php" ?>
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2><span>Contact</span> Us</h2>
            <p>Địa chỉ của chúng tôi cung cấp là chính xác và luôn luôn chào đón</p>
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