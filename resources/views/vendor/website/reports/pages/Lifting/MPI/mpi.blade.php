@extends('website.reports.Layouts.Vertical.master')
@section('title', 'STC MPI Report')
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/mpi/css/style.css') }}">
    @if ($data->acceptance == 0)
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
@section('customHeader', 'Inspection Report System MPI')
@section('reports')
    <div style="text-align: center;">
        <b>MAGNETIC PARTICLE INSPECTION REPORT</b>
    </div>

    <br>
    <table class="info-table1">
        <tr>

            <td class="table1-label">Customer:</td>
            <td class="table1-content">{{ $data->getOrders->companies->name }}</td>
            <td class="table1-label">Date of Inspection:</td>
            <td class="table1-content">{{ $data->date }}</td>
        </tr>
        <tr>
            <td class="table1-label">Job Ticket No.:</td>
            <td class="table1-content">{{ $data->getOrders->number }}</td>
            <td class="table1-label">Inspection Report No.:</td>
            <td class="table1-content">{{ $data->report_number }}</td>
        </tr>
        <tr>
            <td class="table1-label">Purchase Order No. :</td>
            <td class="table1-content"> </td>
            <td class="table1-label">Inspection Location :</td>
            <td class="table1-content">{{ ucwords($data->getOrders->Rigs->name) }}</td>
        </tr>

        @if ($data->first_label)
            <tr>
                <td class="table1-label">Next Exam Date:</td>
                <td class="table1-content">{{ $data->next_date }}</td>

                <td class="table1-label">{{ $data->first_label }} :</td>
                <td class="table1-content">{{ $data->first_content }} </td>
            </tr>
        @else
            <tr>
                <td class="table1-label">Next Exam Date:</td>
                <td class="table1-content">{{ $data->next_date }}</td>
                <td class="table1-label"></td>
                <td class="table1-content"></td>
            </tr>
        @endif
    </table>



    <table class="info-table1">
        <tr>
            <td class="table1-label" style=" width: 17%;">Material Description :</td>
            <td class="table1-content" style=" width:48%;">{{ $data->description }}</td>
            <td class="table1-label" style=" width: 10%;">Serial No. :</td>
            <td class="table1-content" style=" width: 20%;">{{ $data->serial }}</td>
        </tr>
    </table>


    <table class="info-table1">
        <tr>
            <td class="table1-label" style=" width:17%;"> Area Inspected :</td>
            <td class="table1-content" style=" width: 83%;">{{ $data->extent }}</td>
        </tr>
    </table>


    <table class="info-table1">
        <tr>
            <td colspan='4' style="padding-bottom: 4px;font-weight:bold;text-align:center;">

                Inspection Method

            </td>
        </tr>
        <tr>

            <td class="table1-label" style=" width:14%;">Magnetizing Current :</td>
            <td style=" width:25%;" class=" table1-content">
                <input type="checkbox" id="checkbox1" disabled @if (in_array('ac', $data->getDeCode($data->magnetizing_current))) checked @endif>
                <label for="checkbox1">Alternatind(AC)</label>
                &nbsp;&nbsp;

                <input type="checkbox" id="checkbox2" disabled @if (in_array('dc', $data->getDeCode($data->magnetizing_current))) checked @endif>
                <label for="checkbox2">Direct (DC)</label>
            </td>


            <td class="table1-label center" style=" width:13%;">Magnetic Particles :</td>
            <td class="table1-content" style=" width:30%;">
                <input type="checkbox" id="checkbox1" disabled @if (in_array('dry', $data->getDeCode($data->magnetic_particles))) checked @endif>
                <label for="checkbox1">Dry</label>
                &nbsp;
                <input type="checkbox" id="wet" disabled @if (in_array('wet', $data->getDeCode($data->magnetic_particles))) checked @endif>
                <label for="wet">Wet</label>
                &nbsp;
                <input type="checkbox" id="checkbox2" disabled @if (in_array('visibale', $data->getDeCode($data->magnetic_particles))) checked @endif>
                <label for="checkbox2">Visibale</label>
                &nbsp;
                <input type="checkbox" id="checkbox2" disabled @if (in_array('flourescent', $data->getDeCode($data->magnetic_particles))) checked @endif>
                <label for="checkbox2">Flourescent</label>
            </td>
        </tr>
    </table>


    <table class="info-table1" style="height: 24px;" width="1034">
        <tbody>
            <tr>
                <td colspan='4' style="padding-bottom: 4px;font-weight:bold;text-align:center;">
                    Equipment </td>
            </tr>
            <tr>

                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox1" disabled @if ($data->getDeCode($data->equipment)['ac_yoke']) checked @endif>
                    <label>AC Yoke</label>
                </td>
                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox2" disabled @if ($data->getDeCode($data->equipment)['dc_coil']) checked @endif>
                    <label>DC Coil</label>
                </td>
                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox2" disabled @if ($data->getDeCode($data->equipment)['permanent_magnet']) checked @endif>

                    <label>Permanent Magnet</label>
                </td>
                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox2" disabled @if ($data->getDeCode($data->equipment)['uv_light']) checked @endif>

                    <label>UV Light</label>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $data->getDeCode($data->equipment)['ac_yoke_no'] ?? '' }}">
                </td>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $data->getDeCode($data->equipment)['dc_coil_no'] ?? '' }}">
                </td>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $data->getDeCode($data->equipment)['permanent_magnet_no'] ?? '' }}">
                </td>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $data->getDeCode($data->equipment)['uv_light_no'] ?? '' }}">
                </td>

            </tr>
            @if (isset($data->getDeCode($data->equipment)['other_name']))
                <tr>
                    <td class="left" style="width: 100px;" colspan='3'>
                        <input class="frameless" type="checkbox" disabled checked>

                        <label for="other">Other : {{ $data->getDeCode($data->equipment)['other_name'] ?? '' }}</label>
                    </td>
                    <td class="left" colspan='1' style="width: 100px;">
                        <label>No.</label>
                        <input class="frameless" type="text" disabled
                            value="{{ $data->getDeCode($data->equipment)['other_no'] ?? '' }}">
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="custom_row">
        <div class="custom_column">
            <table class="info-table1">
                <tr>
                    <td colspan='1' style="padding-bottom: 4px;font-weight:bold;text-align:center;">
                        Specifiacation </td>
                </tr>
                <tr>

                    <td class="table1-content" style="text-align: left">
                        <input type="checkbox" id="checkbox1" disabled @if (isset($data->getDeCode($data->specification)['select']) &&
                                in_array('api', $data->getDeCode($data->specification)['select'])) checked @endif>

                        <label>API</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox1" disabled @if (isset($data->getDeCode($data->specification)['select']) &&
                                in_array('dsi', $data->getDeCode($data->specification)['select'])) checked @endif>
                        <label>DS1</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox2" disabled @if (isset($data->getDeCode($data->specification)['select']) &&
                                in_array('astm', $data->getDeCode($data->specification)['select'])) checked @endif>
                        <label>ASTM</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox2" disabled @if (isset($data->getDeCode($data->specification)['select']) &&
                                in_array('asme', $data->getDeCode($data->specification)['select'])) checked @endif>
                        <label>ASME</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox2" disabled @if (isset($data->getDeCode($data->specification)['select']) &&
                                in_array('aws', $data->getDeCode($data->specification)['select'])) checked @endif>
                        <label>AWS</label>
                        &nbsp;
                        <input type="checkbox" id="checkbox2" disabled @if (isset($data->getDeCode($data->specification)['other'])) checked @endif>
                        <label>Other: {{ $data->getDeCode($data->specification)['other'] ?? '' }}</label>
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        <label>Edition : {{ $data->getDeCode($data->specification)['edition'] ?? '' }}</label>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col">
            <table class="info-table1">
                <tr>
                    <td style="padding-bottom: 4px;font-weight:bold;text-align:center;">
                        Surface Condition </td>
                </tr>

                <tr>
                    <td>
                        <input class="frameless center" type="text" style="width: 100%;"
                            value="{{ $data->getDeCode($data->surface_condition)[0] ?? '' }}">
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <table class="info-table1">
        <tr>
            <td style="padding-bottom: 4px; font-weight: bold; text-align: center;">
                Result
            </td>
        </tr>
        <tr>
            <td>
                <div id="description-container">
                    ** NDT: Magnetic Particle Inspection Carried Out On Available Critical Areas For
                    The Above Description As Per The Figure Below <b>We Found</b>
                    @if ($data->acceptance == 1)
                        All inspected areas found free from surface discontinuities at the time of inspection
                    @endif

                    <div id="description-result" style="white-space: pre-line;">
                        {{ $data->result }}
                    </div>


                    @if ($data->acceptance == 1)
                        Inspection&nbsp;&nbsp;&nbsp;&nbsp;<b>Accepted</b>
                    @elseif($data->acceptance == 0)
                        Inspection&nbsp;&nbsp;&nbsp;&nbsp;<b>Rejected</b>
                    @endif

                </div>

            </td>
        </tr>
    </table>



    <table class="info-table1">
        <tr>
            <td class="table1-label" style=" width:5%;">Note:-</td>
            <td class="table1-content" style=" width: 90%;">{{ $data->note }}</td>
        </tr>
    </table>


    {{-- @php

dd($data->photos->url);

@endphp  --}}

    @include('website/reports/pages/Lifting/MPI/photos')



    <table class="info-table1 frameless-table">
        <tbody>
            @if (isset($data->getDeCode($data->equipment)['other_name']))
                <br>
            @endif
            <tr>
                {{-- operator  --}}
                <td style="width:auto; text-align:left">
                    <div><b>Inspector : </b> {{ $data->getUser->full_name }}</div>
                    <div><b>Qualification : </b> ASNT II</div>
                    <br>
                    <div>
                        <x-website.reports.layouts.signature :user="$data->getUser->id" />
                    </div>
                </td>



                {{-- supervisor  --}}
                <td class="left">
                    @if (isset($data->supervisor))
                        <b>Supervisor : </b>{{ $data->supervisor }}
                    @endif
                </td>

            </tr>
        </tbody>
    </table>
@endsection
@section(' script') @endsection
