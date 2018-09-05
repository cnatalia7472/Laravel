<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{ asset('assets/frontend/img/logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item d-none d-sm-block">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                                <li class="nav-item">
                                    <span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-search d-none d-md-block">
                            <form id="searchForm" action="page-search-results.html" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <span class="input-group-append">
													<button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
												</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle  {{ Request::is('/*') ? 'active' : '' }}" href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle  {{ Request::is('features*') ? 'active' : '' }}" href="{{ route('contact-us') }}">
                                                Features
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Client Management</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Backup Management</a>

                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Documentation</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">DNS Management</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Web Hosting <span class="tip tip-dark">hot</span> <em class="not-included">(Not Included)</em></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle  {{ Request::is('resources*') ? 'active' : '' }}" href="{{ route('contact-us') }}">
                                                Resources
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Knowledge Base</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Downloads</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">System Status</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle  {{ Request::is('company*') ? 'active' : '' }}" href="{{ route('contact-us') }}">
                                                Company
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">About Us</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Careers</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Legal</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">Terms of Service</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">Privacy Policy</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">Cookies Policy</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">GDPR</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">HIPAA</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">Licenses</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle  {{ Request::is('contact-us*') ? 'active' : '' }}" href="{{ route('contact-us') }}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>