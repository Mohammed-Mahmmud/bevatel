<table class="table-desc">
    <thead>
        <tr>
            <th rowspan='3'>#</th>
            <th rowspan='3'>Serial No.</th>
            <th rowspan='3'>Description</th>
            <th rowspan='2' colspan="2">Connection</th>
            <th rowspan='2' colspan="3">Condition</th>
            <th colspan="13">Dimensional</th>
        </tr>
        <tr>
            <th colspan="6">Pin</th>
            <th colspan="5">Box</th>
            <th colspan="2">Body</th>
            <th rowspan="2">Remarks</th>
        </tr>

        <tr>
            <th>Pin</th>
            <th>Box</th>
            <th>Pin</th>
            <th>Box</th>
            <th>Body</th>
            <th>OD</th>
            <th>ID</th>
            <th>SRG &#x3A6;</th>
            <th>SRG </th>
            <th>Pin </th>
            <th>Bevel </th>
            <th>OD</th>
            <th>CD </th>
            <th>BB </th>
            <th>BB </th>
            <th>Bevel</th>
            <th>Fishing Neck</th>
            <th>Overall</th>

        </tr>
    </thead>
    @php
        $i = 1;
    @endphp
    <tbody>
        @foreach ($data->getDesc as $item)
            <tr class="description">
                <td>{{ $i++ }}</td>
                <td>{{ getDecode($item->description)['serial'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['description'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_conn'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box_conn'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_od'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_id'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_srg'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_length'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin_bevel'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box_od'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box_cb'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box_bb_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box_bb_depth'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box_bevel_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_fishing_neck'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_length'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['remarks'] ?? '' }} </td>

            </tr>
        @endforeach
    </tbody>
</table>
