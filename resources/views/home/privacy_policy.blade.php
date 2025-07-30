@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">
            <!--==================== FAQ ====================-->
            <section class="discover section privacy" id="privacy">
                <h2 class="section__title">  Privacy & Policy </h2>

                <div class="container privacy__also">

                    <ol>
                        <ul> 
                            <li>
                                <h6> Introduction </h6>
                                <p> Matrix Recruitment Limited (“we”, “our”, or “us”) is committed to protecting the privacy and security of your personal information. This Privacy Policy outlines how we collect, use, store, and protect your data in accordance with the UK General Data Protection Regulation (UK GDPR) and the Data Protection Act 2018. </p>
                            </li>

                            <li>
                                <h6> Who We Are </h6>
                                <p> <b> Company Name: </b> Matrix Recruitment Limited </p>
                                <p> <b> Registered Address: </b> 107-109, the arcade, stratford. East London. </p>
                                <p> <b> Contact Email: </b> <a href="mailto:info@matrixrecruitment.org"> info@matrixrecruitment.org </a> </p>
                                <p> <b> Telephone: </b> <a href="tel:+447463401030"> +44-746-340-1030 </a> </p>
                            </li>

                            <li>
                                <h6> What Data We Collect </h6>
                                <em> We may collect the following personal data: </em>
                                <p class="shift-down-a-lil"> Full name, date of birth, contact details (email, phone, address) </p>
                                <p> National Insurance number, right to work documentation </p>
                                <p> CVs, employment history, references, education details </p>
                                <p> Job preferences, interview notes, and feedback </p>
                                <p> Criminal record checks (if required by clients) </p>
                                <p> Bank account details (if placed for payroll) </p>
                                <p> Emergency contact information </p>
                            </li>

                            <li> 
                                <h6> How We Collect Your Data </h6>
                                <p> Directly from you via forms, emails, or interviews </p>
                                <p> From third parties, such as referees, job boards, or clients </p>
                                <p> Through our website or job application platforms </p>
                            </li>

                            <li> 
                                <h6> Why We Process Your Data </h6>
                                <em> We collect and process your data for the following reasons: </em>
                                <p class="shift-down-a-lil"> To match you with suitable job opportunities </p>
                                <p> To communicate with you about vacancies and updates </p>
                                <p> To carry out right to work and background checks </p>
                                <p> To comply with legal obligations and industry regulations </p>
                                <p> For payroll and payment processing (where applicable) </p>
                                <p> To manage our business relationship with you and our clients </p>
                            </li>

                            <li>
                                <h6>  Legal Basis for Processing </h6>
                                <em> We process your data based on: </em>
                                <p class="shift-down-a-lil"> Consent – when you voluntarily submit your CV or application </p>
                                <p> Contract – to place you in employment or temporary roles </p>
                                <p> Legal obligation – to comply with employment laws and HMRC </p>
                                <p> Legitimate interests – to operate and improve our recruitment services </p>
                            </li>

                            <li> 
                                <h6> Data Sharing </h6>
                                <em> We may share your data with: </em>

                                <p class="shift-down-a-lil"> Prospective employers and clients </p>
                                <p> Background check providers </p>
                                <p> Payroll and umbrella companies </p>
                                <p> IT and cloud service providers </p>
                                <p> Regulatory authorities when legally required </p>
                                <p> We ensure all third parties respect the security of your data and comply with UK data protection laws. </p>
                            </li>

                            <li>
                                <h6> Data Retention </h6>
                                <em> We retain your data: </em>

                                <p class="shift-down-a-lil"> For as long as necessary to fulfill the purposes for which we collected it </p>
                                <p> Typically for up to 6 years after your last interaction with us </p>
                                <p> You may request deletion of your data at any time unless we are legally required to retain it </p>
                            </li>

                            <li>
                                <h6> Your Rights </h6>
                                <em> Under the UK GDPR, you have the right to: </em>

                                <p class="shift-down-a-lil"> Access the personal data we hold about you </p>
                                <p> Request correction of inaccurate or incomplete data </p>
                                <p> Request deletion of your data (“right to be forgotten”) </p>
                                <p> Object to or restrict processing in certain circumstances </p>
                                <p> Data portability </p>
                                <p> Withdraw your consent at any time (where applicable) </p>
                                <p> <b> To exercise these rights, contact us at: </b> <a href="mailto:info@matrixrecruitment.org"> info@matrixrecruitment.org </a> </p>
                            </li>

                            <li>
                                <h6> Security of Your Data </h6>
                                <p> We use appropriate technical and organisational measures to secure your personal information from unauthorised access, loss, or misuse. </p>
                            </li>

                            <li>
                                <h6> Cookies and Website Use </h6>
                                <p> If our website uses cookies, we will notify you and allow you to manage your preferences in accordance with our Cookie Policy. </p>
                            </li>

                            <li>
                                <h6> Changes to This Policy </h6>
                                <p> We may update this Privacy Policy periodically. The latest version will always be available on our website. </p>
                            </li>

                            <li>
                                <h6> Contact Us </h6>
                                <em> If you have questions or concerns about this Privacy Policy or your data, contact: </em>
                                <p class="shift-down-a-lil"> Data Protection Officer </p>
                                <p> Matrix Recruitment Limited </p>
                                <p> <b> Email: </b> <a href="mailto:info@matrixrecruitment.org"> info@matrixrecruitment.org </a> </p>
                                <p> <b> Phone: </b> <a href="tel:+447463401030"> +44-746-340-1030 </a> </p>
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