@extends('layouts.app')

@section('content')
    @push('modals')
        @component('layouts.components.modal_create',['id'=>'modal_hotel_create','title'=>'Create','route'=>route('hotel.store')]) @slot('content')
            @include('hotel.create_form')
        @endslot @endcomponent
        @include('layouts.components.modal_delete')
    @endpush
    <section class="content-header">
        <h1 class="pull-left">Events</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @component('layouts.components.table', ['tname' => 'hotel_table']) @slot('thead')
                    <th style='width: 30px;'>{{__('general.number')}}</th>
                    <th>{{__('hotel.title')}}</th>
                    <th>{{__('hotel.description')}}</th>
                    <th>{{__('hotel.comment')}}</th>
                    <th style="width:66px;">{{__('general.action')}}</th>
                @endslot @slot('tbody')
                    @foreach($modelHotels as $modelHotel)
                    <tr>                        
                        <td> </td>
                        <td>{{$modelHotel->title}}</td>
                        <td>{{$modelHotel->description}}</td>
                        <td>{{$modelHotel->comment}}</td>
                        <td> 
                            <a title='View & Edit Detail' type='button' class='btn btn-xs btn-info' href='{{url('hotel/' . $modelHotel->id) }}'><i class='fa fa-eye'></i></a>
                            <a data-modal data-route='{{ route('hotel.destroy', $modelHotel->id) }}' 
                                            data-toggle='modal' data-target='#modal-delete' 
                                            type='button' class='btn btn-xs btn-danger'><i class='fa fa-eraser'></i></a>
                        </td>
                    </tr>
                    @endforeach
                @endslot @slot('firstScript')
                    @include('layouts.components.datatable_button_export_create_modal',['modal_id'=>'modal_hotel_create'])
                @endslot @endcomponent
            </div>
        </div>
    </div>
@endsection

