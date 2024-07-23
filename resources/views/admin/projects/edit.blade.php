@extends("layouts.app")

@section("title")
    Edit Project
@endsection

@section("content")
    <div class="container">
        <div class="card my-3">
            <div class="card-header bg-warning text-dark">
                <h2 class="mb-0">Edit Project</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    action="{{ route("admin.projects.update", $project) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            value="{{ old("title", $project->title) }}"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select
                            class="form-control"
                            id="type"
                            name="type"
                            required
                        >
                            @foreach ($types as $type)
                                <option
                                    value="{{ $type }}"
                                    {{ old("type", $project->type) == $type ? "selected" : "" }}
                                >
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Description
                        </label>
                        <textarea
                            class="form-control"
                            id="description"
                            name="description"
                            rows="4"
                        >
{{ old("description", $project->description) }}</textarea
                        >
                    </div>
                    <div class="mb-3">
                        <label for="key_features" class="form-label">
                            Key Features
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="key_features"
                            name="key_features"
                            value="{{ old("key_features", $project->key_features) }}"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="link_to_website" class="form-label">
                            Link to Website
                        </label>
                        <input
                            type="url"
                            class="form-control"
                            id="link_to_website"
                            name="link_to_website"
                            value="{{ old("link_to_website", $project->link_to_website) }}"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="programming_language" class="form-label">
                            Programming Language
                        </label>
                        <select
                            class="form-control"
                            id="programming_language"
                            name="programming_language"
                            required
                        >
                            @foreach ($programmingLanguages as $language)
                                <option
                                    value="{{ $language }}"
                                    {{ old("programming_language", $project->programming_language) == $language ? "selected" : "" }}
                                >
                                    {{ $language }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select
                            class="form-control"
                            id="status"
                            name="status"
                            required
                        >
                            @foreach ($statuses as $status)
                                <option
                                    value="{{ $status }}"
                                    {{ old("status", $project->status) == $status ? "selected" : "" }}
                                >
                                    {{ ucfirst($status) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="preview" class="form-label">
                            Preview Image
                        </label>
                        <input
                            type="file"
                            class="form-control"
                            id="preview"
                            name="preview"
                        />
                    </div>
                    <a
                        href="{{ route("admin.projects.index") }}"
                        class="btn btn-warning me-1"
                    >
                        <i class="fas fa-arrow-left"></i>
                        Back to Projects
                    </a>
                    <button type="submit" class="btn btn-warning">
                        Update Project
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
