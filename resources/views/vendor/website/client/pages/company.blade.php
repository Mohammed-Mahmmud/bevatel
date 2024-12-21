@extends('website.client.layouts.master')
@section('title', 'STC - ' . ucwords($company->name))
@section('css')
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb title1="{{ TranslationHelper::translate($company->full_name) }}"
                    title2="{{ TranslationHelper::translate($company->name) }}" route=""
                    title3="{{ TranslationHelper::translate($company->email) }}" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row g-1 mb-0">
                                    <div class="col-sm-auto">
                                        <x-dashboard.layouts.download-selected :route="route('reports.downloadAll')" :model="$data"
                                            :pdfView='$data->first()::PDFVIEW'></x-dashboard.layouts.download-selected>
                                    </div>
                                </div>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <div id="customerList">
                                    <x-dashboard.layouts.error-verify
                                        errors="{{ $errors }}"></x-dashboard.layouts.error-verify>
                                    <div class="table">
                                        <table class="table align-middle mb-0 table_id">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll"
                                                                value="option">
                                                        </div>
                                                    </th>
                                                    <th class="" data-sort="customer_id">#</th>
                                                    <th class="" data-sort="customer_name">
                                                        {{ TranslationHelper::translate('report number') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ TranslationHelper::translate('date') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ TranslationHelper::translate('rig') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ TranslationHelper::translate('serial') }}</th>
                                                    <th class="" data-sort="action">
                                                        {{ TranslationHelper::translate('action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input chk_child" type="checkbox"
                                                                    id="chk_child_{{ $item->id }}" name="chk_child[]"
                                                                    value="{{ $item->id }}">
                                                            </div>
                                                        </td>
                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_full_name">{{ $item->report_number }}
                                                        </td>
                                                        <td class="date">{{ $item->date }}</td>
                                                        <td class="date">{{ $item->getOrders->rigs->name }}</td>
                                                        <td class="serial">{{ $item->serial }}</td>
                                                        <td>
                                                            <div class="dropdown position-static">
                                                                <button class="btn btn-subtle-secondary btn-sm btn-icon"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <form action="{{ route('reports.show') }}"
                                                                            method="POST" target="_blank">
                                                                            @csrf
                                                                            <input type="hidden" name="model"
                                                                                value="{{ get_class($item) }}">
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                            <button type="submit" class="dropdown-item">
                                                                                <i class="ph-eye align-middle me-1"></i>
                                                                                View
                                                                            </button>
                                                                        </form>
                                                                    </li>

                                                                    <li>
                                                                        <form action="{{ route('reports.download') }}"
                                                                            method="POST" target="_blank">
                                                                            @csrf
                                                                            <input type="hidden" name="model"
                                                                                value="{{ get_class($item) }}">
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                            <button type="submit" class="dropdown-item">
                                                                                <i
                                                                                    class="bx bx-download align-middle me-1"></i>
                                                                                Download
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                                <!-- Modal -->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->


            </div>
            <!-- container-fluid -->
        </div>




    @endsection
    @section('js')
        @if (Session::has('message'))
            <script>
                toastr.success("{{ Session::get('message') }}");
            </script>
        @endif
    @endsection
