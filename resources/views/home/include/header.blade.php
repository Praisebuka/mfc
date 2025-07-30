<header class="header" id="header">
    <nav class="nav container">
        {{-- <a href="{{ route('Home') }}" class="nav__logo"> Matrix Recruitment </a> --}}
        <a href="{{ route('Home') }}" class="nav__logo"> <img src="{{ asset('assets/img/logo/mrl_logo.jpg') }}" alt="" style="width: 100px"> </a>

        <div class="nav__menu" id="nav-menu">
            @if ($url === 'about')
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('Home') }}" class="nav__link"> Home </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link active-link"> About </a>
                    </li>
                    <li class="nav__item">
                        <a href="/#services" class="nav__link"> Our Services </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('contact us') }}" class="nav__link">  Contact Us </a>
                    </li>
                </ul>
            @elseif ($url === 'contact')
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('Home') }}" class="nav__link"> Home </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('about us') }}" class="nav__link"> About </a>
                    </li>
                    <li class="nav__item">
                        <a href="/#services" class="nav__link"> Our Services </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link active-link">  Contact Us </a>
                    </li>
                </ul>
            @elseif ($url === 'faq')
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('Home') }}" class="nav__link"> Home </a>
                    </li>
                    <li class="nav__item">
                        <a href="/#about" class="nav__link"> About </a>
                    </li>
                    <li class="nav__item">
                        <a href="/#services" class="nav__link"> Our Services </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('contact us') }}" class="nav__link">  Contact Us </a>
                    </li>
                </ul>
            @else
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('Home') }}" class="nav__link active-link"> Home </a>
                    </li>
                    <li class="nav__item">
                        <a href="/#about" class="nav__link"> About </a>
                    </li>
                    <li class="nav__item">
                        <a href="/#services" class="nav__link"> Our Services </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('contact us') }}" class="nav__link">  Contact Us </a>
                    </li>
                </ul>
            @endif

            <div class="nav__dark">
                <!-- Theme change button -->
                <span class="change-theme-name"> Dark mode </span>
                <i class="ri-moon-line change-theme" id="theme-button"></i>
            </div>

            <i class="ri-close-line nav__close" id="nav-close"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-function-line"></i>
        </div>
    </nav>
</header>
