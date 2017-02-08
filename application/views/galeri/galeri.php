<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $header ?>
    <title>LaundryBagus - Usaha Laundry</title>
    <link href="<?php echo base_url()?>assets/css/galeri.css" rel="stylesheet">
  </head>
  <body>
    <?php echo $navbar ?>

    <div id="Galeri" class="container-fluid">
      <div class="header-maintext">
        Galeri
      </div>
    </div>

    <div class="container-fluid barisan-foto">
      <div class="col-md-12 col-sm-12 baris-foto">
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_1.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_1.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_2.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_2.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_3.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_3.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_4.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_4.jpg">
          </a>
        </div>
      </div>

    	<div class="col-md-12 col-sm-12 baris-foto">
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_5.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_5.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_6.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_6.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_7.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_7.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_8.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_8.jpg">
          </a>
        </div>
      </div>

    	<div class="col-md-12 col-sm-12 baris-foto">
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_9.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_9.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_10.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_10.jpg">
          </a>
        </div>
        <div class="col-md-3 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="IMG_11.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/IMG_11.jpg">
          </a>
        </div>
      </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-body photo-container">
                  <img class="photo" src="<?php echo base_url()?>assets/img/icon_konsep_Ruko.png">
              </div>
          </div>
      </div>
    </div>

    <?php echo $footer ?>

    <script type="text/javascript">
      $('#myModal').on('show.bs.modal', function (event) {
        var a = $(event.relatedTarget) // Button that triggered the modal
        var recipient = a.data('path') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        //modal.find('.doc').text('<?php echo base_url()?>assets/img/' + recipient)
        modal.find('.photo').attr('src', '<?php echo base_url()?>assets/img/' + recipient)
      })
    </script>
  </body>
</html>