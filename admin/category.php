<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">

    <?php
	require('includes/config.php');
    require('models/category_model.php');
    ?>

	<title>CIS 282 Store | Category List</title>
</head>

<body>

<div class="container-fluid main-title">
	<div class="row">
	<div class="col">
<h2>Category List</h2>
<a href="add_categories.php" class="btn btn-primary">Add Category</a>	
	
</div>
	</div>
</div>

<div class="container-fluid main-headers">
	<div class="row text-center">
    <div class="col-1"></div>
   <h3> <div class="col-5 text-left"><strong>Category</strong></div></h3>
</div>
</div>

<?php foreach($categoryList as $row) { ?>	
	<div class="container-fluid list">
    <div class="row text-center">
	<div class="col-1">	<?php echo $row['category_id']; ?></div>
    <div class="col-5 text-left"><?php echo $row['category_name']; ?></div>
    <div class="col-6">
    <a href="edit_categories.php?edit=<?php echo $row['category_id']; ?>" class="btn btn-info">Edit</a>
    <a href="models/edit_categories_model.php?delete=<?php echo $row['category_id']; ?>" class="btn btn-danger">Delete</a></div>

</div>
</div>
</div>

<?php 
    }
?>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>


</html>