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
    <link href="<?php echo base_url() ?>css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/custom.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?php echo base_url() ?>js/plugins/loaders/pace.min.js"></script>
    <script src="<?php echo base_url() ?>js/core/libraries/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/core/libraries/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>js/core/libraries/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?php echo base_url() ?>js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>js/plugins/forms/selects/select2.min.js"></script>

    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/custom.js"></script>
    <script src="<?php echo base_url() ?>js/demo_pages/form_select2.js"></script>
    <script src="<?php echo base_url() ?>js/demo_pages/datatables_responsive.js"></script>
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
                        <li><a href="#.html">Height</a></li>
                        <li class="active">Height List</li>
                    </ul>


                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Basic responsive configuration -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <a class="btn btn-sm btn-success" href="#" data-target="#add_modal" data-toggle="modal"><i class="icon-home4"></i> Add Height</a>
                    </div>


                    <table class="table" id="roof_type_list">
                        <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Rail Type</th>
                            <th>Panel Position</th>
                            <th>Roof Type</th>
                            <th>Created At</th>
                            <th>Action</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php if(isset($height)) {
                            $i = 1;
                            foreach($height as $row){

                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><img src="<?php echo base_url().$row['image'] ?>" width="50px" height="50px"></td>
                                    <td><?= $row['rail_type'] ?></td>
                                    <td><?= $row['panel_position'] ?></td>
                                    <td><?= $row['roof_type'] ?></td>
                                    <td><?php echo date('d-m-Y',strtotime($row['created_at']));?></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#" id="<?php echo $row['id'] ?>" data-toggle="modal" data-target="#edit_modal" class="editHeight"><i class="icon-file-pdf"></i> Edit</a></li>
                                                    <li><a href="#" id="<?php echo $row['id']?>" class="delete" data-table="<?php echo $this->encryption->encrypt('height') ?>"><i class="icon-file-excel"></i> Delete</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>

                                </tr>
                                <?php
                                $i++;
                            } }?>
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
<div id="add_modal" class="modal fade" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Height</h5>
            </div>

            <form action="#" method="post" id="add">

                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label>Name</label>
                                    <input type="text" placeholder="Name" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-sm-6">
                                    <label>Image (200 x 200)</label>
                                    <input type="file" name="file" class="form-control" id="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Rail Type</label>
                                <select class="form-control" id="rail_type_id" name="rail_type_id">
                                    <option>Select Rail Type</option>
                                    <?php if(isset($railType)):
                                        foreach($railType as $row){ ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                        <?php }
                                    endif; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Panel Position</label>
                                <select class="form-control" id="panel_position_id" name="panel_position_id">
                                    <option>Select Panel Position</option>
                                    <?php if(isset($panelPosition)):
                                        foreach($panelPosition as $row){ ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                        <?php }
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                            <label>Roof Type</label>
                            <select class="form-control" id="roof_type_id" name="roof_type_id">
                                <option>Select Roof Type</option>
                                <?php if(isset($roofType)):
                                    foreach($roofType as $row){ ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                    <?php }
                                endif; ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control" id="short_description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edit_modal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Rail Type form</h5>
            </div>

            <form action="#" method="post" id="update">
                <input type="hidden" name="id" value="" class="id">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Name</label>
                                <input type="text" placeholder="Name" class="form-control name" name="name" >
                            </div>
                            <div class="col-sm-6">
                                <label>Image (200 x 200)</label><br>
                                <img class="image" width="50px" height="50px">
                                <button class="btn btn-sm btn-primary change_image" type="button">Change Image</button>
                                <input type="hidden" name="file" class="new_image">
                                <input type="hidden"  class="form-control old_image" name="old_image">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Rail Type</label>
                                <select class="form-control rail_type_id" id="rail_type_id" name="rail_type_id">
                                    <option>Select Rail Type</option>
                                    <?php if(isset($railType)):
                                        foreach($railType as $row){ ?>
                                            <option value="<?= $row['id'] ?>" ><?= $row['name'] ?></option>
                                        <?php }
                                    endif; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Panel Position</label>
                                <select class="form-control panel_position_id" id="panel_position_id" name="panel_position_id">
                                    <option>Select Panel Position</option>
                                    <?php if(isset($panelPosition)):
                                        foreach($panelPosition as $row){ ?>
                                            <option value="<?= $row['id'] ?>" ><?= $row['name'] ?></option>
                                        <?php }
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Roof Type</label>
                                <select class="form-control roof_type_id" id="roof_type_id" name="roof_type_id">
                                    <option>Select Roof Type</option>
                                    <?php if(isset($roofType)):
                                        foreach($roofType as $row){ ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                        <?php }
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control short_description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.change_image').on('click',function(){
            $('.image').css('display','none');
            $('.new_image').attr('type','file');
            $('.change_image').css('display','none');
        });

        $('#roof_type_list').DataTable({
            "order": [],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "dom" : 'Blfrtip',
            "columnDefs": [{ }],
            "buttons": [
                {
                    "extend": 'excelHtml5',
                    "title" : 'Roof Type',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend": 'csv',
                    "title" : 'Roof Type',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend": 'pdfHtml5',
                    "title" : 'Roof Type',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend"  : 'print',
                    "title"   : 'Roof Type',
                    "exportOptions": {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    "extend" : 'colvis'
                }
            ]
        });

        //add Accressories

        $('#add').submit(function(e) {
            e.preventDefault();
            var form_data = new FormData($(this)[0]);
            var base_url = $('#base_url').val();
            $.ajax({
                type: 'post',
                data: form_data,
                processData: false,
                contentType: false,
                url: base_url + 'Height/addHeight',
                success: function(data) {
                    var obj = $.parseJSON(data);
                    if (obj.errCode == -1) {
                        alert(obj.message);
                        location.reload();
                    } else if (obj.errCode == 2) {
                        alert(obj.message);
                    } else if (obj.errCode == 3) {
                        $('.error').remove();
                        $.each(obj.message, function(key, value) {
                            var element = $('#' + key);
                            if(key == 'status'){
                                element.closest('.select').next('.select2').after(value);
                            }else{
                                element.closest('.form-control').after(value);
                            }

                        });
                    }

                }

            });

        });

        $(document).on('click', '.editHeight', function() {
            var base_url = $('#base_url').val();
            var id = $(this).attr('id');
            $.ajax({
                type: 'post',
                data: {
                    id: id
                },
                url: base_url + 'Height/editHeight',
                success: function(data) {
                    var obj = $.parseJSON(data);
                    if (obj.errCode == -1) {
                        $('.id').val(id);
                        $('.name').val(obj.data.name);
                        $(".status").select2().select2('val', obj.data.status);
                        $(".image").attr('src',base_url+obj.data.image);
                        $(".old_image").val(obj.data.image);
                        $(".rail_type_id").val(obj.data.rail_type_id);
                        $(".panel_position_id").val(obj.data.panel_position_id);
                        $(".roof_type_id").val(obj.data.roof_type_id);
                        $(".short_description").val(obj.data.short_description);

                    } else if (obj.errCode == 2) {
                        alert(obj.data);
                    } else if (obj.errCode == 3) {
                        alert('Inputs are not valid');
                    }

                }

            });
        });

        $('#update').submit(function(e) {
            e.preventDefault();
            var form_data = new FormData($(this)[0]);
            var base_url = $('#base_url').val();
            $.ajax({
                type: 'post',
                data: form_data,
                processData: false,
                contentType: false,
                url: base_url + 'Height/updateHeight',
                success: function(data) {
                    var obj = $.parseJSON(data);
                    if (obj.errCode == -1) {
                        alert(obj.message);
                        location.reload();
                    } else if (obj.errCode == 2) {
                        alert(obj.message);
                    } else if (obj.errCode == 3) {
                        $('.error').remove();
                        $.each(obj.message, function(key, value) {

                            var element = $('.' + key);
                            if(key == 'status'){
                                element.closest('.select').next('.select2').after(value);
                            }else if(key == 'image'){
                                $('.new_image').after(value);
                            }else{
                                element.closest('.form-control').after(value);
                            }
                        });
                    }

                }

            });

        });

    });
</script>