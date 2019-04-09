<?php

require_once("config.php");

$character_array = array_merge(range(a, z), range(0, 9));
    $rand_string = "";
    for ($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }

    $randomid = $rand_string;
$fname=     $_POST['fullname'];
$location=   $_POST['location'];
$phonenumber=$_POST['phonenumber'];
$dob=       $_POST['dateofbirth'];
$ssn=       $_POST['ssn'];
$email=     $_POST['emailaddress'];

$newcust= createNewCust($randomid, $fname,$location,$phonenumber,$dob,$ssn,$email);
echo "Hello <b>". $fname. "</b><br>We have the below plans for you <br><br>";
?>
<html>
    <head>
        <title>Select an insurance</title>
        <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
        }
        table.table-style-three a {
            color: #ffffff;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: #F7CFCF;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
        }
    </style>
    <head>
<body>
    <table border="1pt" class="table-style-three">
    <tr><td></td>
        <td><h2><b>Monthly rate</b></h2></td>
        <td><h2><b>Evacuation</b></h2></td>
        <td><h2><b> Deductible</b></h2></td>
        <td></td></tr>
    <tr><td><b>COMPASS PRO PLAN</b></td><td>$49</td><td>$120,000</td><td>$150 / $500 Annually</td><td><a href="buyPolicy.php?custid=<?php print $randomid;?>&PolicyName=COMPASS PRO PLAN"><input type="button" name="COMPASS PRO PLAN" value="BUY"></a></td></tr>
    <tr><td><b>SECURE PRO PLAN</b></td><td>$61</td><td>$500,000</td><td>$90 / $400 Annually</td><td><a href="buyPolicy.php?custid=<?php print $randomid;?>&PolicyName=SECURE PRO PLAN"><input type="button" name="SECURE PRO PLAN" value="BUY"></a></td></tr>
    </table>
</body>
</html>