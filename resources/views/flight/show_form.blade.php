@component('layouts.components.show_two_column',['label'=>__('flight.title')]) @slot('field')
        {{$modelFlight->title}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('flight.description')]) @slot('field')
        {{$modelFlight->description}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('flight.comment')]) @slot('field')
        {{$modelFlight->comment}}
    @endslot @endcomponent
