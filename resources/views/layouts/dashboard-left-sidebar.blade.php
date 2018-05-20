<aside id="leftsidebar" class="sidebar">
<!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('dashboardimage/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="/profile"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="material-icons">input</i>{{ __('Logout') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </div>
<!-- #User Info -->
<!-- Menu -->

    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION
            </li>
            @include('includes.notifications')

            <li class="active">

                <a href="/home">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            @if(Auth::user()->role==2)

                <li>
                    <a href="/appointment">My Appointment</a>
                </li>
                <li>
                    <a href="/patients">My Patients</a>
                </li>
                <li><a href="/">Visit Website</a> </li>
                <li><a href="/myblog">My Blog</a> </li>
                @elseif(Auth::user()->role==1)
                <li><a href="/appointment">My Appointment</a></li>
                <li><a href="/">Visit Website</a> </li>
                <li><a href="/mydoctors">My Doctors</a> </li>

                @else
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>System Configuration</span>
                    </a>
                    <ul class="ml-menu">

                        <li>
                            <a href="/configuration">
                                <span>Site Wide Configuration</span>
                            </a>
                        </li>
                        <li>
                            <a href="/role">
                                <span>Roles</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="/Doctor">
                        <span>Doctor</span>
                    </a>
                </li>
                <li>
                    <a href="/Patient">
                        <span>Patient</span>
                    </a>
                </li>
                <li>
                    <a href="/appointment">
                        <span>Appointment</span>
                    </a>
                </li>
                <li>
                    <a href="/Report">
                        <span>Report</span>
                    </a>
                </li>
                <li>
                    <a href="/article">
                        <span>Article</span>
                    </a>
                </li>
                <li>
                    <a href="/Blog">
                        <span>Blog</span>
                    </a>
                </li>
            @endif



    </div>
<!-- #Menu -->
<!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
<!-- #Footer -->
</aside>