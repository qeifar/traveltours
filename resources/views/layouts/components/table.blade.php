<div class="box-body table-responsive no-padding" style="border: none;">
    <table id="{{ $tname }}" class="table display table-hover" width="100%">
        <thead>
            <tr class='bg-blue'>
                {{ $thead }}
            </tr>
        </thead>
        <tbody>
            {{ $tbody }}
        </tbody>
    </table>
</div>
@push('scripts')
    <script>
        $(document).ready(function () {
            var {{ $tname }} = $('#{{ $tname }}').DataTable({
                @if(isset($firstScript))
                {{ $firstScript }}
                @endif
            });
            {{ $tname }}.on('order.dt search.dt', function () {
                {{ $tname }}.column(0, {search:'applied', order:'applied'}).nodes().each(function (cell, {{ $tname }}) {
                    cell.innerHTML = {{ $tname }} + 1;
                });
            }).draw();
            @if(isset($secondScript))
            {{ $secondScript }}
            @endif
        });
    </script>
@endpush