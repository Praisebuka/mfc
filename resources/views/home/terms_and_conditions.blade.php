@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">
            <!--==================== FAQ ====================-->
            <section class="discover section terms" id="terms">
                <h2 class="section__title">  Terms & Conditions </h2>

                <div class="container the__terms__also">

                    <h5> Welcome to Matrix Recruitment Limited. </h5>  <br>
                    <h5> These Terms and Conditions govern your use of our website and services. By using our website or engaging our services, you agree to be bound by these terms. </h5>

                    <br> <br>
                    <ol>
                        <ul> 
                            {{-- <h4 class="section__title"> Definition  </h4> --}}
                            <li>
                                <h6> Definition </h6>
                                <p> <b> Our Clients </b>: Any business or individual engaging Matrix Recruitment Limited to recruit staff. </p>
                                <p> <b> Our Candidates </b>: Any person using our services to find employment or temporary assignments. </p>
                                <p> <b> Our Website Users </b>: Any person accessing or browsing our website. </p>
                                <p> <b> Our Services </b>: Recruitment, staffing, consultancy, and related services provided by Matrix Recruitment Limited. </p>
                            </li>

                            <li>
                                <h6> Use Of Website </h6>
                                <p> You agree to use this website only for lawful purposes and in accordance with these terms. </p>
                                <p> You must not misuse our website by introducing viruses or other malicious content. </p>
                                <p> Content on this site is provided for general information only. We reserve the right to update or remove content without notice. </p>
                            </li>

                            <li>
                                <h6> Recruitment Services - Clients </h6>
                                <p> Matrix Recruitment Limited agrees to source and introduce candidates based on your requirements. </p>
                                <p> All introductions are confidential. If a candidate is engaged (employed or contracted) within 12 months of our introduction, our placement fees apply. </p>
                                <p> Clients are responsible for verifying the suitability, qualifications, and references of candidates. </p>
                                <p> Fees, terms of payment, and guarantees are outlined in our client service agreement. </p>
                            </li>

                            <li> 
                                <h6> Recruitment Services - Candidates </h6>
                                <p> We do not charge candidates for seeking employment through us. </p>
                                <p> By submitting your CV or application, you consent to us storing your data and sharing it with prospective employers. </p>
                                <p> We do not guarantee job placement or interviews. </p>
                                <p> It is your responsibility to ensure your CV and information are accurate and truthful. </p>
                            </li>

                            <li> 
                                <h6> Confidentiality </h6>
                                <p> All parties agree to maintain confidentiality with respect to any proprietary or personal information shared in the course of our recruitment services. </p>
                            </li>

                            <li>
                                <h6> Intellectual Property </h6>
                                <p> All content on our website (including text, graphics, logo, and layout) is the property of Matrix Recruitment Limited. Reproduction is prohibited without prior written consent </p>
                            </li>

                            <li> 
                                <h6> Data Protection and Privacy </h6>
                                <p> We handle your personal data in accordance with our [Privacy Policy] and the UK General Data Protection Regulation (UK GDPR). You have the right to access, rectify, or delete your personal information at any time. </p>
                            </li>

                            <li>
                                <h6> Limitation of Liability </h6>
                                <p> Matrix Recruitment Limited shall not be liable for any loss or damage arising from your use of our website or recruitment services, except where such liability cannot be excluded by law. </p>
                            </li>

                            <li>
                                <h6> Termination </h6>
                                <p> We reserve the right to suspend or terminate access to our website or services at our discretion, including if you breach these terms. </p>
                            </li>

                            <li>
                                <h6> Governing Law and Jurisdiction </h6>
                                <p> These terms are governed by the laws of England and Wales. Any disputes will be subject to the exclusive jurisdiction of the English courts. </p>
                            </li>

                            <li>
                                <h6> Changes to These Terms </h6>
                                <p> We may revise these Terms and Conditions from time to time. Any changes will be posted on this page and, where appropriate, notified by email. </p>
                            </li>
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