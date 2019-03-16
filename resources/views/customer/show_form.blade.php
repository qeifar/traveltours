@component('layouts.components.show_two_column',['label'=>__('customer.title')]) @slot('field')
        {{$modelCustomer->title}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('customer.description')]) @slot('field')
        {{$modelCustomer->description}}
    @endslot @endcomponent
    @component('layouts.components.show_two_column',['label'=>__('customer.comment')]) @slot('field')
        {{$modelCustomer->comment}}
    @endslot @endcomponent
