@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">

            <section class="home" style="margin-top: 5rem">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.731914655285!2d-0.012299723695918554!3d51.543434408070716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d65a5966ee5%3A0x566617b4d56aabce!2sThe%20Arcade%2C%20Westfield%20stratford%20city%2C%20London%20E20%201EL%2C%20UK!5e1!3m2!1sen!2sng!4v1750108409749!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

            <!--==================== Contact Us ====================-->
            <section class="about section" id="contact">
                <div class="about__container container grid contactus">
                    <div class="about__data">
                        <h2 class="section__title about__title"> Contact </h2>
                         <div class="contact__description">
                            LOCATION: <p> 107-109 the arcade, Stratford London. </p>
                        </div>
                        
                        <br> <br>
                        <div class="contact__description">
                            SUPPORT: <a href="tel:07463401030"> 0746-340-1030 </a>
                        </div>
                    </div>

                    <div class="about__img">
                        <form action="{{ route('submit message') }}" method="POST">
                            @csrf

                            <h2 class="section__title about__title"> Quick Contact Form </h2>

                            <div class="all-data">
                                <div class="contact__description">
                                    <label for="firstname"> First Name</label>
                                    <input type="text" name="firstname" id="firstname" required>
                                </div>

                                <div class="contact__description">
                                    <label for="lastname"> Last Name</label>
                                    <input type="text" name="lastname" required>
                                </div>

                                <div class="contact__description">
                                    <label for="lastname"> Email Address </label>
                                    <input type="email" name="email" required>
                                </div>

                                <div class="contact__description">
                                    <label for="business_name"> Business Name </label>
                                    <input type="text" name="business_name" required>
                                </div>

                                <div class="contact__description">
                                    <label for="type_of_staff"> Type of Staff Needed </label>
                                    <input type="text" name="type_of_staff" required>
                                </div>

                                <div class="contact__description">
                                    <label for="start_date"> Start Date </label>
                                    <input type="date" name="start_date" required>
                                </div>
                            
                                <div class="contact__description">
                                    <label for="message"> Message </label>
                                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <button type="submit"> Submit Request </button>
                            
                        </form>
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

        </main>

    @endsection