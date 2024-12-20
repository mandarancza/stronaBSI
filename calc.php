<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{

            display: flex;
            justify-content: center;
            width: 100%;
            height: 100%;
            color: white;
            font-family: calibri;
        }
        .main{
            display: flex;
            flex-direction:column;

            height: 90vh;
            border: solid 2px green;
            padding: 15px;
            border-radius: 10px;
            background-color: rgb(49, 49, 49);
            aspect-ratio: 1/2;
            caret-color: transparent;
        }
        label{
            width: 100%;
        }
        .buttonwrap{

            display: flex;
            justify-content: center;
        }
        #history{
            width: 100%;
            height: 5%;
            justify-content: right;
            display: flex;
            align-items: center;
            text-wrap: wrap;
            flex-wrap: wrap;
        }
        #out{
            width: 100%;
            height: 10%;
            text-align: right;
            font-size: 30px;
            margin-bottom: 20px;
            border: 1px solid gray;
            text-wrap:wrap;
        }
        .column{
            width: 25%;
            aspect-ratio: 1/5;

            
        }
        .buttons{
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .but{
            width:100%;
            aspect-ratio: 1/1;
            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 40px;
        }
        .but:hover{
            background-color: rgb(98, 98, 98);
            transition-duration: 300ms;
        }
        .but2{
            aspect-ratio: 1/2;
        }

    </style>
    <script>
        var point = true
        var operator = true
        var searched = ""
        function operand(x){
            var out = document.getElementById("out").innerHTML
            if(x == "ce"){
                document.getElementById("out").innerHTML = 0
            }
            else if(x == "c"){
                document.getElementById("out").innerHTML = 0
                document.getElementById("history").innerHTML = ""

            }
            else if(x == "."){
                if(point){
                    document.getElementById("out").innerHTML += x;
                    point = false
                    operator = true
                }
                return
            }
            else if(x == "+" || x == "-" || x == "/" || x == "*"){
                if(operator){
                    point = true
                    document.getElementById("out").innerHTML += x;
                    operator = false
                }
                return
            }
            else if(out == "0"){
                if(x > 0 && x < 10){
                    document.getElementById("out").innerHTML = x
                }
            }
            else if(x == "+/-"){
                document.getElementById("out").innerHTML = "-1*(" + out + ")"
                calc() 
            }
            else if(x == "perc"){
                document.getElementById("out").innerHTML = "0.01*(" + out + ")"
                calc() 
            }
            else if(x == "pow"){
                document.getElementById("out").innerHTML = out +"*"+out
                calc() 
            }
            else if(x == "sqrt"){
                document.getElementById("out").innerHTML = "Math.sqrt("+out+")"
                calc() 
            }
            else{
                document.getElementById("out").innerHTML += x;
            }
            operator = true
         
        }
        function calc(){
            var out = document.getElementById("out").innerHTML
            var val = out + "=" + eval(out)
            document.getElementById("history").innerHTML = val
            document.getElementById("out").innerHTML = eval(out)
        }
    </script>
</head>
<body>
    <div class="main">
        <div id="history">

        </div>
        <div id="out">0</div>
        <div class="buttons">
            <div class="column">

                <div class="but" onclick="operand('ce')">CE</div>
                <div class="but" onclick="operand('perc')">%</div>
                <div class="but" onclick="operand(7)">7</div>
                <div class="but" onclick="operand(4)">4</div>
                <div class="but" onclick="operand(1)">1</div>
                <div class="but" onclick="operand('000')">000</div>
            </div>
            <div class="column">
                <div class="but" onclick="operand('c')">C</div>
                <div class="but" onclick="operand('pow')">x<sup>2</sup></div>
                <div class="but" onclick="operand(8)">8</div>
                <div class="but" onclick="operand(5)">5</div>
                <div class="but" onclick="operand(2)">2</div>
                <div class="but" onclick="operand(0)">0</div>
            </div>
            <div class="column">
                <div class="but" onclick="operand('+/-')">+/-</div>
                <div class="but" onclick="operand('sqrt')">√</div>
                <div class="but" onclick="operand(9)">9</div>
                <div class="but" onclick="operand(6)">6</div>
                <div class="but" onclick="operand(3)">3</div>
                <div class="but" onclick="operand('.')">,</div>
            </div>
            <div class="column">
                <div class="but" onclick="operand('/')">/</div>
                <div class="but" onclick="operand('*')">x</div>
                <div class="but" onclick="operand('-')">-</div>
                <div class="but" onclick="operand('+')">+</div>
                <div class="but but2" onclick="calc()">=</div>
            </div>
        </div>
    </div>

</body>
</html>