@component('layouts.components.edit_two_column',['for' => 'title','required' => '1','label'=>__('pic.title')]) @slot('field')
        {!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>__('pic.title_placeholder'),'maxlength'=>254]) !!}
    @endslot @endcomponent
    @component('layouts.components.edit_two_column',['for' => 'description','required' => '1','label'=>__('pic.description')]) @slot('field')
        {!! Form::text('description',null,['class'=>'form-control','required','placeholder'=>__('pic.description_placeholder'),'maxlength'=>254]) !!}
    @endslot @endcomponent
    @component('layouts.components.edit_two_column',['for' => 'comment','required' => '1','label'=>__('pic.comment')]) @slot('field')
        {!! Form::text('comment',null,['class'=>'form-control','required','placeholder'=>__('pic.comment_placeholder'),'maxlength'=>254]) !!}
    @endslot @endcomponent
