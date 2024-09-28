@extends('backend.layouts.main')

@section('title', 'Applied')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Applied Job Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Applied Job</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Applied Job List</h5>
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
                                        <th>Experince</th>
                                        <th>Designation</th>
                                        <th>Country</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobSeekers as $jobSeeker)
                                    <tr>
                                        <td>{{ ($jobSeekers->currentPage() - 1) * $jobSeekers->perPage() + $loop->iteration }}</td>
                                        <td>{{ $jobSeeker->name }}</td>
                                        <td>{{ $jobSeeker->email }}</td>
                                        <td>{{ $jobSeeker->contact }}</td>
                                        <td>{{ $jobSeeker->domestic_exp }}</td>
                                        <td>{{ $jobSeeker->designation }}</td>
                                        <td>{{ $jobSeeker->country }}</td>
                                        <td>
                                            <a href="{{ route('resume.download', $jobSeeker->resume) }}" class="btn btn-primary" target="_blank">Download Resume</a>

                                            <form action="{{ route('employer.destroy', $jobSeeker->id) }}" method="POST"
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
                            {{-- {{ $jobSeekers->links(asset('vendor.pagination.bootstrap-5')) }} --}}
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection