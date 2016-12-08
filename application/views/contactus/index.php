<!DOCTYPE html>
<html lang="en">
  <head>
  
	<?php echo $header ?>
    <title>LaundryBagus - Usaha Laundry</title>
	<link href="<?php echo base_url()?>assets/css/paket.css" rel="stylesheet">
  </head>
  <body>
	
	<?php echo $navbar ?>
  
    <div id="PaketHeader" class="container-fluid">
      <div class="header-maintext">Hubungi Kami</div>
    </div>

    <div id="Email-Form" class="row container-fluid container-LB" style="text-align: left">
      	<div class="col-md-6 col-md-offset-3 ">
      	<?php if($this->session->flashdata('message')){?>
      	<div style="background-color:#FA2A2A; padding:5px 10px; text-align: center;color:white;margin-bottom: 20px;"> <?php echo $this->session->flashdata('message'); ?> </div> 
      	<?php } ?>
      	<form action="contactus/email" method="POST">
  			<div class="form-group">
    			<label for="exampleInputEmail1">Nama</label>
   				<input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="nama">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Email</label>
   				<input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email">
   				<small id="emailHelp" class="form-text text-muted">Kita tidak akan membagikan email anda kepada siapapun</small>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Judul Email</label>
   				<input type="text" class="form-control" placeholder="Masukkan Judul Email" name="subject">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Isi Email</label>
   				<textarea class="form-control" rows="5" name="content"></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary">Kirim Email</button>
  		</form>
  		</div>
   	</div>

   
   
	
	<?php echo $footer ?>

  </body>
</html>

