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
      <div class="col-md-10 col-md-offset-1 baris-foto">
        <div class="col-md-4 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="icon_konsep_Ruko.png">
            <img class="foto" src="<?php echo base_url()?>assets/img/icon_konsep_Ruko.png">
          </a>
        </div>
        <div class="col-md-4 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="icon_konsep_outlet.png">
            <img class="foto" src="<?php echo base_url()?>assets/img/icon_konsep_outlet.png">
          </a>
        </div>
        <div class="col-md-4 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="icon_konsep_Rumahan.png">
            <img class="foto" src="<?php echo base_url()?>assets/img/icon_konsep_Rumahan.png">
          </a>
        </div>
      </div>

      <div class="col-md-10 col-md-offset-1 baris-foto">
        <div class="col-md-4 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="chemlaundry.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/chemlaundry.jpg">
          </a>
        </div>
        <div class="col-md-4 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="header-image.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/header-image.jpg">
          </a>
        </div>
        <div class="col-md-4 container-foto">
          <a data-toggle="modal" href="#myModal" data-path="sekarang.jpg">
            <img class="foto" src="<?php echo base_url()?>assets/img/sekarang.jpg">
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