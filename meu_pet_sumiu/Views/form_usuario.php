<?php

    require_once "Cabecalho.php";

?>

<div class="content">

    <div class="container">

        <h1 style="margin-top: 60px; margin-bottom: 60px">Usuário</h1>
        
        <form class="row g-3" action="#" method="post">

            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome Completo">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="password" class="form-control" id="email" name="email" placeholder="Digite seu E-mail">
            </div>

            <div class="col-md-6 text-danger"><?php echo $msg[0]; ?></div>

            <div class="col-md-6 text-danger"><?php echo $msg[1]; ?></div>

            <div class="col-md-6">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>

            <div class="col-6">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="(11) 11111-1111">
            </div>

            <div class="col-md-6 text-danger"><?php echo $msg[2]; ?></div>

            <div class="col-md-6 text-danger"><?php echo $msg[3]; ?></div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </form>

    </div>

</div>

</body>

</html>