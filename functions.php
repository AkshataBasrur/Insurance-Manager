<?php
function createNewCust($randomid, $fname,$location,$phonenumber,$dob,$ssn,$email)
{
    global $mysqli;
    
    $stmt = $mysqli->prepare(
        "INSERT INTO customer(custid,FullName,Loc,PhoneNumber,DateOfBirth,SSN,Email)
        VALUE (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$randomid, $fname,$location,$phonenumber,$dob,$ssn,$email);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
}

function updateThisUser($thisInsurance, $custid)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "UPDATE customer
        SET Insurance = ?
        WHERE custid = ?");
     $stmt->bind_param("ss", $thisInsurance, $custid);
     $result = $stmt->execute();
     $stmt->close();
     return $result;
}

function fetchAllUsers()
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "SELECT id,custid,FullName,Loc,PhoneNumber,DateOfBirth,SSN,Email,Insurance
        FROM customer");
    $stmt->execute();
    $stmt->bind_result($id,$custid, $FullName,$loc,$PhoneNumber,$DateOfBirth,$SSN,$Email,$Insurance);
    while ($stmt->fetch()) {
        $row[] = array(
            'id' => $id,
            'custid' =>$custid,
            'fullName' =>$FullName,
            'loc'=> $loc,
            'phonenumber' =>$PhoneNumber,
            'dateofbirth'=>$DateOfBirth,
            'ssn'=>$SSN,
            'email'=>$Email,
            'insurance'=>$Insurance);
        }
        $stmt->close();
        return ($row);
    }
?>