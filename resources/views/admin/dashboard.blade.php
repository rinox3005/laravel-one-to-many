@extends("layouts.app")

@section("title")
    Dashboard - {{ Auth::user()->name }}
@endsection

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 mt-4">
                <div class="list-group">
                    <a
                        href="#"
                        class="list-group-item list-group-item-action active"
                    >
                        Dashboard
                    </a>
                    <a
                        href="{{ route("admin.projects.index") }}"
                        class="list-group-item list-group-item-action"
                    >
                        Projects
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Profile
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Settings
                    </a>
                </div>
            </div>
            <div class="col-9 mt-4">
                <div class="card">
                    <div class="card-header">{{ __("Dashboard") }}</div>

                    <div class="card-body">
                        @if (session("status"))
                            <div class="alert alert-success" role="alert">
                                {{ session("status") }}
                            </div>
                        @endif

                        <h5>{{ __("You are logged in!") }}</h5>

                        <!-- Quick Stats -->
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card bg-primary mb-3 text-white">
                                    <div class="card-header">
                                        Total Projects
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $totalProjects }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-success mb-3 text-white">
                                    <div class="card-header">
                                        Completed Projects
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $completedProjects }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-warning mb-3 text-white">
                                    <div class="card-header">
                                        Pending Projects
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $pendingProjects }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more sections or content as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
