@extends('website.reports.Layouts.Horizontal.master')
@section('title', 'STC ' . ucfirst($data->type) . ' Inspection Reports')
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/tools/css/style.css') }}">
    @if ($data->getAccept->value == 2)
        <style>
            body {
                margin: 0;
                padding: 0;
                background-image: url('{{ public_path('/storage/Images/Website/footerImages/hreJected.png') }}');
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
        <b>{{ strtoupper($data->type) . ucwords(' subs Inspection Reports') }}</b>
    </div>
    <table class="contentTable">
        <tbody>
            <tr>
                <th>Client</th>
                <td>{{ $data->getOrders->companies->name }}</td>
                <th>Address</th>
                <td>{{ $data->getOrders->rigs->name }}</td>
                <th>location</th>
                <td>{{ $data->getOrders->rigs->location }}</td>
            </tr>
            <tr>
                <th>Tools Status</th>
                <td>{{ $data->tools_status }}</td>
                <th>date of inspection</th>
                <td>{{ $data->date }}</td>
                <th>due date insp</th>
                <td>{{ $data->fin_date }}</td>
            </tr>
            <tr>
                <th>Work Order</th>
                <td>{{ $data->work_order }}</td>
                <th>report number</th>
                <td>{{ $data->report_number }}</td>
                <th>specification</th>
                <td>{{ $data->spec }}</td>
            </tr>
            <tr>
                <th> insp methods</th>
                <td colspan="3">{{ $data->methods }}</td>
                <th> procedure</th>
                <td>{{ $data->procedure }}</td>

            </tr>
        </tbody>
    </table>

    {{-- description table --}}
    @include('website.reports.pages.Tublar.Tools.desc.' . str_replace('*', '-', $data->type))
    {{-- end description table --}}

    <table class="contentTable">

        <tbody class="left">
            <tr>
                <th class="left">Summary</th>
                <td class="left" colspan="3">{{ $data->summary }}</td>
            </tr>
        </tbody>
    </table>
    <table class="info-table1 frameless-table" style="height: 10px;">
        <tbody>
            <tr>
                {{-- operator  --}}
                <td style="width:auto; text-align:left">
                    <div><b>Customer Signuture : </b> </div>
                </td>
                <td class="left">
                    <div><b>Inspector Signature : </b>{{ $data->getUser->full_name }}</div>
                    <div class="center">
                        <x-website.reports.layouts.signature :user="$data->getUser->id" />
                    </div>
                </td>

            </tr>
        </tbody>
    </table>
    <table class="abb">
        <thead>
            {{--  <tr>
            <th colspan="14">Data Abbrevations</th>
        </tr>  --}}
        </thead>
        <tbody>
            <tr>
                <td class="abb-tx">O.D</td>
                <td abb-ty>Outside Diameter</td>
                <td class="abb-tx">WO</td>
                <td abb-ty>Wash-Out</td>
                <td class="abb-tx">BB</td>
                <td abb-ty>Bell-out Box</td>
                <td class="abb-tx">B</td>
                <td abb-ty>Blade Length</td>

            </tr>
            <tr>
                <td class="abb-tx">C</td>
                <td class="abb-ty">Cracked</td>
                <td class="abb-tx">PS</td>
                <td class="abb-ty">Pitted Seal</td>
                <td class="abb-tx">OW</td>
                <td class="abb-ty">OD Wear</td>
                <td class="abb-tx">C'Bore</td>
                <td class="abb-ty">Counter Bore</td>

            </tr>
            <tr>
                <td class="abb-tx">SD</td>
                <td class="abb-ty">Seal Damaged</td>
                <td class="abb-tx">C</td>
                <td class="abb-ty">Top Neck Length</td>
                <td class="abb-tx">IC</td>
                <td class="abb-ty">Internal Corrosion</td>
                <td class="abb-tx">B'Back</td>
                <td class="abb-ty">Boreback</td>


            </tr>
            <tr>
                <td class="abb-tx">SD</td>
                <td class="abb-ty">Seal Damaged</td>
                <td class="abb-tx">C</td>
                <td class="abb-ty">Top Neck Length</td>
                <td class="abb-tx">IC</td>
                <td class="abb-ty">Internal Corrosion</td>
                <td class="abb-tx">B'Back</td>
                <td class="abb-ty">Boreback</td>

            </tr>
        </tbody>
    </table>
@endsection
@section(' script') @endsection
