<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #9a9797;
    height: 55px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 0 20px;
    text-decoration: none;
    padding: 10px;
    
 }

li a:hover:not(.active) {
    background-color: #1498d5;
}

.active {
    background-color: #1498d5;
    height: 55px;   
}

</style>
<nav class="navbar navbar-default navbar-fixed-top">
        <ul>
            <li><img src="imagens/Logo.png" style="margin-top: 13px;margin-left: 10px;"></li>
            <li><a href="#news">
                <button type="button" 
                        class="btn btn-info btn-lg" data-toggle="modal" 
                        data-target="#telaModal" id='incluir'  
                        onclick="<?php echo "editar('Incluir','Ativo')"; ?>">Novo Cadastro   
                </button>
                </a>
            </li>
            <li><a href="#contact">Contact</a></li>            
            <li style="float:right"><a class="active" href="#about"><img style="border-radius: 50%;" id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"><?php echo " ".$usuario;?></a></li>
        </ul>
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand">
                <img src="imagens/Logo.png">
            </a>
            <div class="btn btn-default btn-lg">
                <?php
                if (isset($usuario)) {
                    if ($usuario == "admin") {  
                        ?>
                        <span><?php echo $usuario;?>
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
