<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 style="text-align:center;color:#0099ff;"><?php echo $ai['name'];?>: (<?php echo $row;?>)</h1>

  <form action="http://localhost/demo/index.php?r=Base/ai" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" name="check" type="checkbox">
         Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>



<div class="card">
<table class="table table-bordered">
   <thead>
     <tr>
       <th>name</th>
       <th>Email</th>
       <th>Password</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php
     foreach($rs as $r){
      ?>
     <tr>
       <td><?php echo $r['name'];?></td>
       <td><?php echo $r['email'];?></td>
       <td><?php echo $r['password'];?></td>
       <td><a href="http://localhost/demo/index.php?r=Base/del/&id=<?php echo $r['id'];?>">Delete</a></td>
     </tr>
     <?php
     }
      ?>
   </tbody>
 </table>
</div>





</div>

</body>
</html>
