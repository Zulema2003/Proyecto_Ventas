<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Valentino SHOP</title>
    </head>
    <body style="background: #f2f3f4">
        <br />
        <div align="center">
            <h1 size="7" color= "warnering">VAlENTINO</h1>        
        </div>
        <br/>
        <div/>
        <h3 size="6" color= "secondary">Lucete con cada outfit que uses</h3>
        </div>
        <br/>

        <div align="right">
            <a href="index.html">Exit</a>
        </div>
        <br/>    
        <br />

        <?php
            if(isset($_GET['producto']))
            {
                include('union.php');
                $con = new union();
                $producto=$_GET['producto'];
                $costo=$_GET['costo'];

                $query="INSERT INTO `carrito`( `producto`, `costo`) VALUES ('$producto','$costo');";
                
                $consult=$con->query($query);
                $con->close();
             ?>
                <table align="center" border="2">
                    <tr>
                        <td>
                            <p>Producto</p>
                        </td>
                        <td>
                            <p>Costo</p>
                        </td>
                    </tr>
                    <?php
                         
                         $con = new union();
                        $query="SELECT * FROM `carrito` WHERE 1;";
                        $pro=$con->query($query);
                        $con->close();
                        
                        while($row=mysqli_fetch_assoc($pro))
                        {
                            echo "
                                <tr>
                                    <td>
                                        <p>".$row['producto']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['costo']."</p>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            <?php                   
            }
        ?>

        <div class="container">
            <div class="row justify-content">
                <div class="clo-14 ">
                    <table class="table table-success">
                        <thead>
                            <tr>
                              <font size=5 color=dark> <th scope="col">Producto</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">costo</th>
                                <th scope="col">Agregar al Carrito</th></font>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/imagenes/blusarosada.png" width="250" height="150" />
                                </td>
                                <td>
                                    <p></font color="red" size="4">
                                       Blusa elaborada con un fino algodon , muy suave para cuando quieras estar casual pero sin perder la oportunidad de tener un look increible
                                    </p>
                                </td>
                                <td>
                                    <p>$ 1800.00</p>
                                </td>
                                <td>
                                    <a href="?producto=blusarosada&costo=1800">Comprar</a>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <img src="img/imagenes/outfitblanco.png" width="250" height="150" />
                                </td>
                                <td>
                                    <p></font color="red" size="4">
                                        Es un conjunto muy basio de colores frios como blancos y nude para siempre estar elegante , 100% lino una tela muy fresca. <font/>
                                    </p>
                                </td>
                                <td>
                                    <p>$ 980.00</p>
                                </td>
                                <td>
                                    <a href="?producto=outfitblanco&costo=980">Comprar</a>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <img src="img/imagenes/outfitnegro.jpg" width="250" height="150" />
                                </td>
                                <td>
                                    <p></font colo="red" size="4">
                                        L elegancia no pelea con nadie y el negro aunque es un color muy basico siempre queda con todo , ropa 100% de algodon , conjunto que incluye joyas y tenis <font/>
                                    </p>
                                </td>
                                <td>
                                    <p>$ 2000.00</p>
                                </td>
                                <td>
                                    <a href="?producto=outfitnegro&precio=2000">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/imagenes/outfitverde.png" />
                                </td>
                                <td>
                                    <p></font color="red" size="4">
                                        conjunto perfecto para los amantes del verde , 100% algodon y lino <font/>
                                    </p>
                                </td>
                                <td>
                                    <p>$ 500.00</p>
                                </td>
                                <td>
                                    <a href="?producto=outfitverde&precio=150">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/imagenes/ovebeige.png" />
                                </td>
                                <td>
                                    <p></font color="red" size="4">
                                       un overol perfecto para un look distinto y elegante pero a la vez versatil , es de lona y muy fresco. <font/>
                                    </p>
                                </td>
                                <td>
                                    <p>$ 1234.00</p>
                                </td>
                                <td>
                                    <a href="?producto=ovebeige&precio=1234">Comprar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
