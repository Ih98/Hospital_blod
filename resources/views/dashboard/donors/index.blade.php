@extends('dashboard.layouts.app')

@section('content')
    <div class="card card-p-0 card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px" placeholder="البحث عن متبرع" />
                </div>
            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <a href="{{ route('dashboard.donors.create') }}" class="btn btn-light-primary">
                    <i class="ki-duotone ki-add-item fs-2"><span class="path1"></span><span class="path2"></span></i>
                    إضافة متبرع
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
                        <th style="text-align: right" class="w-10px">الرقم</th>
                        <th style="text-align: right">الإسم واللقب</th>
                        <th style="text-align: right">العنوان</th>
                        <th style="text-align: right">الهاتف</th>
                        <th style="text-align: right">الزمرة</th>
                        <th style="text-align: right">تاريخ الإزدياد</th>
                        <th style="text-align: right">مكان الإزدياد</th>
                        <th style="text-align: right">الجنس</th>
                        <th style="text-align: right">الحالة</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($data as $data)
                        <tr style="text-align: right">
                            <td style="text-align: right">{{ $data->id }}</td>
                            <td style="text-align: right">{{ $data->nom }} {{ $data->prenom }}</td>
                            <td style="text-align: right">{{ $data->adresse }}</td>
                            <td style="text-align: right">{{ $data->telephone }}</td>
                            <td style="text-align: right">{{ $data->groupage }}</td>
                            <td style="text-align: right">{{ $data->date_naissance }}</td>
                            <td style="text-align: right">{{ $data->lieu_naissance }}</td>
                            <td style="text-align: right">{{ $data->sexe }}</td>
                            <td style="text-align: right">{{ $data->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var KTDatatablesExample = function () {
            var table;
            var datatable;

            var initDatatable = function () {
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 10,
                    'language': {
                        'noRecords': 'لا يوجد بيانات',
                        'zeroRecords' : 'لا يوجد بيانات',
                    },
                });
            }

            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }

            return {
                init: function () {
                    table = document.querySelector('#kt_datatable_example');

                    if ( !table ) {
                        return;
                    }

                    initDatatable();
                    handleSearchDatatable();
                }
            };
        }();

        KTUtil.onDOMContentLoaded(function () {
            KTDatatablesExample.init();
        });
    </script>
@endsection