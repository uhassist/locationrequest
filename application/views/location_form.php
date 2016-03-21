<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Voyager Location Request Form</title>
  <link rel='stylesheet' href='/locationrequest/trunk/css/bootstrap.css'>
  <link rel='stylesheet' href='/locationrequest/trunk/css/style.css'>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12" id="title"><h1>UH Voyager Location Request Form</h1></div>
  </div>

  <form action="pageitgoesto.php" action="POST" onsubmit = "return checkForm()">

  <div class="row">
    <div class="col-md-4"><p>Location Code</p></div>
    <div class="col-md-8"><p><input type="text" id="locationcode" name="locationcode" maxlength="10" required /></p></div>
  </div>
  
  <div class="row">
    <div class="col-md-4"><p>Location Name</p></div>
    <div class="col-md-8"><p><input type="text" id="locationname" name="locationname" maxlength="25" required /></p></div>
  </div>
  
  <div class="row">
    <div class="col-md-4"><p>Spine Label Name</p></div>
    <div class="col-md-8"><p><input type="text" id="spinelabelname" name="spinelabelname" maxlength="10"/></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p>OPAC Display Name</p></div>
    <div class="col-md-8"><p><input type="text" id="opacdisplayname" name="opacdisplayname" maxlength="60" required /></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p>Display in WebVoyager?</p></div>
    <div class="col-md-8">
      <p><input type="radio" id="displayyes" name="display" value="yes" /> <label for="displayyes" >Yes</label></p>
      <p><input type="radio" id="displayno" name="display" value="no" /> <label for="displayno" >No</label></p>

    </div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><input type="submit" value="Submit" /></p></div>
    <div class="col-md-8"></div>
  </div>



  </form>
</div>

</body>
<script src='/locationrequest/trunk/js/jquery-2.2.1.min.js'></script> 
<script src='/locationrequest/trunk/js/bootstrap.js'></script> 
<script src='/locationrequest/trunk/js/custom.js'></script> 
</html>
