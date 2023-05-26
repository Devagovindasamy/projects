<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>gender</th>
                <th>phone</th>
                <th>address</th>
                <th>regdate</th>
                <th>file</th>
                <th>file download </th>
                <th>update file</th>
                <th>delete file</th>
</thead>
<tbody>
    <?php
    $con=mysqli_connect("localhost","root","0000","github") or die ('db not connect');
    $query="select * from register";
    $res=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($res))
    {
        $id=$row[0];
        $fname=$row[7];
        echo"<tr>";
        echo"<td>".$row[0]."</td>";
        echo"<td>".$row[1]."</td>";
        echo"<td>".$row[2]."</td>";
        echo"<td>".$row[3]."</td>";
        echo"<td>".$row[4]."</td>";
        echo"<td>".$row[5]."</td>";
        echo"<td>".$row[6]."</td>";
        echo"<td>".$row[7]."</td>";
        echo"<td><a download='$fname' href='".$fname."' class='btn btn-success'>download</a></td>";
        echo"<td><a href='update1.php?id=$id'class='btn btn-success'>update</a></td>";
        echo"<td><a href='del.php?id=$id'class='btn btn-success'>delete</a></td>";
        echo"</tr>";
    }
    ?>
    </tbody>
</table>
</div>
</div>
    
    </body>
    </html>
