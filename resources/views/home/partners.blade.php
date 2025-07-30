@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">
            <!--==================== FAQ ====================-->
            <section class="discover section partners" id="partners">
                <h2 class="section__title">  Partner with Matrix Recruitment Limited </h2>

                <div class="container privacy__also">
                    
                    <h5> We’re building a recruitment agency that puts people first — and we want to grow with partners like you. Whether you’re an experienced recruiter, social worker, HR professional, or someone with a great network, there’s a place for you at Matrix. </h5>  <br>

                    <br> <br>
                    <ol>
                        <ul> 
                            <li>
                                <h6> Referral Partner </h6>

                                <p> Do you know companies that need staff or professionals looking for work? </p>
                                <p> You refer — we reward. </p>
                                <p> ✅ Share job seekers or employers with us </p>
                                <p> 💷 Earn 10–15% commission per successful placement </p>
                                <p> 📩 No setup, no fees — just share your referral and get paid </p>

                                <br>
                                <p> <b> Great for: </b> Freelancers, social workers, HR professionals, influencers, retired professionals </p>
                            </li>

                            <li>
                                <h6> Recruitment Associate / Consultant Partner  </h6>
                                
                                <p> Want to run your own desk under the Matrix brand? </p>
                                <p> You recruit — we support. </p>
                                <p> ✅ Work from anywhere, use our CRM, branding & resources </p>
                                <p> 💷 Earn up to 60 - 70% of the placement fee </p>
                                <p> 🧑‍🏫 Get training, leads & operational support </p>
                                <p> 📑 You invoice us — we handle the admin </p>

                                <br>
                                <p> <b> Perfect for: </b> Freelance recruiters, people returning to work, side hustlers, independent consultants </p>
                            </li>

                            <li>
                                <h6> Equity or Strategic Partner </h6>
                                
                                <p> Looking to grow a region, invest, or build a new branch? </p>
                                <p> You build — we grow together. </p>
                                <p> 🔁 Open a branch under Matrix in your area </p>
                                <p> 💷 Share revenue or equity based on performance or investment </p>
                                <p> 🤝 Get legal, compliance, branding & tech support </p>
                                <p> 🏢 Ideal if you want to lead your own team long-term </p>

                                <br>
                                <p> <b> Great for: </b> Senior recruiters, directors, investors, ambitious professionals </p>
                            </li>

                            <li> 
                                <h6> 💼 Why Partner with Matrix? </h6>
                                <p> ✅ Transparent pay & clear terms </p>
                                <p> 🤝 Ongoing support & tools </p>
                                <p> 🌍 Use our growing brand to reach more clients </p>
                                <p> 📚 Free training & access to our systems </p>
                                <p> 🧾 No hidden fees, no franchise costs </p>
                            </li>
                        </ul>

                        <br> <br>
                        <ul>
                            <h4 class="section__title"> 🚀 How to Join </h4>
                            <li>
                                <h6> Apply online or send us an email </h6>
                            </li>

                            <li>
                                <h6> We’ll schedule a call to learn about your goals </h6>
                            </li>

                            <li> 
                                <h6> You sign a simple agreement </h6>
                            </li>

                            <li>
                                <h6> You start earning! </h6>
                            </li>

                            <li> <p> <b> 📩 Email us: </b> <a href="mailto:support@matrixrecruitment.org"> support@matrixrecruitment.org </a> </p>  </li>

                            <li> <p> <b> 📞 Call: </b> <a href="tel:+447463401030"> +44-746-340-1030 </a> </p> </li>

                            <li> <p> <b> 🌐 Website: </b> <a href="https://matrixrecruitment.org"> https://matrixrecruitment.org </a> </p> </li>
                        </ul>

                        <br> <br>
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