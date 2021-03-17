<?php
require_once('connection.php');
$category=$_POST['category'];
$type=$_POST['type'];

$city=$_POST['city'];


echo $category;
echo $type;
if(!empty($_POST["submit"])) 
{
    if(isset($category))
    {
    $query = "
        SELECT * FROM property WHERE category= '".$category."'
    ";
    }
    if(isset($type))
    {
        $query .= "AND type='".$type."'";
    }
    if(isset($type))
    {
        $query .="AND address LIKE '%". $city . "%' ";


    }


    $statement = $conn->prepare($query);
    $statement->execute();
    
    $statement->store_result();
    echo $statement->num_rows();
}
?>
    

