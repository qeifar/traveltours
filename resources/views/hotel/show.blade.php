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
                @component('layouts.components.tab',['id'=>'event']) 
                    @push('event_nav')
                        @component('layouts.components.tab_nav',['id'=>'detail','idEdit'=>'detail_edit','class'=>'active','title'=>'Details']) @endcomponent
                    @endpush @push('event_content')
                        @component('layouts.components.tab_content',['id'=>'detail','class'=>'active']) @slot('content')
                            <div class='box-body'>
                                @include('hotel.show_form')
                            </div>
                            <div class='box-footer'>
                                @yield('buttonBack')
                            </div>
                        @endslot @endcomponent
                        @component('layouts.components.tab_content',['id'=>'detail_edit','class'=>'']) @slot('content')
                            <div class='box-body'>
                                {!! Form::model($modelHotel, ['route' => ['hotel.update', $modelHotel->id],'method'=>'PUT']) !!}
                                @include('hotel.edit_form')
                                {!! Form::hidden('urlReturn','#detail') !!}
                            </div>
                            <div class='box-footer'>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o">&nbsp;Save</i></button>
                                </div>
                                {!! Form::close() !!}
                                @yield('buttonBack')
                            </div>
                        @endslot @endcomponent
                    @endpush
                @endcomponent
            </div>
        </div>
    </div>
@endsection
