<div class="container" data-aos="fade-up">

    <div class="section-title text-white">
        <h2 >Testimonials</h2>
        <p>What our customers are saying.</p>
    </div>

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

            @foreach (\App\Models\Testimonial::all() as $post)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $post->description }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset('assets/images/testimonials') }}/{{ $post->image }}"
                        width="640" height="360" class="testimonial-img" alt="">
                        <h3>{{ $post->name }}</h3>
                        <h4>{{ $post->title }}</h4>
                    </div>
                </div><!-- End testimonial item -->
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
    </div>

</div>
