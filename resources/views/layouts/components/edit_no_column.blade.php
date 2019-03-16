<div class='col-md-12 form-group'>
    <label for="@if(isset($for)){{ $for }}@endif">{{ $label ?? null }}</label>
    @if(isset($field)){{ $field }}@endif
</div>