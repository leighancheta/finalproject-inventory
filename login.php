<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style type="text/css">
        div {
            justify-content: center;
            display: flex;
            margin: 100px;
        

        }
        header { 
            background-color: #696969; 
            padding: 15px; 
            color: white; 
            justify-content: center;

        }
        form {
            background-color: #696969;
            padding: 50px;
            cursor: pointer;
            border-radius: 5px;
        }
        input { 
            font-size: 20px; 
            border: 1px solid #2F4F4F; 
            padding: 12px 15px; 
            width: 350px;
        }
        button{
            font-size: 20px;
            border:none;
            background-color: #A9A9A9;
            border-radius: 5px;
            width: 100px;
        }
        button,p { 
            display: inline-block; 
            padding :5px; 
        }
        h3{
            font-size: 40px;
            justify-content: center;
            margin: auto;
            width: 50%;
            padding: 10px;
            background-color: #2F4F4F;
        }
        h4{
            justify-content: center;
            margin: auto;
            width: 50%;
            padding: 10px;
        }

    </style>
</head>
<body>
    <header>
        <h3>Inventory Management System</h3>
    </header>
    <div>
        <form>
            <h4 style="font-size: 30px;">Login Here</h4>
            <input type="text" name="email" placeholder="Username or Email"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit" name="login">Login</button>
            <p><a href="#">Forgot Password?</a></p><br><br><hr>
        </form>
    </div>
    <hr>
</body>
</html>
