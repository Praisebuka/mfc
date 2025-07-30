@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">
            <!--==================== Plans & Pricing ====================-->
            <section class="discover section partners" id="partners">
                <h2 class="section__title">  Plans & Pricing </h2>

                <div class="container privacy__also">
                    
                    <h5>  Market Overview – UK Recruitment Fees </h5>  <br>

                    <br> <br>
                    <ol>
                        <ul> 
                            <li>
                                <h6> Permanent placements </h6>

                                <p> Standard agency fees in the UK are 15%–30% of first-year salary; 15%–20% is most common for volume hiring, up to 30% for niche or executive roles. </p>
                            </li>

                            <li>
                                <h6> Temporary/contract staffing  </h6>
                                
                                <p> Agencies typically mark up pay at 25%–75%, often around 50%–70% for general roles; specialized roles can hit *100%+* </p>
                            </li>

                            <li>
                                <h6> Fixed‑fee recruitment </h6>
                                
                                <p> Flat fees between £600–£6,000+ depending on salary band. </p>
                            </li>
                        </ul>

                        <br> <br>

                        <ul> 
                            <li>
                                <h6> Why We Charge Less </h6>

                                <p style="margin-bottom: 10px"> 1. Streamlined processes & in-house tech reduce delivery costs. </p>
                                <p style="margin-bottom: 10px"> 2. Lower overhead, allowing margin while staying competitive. </p>
                                <p style="margin-bottom: 10px"> 3. Value proposition—better client control and candidate satisfaction. </p>
                                <p style="margin-bottom: 10px"> 4. Volume growth strategy—lower rates attract larger clients, offsetting margin drop. </p>
                            </li>

                            <li>
                                <h6> Suggested Plan Launch Strategy  </h6>
                                
                                <p style="margin-bottom: 10px"> 1. Segmented pricing tiers (permanent, executive, temp, fixed‑fee). </p>
                                <p style="margin-bottom: 10px"> 2. Transparent communication: display savings in onboarding pitch. </p>
                                <p style="margin-bottom: 10px"> 3. Guarantee & rebates: e.g., 90-day replacement guarantee for permanent hires. </p>
                                <p style="margin-bottom: 10px"> 4. Exclusive agreements: e.g., 2-week exclusivity for fixed‑fee roles in return for pricing. </p>
                                <p style="margin-bottom: 10px"> 5. Quarterly pricing reviews: adjust as volumes grow and economy shifts. </p>
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