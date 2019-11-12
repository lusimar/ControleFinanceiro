<?php

    session_start();
    require_once('db.class.php');
    $objDb = new db();

    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];
    $senha   = $objDb->cryptCustom($senha);
    
    $link  = $objDb->conecta_mySql();

    $sql = "select id, nome_completo, usuario, senha from tb_usuario where usuario =
    :usuario and senha = :senha ; ";

    $buscasegura = $link->prepare($sql);
                                          
    $buscasegura->bindValue(":usuario",$usuario);
    $buscasegura->bindValue(":senha", $senha);    
    $buscasegura->execute();

    $result = $buscasegura->fetchALL();
    
    $idUsuario = "";
        foreach($result as $value){
            $idUsuario = $value['id']; 
            
            if($idUsuario)
            {
                $_SESSION['nome']       = $value['nome_completo'];
                $_SESSION['usuario']    = $value['usuario'];
                $_SESSION['email']      = $value['email'];
                
                header('Location: home.php');
            }            
                      
        }  
        if($idUsuario == ""){
            
            // for($i=3;$i>=0;$i--)
            // {
            //     echo('<script>
            //     var senha;
            //     do {
            //         senha = prompt ("Informe sua senha correta, '.$i.' tentativas");
            //     } while (senha == null || nome != '.$senha.' );
            //         alert ("seu usuario foi bloqueado, 
            //         contate o administrador do sistema!");
            //      </script>');									
			// }
            
            header('Location: index.php?erro=1');
            
        } 
        else 
        {
            echo 'Erro na execução da consulta, favor entrar em contato com o admin do site!';
        }  
   