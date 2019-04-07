<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="images/faces/face1.jpg" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                        <div>
                            <small class="designation text-muted">Manager</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block">New Project
                    <i class="mdi mdi-plus"></i>
                </button>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Sensores</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">{{ __("Temperatura") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/typography.html">{{ __("Umidade") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/typography.html">{{ __("Condutividade Elétrica") }}</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>