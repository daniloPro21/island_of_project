

    @extends('layouts.app')

        @section('content')
            <section   data-interval="5000" data-u-ride="carousel">
                <ol class="u-absolute-hcenter u-carousel-indicators u-block-c512-2">
                    <li data-u-target="#carousel_4797" class="u-grey-30" data-u-slide-to="0"></li>
                </ol>
                <div class="u-carousel-inner" role="listbox">
                    <div class="u-carousel-item u-clearfix u-active u-section-1-1">
                        <div class="u-expanded u-grey-10 u-map u-map-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">
                            <div class="embed-responsive">
                                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1AywXvTyCDdOM_L0BGg5vcObATDG5Kxgz" width="640"
                                        height="480"></iframe>
                            </div>

                        </div>
                        <div class="u-clearfix u-sheet u-sheet-1">
                            <div class="u-align-left u-container-style u-group u-white u-group-1">
                                <div class="u-container-layout u-valign-middle u-container-layout-1">
                                    <h2 class="u-text u-text-1">Island of Project</h2>
                                    <p class="u-text u-text-2">Efoulan Yaounde Cameroun</p>
                                    <p class="u-text u-text-3">1 212-736-3100</p>
                                    <p class="u-text u-text-4">
                                        <a href="mailto:contacts@esbnyc.com">contacts@esbnyc.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-c512-3" href="#carousel_4797" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-c512-4" href="#carousel_4797" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
                    <span class="sr-only">Next</span>
                </a>
            </section>


        @endsection
