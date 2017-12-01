<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand">
                <img src="imagens/Logo.png">
            </a>
            <div class="btn btn-default btn-lg">
                <?php
                if (isset($usuario)) {
                    if ($usuario == "admin") {  
                        ?>
                        <span><?php echo $usuario;?>
                            <a href="#usuarios">
                                <img src="imagens/edit.png" alt="Usuários" >
                            </a>
                            <a href='logout.php'>
                                <img src="imagens/sair.png" alt="Sair" > 
                            </a>
                        </span>
                        <?php
                    } else {
                        echo "<span>::: $usuario ::: "
                        . "<a href='logout.php'>Sair</a></span>";
                    }
                } else {
                    echo "<span><a href='login.html'>Autenticar</a></span>";
                }
                ?>
            </div>
        </div>
     
    </div>
</nav>
