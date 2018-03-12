<?php
    require_once './conn.php';
    $pdo = Database::conexao();
    class mLogin{
        public static function autentica(){
            $l = $_POST(usulog);
            $p = $_POST(usupsw);

            $stmt->bindParam(":l", $l);
            $stmt->bindParam(":l", $l);
            
            $stmt = $pdo->prepare('SELECT * FROM usuario WHERE usulog = :l AND usupsw = :s') or die("erro ao selecionar");
            $stmt->execute();
            $count = $del->rowCount();
            if ($count<=0){
              echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
              die();
            }else{
              setcookie("login",$login);
              header("Location:index.php");
            }
        }
    }
    

