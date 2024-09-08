<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th,td,tr{
        border:1px solid
    }
    table{
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    <?php 
        require_once("dbconfig.php");
        $result = $db->query("SELECT * FROM students");
    ?>
    <table>
    <tr>    
        <th>ID</th>
        <th>NAME</th>
        <th>GENDER</th>
        <th>DATE OF BIRTH</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>
        <th>Action</th>
    </tr>
     <?php 
     while($row= $result->fetch_assoc()){?>
     <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['dob'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><a href="#" class="stid" value="<?php echo $row['id'] ?>">DELETE</a></td>
        
     </tr>
    <?php } ?>
</table>
        <script>
            $(document).ready(function(){
                $(".stid").click(function(event){
                    event.preventDefault();
                    let sid = $(this).attr("value");
                    // alert(sid);

                    $.post("delete.php", {id:sid}, function(data, status){
                        alert(data);

                    });
                })
            })
        </script>
</body>
</html>