@extends('backend.layouts.main')

@section('title', 'Jobs')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Jobs Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">jobs</li>
                </ol>
            </nav>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <span><a href="{{ route('job.form') }}" class="btn btn-primary float-end mb-2">New Job</a></span>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Job List</h5>
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
                                            <th>Job image</th>
                                            <th>Title</th>
                                            <th>Requirments</th>
                                            <th>Company</th>
                                            <th>Location</th>
                                            <th>Employment Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <td>{{ ($jobs->currentPage() - 1) * $jobs->perPage() + $loop->iteration }} </td>
                                                <td><img src="{{ asset('storage/'.$job->job_image) }}" alt="UA" width="50" height="50" class="rounded-circle img-fluid"></td>
                                                <td>{{ $job->title }}</td>
                                                <td>
                                                    @php
                                                        $requirements = json_decode($job->requirements, true); // Decode JSON
                                                    @endphp
                                                    @if (!empty($requirements))
                                                        @foreach ($requirements as $requirement)
                                                            <span
                                                                class="badge bg-primary">{{ $requirement }}</span><!-- Display each requirement -->
                                                        @endforeach
                                                    @endif


                                                </td>
                                                <td>{{ $job->company }}</td>
                                                <td>{{ $job->location }}</td>
                                                <td>{{ $job->employment_type }}</td>
                                                <td>
                                                    <a href="{{ route('job.edit', $job->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('job.destroy', $job->id) }}" method="POST"
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
                                {{ $jobs->links(asset('vendor.pagination.bootstrap-5')) }}
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
