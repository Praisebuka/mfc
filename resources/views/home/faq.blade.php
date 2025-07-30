@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">
            <!--==================== FAQ ====================-->
            <section class="discover section faq" id="faq">
                <h2 class="section__title">  Frequently Asked Questions (FAQ) </h2>

                <div class="container also__includes">
                    <ol>
                        <ul> 
                            <h4 class="section__title"> For Employers / Clients </h4>
                            <li>
                                <h6> What types of staff do you provide? </h6>
                                <p> We supply qualified and vetted professionals for healthcare, social care, administrative, and support roles—both temporary and permanent. We tailor recruitment to your organisation’s needs. </p>
                            </li>

                            <li>
                                <h6> How quickly can you fill a vacancy? </h6>
                                <p> We offer same-day and next-day staffing for urgent needs. Our responsive 24/7 booking team ensures minimal disruption to your service. </p>
                            </li>

                            <li>
                                <h6> Are your staff fully vetted? </h6>
                                <p> Yes. All our staff go through a rigorous compliance process including DBS checks, reference verification, right-to-work clearance, and up-to-date training. </p>
                            </li>

                            <li> 
                                <h6> What are your rates? </h6>
                                <p> Our pricing is highly competitive—up to 20% lower than standard agency rates. We also offer bespoke packages to suit your budget and staffing needs. </p>
                            </li>

                            <li> 
                                <h6> Can we request the same staff regularly? </h6>
                                <p> Absolutely. We encourage continuity and will do our best to allocate familiar staff to your service whenever possible. </p>
                            </li>
                        </ul>

                        <br> <br>

                        <ul>
                            <h4 class="section__title"> For Job Seekers / Candidates </h4>
                            <li>
                                <h6> What types of roles do you offer? </h6>
                                <p> We recruit for a wide range of positions in healthcare, social care, admin, and support—covering temporary, contract, and permanent roles. </p>
                            </li>

                            <li>
                                <h6> How do I register with Matrix Recruitment? </h6>
                                <p> Simply fill out our online application form or contact our team. We’ll guide you through our onboarding and compliance process step-by-step. </p>
                            </li>

                            <li> 
                                <h6> Do you charge candidates any fees? </h6>
                                <p> No, we never charge candidates for our recruitment services. Our support is free and focused on helping you succeed. </p>
                            </li>

                            <li>
                                <h6> Can I choose my shifts or workdays? </h6>
                                <p> Yes, we offer flexible shift patterns. You can pick the days and hours that suit your availability. </p>
                            </li>

                            <li>
                                <h6> Do you provide training or CPD? </h6>
                                <p> We support continuous professional development by offering mandatory training and signposting CPD opportunities through our partners. </p>
                            </li>
                        </ul>
                    </ol>
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