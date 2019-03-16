<li class="{{$class}}">
    <p style="margin:0px;">
        <a style="padding: 10px 15px;position: relative;display: inline-block;" href="#{{$id}}" data-target=".{{$id}}" data-toggle="tab">{{$title}}</a>
        @if(isset($idEdit))
            <a data-toggle="tab" data-target=".{{$idEdit}}" type="button" class="btn btn-primary" style="margin-top: -8px;"><i class="fa fa-pencil"></i></a>
        @endif
    </p>
</li>