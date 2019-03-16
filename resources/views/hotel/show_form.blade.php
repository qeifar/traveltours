@component('layouts.components.show_two_column',['label'=>__('hotel.title')]) @slot('field')
        {{$modelHotel->title}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('hotel.description')]) @slot('field')
        {{$modelHotel->description}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('hotel.comment')]) @slot('field')
        {{$modelHotel->comment}}
    @endslot @endcomponent
