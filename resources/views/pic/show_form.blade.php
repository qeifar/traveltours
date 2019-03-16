@component('layouts.components.show_two_column',['label'=>__('pic.title')]) @slot('field')
        {{$modelPic->title}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('pic.description')]) @slot('field')
        {{$modelPic->description}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('pic.comment')]) @slot('field')
        {{$modelPic->comment}}
    @endslot @endcomponent
