<?php require_once "./template/header.html" ?>
<?php
$api_url= "http://localhost:3001/";
$car_data = file_get_contents($api_url);
$json = json_decode($car_data, TRUE);
?>
<div class="animated fadeInLeft alert alert-success">Hey Alex!</div>
<div class="animated fadeInUp alert alert-info center">Please select your journey!</div>

<div class="col-sm-4 col-sm-offset-1 col-xs-12 smfont">
  <div class="form-group">
    <label for="sel1">Source Station: </label>
    <select class="form-control" id="sel1">
      <option><?php echo $json['stations'][1]['station']; ?></option>
      <option><?php echo $json['stations'][2]['station']; ?></option>
      <option><?php echo $json['stations'][3]['station']; ?></option>
    </select>
  </div>
</div>
<div class="col-sm-4 col-sm-offset-2 col-xs-12 smfont">
  <div class="form-group">
    <label for="sel1">Destination Station: </label>
    <select class="form-control" id="sel1">
      <option><?php echo $json['stations'][2]['station']; ?></option>
      <option><?php echo $json['stations'][3]['station']; ?></option>
      <option><?php echo $json['stations'][1]['station']; ?></option>
    </select>
  </div>
    <a type="submit" href="./rcmnd_car.php" class="btn btn-success col-sm-2 col-xs-12">Submit
    </a>
</div>



<?php require_once "./template/footer.html" ?>
