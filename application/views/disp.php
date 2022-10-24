<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
    <title>Homepage</title>
</head>


<body style="width:1024px;margin:0 120px; background-color:#dbd6d6;">


<a style="float: right;
    margin-right: 50px;
    margin-top: 20px;" 
    class='btn btn-primary' 
    href="<?php echo base_url();?>welcome/insert">
    Insert More Blogs
</a>
<div class="container" style="width:1024px;">
<h2>Displaying all blogs ✍️</h2>            
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Update/Delete</th>
    </tr>
    </thead>
    <tbody>
        
<?php
    //if()
    //{
        //$result = mysqli_fetch_assoc($data);
        foreach($show as $result){

        echo "
        <tr>
        <td>".$result["id"]."</td>
        <td>".$result["title"]."</td>
        <td>".$result["descriptionn"]."</td>
        <td>
        <a class='btn btn-danger' href='". base_url() ."welcome/delete/".$result["id"]."' role='button'>Delete</a>
        <tr>
        ";
        }
    //}
    
    echo '</table>'; 



?>

</body>
</html>