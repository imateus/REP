<script>
    function editar(acao, status, id, login, nome, email, cpf, departamento, cargo) {
        $("#acao").val(acao);
        document.getElementById("acao2").innerHTML = acao;
        $("#id").val(id);
        $("#login").val(login);
        $("#nome").val(nome);
        $("#email").val(email);
        $("#cpf").val(cpf);
        $("#departamento").val(departamento);
        $("#cargo").val(cargo);
        $("#status").val(status);
        
        if (acao == "Alterar") {
            document.getElementById('login').setAttribute("disabled", "disabled");
        } else {
            document.getElementById('login').removeAttribute("disabled");
        }
    }
</script>
<?php
$us = "";
if (isset($usuario)) {
    if ($usuario == "admin") {
        $us = $usuario;
    }
}
?>
<br>
<br>
<br>
<br>
<div id="usuarios">

    <div>

        <?php
        $result = usuarios($us);

        while ($registro = mysqli_fetch_array($result)) {
            $id = $registro['id'];
            $login = $registro['login'];
            $nome = $registro['nome'];
            $email = $registro['email'];
            $cpf = $registro['cpf'];
            $departamento = $registro['departamento'];
            $cargo = $registro['cargo'];
            $status = 'A';
            ?>
            
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>
                            <img src="imagens/user.png" height="100" style="border-radius:50%;">
                        </h1>
                    </div>
                    
                    <div class="panel-body">
                        <p><strong>Login:</strong> <?php echo $login ?> </p>
                        <p><strong>Nome:</strong> <?php echo $nome ?> </p>
                        <p><strong>E-Mail:</strong> <?php echo $email ?> </p>
                        <p><strong>CPF:</strong> <?php echo $cpf ?> </p>
                        <p><strong>Departamento:</strong> <?php echo $departamento ?> </p>
                        <p><strong>Cargo:</strong> <?php echo $cargo?></p>
                        <?php if ($us == "admin") { ?>
                            
                        <?php } ?>

                    </div>
                    <div class="panel-footer">
                        <!--                        
                        <button class="btn btn-lg">Alterar</button>
                        <button class="btn btn-lg">Excluir</button>
                        -->
                        <?php if ($us == "admin") { ?> 
                            <button type="button" 
                                    class="btn btn-info btn-lg" data-toggle="modal" 
                                    data-target="#telaModal" id='editar' 
                                    onclick="<?php echo "editar('Alterar','$status',$id,'$login','$nome','$email', '$cpf', '$cargo','$departamento')"; ?>">Editar
                            </button>
                            <form class="form-signin" action="inativar.php" style="margin-left: 60px" method="POST">
                                <input name="login" type="hidden" value="<?php echo $registro['login'] ?>"/>
                                <button class="btn btn-lg">Excluir</button>
                            </form> 
                        <?php } ?>
                    </div>
                </div>      
            </div>
                
        <?php } ?>
    </div>
</div>

<form action="editarUsuarios.php" method="POST" name="frmEdit" id="frmEdit" >
    <input type="hidden" name="acao" id="acao">
    <input type="hidden" name="status" id="status">
    <div class="modal container-fluid fade" id="telaModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ficha Usuário
                        - <b><span id="acao2"></span></b>
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="valida" value="editar">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-6">
                            <label style="color:black">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label style="color:black">Login</label>
                            <input type="text" name="login" id="login" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="color:black">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label style="color:black">Redigitar Senha</label>
                            <input type="password" name="senha2" id="senha2" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="color:black">E-Mail:</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        
                        <div class="col-md-6">
                            <label style="color:black">CPF</label>
                            <input type="text" name="cpf" id="cpf" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label style="color:black">Departamento</label>
                            <input type="text" name="departamento" id="departamento" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label style="color:black">Cargo</label>
                            <input type="text" name="cargo" id="cargo" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-default" value="Salvar">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>                    
                </div>
            </div>

        </div>
    </div>
</form>
