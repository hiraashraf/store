<?php 




// Get All category
$strSQL  = "SELECT *


    FROM
    cis282store.categories c

    ORDER BY
    c.category_id
";
    
// Get Result
$result = mysqli_query($conn, $strSQL);

// Fetch Data
$categoryList = mysqli_fetch_all($result, MYSQLI_ASSOC);





















































// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn); 


?>