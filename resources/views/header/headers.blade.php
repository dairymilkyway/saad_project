<header id="header">
    <nav class="navbar navbar-expand-lg navbar-white" style="background-color: white;">
        <a class="navbar-brand" href="{{ route('home') }}" style="color: #343a40;">
            <h3 class="px-5">
                <i class="fas fa-building"></i> BeyondTheStalls
            </h3>
        </a>
        <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="{{ route('tenant.index') }}" style="color: #343a40;">
                    <i class="fas fa-users"></i> Tenants
                </a>
                <a class="nav-link" href="{{ route('admin.analytics') }}" style="color: #343a40;">
                    <i class="fas fa-chart-area"></i> Analytics
                </a>
                <a class="nav-link" href="{{ route('stall.index') }}" style="color: #343a40;">
                    <i class="fas fa-warehouse"></i> Monitoring
                </a>
                <a class="nav-link" href="{{ route('payment.index') }}" style="color: #343a40;">
                    <i class="fas fa-money-bill"></i> Payments
                </a>
                <a class="nav-link" href="{{ route('parking.index') }}" style="color: #343a40;">
                    <i class="fas fa-car"></i> Parking
                </a>
            </div>
        </div>
    </nav>
</header>
