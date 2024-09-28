@extends('backend.layouts.main')

@section('title', 'Career')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Job Career Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Job Career</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contat</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appliedJobs as $appliedJob)
                                    <tr>
                                        <td>{{ ($appliedJobs->currentPage() - 1) * $appliedJobs->perPage() + $loop->iteration }}</td>
                                        <td>{{ $appliedJob->fullname }}</td>
                                        <td>{{ $appliedJob->email }}</td>
                                        <td>{{ $appliedJob->phone }}</td>
                                        <td>{{ $appliedJob->description }}</td>
                                        <td>
                                            <a href="{{ route('applied.career.resume.download', $appliedJob->resume) }}" class="btn btn-primary" target="_blank">Download Resume</a>

                                            <form action="{{ route('apply.career.destroy', $appliedJob->id) }}" method="POST"
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
                            {{ $appliedJobs->links(asset('vendor.pagination.bootstrap-5')) }}
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection