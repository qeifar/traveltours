<div id="{{ $id }}" class="modal fade" style="display: none;">
    <div id="modal_select2" class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url' => $route, 'enctype' => 'multipart/form-data']) !!}
                <div class="modal-header bg-green"> 
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button">
                        <span aria-hidden="true"> x </span></button>
                    <h4 class="modal-title">{{ $title }}</h4>
                </div>
                <div class="modal-body">
                    <div class='box-body row'>
                        {{ $content }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default pull-left" type="button">Close</button>
                    &nbsp;
                    {!! Form::button('<i class="fa fa-refresh"></i> '.__('general.reset').'',['class'=>'btn btn-reset','type'=>'reset']) !!}
                    {!! Form::button('<i class="fa fa-floppy-o"></i> '.__('general.save').'',['class'=>'btn btn-success','type'=>'submit','id'=>'submitButton']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@push('scripts')
    <script>
        @push('scriptsDocumentReady')
            $('#{{ $id }} .modal-body .select2').select2({
                dropdownParent: $('#{{ $id }} .modal-body'),
                width: '100%'
            });
        @endpush
        @if(isset($urlReturn))
            $(document).on("click", "a[data-modal]", function(f){
                f.preventDefault();
                var urlReturn = $(this).data("urlreturn");
                $("#{{ $id }} form input[name='urlReturn']").attr("value", {{ $urlReturn }}); //id hash, div/form/p tag
            });  
        @endif
    </script>
@endpush