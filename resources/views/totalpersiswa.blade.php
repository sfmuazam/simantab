@extends('app')

@section('content')

<main class="content container mx-auto">

    <div class="content-header">
        <h4 class="content-title ~mx-auto">Statistik</h4>
    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-primary me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M1 4a1 1 0 011-1h16a1 1 0 011 1v8a1 1 0 01-1 1H2a1 1 0 01-1-1V4zm12 4a3 3 0 11-6 0 3 3 0 016 0zM4 9a1 1 0 100-2 1 1 0 000 2zm13-1a1 1 0 11-2 0 1 1 0 012 0zM1.75 14.5a.75.75 0 000 1.5c4.417 0 8.693.603 12.749 1.73 1.111.309 2.251-.512 2.251-1.696v-.784a.75.75 0 00-1.5 0v.784a.272.272 0 01-.35.25A49.043 49.043 0 001.75 14.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Total Saldo</span>
                            </div>
                            <span id='saldo_hari_ini' class="h3 mb-0 lh-1">{{ "Rp " .
                                number_format($saldo,2,',','.') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-success me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M12.577 4.878a.75.75 0 01.919-.53l4.78 1.281a.75.75 0 01.531.919l-1.281 4.78a.75.75 0 01-1.449-.387l.81-3.022a19.407 19.407 0 00-5.594 5.203.75.75 0 01-1.139.093L7 10.06l-4.72 4.72a.75.75 0 01-1.06-1.061l5.25-5.25a.75.75 0 011.06 0l3.074 3.073a20.923 20.923 0 015.545-4.931l-3.042-.815a.75.75 0 01-.53-.919z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Total Masuk</span>
                            </div>
                            <span id='masuk_hari_ini' class="h3 mb-0 lh-1">{{ "Rp " .
                                number_format($masuk,2,',','.') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                            class="w-12 h-12 bg-danger me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M1.22 5.222a.75.75 0 011.06 0L7 9.942l3.768-3.769a.75.75 0 011.113.058 20.908 20.908 0 013.813 7.254l1.574-2.727a.75.75 0 011.3.75l-2.475 4.286a.75.75 0 01-1.025.275l-4.287-2.475a.75.75 0 01.75-1.3l2.71 1.565a19.422 19.422 0 00-3.013-6.024L7.53 11.533a.75.75 0 01-1.06 0l-5.25-5.25a.75.75 0 010-1.06z" clip-rule="evenodd" />
                              </svg>
                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Total Keluar</span>
                            </div>
                            <span id='keluar_hari_ini' class="h3 mb-0 lh-1">{{ "Rp " .
                                number_format($keluar,2,',','.') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-header">
            <h5 class="content-title">Data Rekap {{ $title }}</h5>
            <div class="ms-auto">
            </div>
        </div>
        <div class="card mb-4">
            <table id="table-siswa" class="table table-hover mb-0 align-middle">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Siswa</th>
                        <th>Kelas</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Saldo</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Total:</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</main>

@endsection

@section('script')

<script type="text/javascript">
    $('document').ready(function () {
          $('#table-siswa thead tr')
          .clone(true)
          .addClass('filters')
          .appendTo('#table-siswa thead');
          // table serverside
          var table = $('#table-siswa').DataTable({
              dom: '<"container-fluid mt-3"l<"row mt-3"<"col"B><"col"f>>>r<"mx-3"t><"container-fluid mb-3"<"row"<"col"i><"col"p>>>',
            orderCellsTop: true,
            buttons: [{
                extend: 'csv',
                title: '',
                exportOptions: {
                    columns: [0,1,2,3,4,5]
                },
                footer:true,
            },
            {
                extend: 'excel',
                title: '',
                exportOptions: {
                    columns: [0,1,2,3,4,5]
                },
                footer:true,
            },
            {
                extend: 'pdf',
                title: '',
                exportOptions: {
                    columns: [0,1,2,3,4,5]
                },
                footer:true,
            }],
            lengthMenu: [
                    [36, 50, 100, -1],
                    [ 36, 50, 100, "All"]
                ],
            processing: true,
            serverSide: true,
            responsive: false,
            order: [[2,'asc'],[1,'asc']],
            ajax: "{{ url('/totalpersiswa') }}",
            columns: [
                // {data: 'id', name: 'id'},
                {data: 'nis', name: 'nis', width: '7%'},
                {data: 'nama', name: 'nama'},
                {data: 'kelas', name: 'kelas', width: '11%'},
                {data: 'tabungan_sum_masuk', name: 'tabungan_sum_masuk', width: '15%', searchable: false},
                {data: 'tabungan_sum_keluar', name: 'tabungan_sum_keluar', width: '15%', searchable: false},
                {data: 'saldo', name: 'saldo', width: '15%'},
                {data: 'aksi', name: 'aksi', orderable: false, searchable: false, width: '3%'},
            ],
            initComplete: function() {
            var api = this.api();
            // For each column
            api.columns().eq(0).each(function(colIdx) {
                // Set the header cell to contain the input element
                var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                var title = $(cell).text();
                $(cell).html( '<input type="text" class="form-control" placeholder="' + title + '" />' );
                // On every keypress in this input
                $('input', $('.filters th').eq($(api.column(colIdx).header()).index()) )
                    .off('keyup change')
                    .on('keyup change', function (e) {
                        e.stopPropagation();
                        // Get the search value
                        $(this).attr('title', $(this).val());
                        var regexr = '({search})'; //$(this).parents('th').find('select').val();
                        var cursorPosition = this.selectionStart;
                        // Search the column for that value
                        api
                            .column(colIdx)
                            .search((this.value != "") ? regexr.replace('{search}', '((('+this.value+')))') : "", this.value != "", this.value == "")
                            .draw();
                        $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                    });
            });
            api.columns(-1).eq(0).each(function(colIdx) {
                // Set the header cell to contain the input element
                var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                var title = $(cell).text();
                $(cell).html( '' );
            });
        },
            createdRow: function(row,data,index){
                data['saldo'] = data['tabungan_sum_masuk'] - data['tabungan_sum_keluar'];
                $('td',row).eq(5).html(rupiah(data['saldo']));
                if(data['tabungan_sum_masuk'] != 0 && data['tabungan_sum_masuk'] != null)
                    $('td',row).eq(3).html(rupiah(data['tabungan_sum_masuk']));
                else if(data['tabungan_sum_masuk'] == 0)
                    $('td',row).eq(3).html('');
                if(data['tabungan_sum_keluar'] != 0 && data['tabungan_sum_keluar'] != null)
                    $('td',row).eq(4).html(rupiah(data['tabungan_sum_keluar']));
                else if(data['tabungan_sum_keluar'] == 0)
                    $('td',row).eq(4).html('');
            },
            footerCallback: function (row, data, start, end, display) {
              var api = this.api();

              // Remove the formatting to get integer data for summation
              var intVal = function (i) {
                  return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
              };

              // Total over this page
                  pageTotal_masuk = api
                  .column(3, { page: 'current' })
                  .data()
                  .reduce(function (a, b) {
                      return intVal(a) + intVal(b);
                  }, 0);
                  pageTotal_kekurangan = api
                  .column(4, { page: 'current' })
                  .data()
                  .reduce(function (a, b) {
                      return intVal(a) + intVal(b);
                  }, 0);
                  pageTotal_saldo = api
                  .column(5, { page: 'current' })
                  .data()
                  .reduce(function (a, b) {
                      return intVal(a) + intVal(b);
                  }, 0);

              // Update footer
              $(api.column(3).footer()).html(rupiah(pageTotal_masuk));
              $(api.column(4).footer()).html(rupiah(pageTotal_kekurangan));
              $(api.column(5).footer()).html(rupiah(pageTotal_saldo));
          },
        });
    });

</script>

@endsection
