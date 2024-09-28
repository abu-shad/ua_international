@extends('backend.layouts.main')

@section('title', 'Career')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Career Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Career</li>
                </ol>
            </nav>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <span><a href="{{ route('career.form') }}" class="btn btn-primary float-end mb-2">New Career Job</a></span>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Job Career List</h5>
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
                                            <th>Title</th>
                                            <th>Requirments</th>
                                            <th>Company</th>
                                            <th>Location</th>
                                            <th>Employment Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($careers as $career)
                                            <tr>
                                                <td>{{ ($careers->currentPage() - 1) * $careers->perPage() + $loop->iteration }}
                                                </td>
                                                <td>{{ $career->title }}</td>
                                                <td>
                                                    @php
                                                        $requirements = json_decode($career->requirements, true); // Decode JSON
                                                    @endphp
                                                    @if (!empty($requirements))
                                                        @foreach ($requirements as $requirement)
                                                            <span
                                                                class="badge bg-primary">{{ $requirement }}</span><!-- Display each requirement -->
                                                        @endforeach
                                                    @endif


                                                </td>
                                                <td>{{ $career->company }}</td>
                                                <td>{{ $career->location }}</td>
                                                <td>{{ $career->employment_type }}</td>
                                                <td>
                                                    <a href="{{ route('career.edit', $career->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('career.destroy', $career->id) }}" method="POST"
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
                                {{ $careers->links(asset('vendor.pagination.bootstrap-5')) }}
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
