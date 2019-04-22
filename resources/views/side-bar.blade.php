@section('sidebar')
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ url('/img/sidebar-1.jpg') }}">
        <div class="logo">
            <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
            HT Active
            </a>
        </div>
    <div class="sidebar-wrapper">
        <ul class="nav" id="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
                <ul class="dropdown-menu dropdown-menu1">
                    <li><a href="{{ route('service-index') }}">Service</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
@endsection
