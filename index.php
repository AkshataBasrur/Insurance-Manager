<html>
<head>
   <title>
        New Insurance Customer
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

</head>
<body>
<?php require_once("config.php"); ?>
<form name="createNewRecord" action="createNewRecord_DBINSERT.php" method="post">
    <table class="table-style-three">
        <thead>
        <tr><th>Full Name</th>
            <td><input type="text" name="fullname" value=""></td></tr>
        <tr><th>Address</th>
            <td><input type="text" name="location" value=""></td></tr>
        <tr><th>Phone Number</th>
            <td><input type="text" name="phonenumber" value=""></td></tr>
        <tr><th>Date Of Birth</th>
            <td><input type="text" name="dateofbirth" value=""></td></tr>
        <tr><th>SSN</th>
            <td><input type="text" name="ssn" value=""></td></tr>
        <tr><th>Email</th>
            <td><input type="text" name="emailaddress" value=""></td></tr>

        <tr><td><input type="Submit" name="submit" value="Register user"></td></tr>
        </thead>
    </table>
</form>
</body>
</html>




