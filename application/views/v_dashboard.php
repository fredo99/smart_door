<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() . 'assets/dashboard/img/apple-icon.png' ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/dashboard/img/favicon.png' ?>">
  <title>
    <?= $location ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url() . 'assets/dashboard/css/nucleo-icons.css' ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url() . 'assets/dashboard/css/black-dashboard.css?v=1.0.0' ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url() . 'assets/dashboard/demo/demo.css' ?>" rel="stylesheet" />
  
  <link href="<?php echo base_url() . 'assets/dashboard/css/check_button.css' ?>" rel="stylesheet" />
  
</head>
<!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->

<body class="">
  <div class="wrapper">
    <?php $this->load->view('templates/sidebar') ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php $this->load->view('templates/navbar') ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="text-transform: capitalize;"><i class="fa fa-users"></i> &nbsp;Capacity</h3>
              </div>
              <div class="card-body" style="text-align: center;">
                <h4 id="capacity"><?=$capacity ?></h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="text-transform: capitalize;"><i class="fa fa-users"></i> &nbsp;Visitors Inside</h3>
              </div>
              <div class="card-body" style="text-align: center;">
                <h4 id="inside"><?=$in ?></h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="text-transform: capitalize;"><i class="fa fa-users"></i> &nbsp;Capacity Left</h3>
              </div>
              <div class="card-body" style="text-align: center;">
                <h4 id="left"><?=$left ?></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="text-transform: capitalize;"><i class="fa fa-cog"></i> &nbsp;Set Capacity</h3>
              </div>
              <div class="card-body" style="text-align: center;">
                <div class="row" style="margin-left: 1px;">
                  <input type="number" class="form-control col-md-11" id="set" name="set" placeholder="Input capacity" style="background-color: white; color: black; font-weight: 800;" autocomplete = off>
                  <button type="button" class="btn btn-fill btn-info btn-sm float-right" onclick="set_capacity()"><i class="fa fa-cog"></i> Set</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $this->load->view('templates/footer') ?>
      
    </div>
  </div>

  <!-- Setting -->
  <?php $this->load->view('templates/setting') ?>

  <!--   Core JS Files   -->
  <?php $this->load->view('templates/script') ?>
<!-- <script>
    $(document).ready(function() {
      var jam = 0
      var detik = 57;
      var menit = 59;
      function hitung() {
        setTimeout(hitung,1000);
        $('#timer').html( jam + ' hours ' + menit + ' minutes ' + detik + ' seconds ');
        detik ++;
        if(detik > 59) {
            detik = 0;
            menit ++;
          if(menit > 59) {
            jam ++;
            menit = 0; 
          }
        }
      }
        hitung();
    });
  </script> -->

   <!-- script check status -->
   <script>
      $(document).ready(function() {
        setInterval(function(){
          $.ajax({
              url:"<?php echo base_url();?>index.php/Dashboard/auto_count",
              dataType : 'json',
              success:function(data){
                console.log(data);
                $.each(data, function(key,val){
                  document.getElementById("capacity").innerHTML = val.capacity;
                  document.getElementById("inside").innerHTML = val.in_capacity;
                  $left = parseInt(val.capacity) - parseInt(val.in_capacity)
                  document.getElementById("left").innerHTML = $left;
                });
              }
          });
        }, 1000);
      });

    function set_capacity(){
        var set = document.getElementById("set").value;
        document.getElementById("capacity").innerHTML = '';
        $.ajax({
            url:"<?php echo base_url();?>index.php/Dashboard/set_capacity",
            method : "POST",
            data: {set: set},
            dataType : 'json',
            success:function(data){
              $.each(data, function(key,val){
                document.getElementById("capacity").innerHTML = val.capacity;
              });
              Swal.fire(
                'Success',
                'New Capacity Has Been Setted!',
                'success'
              )
            }
        });

    }
  </script>

  
</body>

</html>