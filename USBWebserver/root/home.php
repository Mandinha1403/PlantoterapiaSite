

<!DOCTYPE html>
<html>

    <head>
        <link href="css/styles.css" rel="stylesheet">
        <meta charset="utf-8">
        <title> Plantoterapia </title>
    </head>

    <body>
        
      <?php include "./header.html" ?>


      <div class="header_posts">

        <input type="text" placeholder="Pesquisar...">
        <button type="pesquisar" id="pesquisar"> Pesquisar </button>
        <a href="adicionarplanta.php"> <button type="adicionar_planta" id="adicionar_planta"> Adicionar Planta </button> </a>

      </div>

      <div class="plantas">

            <ul class="lista_plantas">

                <?php

                require_once 'db_connect.php';

                session_start();

                $sql= "SELECT * FROM planta";
                $resultado = mysqli_query($connect, $sql);
                $rows = mysqli_num_rows($resultado);

                for($i = 1; $i <= $rows; $i++){
                    $sql= "SELECT nome_planta FROM planta WHERE id_planta='$i'";
                    $resultado = mysqli_query($connect, $sql);
                    $nome = mysqli_fetch_array($resultado)[0];

                    $sql= "SELECT foto_planta FROM planta WHERE id_planta='$i'";
                    $foto = mysqli_query($connect, $sql);
                

                    echo 
                    "<article> <li> <div class='planta'> 
                        
                        <div class='imagem'> <a href='planta.php'> <img src=''> </a> </div> 
                        <div class='texto'> <a href='planta.php'> $nome </a> </div>
                    
                    </div> </li> </article>";
                }


                ?>

               
            </ul>
        </div>

        <?php include "./footer.html" ?>

    </body>

</html>