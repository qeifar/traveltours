@component('layouts.components.edit_two_column',['for' => 'title','required' => '1','label'=>__('flight.title')]) @slot('field')
        {!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>__('flight.title_placeholder'),'maxlength'=>254]) !!}
    @endslot @endcomponent
    @component('layouts.components.edit_two_column',['for' => 'description','required' => '1','label'=>__('flight.description')]) @slot('field')
        {!! Form::text('description',null,['class'=>'form-control','required','placeholder'=>__('flight.description_placeholder'),'maxlength'=>254]) !!}
    @endslot @endcomponent
    @component('layouts.components.edit_two_column',['for' => 'comment','required' => '1','label'=>__('flight.comment')]) @slot('field')
        {!! Form::text('comment',null,['class'=>'form-control','required','placeholder'=>__('flight.comment_placeholder'),'maxlength'=>254]) !!}
    @endslot @endcomponent
