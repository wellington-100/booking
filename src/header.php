<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="/">XEBOOKING</a>
        <!-- Links/toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link <?= ($page == 'tours') ? 'active' : '' ?>" href="/?page=tours">TOURS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'support') ? 'active' : '' ?>" href="/?page=support">SUPPORT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'contacts') ? 'active' : '' ?>" href="/?page=contacts">CONTACTS</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

