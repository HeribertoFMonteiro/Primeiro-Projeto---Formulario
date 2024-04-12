<?php

if(isset($_POST["submit"])){

    // print_r($_POST["nome"]);
// print_r("<br>");
// print_r($_POST["email"]);
// print_r("<br>");
// print_r($_POST["telefone"]);
// print_r("<br>");
// print_r($_POST["genero"]);
// print_r("<br>");
// print_r($_POST["data_nascimento"]);
// print_r("<br>");
// print_r($_POST["cidade"]);
// print_r("<br>");
// print_r($_POST["estado"]);
// print_r("<br>");
// print_r($_POST["endereco"]);

    include_once("config.php");

$nome = $_POST["nome"];
$email =$_POST["email"];
$telefone= $_POST["telefone"];
$genero = $_POST["genero"];
$data_nasc=$_POST["data_nasc"];
$cidade =$_POST["cidade"];
$estado =$_POST["estado"];
$endereco = $_POST["endereco"];
$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,genero,data_nasc,cidade,estado,endereco) 
VALUES ('$nome','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | HFM</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(20,147,220),rgb(17,54,71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0,0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
           
            
            
            
            
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;

        }
        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }
        .LabelInput{

            position: absolute;
            top: 0px;
            left: 0px;
            transition: .5s;
            pointer-events: none;

        }
        .inputUser:focus ~ .LabelInput, .inputUser:valid ~ .LabelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;

        }
        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        
        
    </style>
        
    
</head>
<body>


    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>

                <legend><b>Formulario de Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="LabelInput" for="nome">Nome Completo</label>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label class="LabelInput" for="email">Email</label>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label  class="LabelInput" for="telefone">Telefone</label>
                    
                </div>
                <br>
                <p>Sexo:</p>
                
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label><br>
                    
                
                
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label><br>
        
                
                
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                    
                    <br><br>
                    <label for="data_nasc"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" required>
                    <br><br><br>
                    
                
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label class="LabelInput" for="cidade">Cidade</label>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label class="LabelInput" for="estado">Estado</label>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label class="LabelInput" for="endereco">Endereço</label>
                    
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">










                

            </fieldset>



        </form>



    </div>
    
</body>
</html>