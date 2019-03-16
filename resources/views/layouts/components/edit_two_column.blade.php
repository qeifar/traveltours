<div class='col-md-6 form-group'>
    <div class="row">
        <div class='col-md-3'>
            <label for="@if(isset($for)){{ $for }}@endif">{{ $label ?? null }}</label>
        </div>
        <div class='col-md-9'>
            @if(isset($field)){{ $field }}@endif
        </div>
    </div>
</div>