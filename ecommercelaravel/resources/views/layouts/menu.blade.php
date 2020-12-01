<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="/home"><i class="fa fa-home"></i><span>Home</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }} {{ Request::is('categories*') ? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-users"></i> <span>Management Users</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> Data User</a>
        </li>
        <li class="{{ Request::is('categories*') ? 'active' : '' }}">
            <a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i>Data Customer</a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('mereks*') ? 'active' : '' }} {{ Request::is('categories*') ? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Management Product</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('mereks*') ? 'active' : '' }}">
            <a href="{{ route('mereks.index') }}"><i class="fa fa-circle-o"></i> Brand</a>
        </li>
        <li class="{{ Request::is('categories*') ? 'active' : '' }}">
            <a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i>Categories</a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-cubes"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-shopping-cart"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('penjualan*') ? 'active' : '' }} {{ Request::is('transaksiPembelians*') ? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        {{-- <li class="{{ Request::is('penjualan*') ? 'active' : '' }}">
            <a href="{{ route('penjualan.index') }}"><i class="fa fa-circle-o"></i> Penjualan</a>
        </li> --}}
        <li class="{{ Request::is('transaksiPembelians*') ? 'active' : '' }}">
            <a href="{{ route('transaksiPembelians.index') }}"><i class="fa fa-circle-o"></i>Pembelian</a>
        </li>
    </ul>
</li>