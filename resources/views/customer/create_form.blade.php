@component('layouts.components.edit_modal_one_column',['for' => 'title','label'=>__('customer.title')]) @slot('field')
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>__('customer.title'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'description','label'=>__('customer.description')]) @slot('field')
    {!! Form::text('description',null,['class'=>'form-control','placeholder'=>__('customer.description'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'comment','label'=>__('customer.comment')]) @slot('field')
    {!! Form::text('comment',null,['class'=>'form-control','placeholder'=>__('customer.comment'),'maxlength'=>254]) !!}
@endslot @endcomponent