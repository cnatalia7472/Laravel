<!-- Main navigation -->
<div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header"><div class="text-uppercase font-size-lg line-height-xs">Main Menu</div> <i class="icon-menu" title="Main"></i></li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="icon-home4"></i>
                <span>
									Dashboard
								</span>
            </a>
        </li>
        <li class="nav-item"><a href="{{ route('organizations.index') }}" class="nav-link {{{ (Request::is('organizations') ? 'active' : '') }}}"><i class="icon-office"></i> <span>Organizations</span></a></li>
        <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-vcard"></i> <span>Contacts</span></a></li>
        <!-- /main -->
        <!-- Forms -->
       {{-- @if (is_numeric(Request::segment(2)))
        <li class="nav-item-header"><div class="text-uppercase font-size-lg line-height-xs">{{ $organization->company_name }}</div> <i class="icon-menu" title="{{ $organization->company_name }}"></i></li>

            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-home4"></i> <span>Home</span></a></li>

            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-file-text2"></i> <span>Documents</span></a></li>
            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-vcard"></i> <span>Contacts</span></a></li>
            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-vcard"></i> <span>Licensing</span></a></li>
            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-vcard"></i> <span>Vendors</span></a></li>
            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-vcard"></i> <span>Hosting</span></a></li>
            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-vcard"></i> <span>SSL Tracker</span></a></li>
            <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link {{{ (Request::is('contacts') ? 'active' : '') }}}"><i class="icon-vcard"></i> <span>Domain Tracker</span></a></li>


        @endif --}}
        <!-- /forms -->
    </ul>
</div>
<!-- /main navigation -->
