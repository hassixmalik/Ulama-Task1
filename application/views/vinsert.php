
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Blogs</title>
</head>



<body style="width:1024px;margin:0 90px; background-color:#dbd6d6;">
 
    <h1 style="margin-left: 250px;">Here you can Write Blogs✍️😍</h1>
    <?php 
    echo validation_errors(); ?>
    <?php echo form_open('welcome/create'); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="title" class="form-control" id="title" placeholder="Enter Title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="description" class="form-control" id="description" placeholder="Enter Description" name="description" required>
        </div>
        
        <!-- <div class="form-group">
            <label for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile">
        </div> -->
        <input type="submit">
    </form>
    
</body>
</html>