<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="height: 70px !important">
    <a class="navbar-brand" href="/" style="border-right:2px; border-color: white">
        <img src="{{asset('images/logo-icon.png')}}" width="60" height="40" class="d-inline-block" alt="">
        <b>Home</b>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{request()->is('bisItems') ? 'active' : ''}}">
                <a class="nav-link" href="{{env('app_url')}}/bisItems"><b>BIS Items</b></a>
            </li>
        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item">
                <a class="nav-link" href="#"><b>My Org</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Workspaces</b></a>
            </li>
        </ul>

    </div>
</nav>