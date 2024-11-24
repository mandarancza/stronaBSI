<?php
session_start();
$iflogged = '';

if (isset($_SESSION['username'])) {
    header('Location: formsphp.php');
}
else{
    $iflogged = 
    '<div class="title">Logowanie</div>
        <form action="" method="post">
            <label for="user">Login</label>
            <input type="text" id="user" name="user" value="lubiegofry2">
            <label for="pass">Hasło</label>
            <input type="password" id="pass" name="pass" value="Haslo123">
            <div class="buttonwrap">
                <button type="submit">Zaloguj</button>
            </div>
        </form>';
    
    $users = [
        'lubiegofry2' => 'Haslo123'
    ];
    
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['user'];
        $password = $_POST['pass'];
    
        if (isset($users[$username]) && $users[$username] === $password) {
            $_SESSION['username'] = $username;
            header('Location: formsphp.php');
            exit();
        } 
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin:10px;
            
        }
        body{
            display: flex;
            justify-content: center;
        }
        form{
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        #formdiv{
            display: flex;
            flex-direction: column;
            width: 25%;
            border: solid 2px green;
            padding: 15px;
            border-radius: 10px;
            background-color: rgb(235, 235, 235);
        }
        label{
            width: 100%;
        }
        button{
            margin: 15px 0px 0px 0px;
            background-color: green;
            color: white;
            font-weight: bold;
            border: black solid 3px;
            border-radius: 10px;
            max-width: 100px;
            width: 50%;
            height: 30px;
            
            padding: 20px;
            text-align: center;
            padding: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .buttonwrap{

            display: flex;
            justify-content: center;
        }
        #passdesc{
            font-size: small;
        }
        #outputdiv{
            display: flex;
            flex-direction: column;
            width: 35%;
            border: solid 2px green;
            padding: 15px;
            border-radius: 10px;
            background-color: rgb(235, 235, 235);
            margin-left: 15px;
        }
        .title{
            font-weight: bold;
            font-size: 35px;
            font-family: Calibri;
            display: flex;
            justify-content: center;
        }
    </style>
    
</head>
<body>
    <div id="formdiv">
        <?php
            echo $iflogged;
        ?>
        

    </div>
    

</body>
</html>