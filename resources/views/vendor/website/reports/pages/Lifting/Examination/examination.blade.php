@extends('website.reports.Layouts.Vertical.master')
@section('title', 'STC Thorough Examination')
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/examination/css/style.css') }}">
    @if ($data->accept == 0)
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
@section('customHeader', 'Inspection Report System')
@section('reports')
    <div style="text-align: center;">
        <b>CERTIFICATE OF THOROUGH EXAMINATION OF LIFTING EQUIPMENT</b><br>
        <span style="font-size:12px;">
            This report complies with the requirements of the Provision and Use of Work Equipment Regulations 1998 <br>And
            the Lifting Operations and
            Lifting Equipment Regulations 1998
        </span>
    </div>
    <br>

    <table class="info-table1">
        <tr>
            <td class="table1-label">Date Of Thorough Examination :{{ $data->date }}</td>
            <td class="table1-label">Date Of Report :{{ $data->date }}</td>
            <td class="table1-label">Report Number :{{ $data->report_number }}</td>
        </tr>
    </table>

    <table class="info-table1">
        <tr>
            <td class="table1-label">Name and Address of employer for whom the thorough examination was made
                : {{ $data->getOrders->companies->name }}</td>
            <td class="table1-label">Address of premises at which the examination was made
                :{{ $data->getOrders->rigs->name }}</td>
        </tr>
    </table>


    <table class="info-table1">
        <tr class="table1-content">
            <td style="width:100px;">Identification No</td>
            <td style="width:auto;">QTY</td>
            <td style="width:200px;">Description Of Equipment</td>
            <td style="width:100px;">Manufacture Date</td>
            <td style="width:80px;">SWL</td>
            <td style="width:150px;">Date Of Last Examnation</td>
        </tr>
        <tr style="height:30%;">
            <td>{{ $data->serial }}</td>
            <td>{{ $data->qty }}</td>
            @include("website.reports.pages.Lifting.Examination.description.$data->type")
            <td>{{ $data->last_exam_date }}</td>
        </tr>
    </table>


    <table class="info-table1">
        <tr>
            <td><b>ORIGINAL CERTIFICATE NO</b></td>
            <td><b>ORIGINAL CERTIFICATE DATE</b></td>
            <td><b>NAME OF CERTIFYING BODY</b></td>
        </tr>
        <tr>
            <td>{{ $data->original_cert_number }}</td>
            <td>{{ $data->original_cert_date }}</td>
            <td>{{ $data->cert_body_name }}</td>
        </tr>

    </table>


    <table class="info-table1">

        <tr>
            <td class="no-border" colspan="5"></td>
            <td class="no-border center" colspan="5"><b>Was the examination carried out?</b></td>
        </tr>
        <tr>

            <td rowspan="2" style="width:100px;" class="no-border left">
                Is this the first examination after installation or assembly at a new site or location?
            </td>
            <td style="width:20px; height:20px;">YES</td>
            <td style="width:20px; height:20px;">
                @if ($data->first_exam_after == 1)
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:20px; height:20px;">NO</td>
            <td style="width:20px; height:20px;">
                @if ($data->first_exam_after == 0)
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>

            <td style="width:100px;" class="no-border left">Within an interval of 6 months?</td>
            <td style="width:20px; height:20px;">YES</td>
            <td style="width:20px; height:20px;">
                @if ($data->carried_out === 'interval_month')
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:20px; height:20px;">NO</td>
            <td style="width:20px; height:20px ;">
                @if ($data->carried_out !== 'interval_month')
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4" class="no-border"></td>
            <td style="width:100px" class="no-border left">Within an interval of 12 months?</td>
            <td style="width:20px; height:20px;">YES</td>
            <td style="width:20px; height:20px;">
                @if ($data->carried_out === 'interval_year')
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:20px; height:20px;">NO</td>
            <td style="width:20px; height:20px;">
                @if ($data->carried_out !== 'interval_year')
                    <span style="font-family: DejaVu Sans;  font-weight:bold;">&check;</span>
                @endif
            </td>

        </tr>
        <tr>
            <td rowspan="2" style="width:100px;" class="no-border left">If the answer to the above question is YES has
                the equipment been installed correctly?
            </td>
            <td style="width:20px; height:20px;">YES</td>
            <td style="width:20px; height:20px;">
                @if ($data->has_equipment == 1)
                    <span style="font-family: DejaVu Sans;  font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:20px; height:20px;">NO</td>
            <td style="width:20px; height:20px;">
                @if ($data->has_equipment == 0)
                    <span style="font-family: DejaVu Sans;   font-weight:bold;">&check;</span>
                @endif
            </td>

            <td style="width:100px" class="no-border left">In accordance with an examination scheme?</td>
            <td style="width:20px; height:20px;">YES</td>
            <td style="width:20px; height:20px;">
                @if ($data->carried_out === 'exam_scheme')
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:20px; height:20px;">NO</td>
            <td style="width:20px; height:20px;">
                @if ($data->carried_out !== 'exam_scheme')
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>

        </tr>
        <tr>
            <td colspan="4" class="no-border"></td>
            <td style="width:100px" class="no-border left">After the occurrence of exceptional circumstances?</td>
            <td style="width:20px; height:20px;">YES</td>
            <td style="width:20px; height:20px ; ;">
                @if ($data->carried_out === 'circumstances')
                    <span style="font-family: DejaVu Sans;  font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:20px; height:20px;">NO</td>
            <td style="width:20px; height:20px ; ;">

                @if ($data->carried_out !== 'circumstances')
                    <span style="font-family: DejaVu Sans;   font-weight:bold;">&check;</span>
                @endif
            </td>

        </tr>

    </table>



    <table class="info-table1">
        <tr>
            <td class="left" style="font-size:12px;">Identification of any part found to have a defect which is or could
                become a danger to persons and a description of the defect: @unless ($data->accept)
                    NONE.
                @endunless <br>
                (If none state NONE)
            </td>
        </tr>
        @if ($data->defect_note)
            <tr>
                <td class="center" style="font-size:12px;">
                    {{ $data->defect_note }}
                </td>
            </tr>
        @endif
    </table>
    <table class="info-table1">
        <tr>
            <td style="width:80%" class="left">Is the above an existing or imminent danger to persons *Note-This is a
                reportable defect
            </td>
            <td style="width:5%">YES</td>
            <td style="width:5% ; ;">
                @if ($data->danger == 1)
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:5%">NO</td>
            <td style="width:5% ;">
                @if ($data->danger == 0)
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
        </tr>
    </table>
    <table class="info-table1">
        <tr>
            <td style="width:80%" class="left">
                Is the above a defect which is not yet but could become a danger to persons:(If YES state the date by
                when)
            </td>
            <td style="width:20%">YES by: {{ $data->danger_date }}</td>
        </tr>
    </table>
    <table class="info-table1">
        <tr>
            <td style="width:100%" class="left">
                Particulars of any repair, renewal or alteration required to remedy the defect identified above: NONE
            </td>
        </tr>
        @if ($data->perfect_note)
            <tr>
                <td style="width:100%" class="center">
                    {{ $data->perfect_note }}
                </td>
            </tr>
        @endif
    </table>

    <table class="info-table1">
        <tr>
            <td style="width:100%" class="left">
                Particulars of any tests carried out as part of the examination: (If none state NONE):
                <b>{{ ucfirst(implode(', ', str_replace('_', ' ', json_decode($data->carried_exam)))) }}</b>
            </td>
        </tr>
        @if ($data->carried_note)
            <tr>
                <td style="width:100%" class="center">
                    {{ $data->carried_note }}
                </td>
            </tr>
        @endif
    </table>

    <table class="info-table1">
        <tr>
            <td style="width:80%" class="left"><b>IS THIS EQUIPMENT SAFE TO OPERATE?</b></td>
            <td style="width:5%">YES</td>
            <td style="width:5% ; ;">
                @if ($data->safe_equipment == 1)
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
            <td style="width:5%">NO</td>
            <td style="width:5%  ; ;">
                @if ($data->safe_equipment == 0)
                    <span style="font-family: DejaVu Sans; font-weight:bold;">&check;</span>
                @endif
            </td>
        </tr>
    </table>

    <table class="info-table1" width="100%">
        <tbody>
            <tr style="width: 25%; font-size:8; font-weight:bold;">
                <td>Name & Qualifications of person making this report</td>
                <td>NAME OF PERSON AUTHENTICATING THIS REPORT</td>
                <td>COMPANY STAMP</td>
                <td>NEXT EXAMINATION</td>
            </tr>
            <tr style=" width: 25% ;">
                <td style=" height: 8%;">
                    <div>
                        <div>
                            {{ $data->getUser->full_name }} <br>(LEEA)
                        </div>
                        <div>
                            <x-website.reports.layouts.signature :user="$data->getUser->id" />
                        </div>
                    </div>
                </td>
                <td>Abbas Elshref<br>(Technical Manager)</td>
                <td>&nbsp;</td>
                <td>{{ $data->next_exam }}</td>
            </tr>
            <tr>
                <td colspan=4 class="left">
                    <b> Comments:</b><br>
                    We hereby certify that on {{ $data->date }}. The item/s described in this report was/were
                    thoroughly examined so far as accessible, and<br>
                    the above particulars and installation is relevant, the equipment checked and examined is
                    @if ($data->accept == 1)
                        <b>safe</b>
                    @else
                        <b>unsafe</b>
                        < @endif to operate at the time of inspection.
                </td>
            </tr>
        </tbody>
    </table>

    @if (isset($data->jobChecklist[0]->type))
        <x-website.reports.layouts.vertical-footer>
        </x-website.reports.layouts.vertical-footer>
        <div class="page_break">
            <x-website.reports.layouts.vertical-header>
            </x-website.reports.layouts.vertical-header>
            <div style="text-align: center;">
                <b>CERTIFICATE OF THOROUGH EXAMINATION OF LIFTING EQUIPMENT</b><br>
                <span style="font-size:12px;">
                    This report complies with the requirements of the Provision and Use of Work Equipment Regulations 1998
                    <br>And the Lifting Operations and
                    Lifting Equipment Regulations 1998
                </span>
            </div>
            <br>
            <br>
            <table style="height: 30px; width: 100%;" class="info-table1">
                <thead>
                    <th>Questions</th>
                    <th>Check</th>
                    <th>Comments</th>
                </thead>
                <tbody>
                    @foreach ($data->jobChecklist as $item)
                        <tr style="font-size:110%">
                            <td style="width: 65%;">{{ $item->question }}</td>
                            <td style="width: 5%;">
                                @if ($item->check)
                                    In Order
                                @else
                                    N/A
                                @endif
                            </td>
                            <td style="width: 30%;">{{ $item->comment }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endif
@endsection
@section('script')
    <script src="{{ asset('dashboard') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/app.js"></script>
@endsection
