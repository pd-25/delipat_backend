<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('services.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('services.index') }}">
                <i class="ri-group-fill"></i>
                <span>Services</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('blogs.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('blogs.index') }}">
                <i class="ri-group-fill"></i>
                <span>Blog</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('case-studies*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('case-studies.index') }}">
                <i class="ri-group-fill"></i>
                <span>Case Studies</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('testimonials*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('testimonials.index') }}">
                <i class="ri-group-fill"></i>
                <span>Testimonials</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('gallery.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('gallery.index') }}">
                <i class="ri-group-fill"></i>
                <span>Gallery</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('seo-settings.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('seo-settings.index') }}">
                <i class="ri-group-fill"></i>
                <span>Seo Settings</span>
            </a>
        </li>
       <li class="nav-item {{ Route::is('site-settings.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('site-settings.index') }}">
                <i class="ri-group-fill"></i>
                <span>Site Settings</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('partner.*') ? 'active' : '' }}">
            <a class="nav-link "
                href="{{ route('partner.index') }}">
                <i class="ri-group-fill"></i>
                <span>Partner Logos</span>
            </a>
        </li>
         {{-- 

        <li class="nav-item {{ Route::is('product-mamages.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('product-mamages.index')}}">
                <i class="ri-group-fill"></i>
                <span>Products</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('orders.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('orders.index')}}">
                <i class="ri-group-fill"></i>
                <span>Orders</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('users.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('users.index')}}">
                <i class="ri-group-fill"></i>
                <span>Users</span>
            </a>
        </li>
         --}}
    </ul>

</aside>
