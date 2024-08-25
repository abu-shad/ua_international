@extends('backend.layouts.main')

@section('title', 'Marque')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Marque Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Marque</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <span><a href="{{ route('marque.form') }}" class="btn btn-primary float-end mb-2">New Marque</a></span>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Marque List</h5>
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
                                        <th>Title</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marques as $marque)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $marque->title }}</td>
                                        <td>
                                            <form action="{{ route('marque.destroy', $marque->id) }}" method="POST"
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