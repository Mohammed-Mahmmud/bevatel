@extends('website.reports.Layouts.Vertical.master')
@section('title', 'STC ' . ucfirst($data->type) . ' Inspection Reports')
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/mudjar/css/style.css') }}">
    @if ($data->getAccept->value == 2)
        <style>
            body {
                margin: 0;
                padding: 0;
                background-image: url('{{ public_path('/storage/Images/Website/footerImages/reJected.png') }}');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                position: relative;
                z-index: -1;
            }
        </style>
    @endif

@endsection
@section('customHeader', 'Tublar Inspection Services')
@section('reports')
    <div class="center">
        <b>{{ ucfirst($data->type) . ' Inspection Reports' }}</b>
    </div>
    <table class="info-table1">
        <tr>
            <td class="table1-label">Tool:</td>
            <td class="table1-content">{{ $data->tool }}</td>
            <td class="table1-label">Serial :</td>
            <td class="table1-content" colspan="2">{{ $data->serial }}</td>

        </tr>
        <tr>
            <td class="table1-label">Client:</td>
            <td class="table1-content">{{ $data->getOrders->companies->name }}</td>
            <td class="table1-label">Report No :</td>
            <td class="table1-content" colspan="2">{{ $data->report_number }}</td>
        </tr>
        <tr>
            <td class="table1-label">Location :</td>
            <td class="table1-content">{{ $data->getOrders->rigs->name }}</td>
            <td class="table1-label">Date :</td>
            <td class="table1-content" colspan="2">{{ $data->date }}</td>
        </tr>
        <tr>
            <td class="table1-label">Address :</td>
            <td class="table1-content">{{ $data->getOrders->rigs->location }}</td>
            <td>Type Of Inspection</td>
            <td>CONN</td>
            <td>Body</td>
        </tr>
        <tr>

            <td class="table1-label" rowspan="7">Inspection Procedure</td>
            <td class="table1-content" rowspan="7">{{ $data->getDeCode($data->visual)['conn'] ?? '' }}</td>
            <td class="table1-content">Visual Inspection</td>
            <td class="table1-content">{{ $data->getDeCode($data->visual)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $data->getDeCode($data->visual)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Boroscopic Inspection</td>
            <td class="table1-content">{{ $data->getDeCode($data->boroscopic)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $data->getDeCode($data->boroscopic)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Dimensional Inspection</td>
            <td class="table1-content">{{ $data->getDeCode($data->dimensional)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $data->getDeCode($data->dimensional)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Magnetic Particle Inspection</td>
            <td class="table1-content">{{ $data->getDeCode($data->liquid_penetrant)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $data->getDeCode($data->liquid_penetrant)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Liquid Penetrant Inspection</td>
            <td class="table1-content">{{ $data->getDeCode($data->mpi)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $data->getDeCode($data->mpi)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Ultrasonic Inspection</td>
            <td class="table1-content">{{ $data->getDeCode($data->ultrasonic)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $data->getDeCode($data->ultrasonic)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Eddy Current Inspection</td>
            <td class="table1-content">{{ $data->getDeCode($data->eddy_current)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $data->getDeCode($data->eddy_current)['body'] ?? '' }}</td>
        </tr>

    </table>
    {{-- content table --}}
    <table class="info-table1">
        <tbody>
            <tr>

                <td colspan="3"><b> </b></td>
                <td colspan="3"><b>Box </b></td>
                @if ($data->type == 'mud')
                    <td><b>Body Thread</b></td>
                @endif
                <td colspan="3"><b>Pin</b></td>

            </tr>
            <tr>
                <td style="width: 10% "><b>Serial No </b></td>
                <td style="width: 40% "><b>Description </b></td>
                <td style="width: 5% "><b>Length </b></td>
                <td style="width: 10% "><b>Thread </b></td>
                <td style="width: 5% "><b> OD</b></td>
                <td style="width: 5% "><b>Cond</b></td>
                @if ($data->type == 'mud')
                    <td style="width: 10% "><b>Cond</b></td>
                @endif
                <td style="width: 5% "><b>Conn </b></td>
                <td style="width: 5% "><b> ID</b></td>
                <td style="width: 5% "><b>Cond</b></td>
            </tr>
            @foreach ($data->getDesc as $index => $body)
                <tr>
                    <td style="width: 10% ">{{ getDecode($body->description)['serial_no'] ?? '' }} </td>
                    <td style="width: 40% ">{{ getDecode($body->description)['description'] ?? '' }}</td>
                    <td style="width: 5% ">{{ getDecode($body->description)['length'] ?? '' }} </td>
                    <td style="width: 10% ">{{ getDecode($body->description)['box_thread'] ?? '' }} </td>
                    <td style="width: 5% "> {{ getDecode($body->description)['box_od'] ?? '' }}</td>
                    <td style="width: 5% ">{{ getDecode($body->description)['box_cond'] ?? '' }}</td>
                    @if ($data->type == 'mud')
                        <td style="width: 10% ">{{ getDecode($body->description)['body_thread_cond'] ?? '' }}</td>
                    @endif
                    <td style="width: 5% ">{{ getDecode($body->description)['pin_conn'] ?? '' }} </td>
                    <td style="width: 5% "> {{ getDecode($body->description)['pin_id'] ?? '' }}</td>
                    <td style="width: 5% ">{{ getDecode($body->description)['pin_cond'] ?? '' }}</td>
                </tr>
            @endforeach
            <tr>
                <td><b>Summary</b></td>
                @if ($data->type == 'mud')
                    <td colspan="9">{{ $data->summary }} <b>{{ ' ' . $data->getAccept->name }}</td>
                @else
                    <td colspan="8">{{ $data->summary }} <b>{{ ' ' . $data->getAccept->name }}</b> </td>
                @endif
            </tr>
        </tbody>
    </table>
    {{-- end content table --}}



    <div class="fixedBottom">
        <table class="info-table1 frameless-table">
            <tbody>
                <tr style="font-size:110%;">
                    <td class="left">
                        <b>Inspector:</b> {{ $data->getUser->full_name }}
                        <x-website.reports.layouts.signature :user="$data->getUser->id" />
                    </td>
                    <td class="right">
                        <b>Date:</b> {{ $data->date }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
@section(' script') @endsection
