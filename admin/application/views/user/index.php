<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	 <!-- DataTables CSS -->
    <link href="<?=base_url();?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?=base_url();?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?= $this->load->view('nav'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-12">
                    <h1 class="page-header">User Siswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- Button trigger modal -->
                            <button class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                                Add User
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="Form-add-user" id="myModalLabel">Form Add User</h4>
                                        </div>
                                        <div class="modal-body">
											<?php echo validation_errors(); ?>

											<?php echo form_open('user/insert'); ?>
											
                                            <div class="form-group">
                                            <label>ID User</label>
                                            <input type="text" name="id_user" class="form-control" placeholder="ID User">
                                            </div>

											<div class="form-group">
                                            <label>Name User Awal</label>
                                            <input type="text" name="nm_user_first" class="form-control" placeholder="Nama User Awal">
											</div>

                                            <div class="form-group">
                                            <label>Name User Akhir</label>
                                            <input type="text" name="nm_user_last" class="form-control" placeholder="Nama User Akhir">
                                            </div>

                                            <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username">
                                            </div>

                                            <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" class="form-control" placeholder="Password">
                                            </div>
											
                                            <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="id_level">

                                            <?php
                                                 foreach ($combobox_level->result() as $rowmenu) {
                                                        ?>
                                            <option value="<?= $rowmenu->id_level?>" <?php echo set_select('myselect', '$rowmenu->id_level'); ?> ><?= $rowmenu->nm_level?></option>
                                            
                                            <?php
                                            }
                                            ?>
                                            </select> 
                                            </div>
                                            <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="active">
                                            <option value="1" <?php echo set_select('myselect', '1', TRUE); ?> >Active</option>
                                            <option value="0" <?php echo set_select('myselect', '0'); ?> >Deactive</option>
                                            
                                            </select> 
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                            <label>Di Isi untuk fitur Wali Kelas</label>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="text" name="tahun" class="form-control" placeholder="Tahun Walikelas">
                                            </div>
                                            <div class="form-group">
                                            <label>Kelas</label>
                                            <input type="text" name="kelas" class="form-control" placeholder="Kelas Walikelas">
                                            </div>
                                            <hr>
                                        

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" value="Save" class="btn btn-primary">
                                        
                                            <?php echo form_close(); ?>
                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th nowraps>ID User</th>
                                            <th nowraps>Nama User Depan</th>
                                            <th nowraps>Nama User Akhir</th>
                                            <th nowraps>Uesrname</th>
                                            <th nowraps>Password</th>
                                            <th nowraps>ID Level</th>
                                            <th nowraps>Tahun</th>
                                            <th nowraps>Kelas</th>
                                            <th nowraps>Active</th>
                                            <th nowraps>Options</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                    <?php
                                    					
                                                        foreach ($listuser->result() as $rows) {
                                                    	?>
                                    										<tr>
                                    											<td><?= $rows->id_user?></td>
                                    											<td><?= $rows->nm_user_first?></td>
                                    											<td><?= $rows->nm_user_last?></td>
                                                                                <td><?= $rows->username?></td>
                                                                                <td><?= $rows->password?></td>
                                                                                <td><?= $rows->nm_level?></td>
                                                                                <td><?= $rows->tahun?></td>
                                                                                <td><?= $rows->kelas?></td>
                                                                                <td><?= $rows->active?></td>

                                                                                <td nowraps><a href="user/delete/<?= $rows->id_user?>">
                                                                                    <button class="btn btn-primary" >
                                                                                        Delete
                                                                                    </button></a>
                                                                                <a href="user/formupdate/<?= $rows->id_user?>">
                                                                                    <button class="btn btn-primary" >
                                                                                        Update
                                                                                    </button></a>                                                   
                                                                                </td>
                                                
                                    										</tr>
                                    <?php } ?>
									</tbody>   
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>assets/dist/js/sb-admin-2.js"></script>
	
	 <!-- DataTables JavaScript -->
    <script src="<?=base_url();?>assets/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	
	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
