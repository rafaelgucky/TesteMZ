<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-4 text-center bg-ligth">
        <form action="/pessoa/updatesave" method="post">
            <input type="hidden" name="id" value="<?php echo $this->view->dados["id"]?>">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="tnome" value="<?php echo $this->view->dados["nome"]?>" class="form-control">
            <label for="cpf" class="form-label">Cpf</label>
            <input type="text" name="cpf" id="tcpf" value="<?php echo $this->view->dados["cpf"]?>" class="form-control">
            <input type="submit" value="Editar" class="btn btn-success mt-2">
        </form>
    </div>
</div>