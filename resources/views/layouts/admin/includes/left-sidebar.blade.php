<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- 
                <li class="user-profile">
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="{!! asset('public/assets/images/users/profile.png') !!}" alt="user" /><span class="hide-menu">Steave Jobs </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void()">My Profile </a></li>
                        <li><a href="javascript:void()">My Balance</a></li>
                        <li><a href="javascript:void()">Inbox</a></li>
                        <li><a href="javascript:void()">Account Setting</a></li>
                        <li><a href="javascript:void()">Logout</a></li>
                    </ul>
                </li> 
                <li class="nav-devider"></li>
                -->
                <li> 
                    <a class="waves-effect waves-dark" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>