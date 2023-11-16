<div class="navigasi-atas">
<header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo" style="text-decoration:none;">WS-net</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="{{route('menu-home')}}" 
                        class="nav__link {{(Request::segment(1) == 'home') ? 'active' : '' }}" 
                        style="text-decoration:none;">Home</a></li>
                        <li class="nav__item"><a href="{{route('menu-about')}}" 
                        class="nav__link {{(Request::segment(1) == 'about') ? 'active' : '' }}" style="text-decoration:none;">About</a></li>
                        <li class="nav__item"><a href="{{route('menu-skills')}}" 
                        class="nav__link {{(Request::segment(1) == 'skilss') ? 'active' : '' }}" style="text-decoration:none;">Skills</a></li>
                        <li class="nav__item"><a href="{{route('menu-work')}}" 
                        class="nav__link {{(Request::segment(1) == 'work') ? 'active' : '' }}" style="text-decoration:none;">Work</a></li>
                        <li class="nav__item"><a href="{{route('menu-contact')}}" 
                        class="nav__link {{(Request::segment(1) == 'contact') ? 'active' : '' }}" style="text-decoration:none;">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
        </nav>
</header>
</div>