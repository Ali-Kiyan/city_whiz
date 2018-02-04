<?php require_once "./template/header.html" ?>
<?php
$api_url= "http://localhost:3001/";
$car_data = file_get_contents($api_url);
$json = json_decode($car_data, TRUE);
?>
<div class="animated fadeInLeft alert alert-success">Selecet your journey...</div>
<div class="row">
    <div class="container">
      <div class="col-xs-6"><img src="./assets/images/train_car.png" alt="" class="car animated fadeIn col-md-4 col-xs-8">
      </div>
      <div class="col-xs-6"> <img src="./assets/images/train_car.png" alt="" class="car animated fadeIn col-md-4 col-xs-8">
      </div>

    </div>
   <?php if($json['stations'][1]['recomendation'] == "left") echo '<img src="./assets/images/tickg.gif" alt="" class="col-sm-2 col-sm-offset-1 col-xs-4 col-sm-offset-1">'; ?>
   <?php if($json['stations'][1]['recomendation'] == "right") echo '<img src="./assets/images/tickg.gif" alt="" class="col-sm-2 col-sm-offset-6 col-xs-4 col-xs-offset-6">'; ?>
   <br>
   <br>
   <br>
</div>
<div class="alert alert-warning animated fadeInRight" style="width: 40%;"><?php echo "choose the ".$json['stations'][1]['recomendation']. " carraige"; ?></div>

<?php require_once "./template/footer.html" ?>
