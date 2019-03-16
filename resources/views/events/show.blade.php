@extends('layouts.app')

@section('buttonBack')
    <div class='pull-left'>
        <button type="button" class="btn btn-danger" onClick="location.href ='{{url(substr(Request()->path(), 0,strrpos(Request()->path(), '/')))}}'"><i class="fa fa-undo"></i> Back</button>
    </div>
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Event
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                @push('modals')
                    @include('layouts.components.modal_delete')
                @endpush
                @component('layouts.components.tab',['id'=>'event']) 
                    @push('event_nav')
                        @component('layouts.components.tab_nav',['id'=>'customer','class'=>'active','title'=>'Customer List']) @endcomponent
                    @endpush @push('event_content')
                        @component('layouts.components.tab_content',['id'=>'customer','class'=>'active']) @slot('content')
                            <div class='box-body'>
                                @include('events.customer_index')
                            </div>
                            <div class='box-footer'>
                                @yield('buttonBack')
                            </div>
                        @endslot @endcomponent
                    @endpush
                    @push('event_nav')
                        @component('layouts.components.tab_nav',['id'=>'hotel','class'=>'','title'=>'Hotel/Accommodation']) @endcomponent
                    @endpush @push('event_content')
                        @component('layouts.components.tab_content',['id'=>'hotel','class'=>'']) @slot('content')
                            <div class='box-body'>
                                @include('events.hotel_index')
                            </div>
                            <div class='box-footer'>
                                @yield('buttonBack')
                            </div>
                        @endslot @endcomponent
                    @endpush
                    @push('event_nav')
                        @component('layouts.components.tab_nav',['id'=>'flight','class'=>'','title'=>'Flight Detail']) @endcomponent
                    @endpush @push('event_content')
                        @component('layouts.components.tab_content',['id'=>'flight','class'=>'']) @slot('content')
                            <div class='box-body'>
                                @include('events.flight_index')
                            </div>
                            <div class='box-footer'>
                                @yield('buttonBack')
                            </div>
                        @endslot @endcomponent
                    @endpush
                    @push('event_nav')
                        @component('layouts.components.tab_nav',['id'=>'pic','class'=>'','title'=>'PIC']) @endcomponent
                    @endpush @push('event_content')
                        @component('layouts.components.tab_content',['id'=>'pic','class'=>'']) @slot('content')
                            <div class='box-body'>
                                @include('events.pic_index')
                            </div>
                            <div class='box-footer'>
                                @yield('buttonBack')
                            </div>
                        @endslot @endcomponent
                    @endpush
                @endcomponent
            </div>
        </div>
    </div>
@endsection
