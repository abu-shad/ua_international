@extends('backend.layouts.main')

@section('title', 'Industry')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Industry Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Industry</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Industry Form Elements</h5>
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
            <form action="{{ route('industry.create') }}" method="POST" >
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Industry Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" id="name" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <input type="text" name="description" id="description" class="form-control" >
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

