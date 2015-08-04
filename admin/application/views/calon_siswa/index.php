<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siakad - SMP NEGERI 19 BANDUNG</title>

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
                    <h1 class="page-header">Calon Siswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th nowraps>ID</th>
                                            <th nowraps>NISN</th>
                                            <th nowraps>Nama</th>
                                            <th nowraps>Asal Sekolah</th>
                                            <th nowraps>jenis_kelamin</th>
                                            <th nowraps>Tempat Lahir</th>
                                            <th nowraps>Tanggal Lahir</th>
                                            <th nowraps>Alamat</th>
                                            <th nowraps>nun</th>
                                            <th nowraps>No. Ijasah</th>
                                            <th nowraps>Nilai</th>
                                            <th nowraps>Active</th>
                                            <th nowraps>Options</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                    <?php $i = 1; foreach ($listcalonsiswa->result() as $rows) {?>
                                    <tr >
                                        <td><?= $rows->id_pendaftaran?></td>
                                        <td><?= $rows->nisn?></td>
                                        <td><?= $rows->name?></td>
                                        <td><?= $rows->asal_sekolah?></td>
                                        <td><?= $rows->jenis_kelamin?></td>
                                        <td><?= $rows->tempat_lahir?></td>
                                        <td><?= $rows->tanggal_lahir?></td>
                                        <td><?= $rows->alamat?></td>
                                        <td><?= $rows->nun?></td>
                                       
                                        <td><?= $rows->no_ijazah?></td>
                                         <td><?= $rows->nilai?></td>
                                        <td><?= $rows->active?></td>										
                                        <td nowraps>
                                        <!-- Button trigger modal -->
                                            <button class="btn btn-primary " data-toggle="modal" data-target="#datasiswa<?=$i?>">
                                                Update Data
                                            </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="datasiswa<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="Form-add-level" id="myModalLabel">Update ID Pendaftaran - <?= $rows->id_pendaftaran?> </h4>
                                                </div>
                                                <div class="modal-body">
                                                <?php echo validation_errors(); ?>

                                                <?php echo form_open('calon_siswa/update'); ?>
                                                
                                                <div class="form-group">
                                                <label>Nilai</label>
                                                <input type="text" name="nilai" class="form-control" placeholder="Nilai Seleksi" value="<?= $rows->nilai?>">
                                                </div>
                                                
                                                <div class="form-group">
                                                <label>Active</label>
                                                <select class="form-control" name="active">
                                                <option value="1" <?php if ($rows->active == 1){echo set_select('myselect', '1',TRUE);} ?> >Active</option>
                                                <option value="0" <?php if ($rows->active == 0){echo set_select('myselect', '0',TRUE);} ?> >Deactive</option>                                            
                                                </select> 
                                                </div>
                                                
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <input type="submit" value="Save" class="btn btn-primary">
                                                <input type="hidden" name="id_pendaftaran" class="form-control" value="<?= $rows->id_pendaftaran?>" >
                                                <?php echo form_close(); ?>
                                                </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                        </div>                                                 
                                        </td>
                                                
                                    	</tr>
                                    <?php $i = $i + 1; } ?>
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
               
                "scrollX": true
        });
    });
    </script>

</body>

</html>
