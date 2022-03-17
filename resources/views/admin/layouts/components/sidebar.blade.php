<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="/admin/dashboard">
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kingdom') }}">
                        <span> Kingdom </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.collection') }}">
                        <span> Collection </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.event') }}">
                        <span> Event </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.news') }}">
                        <span> News </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.general') }}">
                        <span> Setting </span>
                    </a>
                </li>
                @if (auth('admin')->user()->roles->roles == 'Admin Master')
                    <li class="menu-title">Admin Master Access</li>
                    <li>
                        <a href="{{ route('admin.add-admin') }}">
                            <span>Add Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.list-admin') }}">
                            <span>List Admin</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
