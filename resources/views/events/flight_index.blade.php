@push('modals')
    @component('layouts.components.modal_create',['id'=>'modal_flight_create','title'=>'Create','route'=>route('flight.store')]) @slot('content')
        @include('flight.create_form')
    @endslot @endcomponent
@endpush
@component('layouts.components.table', ['tname' => 'flight_table']) @slot('thead')
    <th style='width: 30px;'>{{__('general.number')}}</th>
    <th>{{__('flight.title')}}</th>
    <th>{{__('flight.description')}}</th>
    <th>{{__('flight.comment')}}</th>
    <th style="width:66px;">{{__('general.action')}}</th>
@endslot @slot('tbody')
    @foreach($modelFlights as $modelFlight)
    <tr>                        
        <td> </td>
        <td>{{$modelFlight->title}}</td>
        <td>{{$modelFlight->description}}</td>
        <td>{{$modelFlight->comment}}</td>
        <td> 
            <a title='View & Edit Detail' type='button' class='btn btn-xs btn-info' href='{{url('flight/' . $modelFlight->id) }}'><i class='fa fa-eye'></i></a>
            <a data-modal data-route='{{ route('flight.destroy', $modelFlight->id) }}' 
                            data-toggle='modal' data-target='#modal-delete' 
                            type='button' class='btn btn-xs btn-danger'><i class='fa fa-eraser'></i></a>
        </td>
    </tr>
    @endforeach
@endslot @slot('firstScript')
    @include('layouts.components.datatable_button_export_create_modal',['modal_id'=>'modal_flight_create'])
@endslot @endcomponent