<?php

$severname = "localhost";
$username = 'root';
$password= '';
$dbname = "php25buoi5";
$conn = new mysqli($severname,$username,$password,$dbname);
if ($conn->connect_error) {
	echo "failed to connect".$conn->connect_error;
	exit();
}

// biến query chọn tất cả từ table categories
$query = " SELECT * FROM users ";
// biến categories để lưu mảng dữ liệu
$users = array();

$id = $_GET['id'];

$result = $conn->query($query);


// Trả về 1 bản ghi
$user = $result->fetch_assoc();


   

 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New USERS</h3>
    <hr>
        <form action="edit_process.php" method="POST" role="form" enctype="multipart/form-data">
          <input type="hidden" name="users_id" value="<?php echo $id  ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="input user" value="<?php echo $user['users_name']?>" name="users_name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="input Description" value="<?php echo $user['users_description']?>" name= "users_description" >
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>