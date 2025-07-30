@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid aboutus">
                    <div class="about__data">
                        <h2 class="section__title about__title"> Who Are We </h2>
                        <p class="about__description">
                            At MRL, we specialise in delivering high-quality, fully vetted healthcare professionals to a wide range of healthcare providers across the UK. From NHS trusts and private hospitals to residential care homes, supported living services, mental health units, and domiciliary care providers, we supply the right staff to meet your unique service needs.
                        </p>

                        <br>
                        <p> Meet the Founder – <b> Tolulope Akinwumi </b> </p>
                        <br>
                        <p> A registered social worker and passionate leader, Tolulope brings deep insight into the care, healthcare, and people management sectors. With a Master’s in Healthcare Leadership from Hull University, she founded this agency with one goal in mind: to connect businesses with dependable, capable staff they can trust. </p>
                        <br>
                        <a href="{{ route('contact us') }}" class="button"> Contact Us </a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="{{ asset('assets/img/the_team/md_real_portrait.jpg') }}" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/{{ asset('assets/img/about2.jpg') }}" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== VIDEO ====================-->
            <section class="video section" style="display: none">
                <h2 class="section__title"> Video Explanation </h2>

                <div class="video__container container">
                    <p class="video__description"> Find out more with our video of the most us
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/video.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors1.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors2.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors3.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors4.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors5.png') }}" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main>

    @endsection