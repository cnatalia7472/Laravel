<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="navbar-brand-md"> {{-- Original was navbar-brand --}}
        <a href="{{ route('dashboard') }}" class="d-inline-block">
            <img src="{{ asset('assets/backend/images/revohub_logo.png') }}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="d-md-none ml-2">Git updates</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0"></span> {{-- Number --}}
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Git updates</span>
                        <a href="#" class="text-default"><i class="icon-sync"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="text-muted font-size-sm">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
                                    <div class="text-muted font-size-sm">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
                                    <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Have Carousel ignore keyboard events
                                    <div class="text-muted font-size-sm">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All updates</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-mixed">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Global View</a>

                    <div class="dropdown-menu dropdown-menu-left">
                        <a href="{{ route('global.index') }}" class="dropdown-item">Overview</a>
                        <a href="{{ route('global.contacts') }}" class="dropdown-item">Contacts</a>
                        <a href="{{ route('global.domains') }}" class="dropdown-item">Domains</a>
                    </div>
                </li>
                <li class="nav-item mega-menu-full">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Wide</a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Form components</div>
                                    <div class="dropdown-divider mb-2"></div>
                                    <div class="mb-3 mb-xl-0">
                                        <a href="form_inputs.html" class="dropdown-item rounded">Basic inputs</a>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">UI components</div>
                                    <div class="dropdown-divider mb-2"></div>
                                    <div class="mb-3 mb-xl-0">
                                        <a href="components_modals.html" class="dropdown-item rounded">Modals <span class="badge badge-pill bg-grey ml-auto">10+</span></a>
                                        <a href="components_dropdowns.html" class="dropdown-item rounded">Dropdown menus</a>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Sidebars</div>
                                    <div class="dropdown-divider mb-2"></div>
                                    <div class="mb-3 mb-xl-0">
                                        <a href="sidebar_default_collapse.html" class="dropdown-item rounded">Main sidebar</a>
                                        <a href="sidebar_secondary_after.html" class="dropdown-item rounded">Secondary sidebar</a>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Navigation</div>
                                    <div class="dropdown-divider mb-2"></div>
                                    <div class="mb-3 mb-xl-0">
                                        <a href="navigation_horizontal_click.html" class="dropdown-item rounded">Submenu on click</a>
                                        <a href="navigation_horizontal_hover.html" class="dropdown-item rounded">Submenu on hover</a>
                                    </div>
                                </div>
                                <div class="col-xl-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Classic</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Second level</a>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle">Second level with child</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Third level</a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">Third level with child</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Fourth level</a>
                                        <a href="#" class="dropdown-item">Fourth level</a>
                                        <a href="#" class="dropdown-item">Fourth level</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item">Third level</a>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item">Second level</a>
                    </div>
                </li>
            </ul>
        </div>


        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="d-md-none ml-2">Users</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Users online</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{ asset('assets/backend/images/placeholders/placeholder.jpg') }}" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>
                        </ul>

                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All users</a>
                        <a href="#" class="text-grey"><i class="icon-gear"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">Messages</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Messages</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="{{ asset('assets/backend/images/placeholders/placeholder.jpg') }}" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">James Alexander</span>
                                            <span class="text-muted float-right font-size-sm">04:58</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>
            {{-- System Menu --}}
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link" data-toggle="dropdown">
                    <i class="icon-gear"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Administration</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('admin.users.index') }}" class="dropdown-item">Users</a>
                            <a href="{{ route('admin.roles.index') }}" class="dropdown-item">Roles</a>
                            <a href="{{ route('admin.permissions.index') }}" class="dropdown-item">Permissions</a>
                        </div>
                    </div>
                    <a href="{{ route('license') }}" class="dropdown-item"><i class="icon-certificate"></i>System License</a>
                    <a href="{{ route('change-log') }}" class="dropdown-item"><i class="icon-git-branch"></i>Change Log</a>
                    <a href="{{ route('repor') }}" class="dropdown-item"><i class="icon-bug2"></i>Report Bug</a>
                </div>
            </li>

            {{-- Language Menu --}}
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/backend/images/flags/shiny/16/United-States.png') }}" alt="">
                    United States (English)
                </a>

                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item active english"><img src="{{ asset('assets/backend/images/flags/shiny/48/United-States.png') }}"  alt=""> United States (English)</a>
                    <a href="#" class="dropdown-item spanish"><img src="{{ asset('assets/backend/images/flags/shiny/48/Mexico.png') }}"  alt=""> México (Español)</a>
                    <a href="#" class="dropdown-item deutsch"><img src="{{ asset('assets/backend/images/flags/shiny/48/Germany.png') }}" alt=""> Germany (Deutsch)</a>
                    <a href="#" class="dropdown-item arabic-uae"><img src="{{ asset('assets/backend/images/flags/shiny/48/United-Arab-Emirates.png') }}"  alt=""> United Arab Emirates (العربية)</a>
                    <a href="#" class="dropdown-item thai"><img src="{{ asset('assets/backend/images/flags/shiny/48/Thailand.png') }}"  alt=""> Thailand (ภาษาไทย)</a>
                </div>
            </li>
            {{-- User Menu --}}
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/backend/images/placeholders/placeholder.jpg') }}" class="rounded-circle" alt="">
                    <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('profile') }}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account Settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-key"></i> Change Password</a>
                    <a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->