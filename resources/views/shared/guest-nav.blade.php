<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="d-flex align-items-center container">
        <a
            class="navbar-brand d-flex align-items-center"
            href="{{ url("/") }}"
        >
            <div class="logo_guest d-flex align-items-center">
                <img
                    class="logo-nav-guest"
                    src="{{ Vite::asset("resources/img/logo-guest.png") }}"
                    alt="logo-guest"
                />
                <h3 class="fw-bold mb-0 ms-2">My Projects</h3>
            </div>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __("Toggle navigation") }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav fw-semibold me-auto mt-1">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url("/") }}">
                        {{ __("Home") }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("projects") }}">
                        {{ __("Projects") }}
                    </a>
                </li>
                @auth
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route("admin.dashboard") }}"
                        >
                            {{ __("Dashboard") }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route("admin.projects.index") }}"
                        >
                            {{ __("Projects Manager") }}
                        </a>
                    </li>
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav fw-semibold ml-auto mt-1">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("login") }}">
                            {{ __("Login") }}
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre
                        >
                            {{ Auth::user()->name }}
                        </a>

                        <div
                            class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown"
                        >
                            <a
                                class="dropdown-item"
                                href="{{ route("admin.dashboard") }}"
                            >
                                {{ __("Dashboard") }}
                            </a>
                            <a
                                class="dropdown-item"
                                href="{{ route("logout") }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >
                                {{ __("Logout") }}
                            </a>

                            <form
                                id="logout-form"
                                action="{{ route("logout") }}"
                                method="POST"
                                class="d-none"
                            >
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
