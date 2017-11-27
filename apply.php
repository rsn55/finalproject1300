<?php
$UserName = $_REQUEST["userName"];
$UserMail = $_REQUEST["mail"];
$HIDDEN_ERROR_CLASS = "hiddenError";

$major = $_REQUEST["major"];

  // Get information about the form
  $submit = $_REQUEST["submit"];

  if (isset($submit)) {

     // Handle first name
    $name = $_REQUEST["userName"];
    // if the first name field is not empty:
    If ( !empty($name) ) {
      $nameValid = true;
    } else {
      $nameValid = false;
    }

    // Handle email
$email = $_REQUEST["mail"];
$isEmailEmpty = empty($email);
$isEmailAddress = filter_var($email, FILTER_VALIDATE_EMAIL);
  if ( !$isEmailEmpty && $isEmailAddress ) {
    $emailValid = true;
  } else {
    $emailValid = false;
}

   // Handle NetID
$netID = $_REQUEST["netid"];
  If ( !empty($netID) ) {
    $netidValid = true;
  } else {
    $netidValid = false;
  }

  // Handle Major
$major = $_REQUEST["major"];
// if the first name field is not empty:
 If ( !empty($major) ) {
   $majorValid = true;
 } else {
   $majorValid = false;
 }

 // Handle Dropdown 1
 $dropdown1 = $_REQUEST["year"];
 If ( $dropdown1 != '' ) {
   $dropdown1Valid = true;
 } else {
   $dropdown1Valid = false;
 }

 // Handle Dropdown 2
 $dropdown2 = $_REQUEST["college"];
 If ( $dropdown2 != '' ) {
   $dropdown2Valid = true;
 } else {
   $dropdown2Valid = false;
 }

 // Handle Textarea 1
 $textarea1 = $_REQUEST["textarea1"];
 If ( !empty($textarea1) ) {
   $textarea1Valid = true;
 } else {
   $textarea1Valid = false;
 }

 // Handle Textarea 2
 $textarea2 = $_REQUEST["textarea2"];
 If ( !empty($textarea2) ) {
   $textarea2Valid = true;
 } else {
   $textarea2Valid = false;
 }

 // Handle File Input 1
 $fileinput1 = $_REQUEST["resume"];
 If ( isset($fileinput1) ) {
   $fileinput1Valid = true;
 } else {
   $fileinput1Valid = false;
 }

 // Handle File Input 2
 $fileinput2 = $_REQUEST["headshot"];
 If ( isset($fileinput2) ) {
   $fileinput2Valid = true;
 } else {
   $fileinput2Valid = false;
 }

$formValid = $nameValid && $emailValid && $netidValid && $majorValid && $dropdown1Valid && $dropdown2Valid && $textarea1Valid && $textarea2Valid && $fileinput1Valid && $fileinput2Valid;
    // if valid, allow submission
    if ($formValid) {
     session_start();
     $_SESSION["UserName1"] = $UserName;
     session_start();
     $_SESSION["Email1"] = $UserMail;
      // redirect to submit.php
      header("Location: submit.php");
      return;
    }
  }
else {
    // no form submitted
    $nameValid = true;
    $emailValid = true;
    $netidValid = true;
    $majorValid = true;
    $dropdown1Valid = true;
    $dropdown2Valid = true;
    $textarea1Valid = true;
    $textarea2Valid = true;
    $fileinput1Valid = true;
    $fileinput2Valid = true;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CII Form</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>

  <!-- Load jQuery -->
  <script src="scripts/jquery-3.2.1.js" type="text/javascript"></script>
  <!-- Load validation -->
  <script src="scripts/clientValidate.js" type="text/javascript"></script>


</head>

<body>

<?php include "includes/navigation.php"; ?>



  <div id="questions">

  <!-- Other Content -->

  <p><b>Why should I apply for Cornell Impact Investing?</b></p>

  <p>CII accepts people from all different backgrounds and interests, and does not require applicants to come with prior finance knowledge, which is rarely seen amongst the difference finance clubs on campus. </p>
  <br>
  <p><b>What kind of applicants are you looking for?</b></p>
  <p>CII is looking for applicants who have demonstrated a love of learning through past experiences, regardless of the field of study those experiences include.</p>
<br>
  <p><b>What kind commitment is expected of incoming applicants?</b></p>
  <p>Entry-level analysts are expected to commit at least 2-3 hours a week (not including weekly meetings or bi-weekly workshops).</p>
<br>
  <p><b>What kinds of positions are available to apply for?</b></p>
  <p>The entry-level analyst position is the only one available to apply for, though there are promotional opportunities available beyond that point. </p>
<br>
  <p><b>Will there be other recruitment cycles?</b></p>
  The next recruitment cycle will be taking place spring 2018. Following that, recruitment cycles will be taking place annually.
<br>
  </div>





<div id="form">
<form id="mainForm" action="apply.php" method="post" novalidate>
  <div id="join"><p> CII Fall 2017 Application</p></div>
<p>Deadline to Apply:</b> 9/26/17 at 11:59 PM</p><image src="images/clock.png" alt="clock"/>
<p id="red">*All fields are required.</p>

<div id="inputs">
<!-- Name input -->

         <label for="name">Name</label>
          <input value="<?php echo($name);?>" type="text" id="name" name="userName" placeholder="First and last" required>
          <!--Error message-->
         <span class="error <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">First name is required.</span>

<!-- Email input -->
         <label for="mail">E-mail</label>
          <input value="<?php echo($email);?>" type="email" id="mail" name="mail" placeholder="abc123@cornell.edu" required>
          <!--Error message-->
         <span class="error <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="mailError"> E-mail is required.</span>

<!-- NetID input -->
         <label for="netid">NetID</label>
         <input value="<?php echo($netID);?>" type="text" id="netid" name="netid" placeholder="________(@cornell.edu)" required>
         <!--Error message-->
         <span class="error <?php if ($netidValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="netidError">NetID is required.</span>

<!-- Major input -->
         <label for="major">Major</label>
          <input value="<?php echo($major);?>" type="text" id="major" name="major" placeholder="Write major here" required>
          <!--Error message-->
          <span class="error <?php if ($majorValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="majorError">Major is required.</span>
</div>


<!--Year selector -->
<div id="selectors">
<div>
  <p>Select your year:</p>
      <select value="<?php echo($dropdown1);?>" id="year" name="year" required>
        <option selected value="">Please pick one</option>

        <option value="available adoptions">2019</option>
        <option value="both">2020</option>
        <option value="both">2021</option>
        <option value="Cat Facts">2022</option>

      </select>
      <span class="error2 <?php if ($dropdown1Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="yearError"> Please select a year.</span>
</div>
<!--College selector -->
<div>
<p>Select your college:</p>
    <select value="<?php echo($dropdown2);?>" id="college" name="college" required>
      <option selected value="">Please pick one</option>
      <option value="daily">Human Ecology</option>
      <option value="weekly">Agriculture and Life Science</option>
      <option value="monthly">Arts and Sciences</option>
      <option value="monthly">Architecture, Art, and Planning</option>
      <option value="monthly">Engineering</option>
      <option value="monthly">Hotel Administration</option>
      <option value="monthly">Industrial and Labor Relations</option>
    </select>
    <span class="error2 <?php if ($dropdown2Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="collegeError"> Please select a college.</span>

</div>
</div>

<!-- Text areas -->
<div id="textareas">
<p>What sparked your interest in impact investing? (400 words or fewer)</p>
<textarea class="textarea" name="textarea1" id="textarea1" required><?php echo($textarea1);?></textarea>
<span class="error <?php if ($textarea1Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="textarea1Error">Please enter text above (400 words or fewer).</span>

<p>Tell us about a potential impact investment opportunity that would guarantee a decent return. (400 words or fewer)</p>
<textarea class="textarea" name="textarea2" id="textarea2" required>
<?php echo($textarea2);?>
</textarea>
<span class="error <?php if ($textarea2Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="textarea2Error">Please enter text above (400 words or fewer).</span>

<!--File uploads -->

<div id="uploads">

<label for="resume"> Upload your resume (include GPA):</label>
<input type="file" name="resume" value="resume" id="resume" required>
<span class="error <?php if ($fileinput1Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="resumeError">Please choose a file.</span>

<label for="headshot"> Upload your professional headshot:</label>
<input type="file" name="headshot" value="headshot" id="headshot" required>
<span class="error <?php if ($fileinput2Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="headshotError">Please choose a file.</span>

</div>

  <!--Submit button -->
  <div class="button">
  <input type="submit" value="Submit" name="submit">
</div>

  </form>

</div>

</body>
</html>
