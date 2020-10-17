<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="/assets/images/logo.png" width="25" alt="24NXT"><span class="m-l-10">24NXT</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="/assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Admin</h4>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </div>
            </li>
            <li id="menu-dashboard"><a href="/dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li> 
            <li id="menu-bussiness_profile"><a href="/news"><i class="zmdi zmdi-assignment"></i><span>News</span></a></li> 
            
        </ul>
    </div>
</aside>