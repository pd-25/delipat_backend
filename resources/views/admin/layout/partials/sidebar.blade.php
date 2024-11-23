<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>



        <li class="nav-item {{ Route::is('category-mamages.*') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('category-mamages.index')}}">
                <i class="ri-group-fill"></i>
                <span>Categories</span>
            </a>
        </li>

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
        
    </ul>

</aside>
