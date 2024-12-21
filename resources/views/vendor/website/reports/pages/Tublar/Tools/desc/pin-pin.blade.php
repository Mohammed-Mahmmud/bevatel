<table class="table-desc">
    <thead>
        <tr>
            <th rowspan='3'>#</th>
            <th rowspan='3'>Serial No.</th>
            <th rowspan='3'>Description</th>
            <th rowspan='2' colspan="2">Connection</th>
            <th rowspan='2' colspan="3">Condition</th>
            <th colspan="14">Dimensional</th>
        </tr>
        <tr>
            <th colspan="6">Pin1</th>
            <th colspan="6">Pin2</th>
            <th>Body</th>
            <th rowspan="2">Remarks</th>
        </tr>

        <tr>
            <th>Pin 1</th>
            <th>Pin 2</th>
            <th>Pin 1</th>
            <th>Pin 2</th>
            <th>Body</th>
            <th>OD</th>
            <th>ID</th>
            <th>SRG </th>
            <th>SRG </th>
            <th>Pin </th>
            <th>Bevel </th>
            <th>OD</th>
            <th>ID</th>
            <th>SRG</th>
            <th>SRG</th>
            <th>Pin</th>
            <th>Bevel</th>
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
                <td>{{ getDecode($item->description)['pin1_conn'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_conn'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin1_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_cond'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin1_od'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin1_id'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin1_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin1_srg'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin1_length'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin1_bevel'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_od'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_id'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_diameter'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_srg'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_length'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['pin2_bevel'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['body_length'] ?? '' }} </td>
                <td>{{ getDecode($item->description)['remarks'] ?? '' }} </td>

            </tr>
        @endforeach
    </tbody>
</table>
