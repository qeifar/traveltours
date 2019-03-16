<li class="">
    <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>

<li class="{{ Request::is('events*') ? 'active' : '' }}">
    <a href="{!! route('events.index') !!}"><i class="fa fa-edit"></i><span>Events</span></a>
</li>