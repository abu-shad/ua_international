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
            <form action="{{ route('presence.update', $presence->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT') 
              
              <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Location Name</label>
                  <div class="col-sm-10">
                      <input type="text" name="location_name" id="name" class="form-control" value="{{ old('location_name', $presence->location_name) }}">
                  </div>
              </div>
          
              <div class="row mb-3">
                  <label for="vacancy" class="col-sm-2 col-form-label">Vacancy</label>
                  <div class="col-sm-10">
                      <input type="number" name="vacancy" id="vacancy" class="form-control" value="{{ old('vacancy', $presence->vacancy) }}">
                  </div>
              </div>
          
              <div class="row mb-3">
                  <label for="companies" class="col-sm-2 col-form-label">Companies</label>
                  <div class="col-sm-10">
                      <input type="number" name="companies" id="companies" class="form-control" value="{{ old('companies', $presence->companies) }}">
                  </div>
              </div>
              <div class="row mb-3">
                <label for="companies" class="col-sm-2 col-form-label">Url</label>
                <div class="col-sm-10">
                    <input type="text" name="url" id="url" class="form-control" value="{{ old('url', $presence->url) }}">
                </div>
            </div>
             
              <div class="row mb-3">
                  <label for="image" class="col-sm-2 col-form-label">Location Image</label>
                  <div class="col-sm-10">
                      <input type="file" name="location_image" id="image" class="form-control">
                      @if ($presence->location_image)
                          <img src="{{ asset('storage/' . $presence->location_image) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
                      @endif
                  </div>
              </div>
          
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </div>
          
          </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection

