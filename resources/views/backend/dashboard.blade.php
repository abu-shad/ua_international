@extends('backend.layouts.main')

@section('title', 'Home')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Industries <span>| Current</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $industryCount }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Presence <span>| Current</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $presenceCount }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Services <span>| Current</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $serviceCount }}</h6>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->


                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Recent Enquiry <span></span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.N.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($recentEnquries as $recentEnqury)
                                                <tr>
                                                    <th scope="row">
                                                        {{ ($recentEnquries->currentPage() - 1) * $recentEnquries->perPage() + $loop->iteration }}
                                                    </th>
                                                    <td>{{ $recentEnqury->name }}</td>
                                                    <td>{{ $recentEnqury->email }}</td>
                                                    <td>{{ $recentEnqury->phone }}</td>
                                                    <td>{{ $recentEnqury->address }}</td>
                                                    <td>{{ $recentEnqury->message }}</td>
                                                </tr>
                                            @empty
                                                <td>Data Not Found</td>
                                            @endforelse

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <!-- News & Updates Traffic -->
                    <div class="card">

                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Current</span></h5>

                            <div class="news">
                                @forelse ($blogs as $blog)
                                    <div class="post-item clearfix">
                                        <img src="{{ $blog->image ?? "" }}" alt="{{ $blog->title }}" class="img-fluid">
                                        <h4><a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title ?? "" }}</a></h4>
                                        <p>{{ Str::limit($blog->content ?? "", 150, '...') }}</p>
                                    </div>
                                @empty
                                    <div class="no-data-message">
                                        <h4>No Blogs Available</h4>
                                        <p>It seems there are no blogs to display at this time. Please check back later.</p>
                                    </div>
                                @endforelse


                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
