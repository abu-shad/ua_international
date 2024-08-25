@extends('backend.layouts.main')

@section('title', 'Industry')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Industry Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Industry</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <span><a href="{{ route('industry.form') }}" class="btn btn-primary float-end mb-2">New Industry</a></span>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Industry List</h5>
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
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($industries as $industry)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $industry->title }}</td>
                                        <td>
                                            <form action="{{ route('industry.destroy', $industry->id) }}" method="POST"
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
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection