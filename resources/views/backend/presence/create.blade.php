@extends('backend.layouts.main')

@section('title', 'Our Presence')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Service Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Our Presence</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Presence Form Elements</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- General Form Elements -->
            <form action="{{ route('presence.create') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Location Name</label>
                <div class="col-sm-10">
                  <input type="text" name="location_name" id="name" class="form-control" value="{{ old('location_name') }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Vacancy</label>
                <div class="col-sm-10">
                  <input type="number" name="vacancy" id="Vacancy" class="form-control" value="{{ old('vacancy') }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Companies</label>
                <div class="col-sm-10">
                  <input type="number" name="companies" id="Companies" class="form-control" value="{{ old('companies') }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Url</label>
                <div class="col-sm-10">
                  <input type="text" name="url" id="url" class="form-control" value="{{ old('url') }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Location Image</label>
                <div class="col-sm-10">
                  <input type="file" name="location_image" id="image" class="form-control" >
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
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

