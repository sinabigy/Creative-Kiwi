<main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/img/about.jpg ') }}" width="640" height="360" class="img-fluid" alt="" style="border-radius: 10% 20% 30% 40% / 50% 40% 30%;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>Real facts, but have no worries.</h3>
                    <p class="font-italic">
                        It takes about 50 milliseconds (that’s 0.05 seconds) for users to form an opinion about your
                        website that determines whether they like your site or not, whether they’ll stay or leave.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> 38% of people will stop engaging with a website if the
                            content or layout are unattractive.</li>
                        <li><i class="bi bi-check-circle"></i> Slow-loading websites cost retailers $2.6 billion in
                            lost sales each year.</li>
                        <li><i class="bi bi-check-circle"></i> 75% of consumers admit to making judgements on a
                            company’s credibility based on the company’s website design.</li>
                    </ul>
                    <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Happy Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Why Creative Kiwi ?</h2>

                <p>We believe in building high value, meaningful, long-term relationships with our clients</p>
                <p style="font-size: smaller;">"We connect, explore, create, empower and grow together"</p>
            </div>
            <h1></h1>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>We work hard, together</h4>
                        <p>Harness the combined expertise of a team of specialists in strategy, user experience, creative design, web development, SEO and marketing for your next digital project. We are committed to delivering human-centric solutions that exceed your expectations.</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Brainstorming</h4>
                        <p>We are agile and ever-evolving, pioneering new ways to solve your problems</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-images"></i>
                        <h4>Upgrade</h4>
                        <p>We are passionate about continuous improvement, leaving no stone unturned in the search for the best solutions to your challenges using the latest technology</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-shield"></i>
                        <h4>Security</h4>
                        <p>The Internet is a dangerous place! With great regularity, we hear about websites becoming unavailable due attacks. We provide effective website security requires design effort across the whole of the website</p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('assets/img/features.svg ') }}" width="640" height="360" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg"
        style='background: linear-gradient(45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url("assets/img/hero-bg.jpg") center center no-repeat'>
        @livewire('testimonial')
    </section>



    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>These are the most commonly asked questions!</p>
            </div>

            <div class="faq-list">
                <ul>
                    @livewire('faq-component')

                </ul>
            </div>

        </div>
    </section>

    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>If you have any questions you can use this form or contact me using any of the methods listed.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Christchurch</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@creativekiwi.nz</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>022 439 5030</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                    <iframe title="Location" class="mb-4 mb-lg-0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=-43.520111757285896,172.62748718261722+(Creative%20Kiwi)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>


                @livewire('add-contact-component')

            </div>

        </div>

    </section>
</main>
