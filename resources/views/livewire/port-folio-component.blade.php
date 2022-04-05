<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Limitless is your potential. Magnificent is your future.</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-web">Web</li>
                    <li data-filter=".filter-logo">Logo</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            @foreach(\App\Models\Portfolio::all() as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->type}}">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/images/portfolios') }}/{{ $portfolio->image }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$portfolio->title}}</h4>
                            <p>{{$portfolio->description}}</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/images/portfolios') }}/{{ $portfolio->image }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="{{$portfolio->title}}"><i class="bx bx-plus"></i></a>
                            <a href="{{$portfolio->link}}" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>

    </div>
</section>
