@extends('backend.layouts.main')

@section('title', 'Service')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Service Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <span><a href="{{ route('service.form') }}" class="btn btn-primary float-end mb-2">New Service</a></span>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Service List</h5>
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $Service)
                                    <tr>
                                        <td>{{ ($services->currentPage() - 1) * $services->perPage() + $loop->iteration }}</td>
                                        <td>{{ $Service->name }}</td>
                                        <td>{{ $Service->description }}</td>
                                        <td>
                                            <a href="{{ route('service.edit', $Service->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('service.destroy', $Service->id) }}" method="POST"
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
                            {{ $services->links(asset('vendor.pagination.bootstrap-5')) }}
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection