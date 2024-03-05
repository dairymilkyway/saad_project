<header id="header">
    <nav class="navbar navbar-expand-lg navbar-white" style="background-color: white;">
        <a class="navbar-brand" href="{{ route('user.index') }}" style="color: #343a40;">
            <h3 class="px-5">
                <i class="fas fa-building"></i>BeyondTheStalls
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
                <a class="nav-link" href="{{ route('tenant.stall') }}" style="color: #343a40;">
                    <i class="fas fa-warehouse"></i> My Stall
                </a>
            </div>
        </div>
    </nav>
</header>
