@extends('layouts.app')

@section('content')
    @push('modals')
        @component('layouts.components.modal_create',['id'=>'modal_pic_create','title'=>'Create','route'=>route('pic.store')]) @slot('content')
            @include('pic.create_form')
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
                @component('layouts.components.table', ['tname' => 'pic_table']) @slot('thead')
                    <th style='width: 30px;'>{{__('general.number')}}</th>
                    <th>{{__('pic.title')}}</th>
                    <th>{{__('pic.description')}}</th>
                    <th>{{__('pic.comment')}}</th>
                    <th style="width:66px;">{{__('general.action')}}</th>
                @endslot @slot('tbody')
                    @foreach($modelPics as $modelPic)
                    <tr>                        
                        <td> </td>
                        <td>{{$modelPic->title}}</td>
                        <td>{{$modelPic->description}}</td>
                        <td>{{$modelPic->comment}}</td>
                        <td> 
                            <a title='View & Edit Detail' type='button' class='btn btn-xs btn-info' href='{{url('pic/' . $modelPic->id) }}'><i class='fa fa-eye'></i></a>
                            <a data-modal data-route='{{ route('pic.destroy', $modelPic->id) }}' 
                                            data-toggle='modal' data-target='#modal-delete' 
                                            type='button' class='btn btn-xs btn-danger'><i class='fa fa-eraser'></i></a>
                        </td>
                    </tr>
                    @endforeach
                @endslot @slot('firstScript')
                    @include('layouts.components.datatable_button_export_create_modal',['modal_id'=>'modal_pic_create'])
                @endslot @endcomponent
            </div>
        </div>
    </div>
@endsection

