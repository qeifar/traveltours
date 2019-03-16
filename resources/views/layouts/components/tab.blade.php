<div class="col-md-12">
    <div class="nav-tabs-custom" style="box-shadow:none;">
        <ul class="nav nav-tabs">
            @stack(($id ?? null).'_nav')
        </ul>
        <div class="tab-content no-padding">
            @stack(($id ?? null).'_content')
        </div>
    </div>
</div>