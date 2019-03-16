@component('layouts.components.edit_two_column',['for' => 'title','required' => '1','label'=>__('customer.title')]) @slot('field')
    {!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>__('customer.title_placeholder'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_two_column',['for' => 'description','required' => '1','label'=>__('customer.description')]) @slot('field')
    {!! Form::text('description',null,['class'=>'form-control','required','placeholder'=>__('customer.description_placeholder'),'maxlength'=>254]) !!}
@endslot @endcomponent
@component('layouts.components.edit_two_column',['for' => 'comment','required' => '1','label'=>__('customer.comment')]) @slot('field')
    {!! Form::text('comment',null,['class'=>'form-control','required','placeholder'=>__('customer.comment_placeholder'),'maxlength'=>254]) !!}
@endslot @endcomponent
