@component('layouts.components.edit_modal_one_column',['for' => 'title','label'=>__('flight.title')]) @slot('field')
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>__('flight.title'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'description','label'=>__('flight.description')]) @slot('field')
    {!! Form::text('description',null,['class'=>'form-control','placeholder'=>__('flight.description'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'comment','label'=>__('flight.comment')]) @slot('field')
    {!! Form::text('comment',null,['class'=>'form-control','placeholder'=>__('flight.comment'),'maxlength'=>254]) !!}
@endslot @endcomponent