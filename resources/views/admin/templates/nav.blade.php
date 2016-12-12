<nav id="sideNav"><!-- MAIN MENU -->
    <ul class="nav nav-list">
        <li><!-- dashboard -->
            <a class="dashboard" href="{{ url('admin') }}"><!-- warning - url used by default by ajax (if eneabled) -->
                <i class="main-icon fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
    </ul>

    <!-- SECOND MAIN LIST -->
    <h3>FLINT</h3>
    <ul class="nav nav-list">
        <li>
            <a href="{{ url('/') }}">
                <i class="main-icon fa fa-link"></i>
                <span class="label label-danger pull-right">GO</span> <span>Frontend</span>
            </a>
        </li>
    </ul>

</nav>

<span id="asidebg"><!-- aside fixed background --></span>