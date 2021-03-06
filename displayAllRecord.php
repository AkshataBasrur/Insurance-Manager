<html>
<head>
    <title>
        Display customers
    </title>
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
            color: blue;
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

</head>
<body>

<?php require_once("config.php");

$allrecords = fetchAllUsers();
?>

<!-- Table goes in the document BODY -->
<table class="table-style-three">
    <thead>
    <!-- display user details header  -->
    <th>Customer ID</th>
    <th>Full Name</th>
    <th>Address</th>
    <th>Phone number</th>
    <th>Date of Birth</th>
    <th>SSN</th>
    <th>Email Address</th>
    <th>Insurance</th>
    </thead>
    <tbody>
    <?php
    foreach($allrecords as $displayRecords) { ?>
        <tr>
            <td><?php print $displayRecords['custid']; ?></a></td>
            <td><?php print $displayRecords['fullName']; ?></td>
            <td><?php print $displayRecords['loc']; ?></td>
            <td><?php print $displayRecords['phonenumber']; ?></td>
            <td><?php print date("Y-m-d", strtotime($displayRecords['dateofbirth'])); ?></td>
            <td><?php print $displayRecords['ssn']; ?></td>
            <td><?php print $displayRecords['email']; ?></td>
            <td><?php print $displayRecords['insurance']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table><br><br>
<a href="index.php"><input type="button" value="Register for new customer" method="POST"></a>
</body>
</html>
