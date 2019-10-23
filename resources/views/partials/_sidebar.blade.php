<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ asset('images/faces/face1.jpg') }}" alt="profile image">
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
                <span class="menu-title">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('greenhouse.list') }}">
                <i class="menu-icon mdi mdi-barley"></i>
                <span class="menu-title">{{ __('Estufas') }}</span>
            </a>
        </li>
    </ul>
</nav>