<?php
//including the database koneksi file
include_once("./../../views/config.php");
$id_pinjaman=$_GET['id_pinjaman'];
	$result=mysqli_query($mysqli, "SELECT * FROM pinjaman WHERE id_pinjaman=$id_pinjaman");
    while($res=mysqli_fetch_array($result))
    {
        $no_trx = $res['no_trx'];
        $tanggal_update = $res['tanggal_update'];
        $status = $res['status'];
       
        

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Upload Bukti  Status : <?php echo $status; ?> | <?php echo $no_trx; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form  action="prosesedit/ppinjedit.php" name="modal_popup"  enctype="multipart/form-data" method="POST" onsubmit="return true;">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">NO Transaksi</label>
                    <input type="hidden" name="id_pinjaman" id="edit-id"  class="form-control" value="<?php echo $id_pinjaman; ?>" />
     				<input type="text" name="modal_name" id="edit-name" class="form-control" Readonly value="<?php echo $no_trx; ?>"/>
                     <input type="hidden" name="status" id="edit-name" class="form-control"  value="Ditransfer"/>

                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="photo" name="foto" data-toggle="custom-file-input" required>
                                        <input type="hidden" id="preview" name="preview">
                                        <label class="custom-file-label" for="photo">Pilih Foto</label>
                                    </div>                                                                                   </select>
                </div>
	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit" name="update3" value="update3">
	                    Update
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             

            </div>

           
        </div>
    </div>