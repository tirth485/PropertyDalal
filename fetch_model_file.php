 <?php
            $stmt = $conn->prepare("Select * from property where pid='12'");
            if($stmt->execute() === TRUE)
            {
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                   
                    $name =$row['name'];
                    $address =$row['address'];
                    $type =$row['type'];
                    // $image =$row['image'];
                    $description =$row['description']; 
                    $price =$row['price']; 
                    $userid =$row['userid']; 
                    $sqft =$row['sqft']; 
                    $category =$row['category'];

                    echo "
                    <h3>$name</h3><br>
                    <h3>$address</h3><br>
                    <h3>$type</h3><br>
                    <h3>$description</h3><br>
                    
                    ";
                }
            }
            ?>