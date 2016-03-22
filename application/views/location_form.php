<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Voyager Location Request Form</title>
  <link rel='stylesheet' href='/locationrequest/trunk/css/bootstrap.css'>
  <link rel='stylesheet' href='/locationrequest/trunk/css/style.css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12" id="title"><h1>UH Voyager Location Request Form</h1></div>
  </div>

  <form action="pageitgoesto.php" action="POST" onsubmit = "return checkForm()">

  <div class="row">
    <div class="col-md-4">
      <p><label for="" class="control-label">Select your Location</label></p>
    </div>
    <div class="col-md-8">
    <p>
      <select name="campus" id="location-choice">
        <option value="---">Please select an option</option>
        <option value="HCW">UH West Hawaii Center</option>
        <option value="HUH">UH Hilo</option>
        <option value="KCK">Kauai CC</option>
        <option value="MCM">UH Maui College</option>
        <option value="OCH">Honolulu Community College</option>
        <option value="OCK">Kapiolani Community College</option>
        <option value="OCL">Leeward Commumity College</option>
        <option value="OCW">Windward Commumity College</option>
        <option value="OUL">UH Law Library</option>
        <option value="OUM">UH Health Sciences Library</option>
        <option value="OUZT">UHM: Travel Industry Management Sunset Reference Center</option>
        <option value="OUW">UH West Oahu</option>
        <option value="OUZH">UH Manoa - Hamilton</option>
        <option value="OUZS">UH Manoa - Sinclair</option>
        <option value="SIM">Hawaii Sheet Music Index</option>
      </select>
    </p></div>
    <div class="col-md-12"></div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <p><label for="" class="control-label">Location Code</label></p>
      
    </div>
    <div class="col-md-8"><p><input type="text" id="locationcode" name="locationcode" maxlength="10" required/></p></div>
    <div class="col-md-12 field-description">
      <p>
        <ul>
          <li>Maximum length: 10 characters</li>
          <li>First three letters must be the campus code</li>
          <li>Fourth letter designates the collection e.g. A,D,H,S,P,W.</li>
          <li>Fith through tenth letters designates the sub-collection and/or circulation status e.g. Ref, Closed, SciRef, D0</li>
          <li><span id="show-location-table" style="color: #0099ff; cursor: pointer; text-decoration: underline;">Click here</span> to show all 3 character Location Codes</li>
        </ul>
      </p>
      <table id="location-codes" class="table table-striped">
        <thead>
          <tr>
            <th>Location Code</th>
            <th>Library</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>HCW</td>
            <td>UH West Hawaii Center</td>
          </tr>
          <tr>
            <td>HUH</td>
            <td>UH Hilo</td>
          </tr>
          <tr>
            <td>KCK</td>
            <td>Kauai CC</td>
          </tr>
          <tr>
            <td>MCM</td>
            <td>UH Maui College</td>
          </tr>
          <tr>
            <td>OCH</td>
            <td>Honolulu Commumity College</td>
          </tr>
          <tr>
            <td>OCK</td>
            <td>Kapiolani Commumity College</td>
          </tr>
          <tr>
            <td>OCL</td>
            <td>Leeward Commumity College</td>
          </tr>
          <tr>
            <td>OCW</td>
            <td>Windward Commumity College</td>
          </tr>
          <tr>
            <td>OUL</td>
            <td>UH Law Library</td>
          </tr>
          <tr>
            <td>OUM</td>
            <td>UH Health Sciences Library</td>
          </tr>
          <tr>
            <td>OUW</td>
            <td>UH West Oahu</td>
          </tr>
          <tr>
            <td>OUZ</td>
            <td>UH Manoa</td>
          </tr>
          <tr>
            <td>SIM</td>
            <td>Hawaii Sheet Music Index</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="row">
    
    <div class="col-md-4">
      <p><label for="" class="control-label">Location Name</label></p>      
    </div>
    <div class="col-md-8"><p><input type="text" id="locationname" name="locationname" maxlength="25" required /></p></div>
    <div class="col-md-12 field-description">
      <p>
        <ul>
          <li>Maximum length: 25 characters including spaces.</li>
          <li>Can have upper and lower case letters. </li>
          <li>This is also called the Location Staff Name that appears in the Cataloging, Circulation, and Acquisitions module.</li>
          <li>All Location Names have specific "jump" codes associated with each UH System Library and are used by Cataloging and 
          Circulation As for Departmental libraries associated with a particular campus, the "jump" codes use the campus codes.
          Please see the table below for your jump code.</li>
          <li><span id="show-jump-table" style="color: #0099ff; cursor: pointer; text-decoration: underline;">Click here</span> to show all Jump Codes</li>
        </ul>
      </p>
    </div>
    <div class="col-mid-12">
      <table id="jump-codes" class="table table-striped">
        <thead>
          <tr>
            <th>Jump Code</th>
            <th>Library</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>C KONA</td>
            <td>UH West Hawaii Center</td>
          </tr>
          <tr>
            <td>E HILO</td>
            <td>UH Hilo</td>
          </tr>
          <tr>
            <td>X KAUAI</td>
            <td>Kauai CC</td>
          </tr>
          <tr>
            <td>M MAUI</td>
            <td>UH Maui College</td>
          </tr>
          <tr>
            <td>D HCC</td>
            <td>Honolulu Commumity College</td>
          </tr>
          <tr>
            <td>QK KAPCC</td>
            <td>Kapiolani Commumity College</td>
          </tr>
          <tr>
            <td>L LCC</td>
            <td>Leeward Commumity College</td>
          </tr>
          <tr>
            <td>W WCC</td>
            <td>Windward Commumity College</td>
          </tr>
          <tr>
            <td>OUL LAW</td>
            <td>UH Law Library</td>
          </tr>
          <tr>
            <td>J MED</td>
            <td>UH Health Sciences Library</td>
          </tr>
          <tr>
            <td>T TIM</td>
            <td>UHM: Travel Industry Management Sunset Reference Center</td>
          </tr>
          <tr>
            <td>U UHWO</td>
            <td>UH West Oahu</td>
          </tr>
          <tr>
            <td>Z UHM</td>
            <td>UH Manoa</td>
          </tr>
          <tr>
            <td>HSMI</td>
            <td>Hawaii Sheet Music Index</td>
          </tr>
          
        </tbody>
      </table>
    </div>

  </div>
  
  <div class="row">
      
    <div class="col-md-4">
      <p><label for="" class="control-label">Spine Label Name</label></p>
    </div>
    <div class="col-md-8"><p><input type="text" id="spinelabelname" name="spinelabelname" maxlength="10"/></p></div>
    <div class="col-md-12 field-description">
      <p>
        <ul>
          <li>Maximum length: 10 characters</li>
          <li><i>Optional Field</i></li>
        </ul>
      </p>
      
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <p><label for="" class="control-label">OPAC Display Name</label></p>
    </div>
    <div class="col-md-8"><p><input type="text" id="opacdisplayname" name="opacdisplayname" maxlength="60" required/></p></div>
    <div class="col-md-12 field-description">
      <p>
        <ul>
          <li>Maximum length: 60 characters including spaces</li>
          <li>The Display Name must start with the OPAC Display Name Prefix followed by a space. <i>(Should be automatically filled in for you above)</i></li>
        </ul>
      </p>
      
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <p><label for="" class="control-label">Display in WebVoyage?</label></p>
    </div>
    <div class="col-md-8">
      <p><input type="radio" id="displayyes" name="display" value="yes" /> <label for="displayyes" >Yes</label></p>
      <p><input type="radio" id="displayno" name="display" value="no" /> <label for="displayno" >No</label></p>

    </div>
    <div class="col-mid-12">
      <p>
        <ul>
          <li>There are times where you want to create a location just for Library Staff Use Only, especially when your
          library is having the Systems Office load your bib records via bulk import and you do no want them to display 
          in OPAC until you have processed the physical item.</li>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center"><p><label for="" class="control-label"><input class="btn btn-primary" type="submit" value="Submit" /></p></div>
  </div>



  </form>
</div>

</body>
<script src='/locationrequest/trunk/js/jquery-2.2.1.min.js'></script> 
<script src='/locationrequest/trunk/js/bootstrap.js'></script> 
<script src='/locationrequest/trunk/js/custom.js'></script> 
</html>
