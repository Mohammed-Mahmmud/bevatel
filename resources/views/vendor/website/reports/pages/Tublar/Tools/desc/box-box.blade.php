<table class="table-desc">
    <thead>
        <tr>
            <th rowspan='3'>#</th>
            <th rowspan='3'>Serial No.</th>
            <th rowspan='3'>Description</th>
            <th rowspan='2' colspan="2">Connection</th>
            <th rowspan='2' colspan="3">Condition</th>
            <th colspan="12">Dimensional</th>
        </tr>
        <tr>
            <th colspan="5">box1</th>
            <th colspan="5">box2</th>
            <th colspan="2">Body</th>
            <th rowspan="2">Remarks</th>
        </tr>

        <tr>
            <th>box1</th>
            <th>box2</th>
            <th>box1</th>
            <th>box2</th>
            <th>Body</th>
            <th>OD</th>
            <th>CB </th>
            <th>BB </th>
            <th>BB </th>
            <th>Bevel </th>
            <th>OD</th>
            <th>CB </th>
            <th>FB </th>
            <th>FB Cly</th>
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
                <td>{{ getDecode($item->description)['box1_conn'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box2_conn'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box1_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box2_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box1_od'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box1_cb'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box1_bb_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box1_bb_depth'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box1_bevel_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box2_od'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box2_cb'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box2_bb_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box2_bb_depth'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['box2_bevel_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_fishing_neck'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_length'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['remarks'] ?? '' }} </td>

            </tr>
        @endforeach
    </tbody>
</table>
