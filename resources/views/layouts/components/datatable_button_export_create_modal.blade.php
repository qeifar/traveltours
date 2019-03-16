dom: '<"row "<"col-md-4" f ><"col-md-4" l ><"col-md-4"<"pull-right dom-button"<B>>>>rtip',
language: {"url": "{{url('asset/lang/')}}/{{app()->getLocale()}}/datatable.json"},
buttons: [
	{
            text: '<i class="fa fa-plus"></i> {{__('general.add')}}',
            action: function ( e, dt, node, config ) {
                $('#{{$modal_id ?? 'modal_create'}}').modal('show');
            }
	},
],

