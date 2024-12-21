@extends('website.reports.Layouts.Vertical.master')
@section('title', 'STC Job TIcket')
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/jobticket/css/style.css') }}">
@endsection
@section('customHeader', 'STC Job Ticket')
@section('reports')
    <div style="text-align: center;">
        <b>Job Ticket</b>
    </div>

    <table class="info-table1">
        <tr>

            <th>W.O No</th>
            <td>{{ $data->work_number }}</td>
            <th>ISPR </th>
            <td>{{ $data->ispr }} </td>
        </tr>
        <tr>
            <th>Customer</th>
            <td>{{ $data->getOrders->companies->name }} </td>
            <th>Well Name </th>
            <td>{{ $data->well_name }}</td>
        </tr>
        <tr>
            <th>Address </th>
            <td>{{ $data->getOrders->Companies->location }} </td>
            <th>Rig </th>
            <td>{{ $data->getOrders->rigs->name }}</td>
        </tr>


        <tr>
            <th>Work Location </th>
            <td>{{ $data->getOrders->rigs->location }}</td>
            <th> Ref.No </th>
            <td>{{ $data->ref_number }}</td>
        </tr>
        <tr>
            <th>Start Date</th>
            <td>{{ $data->date }}</td>
            <th>End Date </th>
            <td> {{ $data->end_date }} </td>
        </tr>
    </table>

    {{-- content table  --}}
    <table class="info-table1">
        <tbody>
            <tr>
                <td style="width: 12% "><b>Contract Code </b></td>
                <td style="width: 10% "><b>Quantity </b></td>
                <td style="width: 40% "><b>Description </b></td>
                <td style="width: 10% "><b>OD Size </b></td>
                <td style="width: 10% "><b>Range</b></td>
                <td style="width: 10% "><b>Unit price</b></td>
                <td style="width: 10% "><b>Total price</b></td>
            </tr>
            @foreach ($data->getDesc as $content)
                <tr>{{ getDecode($content->description)['main_description'] ?? '' }}
                    <td colspan=7>{{ getDecode($content->description)['main_description'] ?? '' }}</td>
                </tr>
                <tr>
                    <td style="width: 10% ">{{ getDecode($content->description)['contract_code'] ?? '' }}</td>
                    <td style="width: 10% ">{{ getDecode($content->description)['quantity'] ?? '' }}</td>
                    <td style="width: 40% ">{{ getDecode($content->description)['description'] ?? '' }}</td>
                    <td style="width: 8% ">{{ getDecode($content->description)['od_size'] ?? '' }}</td>
                    <td style="width: 8% ">{{ getDecode($content->description)['range'] ?? '' }}</td>
                    <td style="width: 11% ">{{ getDecode($content->description)['unit_price'] ?? '' }} $</td>
                    <td style="width: 11% ">{{ getDecode($content->description)['total_price'] ?? '' }} $</td>
                </tr>
            @endforeach
            <tr>
                <td colspan=4><b>Total Price of Job Ticket ($) :</b></td>
                <td colspan=3>{{ $data->job_price }} $</td>
            </tr>
        </tbody>
    </table>
    {{-- end content table  --}}

    <table class="frameless-table" style="height: 20px;">
        <tbody>
            <tr>
                {{-- Approval  --}}
                <td class="left">
                    <b>Approval : </b>{{ $data->approval }}
                </td>
                {{-- signture logo  --}}
                <td>
                </td>
                {{-- operator  --}}
                <td style="width:auto;">
                    <b>Operator Sign : </b>{{ $data->getUsers->full_name }}
                </td>
            </tr>
        </tbody>
    </table>
@endsection
@section(' script') @endsection
