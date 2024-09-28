@extends('backend.layouts.main')

@section('title', 'Helpdesk')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Helpdesk Contact Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Helpdesk</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Helpdesk List</h5>
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
                                        <th>Address</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($helpdesks as $helpdesk)
                                    <tr>
                                        <td>{{ ($helpdesks->currentPage() - 1) * $helpdesks->perPage() + $loop->iteration }}</td>
                                        <td>{{ $helpdesk->name }}</td>
                                        <td>{{ $helpdesk->email }}</td>
                                        <td>{{ $helpdesk->phone }}</td>
                                        <td>{{ $helpdesk->address }}</td>
                                        <td>{{ $helpdesk->message }}</td>
                                        <td>
                                            <form action="{{ route('help.destroy', $helpdesk->id) }}" method="POST"
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
                            {{ $helpdesks->links(asset('vendor.pagination.bootstrap-5')) }}
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection