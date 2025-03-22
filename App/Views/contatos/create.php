<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-4 text-center bg-ligth">
        <form action="createSave" method="post">
            <label for="tipo" class="form-label">Tipo</label>
            <div class="form-control">
                <input type="radio" name="tipo" id="itipo" value="true">
                <label for="tipo" style="padding:10px;">Telefone </label>
                <input type="radio" name="tipo" id="itipo2" value="">
                <label for="tipo">Email </label>
            </div>
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="tdescricao" class="form-control">
            <input type="submit" value="Adicionar" class="btn btn-success mt-2">
        </form>
    </div>
</div>