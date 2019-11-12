<?Php

    require_once('db.class.php');
    $objDb = new db();

    $nome       = $_POST['nome'];
    $usuario    = $_POST['usuario'];
    $email      = $_POST['email'];
    $senha      = $objDb->cryptCustom($_POST['senha']);  

    
    $link = $objDb->conecta_mySql();
    $sql  = "insert into tb_usuario (nome_completo, usuario, email, senha)
                             values (:nome,:usuario, :email, :senha) ";
   
    $stmt = $link->prepare($sql);
    
    $stmt->bindValue(":nome",$nome);
    $stmt->bindValue(":usuario",$usuario);
    $stmt->bindValue(":email",$email);
    $stmt->bindValue(":senha",$senha);
    
    //executar a query
    if($stmt->execute()){
        header('Location: index.php?cadastrado=1');
    }else{
        echo 'Usuario não cadastrado';
    }
