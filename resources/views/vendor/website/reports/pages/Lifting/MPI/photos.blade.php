<table class="info-table1">
    <tr>
        @foreach ($data->getMedia($data->type) as $image)
            <td class="table1-label">
                <img src="{{ $image->getPath() }}" width="100%" height="150" />
            </td>
        @endforeach
    </tr>
</table>
