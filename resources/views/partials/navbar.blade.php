<nav class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Asad Portfolio
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar"
                aria-controls="navbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}"
                       href="{{ route('projects') }}">
                        Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('resume') ? 'active' : '' }}"
                       href="{{ route('resume') }}">
                        Resume
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                       href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>