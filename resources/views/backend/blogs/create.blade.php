@extends('backend.layouts.main')

@section('title', 'Blog')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Blog Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Blog Form Elements</h5>

            <!-- General Form Elements -->
            <form action="{{ route('blog.create') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" name="title" id="title" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Blog Image</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" name="image" id="image">
                </div>
              </div>
              <div class="row mb-3">
                <label for="content" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="content" id="content" style="height: 100px"></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection