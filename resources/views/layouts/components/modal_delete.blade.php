<div id="modal-delete" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url' => '','method' => 'delete']) !!}
                <div class="modal-header bg-red"> 
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button">
                        <span aria-hidden="true"> x </span></button>
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete selected record ? Proceed ?</p>
                    {!! Form::hidden('urlReturn','') !!}
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default pull-left" type="button">Close</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).on("click", "a[data-modal]", function(e){
            e.preventDefault();
            var route = $(this).data("route");
            $("#modal-delete form").attr("action", route); //id hash, div/form/p tag
            var urlReturn = $(this).data("urlreturn");
            $("#modal-delete form input[name='urlReturn']").attr("value", urlReturn); //id hash, div/form/p tag
        });  
    </script>
@endpush
