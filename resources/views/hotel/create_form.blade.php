@component('layouts.components.edit_modal_one_column',['for' => 'title','label'=>__('hotel.title')]) @slot('field')
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>__('hotel.title'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'description','label'=>__('hotel.description')]) @slot('field')
    {!! Form::text('description',null,['class'=>'form-control','placeholder'=>__('hotel.description'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'comment','label'=>__('hotel.comment')]) @slot('field')
    {!! Form::text('comment',null,['class'=>'form-control','placeholder'=>__('hotel.comment'),'maxlength'=>254]) !!}
@endslot @endcomponent