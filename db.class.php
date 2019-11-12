<?php
    //Class para conexão com o Banco de Dados
    class db {
        //host - user - password - DataBase
        private $user           = 'root';
        private $password       = '';              

        public function conecta_mySql(){

            try{
                $coneccaoDb = new PDO("mysql:host=localhost;dbname=controle_gasto"
                                        ,$this->user,$this->password
                                );

                return $coneccaoDb;
            }catch(PDOException $e){
                echo 'Erro ao tentar se conectar com o DB MySQL: '. $e->getMessage();
            }            
            
        }  
        
        //Função para criptografar as senhas dos formularios
        function cryptCustom(String $value): String
        {            
            $hash = crypt($value, 'avcdtruciwe23fdre4334');
            $hash = md5($hash);
            $hash = sha1($hash);
            $hash = hash('sha512', $hash);           
            
            return $hash;
        }

    }
