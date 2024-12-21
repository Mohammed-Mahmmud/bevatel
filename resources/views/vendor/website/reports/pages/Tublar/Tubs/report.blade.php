@extends('website.reports.Layouts.Horizontal.master')
@section('title', 'STC Inspection Reports')
@section('style')
    <link rel="stylesheet" href="{{ public_path('dashboard/pages/tublar/tubs/css/frontStyle.css') }}">
@endsection
@section('customHeader')
    <div>
        {{ strtoupper($data->type) . ucwords(' subs Inspection Reports') }}
        {{-- <img src="{{ public_path('dashboard/pages/tublar/tubs/' . $data->type . '.png') }}" height=20px> --}}
    </div>
@endsection
@section('customHeader', 'Tublar Inspection Services')
@section('reports')
    {{-- conent --}}
    <div class="center">
        {{-- <b>{{ strtoupper($data->type) . ucwords(' subs Inspection Reports') }}</b><br> --}}
        <img src="{{ public_path('dashboard/pages/tublar/tubs/' . $data->type . '.png') }}" height="30px"><br>
    </div>
    <table class="contentTable">
        <tbody>
            <tr>
                <th>
                    {{ TranslationHelper::translate(ucwords('customer')) }}
                </th>

                <td>{{ $data->customer ?? '' }}</td>

                <th>{{ TranslationHelper::translate(ucwords('Purchase Order No')) }}
                </th>

                <td>{{ $data->order ?? '' }}</td>

                <th>{{ TranslationHelper::translate(ucwords('Date of Insp')) }}
                </th>

                <td>{{ $data->date ?? '' }}</td>
            </tr>
            <tr>
                <th>{{ TranslationHelper::translate(ucwords('Insp Location')) }}
                </th>

                <td>{{ $data->location ?? '' }}</td>

                <th>{{ TranslationHelper::translate(ucwords('Job Ticket No')) }}
                </th>
                <td>{{ $data->getOrders->name ?? '' }}
                </td>
                <th>{{ TranslationHelper::translate(ucwords('Report No')) }}
                </th>
                <td>{{ $data->report_number ?? '' }}</td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col-8" style="width: 69%; display:inline-flex">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th colspan="4" class="center">{{ TranslationHelper::translate(ucwords('inspection method')) }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ TranslationHelper::translate(ucwords('magnetizing')) }}</th>
                        <td class="left">
                            <x-default.checkbox style="display: inline;" name="magnetizing[ac_yoke]" id="ac_yoke"
                                style="display: inline; "
                                value="{{ isset(getDeCode($data->magnetizing)['ac_yoke']) ? getDeCode($data->magnetizing)['ac_yoke'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('ac yoke')) }}

                            <x-default.checkbox style="display: inline;" name="magnetizing[permanent]" id="permanent"
                                value="{{ isset(getDeCode($data->magnetizing)['permanent']) ? getDeCode($data->magnetizing)['permanent'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('permanent')) }}
                            <x-default.checkbox style="display: inline;" name="magnetizing[dc_coil]" id="dc_coil"
                                value="{{ isset(getDeCode($data->magnetizing)['dc_coil']) ? getDeCode($data->magnetizing)['dc_coil'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('dc coil')) }}

                            @if ($data->type == 'drillpipe')
                                <x-default.checkbox style="display: inline;" name="magnetizing[emi]" id="emi"
                                    value="{{ isset(getDeCode($data->magnetizing)['emi']) ? getDeCode($data->magnetizing)['emi'] : '---------------' }}" />
                                {{ TranslationHelper::translate(ucwords('emi')) }}
                            @endif
                        </td>

                        <th>{{ TranslationHelper::translate(ucwords('magnetic particles')) }}</th>
                        <td>
                            <x-default.checkbox style="display: inline;" name="magnetic_particles[dry]" id="dry"
                                value="{{ isset(getDeCode($data->magnetic_particles)['dry']) ? getDeCode($data->magnetic_particles)['dry'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('dry')) }}

                            <x-default.checkbox style="display: inline;" name="magnetic_particles[wet]" id="wet"
                                value="{{ isset(getDeCode($data->magnetic_particles)['wet']) ? getDeCode($data->magnetic_particles)['wet'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('wet')) }}

                            <x-default.checkbox style="display: inline;" name="magnetic_particles[visible]" id="visible"
                                value="{{ isset(getDeCode($data->magnetic_particles)['visible']) ? getDeCode($data->magnetic_particles)['visible'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('visible')) }}

                            <x-default.checkbox style="display: inline;" name="magnetic_particles[fluorescent]"
                                id="fluorescent"
                                value="{{ isset(getDeCode($data->magnetic_particles)['fluorescent']) ? getDeCode($data->magnetic_particles)['fluorescent'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('fluorescent')) }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ TranslationHelper::translate(ucwords('other methods')) }}
                        </th>
                        <td colspan="3" class="left">
                            <x-default.checkbox style="display: inline;" name="other_methods[eai]" id="eai"
                                value="{{ isset(getDeCode($data->other_methods)['eai']) ? getDeCode($data->other_methods)['eai'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('eai')) }}

                            <x-default.checkbox style="display: inline;" name="other_methods[vti]" id="vti"
                                value="{{ isset(getDeCode($data->other_methods)['vti']) ? getDeCode($data->other_methods)['vti'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('vti')) }}

                            @if ($data->type == 'drillpipe')
                                <x-default.checkbox style="display: inline;" name="other_methods[wt]" id="wt"
                                    value="{{ isset(getDeCode($data->other_methods)['wt']) ? getDeCode($data->other_methods)['wt'] : '---------------' }}" />
                                {{ TranslationHelper::translate(StrToUpper('wt')) }}
                            @endif

                            <x-default.checkbox style="display: inline;" name="other_methods[tgi]" id="tgi"
                                value="{{ isset(getDeCode($data->other_methods)['tgi']) ? getDeCode($data->other_methods)['tgi'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('tgi')) }}

                            <x-default.checkbox style="display: inline;" name="" id="method_other"
                                value="{{ isset(getDeCode($data->other_methods)['other']) ? '1' : '' }}" />
                            {{ TranslationHelper::translate(ucfirst('other :')) }}
                            {{ isset(getDeCode($data->other_methods)['other']) ? getDeCode($data->other_methods)['other'] : '---------------' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4" style="width: 30%; float: right;">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th colspan="2" class="center">{{ TranslationHelper::translate(ucwords('specification')) }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="left">
                            <x-default.checkbox style="display: inline;" name="specification[api]" id="api"
                                value="{{ isset(getDeCode($data->specification)['api']) ? getDeCode($data->specification)['api'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('api')) }}

                            <x-default.checkbox style="display: inline;" name="specification[dsi]" id="dsi"
                                value="{{ isset(getDeCode($data->specification)['dsi']) ? getDeCode($data->specification)['dsi'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('dsi')) }}

                            <x-default.checkbox style="display: inline;" name="" id="spec_other"
                                value="{{ isset(getDeCode($data->specification)['other']) ? '1' : '' }}" />
                            {{ TranslationHelper::translate(ucfirst('other :')) }}
                            {{ isset(getDeCode($data->specification)['other']) ? getDeCode($data->specification)['other'] : '---------------' }}
                        </td>
                    </tr>
                    <tr>
                        <th>{{ TranslationHelper::translate(ucwords('edition')) }}
                        </th>
                        <td style="height:4%;">
                            {{ isset(getDeCode($data->specification)['other']) ? ucwords(getDeCode($data->specification)['other']) : '---------------' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-8" style="width: 69%; display:inline-flex">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th class="center" colspan="{{ $data->type === 'drillpipe' ? 7 : 5 }}">
                            {{ TranslationHelper::translate(ucwords('equipment used')) }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_ac_yoke]" id="equip_ac_yoke"
                                value="{{ isset(getDeCode($data->equipment)['equip_ac_yoke']) ? getDeCode($data->equipment)['equip_ac_yoke'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('ac yoke')) }}
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_dc_coil]"
                                id="equip_dc_coil"
                                value="{{ isset(getDeCode($data->equipment)['equip_dc_coil']) ? getDeCode($data->equipment)['equip_dc_coil'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('dc coil')) }}
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_permanent_magnet]"
                                id="equip_permanent_magnet"
                                value="{{ isset(getDeCode($data->equipment)['equip_permanent_magnet']) ? getDeCode($data->equipment)['equip_permanent_magnet'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('permanent magnet')) }}
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_uv_light]"
                                id="equip_uv_light"
                                value="{{ isset(getDeCode($data->equipment)['equip_uv_light']) ? getDeCode($data->equipment)['equip_uv_light'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('uv light')) }}
                        </td>

                        @if ($data->type == 'drillpipe')
                            <td class="center" style="width: auto ">
                                <x-default.checkbox style="display: inline;" name="equipment[equip_emi]" id="equip_emi"
                                    value="{{ isset(getDeCode($data->equipment)['equip_emi']) ? getDeCode($data->equipment)['equip_emi'] : '---------------' }}" />
                                {{ TranslationHelper::translate(ucwords('emi')) }}
                            </td>
                            <td class="center" style="width: auto;">
                                <x-default.checkbox style="display: inline;" name="equipment[equip_wt]" id="equip_wt"
                                    value="{{ isset(getDeCode($data->equipment)['equip_wt']) ? getDeCode($data->equipment)['equip_wt'] : '---------------' }}" />
                                {{ TranslationHelper::translate(ucwords('wt')) }}
                            </td>
                        @endif
                        <td style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="" id="equip_other"
                                value="{{ isset(getDeCode($data->equipment)['other']) ? '1' : '0' }}" />
                            {{ TranslationHelper::translate(ucfirst('other:')) }}
                            {{ isset(getDeCode($data->equipment)['other']) ? getDeCode($data->equipment)['other'] : '--------------' }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ isset(getDeCode($data->equipment)['ac_ypke_serial']) ? getDeCode($data->equipment)['ac_ypke_serial'] : 'No.-----------------' }}
                        </td>
                        <td>{{ isset(getDeCode($data->equipment)['dc_coil_serial']) ? getDeCode($data->equipment)['dc_coil_serial'] : 'No.-----------------' }}
                        </td>
                        <td>{{ isset(getDeCode($data->equipment)['permanent_magnet_serial']) ? getDeCode($data->equipment)['permanent_magnet_serial'] : 'No.-----------------' }}
                        </td>
                        <td>{{ isset(getDeCode($data->equipment)['uv_light_serial']) ? getDeCode($data->equipment)['uv_light_serial'] : 'No.-----------------' }}
                        </td>
                        @if ($data->type == 'drillpipe')
                            <td>
                                {{ isset(getDeCode($data->equipment)['emi_serial']) ? getDeCode($data->equipment)['emi_serial'] : 'No.-----------------' }}
                            </td>
                            <td>
                                {{ isset(getDeCode($data->equipment)['wt_serial']) ? getDeCode($data->equipment)['wt_serial'] : 'No.-----------------' }}
                            </td>
                        @endif
                        <td>
                            {{ isset(getDeCode($data->equipment)['other_serial']) ? getDeCode($data->equipment)['other_serial'] : 'No.-----------------' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4" style="width: 30%; float: right;">
            <table class="contentTable ">
                <thead>
                    <tr>
                        <th class="center">{{ TranslationHelper::translate(ucwords('Description of tool')) }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <textarea class="hidden form-control" cols="" rows="4" name="tool_desc"
                                placeholder="--------------------------------------">{{ $data->tool_desc ?? '' }}</textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- description table --}}
    @switch($data->type)
        @case('heavyweight')
            <x-website.reports.pages.tubs.heavyweight :tubs="$data" />
        @break

        @case('drillcollar')
            <x-website.reports.pages.tubs.drillcollar :tubs="$data" />
        @break

        @default
            <x-website.reports.pages.tubs.drillpipe :tubs="$data" />
    @endswitch
    {{-- end description table --}}

    {{-- remarks --}}
    <div class="row">
        <div style="{{ $data->type !== 'drillpipe' ? 'width:49% ; display:inline-flex' : 'width:100%' }}">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th class="center" style="width:5%;">
                            {{ TranslationHelper::translate(ucwords('remarks')) }}
                        </th>
                        <td>
                            <textarea rows="3" class="hidden form-control" name="remarks" id="remarks"
                                placeholder="--------------------------------------------------">{{ $data->remarks ?? '' }}</textarea>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        @unless ($data->type == 'drillpipe')
            <div class="col-6 w-50" style="width: 50%;float: right">
                <table class="contentTable">
                    <tbody>
                        <tr>
                            <td class="left">
                                <b>{{ TranslationHelper::translate(ucwords('connection accepted (white)')) }}</b>
                                <div style="display: inline">
                                    {{ isset(getDeCode($data->conn_inspected)['accepted']) ? getDeCode($data->conn_inspected)['accepted'] : null }}
                                </div>
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                                <br>
                                <b>{{ TranslationHelper::translate(ucwords('connection defective (red)')) }}</b>
                                <div style="display: inline;color:red">
                                    {{ isset(getDeCode($data->conn_inspected)['defected']) ? getDeCode($data->conn_inspected)['defected'] : null }}
                                </div>
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                                <br>
                                <b>{{ TranslationHelper::translate(ucwords('connection repaired')) }}</b>
                                <div style="display: inline;color:blue">
                                    {{ isset(getDeCode($data->conn_inspected)['repaired']) ? getDeCode($data->conn_inspected)['repaired'] : null }}
                                </div>
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                                <br>
                            </td>
                            <th>
                                {{ TranslationHelper::translate(ucwords('total connection inspected')) }}
                                {{ isset(getDeCode($data->conn_inspected)['total']) ? getDeCode($data->conn_inspected)['total'] : null }}
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endunless
    </div>
    {{-- end remarks --}}

    {{-- inspector --}}
    <table class="frameLess-table">
        <tbody>
            <tr>
                <td style="width:auto; text-align:left">
                    <b>{{ TranslationHelper::translate(ucwords('supervisor :')) }}</b>
                    {{ $data->supervisor ?? '' }}
                </td>
                <td class="right">
                    <div><b>{{ TranslationHelper::translate(ucwords('Inspector :')) }}
                        </b>{{ $data->getUser->full_name ?? '' }}</div>
                </td>
                <td class="left">
                    <div style="display: inline-block">
                        <x-website.reports.layouts.signature :user="$data->getUser->id" height="20px" />
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    {{-- end inspector --}}

    <x-dashboard.reports.tubs.reference-table />
    {{-- end content --}}
@endsection
@section(' script') @endsection
