<?php require_once "./template/header.html" ?>
<div class="animated fadeInLeft alert alert-success">Hey Alex!</div>
<div class="animated fadeInUp alert alert-info center">Please select your journey!</div>

<div class="col-sm-4 col-sm-offset-1 col-xs-12 smfont">
  <div class="form-group">
    <label for="sel1">Source Station: </label>
    <select class="form-control" id="sel1">
      <option>Oxfod Road</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
</div>
<div class="col-sm-4 col-sm-offset-2 col-xs-12 smfont">
  <div class="form-group">
    <label for="sel1">Destination Station: </label>
    <select class="form-control" id="sel1">
      <option>Victoria Station</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
    <a type="submit" href="./journey.php" class="btn btn-success">Submit
    </a>
</div>



<?php require_once "./template/footer.html" ?>
