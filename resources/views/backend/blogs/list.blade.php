@extends('backend.layouts.main')

@section('title', 'Blog')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Blogs Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
        <span><a href="{{ route('blog.form') }}" class="btn btn-primary float-end mb-2">New Post</a></span>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Blog List</h5>
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ ($blogs->firstItem() + $loop->index) }}</td>
                                        <td>
                                            <img src="{{ storage_path($blog->image) }}" alt="{{ $blog->title }} Image" width="50" height="50" class="rounded-circle img-fluid">
                                        </td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ Str::limit($blog->content, 50) }}</td> <!-- Limiting content length for better table layout -->
                                        <td>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    
                                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $blogs->links(asset('vendor.pagination.bootstrap-5')) }}
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection