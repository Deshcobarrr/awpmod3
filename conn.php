

<?php
    $host= '127.0.0.1';
    $db= 'awpmod2_db';
    $user= 'root';
    $pass= ''; /* password is empty for xampp setup*/ 
    $charset= 'utf8mb4';
    $dsn = "mysql: host=$host; dbname=$db; charset=$charset";
    
       
            try
                    {
                        $pdo = new PDO($dsn, $user, $pass);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        echo '<h1 class = "text-success"> Hello Database </h1>';
                    }

                catch(PDOException $e)
                    {
                        throw new PDOException($e->getMessage());
                        echo '<h1 class = "text-danger"> NO DATABASE FOUND </h1>' . $e->getMessage();
                        echo $e->getMessage();
                    }

                require_once 'crud.php';
                require_once 'user.php';
                $crud=  new crud($pdo);
                $user=  new user($pdo);
    
                //$user->insertUser("admin","password");


?>