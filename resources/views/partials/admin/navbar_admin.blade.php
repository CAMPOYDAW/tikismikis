<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url("/")}}" target="_blank">{{ config('app.name', 'Laravel') }}</a>
            <span class="navbar-brand">- Dashboard </span>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} {!!  session()->get('total_res')?"<span class='badge'>".session()->get('total_res')."<span>":"" !!} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" id="search" placeholder="{{ Request::is('admin/carta')?'Platos ':'' }}Search...">
            </form>
            @if(Request::is('admin/carta'))
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" id="search2" placeholder="Categorías Search...">
                </form>
            @endif
        </div>
    </div>
</nav>
