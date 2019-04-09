<?php
require_once("config.php");
$thisInsurance= $_GET['PolicyName'];
$custid=$_GET['custid'];

$updateInsurance=updateThisUser($thisInsurance, $custid);

echo "<br><b> Customer ID:    </b>". $custid. "<br><b>Insurance Plan: </b>".$thisInsurance." <br><br>You have successfully purchased the policy.<br>";
if($thisInsurance=="COMPASS PRO PLAN")
    echo "<br><table><tr><td>Your monthly investment is $49</td><tr>
    <tr><td> Your annual investment will be $588</td></tr></table>";
else
    echo "<br><table><tr><td>Your monthly investment is $61</td><tr>
<tr><td> Your annual investment will be $732</td></tr></table>";
?>
<html>
    <head>
    </head>
    <body>
   <a href="displayAllRecord.php"> <input type="button" value="View all Customers"></a>
    </body>
    </body>
</html>
