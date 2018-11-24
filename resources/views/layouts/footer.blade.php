    <div class="alert-primary">
        <div class="card-body">
            <ul class="list-unstyled">
                @foreach($menus as $menu)
                    <a class="nav-link d-inline" href="{{ route('showMenu', $menu->id) }}"><li class="d-inline">{{ $menu->title }}</li></a>
                @endforeach
            </ul>
        </div>
        <div class="bg-warning text-center pt-3 pb-3 mt-1">
            <span>All rights reserved by Best2List.</span>
        </div>
    </div>