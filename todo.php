<?php
include "db.php";
$message="";
if(isset($_GET['added'])){
    $message="item added";
}
if(isset($_POST['save'])){
    $item=$_POST['item'];
    if($item==""){
        $message="enter item please";
    }
    else{
    $stmt=$pdo->prepare("INSERT INTO items (item) VALUES (?)");
    $stmt->execute([$item]);
    header("Location:todo.php?added");
    }

}
$result=$pdo->query("SELECT * FROM items");
?>
<html>
    <title></title>
    <style>
        body{
            margin:0;
        }
        .nav{
            background-color:black;
            height:50px;
            width:100%;
            
        }
        a{
            text-decoration:none;
        }
        .to{
            color:white;
            margin-left:30px;
            margin-top:20px;
            font-family:arial;
            float:left;
        }
        #too{
            border-bottom:2px solid gray;
        }
        .to:hover{
            border-bottom:2px solid white;
        }
        h1{
            font-size:20px;
            float:left;
            margin-left:30px;
            color:white;
            font-family:arial;
            margin-right:100px;
        }
        form{
            margin-top:30px;
            width:500px;
            height:100px;
            border-radius:10px;
            box-shadow:  0 1px 3px rgba(0, 0, 0, 0.05), 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        }
        .input{
            height:40px;
            width:300px;
            border-radius:10px;
            
            border:1px solid black;
            margin-top:30px;
        }
        .button{
            height:40px;
            background-color:black;
            border-radius:10px;
            color:white;
            font-weight:bold;
            border:none;
            width:100px;
        }
        .button:hover{
            background-color:#04AA6D;
        }
        table{
            border-collapse:collapse;
        }
        .cont{
            border:1px solid black;
            width:500px;
            height:50px;
            border-radius:10px;
            text-align:left;
            margin-top:20px;
        }
        .span{
            margin-left:10px;
            
        }
        .d{
            float:right;
            margin-right:20px;
            background-color:red;
            width:70px;
            font-family:arial;
            text-align:center;
            
            border-radius:6px;
            padding:0;
            text-decoration:none;
            color:white;
        }
        .dd{
            float:right;
            margin-right:20px;
            background-color:#04AA6D;
            width:70px;
            font-family:arial;
            text-align:center;
            
            border-radius:6px;
            padding:0;
            text-decoration:none;
            color:white;
        }
    </style>
    <body>
        <div class="nav">
            <h1>TodoList App</h1>
            <a class="to" href="index.php">Home</a>
            <a id="too" class="to" href="todo.php">TodoList</a>
        </div>
        <center>
        <form method="post">
            <input class="input" type="text" name="item" placeholder="&nbsp;&nbsp;&nbsp;enter item">
            <input class="button" type="submit" name="save">
        </form>
        <p><?php echo $message ?></p>
        <?php 
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
        $item=$row['item'];
        $date=$row['created_at'];
        $id=$row['id'];
        echo "<div class='cont'>";
        echo "<br>";
        echo "<span class='span'>$item </span>";
        echo "<span class='span'>| &nbsp;$date </span>";
        echo "<span><a class='dd'  href='edit.php?id=$id'>edit</a></span>";
        echo "<span><a class='d' href='delete.php?id=$id'>delete</a></span>";
        echo "</div>";
        }
        ?>
        </center>
    </body>
    </html