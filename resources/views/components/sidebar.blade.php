<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Daftar</li>

        <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="sidebar-item has-sub {{ Request::is('siswa') ? 'active' : '' }}{{ Request::is('dudi') ? 'active' : '' }}{{ Request::is('guru') ? 'active' : '' }}">
            <a href="" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Manajemen</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item">
                    <a href="{{route('siswa')}}">Siswa</a>
                </li>
                <li class="submenu-item">
                    <a href="{{route('dudi')}}">Dudi</a>
                </li>
                <li class="submenu-item">
                    <a href="{{route('guru')}}">Guru</a>
                </li>
            </ul>
        </li>


        <li class="sidebar-title">Tentang Akun</li>

        <li class="sidebar-item {{ Request::is('profile') ? 'active' : '' }}">
            <a href="" class='sidebar-link'>
                <i class="bi bi-person-fill"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
            this.closest('form').submit();"
                    class='sidebar-link'>
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </form>
        </li>

    </ul>
</div>