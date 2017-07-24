<?php
    include("./php/showerrors.php");
    include("./php/dbconnect.php");

    $_sql1 = "INSERT INTO customer VALUES";
    $_sql2 = "(".$_POST['UserCpf'].",";
    $_sql2 = $_sql2."'".$_POST['SignupName']."'".",";
    $_sql2 = $_sql2."'".$_POST['SignupEmail']."'".",";
    $_sql2 = $_sql2."'".$_POST['UserPassword2']."'".",";
    $_sql2 = $_sql2."'".$_POST['UserPhone']."'".",";
    $_sql2 = $_sql2."'".$_POST['UserState']."'".",";
    $_sql2 = $_sql2."'".$_POST['UserCity']."'".",";
    $_sql2 = $_sql2."'".$_POST['UserNeigh']."'".",";
    $_sql2 = $_sql2."'".$_POST['UserStreet']."'".",";
    $_sql2 = $_sql2.$_POST['UserNumber'].",";
    $_sql2 = $_sql2."'".$_POST['UserComplement']."'".")";

    //echo $_sql1.$_sql2;

    $res = pg_query($con, $_sql1.$_sql2);
    if(!$res){
        echo "DEU RUIM";
        echo $_sql1.$_sql2;
    }
    //$user = $_POST['name'];
    else{
      echo "<script type='text/javascript'>alert('Usuário Cadastrado com Sucesso.');</script>";
      //header('Location: signup.php');
    }
 ?>
