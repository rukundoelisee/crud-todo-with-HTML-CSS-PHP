<html>
    <title></title>
    <style>
        body{
            margin:0;
            background-image:url(imag.jpg);
            background-size:cover;
            background-repeat:no-repeat;
            background-attachment:fixed;

        }
        .nav{
            background-color:black;
            height:50px;
            width:100%;
            opacity:90%;
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
        h2{
            color:white;
            margin-top:350px;
            font-family:arial;
        }
        .tom{
            color:black;
            margin-top:20px;
            font-family:arial;
            background-color:white;
            border-radius:20px;
            width:200px;
            font-size:16px;
            height:40px;
            border:none;
        }
        .tom:hover{
            background-color:black;
            border:2px solid white;
            color:white;
        }
        .f{
            color:black;
            font-weight:bold;
        }
        .f:hover{
            color:white;
        }
    </style>
    <body>
        <div class="nav">
            <h1>TodoList App</h1>
            <a  id="too" class="to" href="index.php">Home</a>
            <a class="to" href="todo.php">TodoList</a>
        </div>
        <center>
        <h2>Welcome To My TodoApp Project</h2>
        <button class="tom" ><a class="f" href="todo.php">Go To TodoList</a></button>
    </body>
    </html