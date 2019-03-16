<div class='col-md-12 form-group'>
    <div class="row">
        <div class='col-md-2'>
            <label for="@if(isset($for)){{ $for }}@endif">{{ $label ?? null }}</label>
        </div>
        <div class='col-md-10'>
            @if(isset($field)){{ $field }}@endif
        </div>
    </div>
</div>