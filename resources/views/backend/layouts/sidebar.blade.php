<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('show.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('blog.list') }}">
                <i class="bi bi-newspaper"></i>
                <span>Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('marque.list') }}">
                <i class="bi bi-camera-fill"></i>
                <span>Marque Headline</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('job.list') }}">
                <i class="bi bi-laptop"></i>
                <span>Jobs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('service.list') }}">
                <i class="bi bi-card-list"></i>
                <span>service</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('industry.list') }}">
                <i class="bi bi-bank"></i>
                <span>Industry</span>
            </a>
        </li>

    </ul>

</aside>