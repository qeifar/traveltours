@component('layouts.components.edit_modal_one_column',['for' => 'title','label'=>__('pic.title')]) @slot('field')
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>__('pic.title'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'description','label'=>__('pic.description')]) @slot('field')
    {!! Form::text('description',null,['class'=>'form-control','placeholder'=>__('pic.description'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_modal_one_column',['for' => 'comment','label'=>__('pic.comment')]) @slot('field')
    {!! Form::text('comment',null,['class'=>'form-control','placeholder'=>__('pic.comment'),'maxlength'=>254]) !!}
@endslot @endcomponent