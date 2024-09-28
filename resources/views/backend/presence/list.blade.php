@extends('backend.layouts.main')

@section('title', 'Our Presence')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Presence Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Our Presence</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <span><a href="{{ route('presence.form') }}" class="btn btn-primary float-end mb-2">New Presence</a></span>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Presence List</h5>
                        <div class="mt-3">
                            <!-- Table with hoverable rows -->
                            @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Location Name</th>
                                        <th>Vaccency</th>
                                        <th>Companies</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($presences as $presence)
                                    <tr>
                                        <td>{{ ($presences->currentPage() - 1) * $presences->perPage() + $loop->iteration }}</td>
                                        <td>{{ $presence->location_name }}</td>
                                        <td>{{ $presence->vacancy }}</td>
                                        <td>{{ $presence->companies }}</td>
                                        <td>
                                            <a href="{{ route('presence.edit', $presence->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('presence.destroy', $presence->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $presences->links(asset('vendor.pagination.bootstrap-5')) }}
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection