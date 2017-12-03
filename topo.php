<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;    
    background-color: #9a9797;
    height: auto;
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

  
/* Style The Dropdown Button */
.dropbtn {
    background-color: #1498d5;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
    float: right;
    
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #1498d5;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index:10;

}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #1498d5;
}

</style>
<nav class="navbar navbar-default navbar-fixed-top">
    
        <ul>
            <li><img src="imagens/Logo.png" style="margin-top: 13px;margin-left: 10px;"></li>
            <li><a>
                <button type="button" 
                        class="btn btn-info btn-lg" data-toggle="modal" 
                        data-target="#telaModal" id='incluir'  
                        onclick="<?php echo "editar('Incluir','Ativo')"; ?>">Novo Cadastro   
                </button>
                </a>
            </li>
       
            <div class="dropdown">
  <button class="dropbtn"><img style="border-radius: 50%;" id="profile-img" 
            class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"><?php echo " ".$usuario;?></button>
  <div class="dropdown-content">
    <a href="logout.php">Sair</a>
    
  </div>
</div>

            
        

</div>
    
</nav>
