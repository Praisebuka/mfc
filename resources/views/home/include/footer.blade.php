<!--==================== FOOTER ====================-->
<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content grid">
            <div class="footer__data">
                <h3 class="footer__title"> Matrix Recruitment </h3>
                <p class="footer__description"> We specialize in supplying <br> high-quality, ready-to-work staffs <br> to businesses across London</p>
                <div>
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://x.com/matixltd" target="_blank" class="footer__social">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/matrixrecruitmentagency" target="_blank" class="footer__social">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                        <i class="ri-youtube-fill"></i>
                    </a>
                </div>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle"> About </h3>
                <ul>
                    <li class="footer__item">
                        <a href="{{ route('about us') }}" class="footer__link"> About Us </a>
                    </li>
                    <li class="footer__item">
                        <a href="/#services" class="footer__link"> Our Services </a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link" title="Coming Soon :)"> News & Blog </a>
                    </li>
                </ul>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle"> Company </h3>
                <ul>
                    <li class="footer__item">
                        <a href="#" class="footer__link" title="Coming Soon :)"> Team </a>
                    </li>
                    <li class="footer__item">
                        <a href="{{ route('plans and pricing') }}" class="footer__link"> Plan & Pricing </a>
                    </li>
                    <li class="footer__item">
                        <a href="{{ route('become a partner') }}" class="footer__link"> Become a Partner </a>
                    </li>
                </ul>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle"> Support </h3>
                <ul>
                    <li class="footer__item">
                        <a href="{{ route('faq') }}" class="footer__link"> FAQs </a>
                    </li>
                    <li class="footer__item">
                        <a href="mailto:support@matrixrecruitment.org" class="footer__link"> Support Center </a>
                    </li>
                    <li class="footer__item">
                        <a href="{{ route('contact us') }}" class="footer__link"> Contact Us </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__rights">
            <p class="footer__copy">&#169; 2025 Matrix Recruitment. All rigths reserved. </p>
            <div class="footer__terms">
                <a href="{{ route('terms and conditions') }}" class="footer__terms-link"> Terms & Conditions </a>
                <a href="{{ route('privacy and policy') }}" class="footer__terms-link"> Privacy Policy </a>
            </div>
        </div>
    </div>
</footer>

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line scrollup__icon"></i>
</a>

