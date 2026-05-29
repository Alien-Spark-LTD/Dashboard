<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="{{ route('second', [ 'dashboards' , 'index']) }}" class="logo-dark">
            <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="/images/logo-dark.png" class="logo-lg" alt="Alien Spark CRM">
        </a>

        <a href="{{ route('second', [ 'dashboards' , 'index']) }}" class="logo-light">
            <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="/images/logo-light.png" class="logo-lg" alt="Alien Spark CRM">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">Main</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('second', [ 'dashboards' , 'index']) }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('second', ['general', 'settings'])}}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Settings </span>
                </a>
            </li>

            <li class="menu-title mt-2">Management</li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Orders </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Clients </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:briefcase-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Projects </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:wallet-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Payments </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:users-group-rounded-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Team </span>
                </a>
            </li>

        </ul>
    </div>
</div>
