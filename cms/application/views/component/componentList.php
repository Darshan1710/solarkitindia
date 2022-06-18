<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo TITLE; ?></title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/core.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/components.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url() ?>css/custom.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?php echo base_url() ?>js/plugins/loaders/pace.min.js"></script>
    <script src="<?php echo base_url() ?>js/core/libraries/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>js/core/libraries/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?php echo base_url() ?>js/plugins/tables/datatables/datatables.min.js"></script>

    <script src="<?php echo base_url() ?>js/plugins/forms/selects/select2.min.js"></script>

    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/custom.js"></script>
    <script src="<?php echo base_url() ?>js/demo_pages/form_select2.js"></script>

    <!-- /theme JS files -->
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
</head>

<body>

<!-- Main navbar -->
<?php $this->load->view('common/navbar'); ?>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <?php $this->load->view('common/sidebar'); ?>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">


                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>Admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li><a href="#.html">Component</a></li>
                        <li class="active">Component List</li>
                    </ul>


                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Basic responsive configuration -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-sm btn-success" href="<?= base_url().'component/componentForm'; ?>"><i class="icon-plus2"></i> Add Component</a>
                            </div>

                        </div>
                    </div>


                    <table class="table" id="list">
                        <thead>
                        <tr>

                            <th>Sr. No.</th>
                            <th>Image</th>
                            <th>title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /basic responsive configuration -->


                <!-- Footer -->
                <?php $this->load->view('common/footer'); ?>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>



<script>
    $(document).ready(function(){

        $('#list thead th').each(function() {
            var i = 0;
            var title = $(this).text();
            if (title == 'Sr. No.' || title == 'Action' || title == 'Image') {

            }else if(title == 'Status'){
                $(this).html(title+'<select class="col-search-input">'+
                    '<option value="">All</option>'+
                    '<option value="1">Active</option>'+
                    '<option value="2">Inactive</option>'+

                    '</select>');
            }else if(title == 'Category'){
                $(this).html(title+'<select class="col-search-input">'+
                    '<option value="">All</option>'+
                    '<option value="1">TRSM</option>'+
                    '<option value="2">SSRSM</option>'+
                    '<option value="3">FSM</option>'+
                    '<option value="4">FFSM</option>'+
                    '</select>');
            }else if(title == 'Created At'){
                $(this).html(title + '<input type="text" class="col-search-input" id="created_at_picker">');
            } else {
                $(this).html(title + '<input type="text" class="col-search-input" />');
            }
        });

        //add Accressories
        var table = $('#list').DataTable({
            "processing": true,
            "serverSide": true,
            "autoWidth": true,
            "scrollY": '50vh',
            "scrollX": true,
            // "stateSave": true,
            "stateDuration":-1,
            "paging" : true,
            "order": [],
            "ajax": {
                "url": "<?php echo base_url('Component/getComponentListDetails/'); ?>",
                "type": "POST",
            },
            "dom" : 'Blfrtip',
            "buttons": [
                {
                    "extend": 'excelHtml5',
                    "title" : 'Order',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend": 'csv',
                    "title" : 'Order',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend": 'pdfHtml5',
                    "title" : 'Order',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend"  : 'print',
                    "title"   : 'Order',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend" : 'colvis'
                }
            ],
            "columnDefs": [
                {
                    "name": "sr_no",
                    "orderable": false,
                    'searchable': false,
                    "targets": 0
                },
                {
                    "name": "image",
                    "targets": 1
                },
                {
                    "name": "title",
                    "targets": 2
                },
                {
                    "name": "category_id",
                    "targets": 3
                },
                {
                    "name": "status",
                    "targets": 4
                },
                {
                    "name": "created_at",
                    "targets": 5
                },
                {
                    "name": "action",
                    "orderable": false,
                    'searchable': false,
                    "targets": 6
                }
            ]
        });

        table.columns().search('');

        //draw table
        table.columns().every(function() {
            var table = this;

            $('input', this.header()).on('keyup change', function() {
                if (table.search() !== this.value) {
                    table.search('')
                    table.columns().search('')
                    table.search(this.value).draw();
                }
            });

            $('select', this.header()).on('change', function() {
                if (table.search() !== this.value) {
                    table.search('')
                    table.columns().search('')
                    table.search(this.value).draw();
                }
            });
        });

        var state = table.state.loaded();
        if (state) {
            table.columns().eq(0).each(function(colIdx) {
                var colSearch = state.columns[colIdx].search;
                if (colSearch.search) {
                    $('input', table.column(colIdx).header()).val(colSearch.search);
                    $('select', table.column(colIdx).header()).val(colSearch.search.slice(1, -1));
                    table.search(colSearch.search).draw();
                }
            });
        }
    });
</script>

