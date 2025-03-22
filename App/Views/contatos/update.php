<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-4 text-center bg-ligth">
        <form action="/contatos/updateSave" method="post">
            <input type="hidden" name="id" value="<?php echo $this->view->dados["id"]?>">
            <div class="form-control">   
                <?php
                    if((bool)$this->view->dados["tipo"])
                    {
                        echo "<input type=\"radio\" name=\"tipo\" id=\"itipo\" value=\"true\" checked>
                            <label for=\"tipo\" style=\"padding:10px;\">Telefone </label>
                            <input type=\"radio\" name=\"tipo\" id=\"itipo2\" value=\"\">
                            <label for=\"tipo\">Email </label>";
                    }
                    else{
                        echo "<input type=\"radio\" name=\"tipo\" id=\"itipo\" value=\"true\">
                            <label for=\"tipo\" style=\"padding:10px;\">Telefone </label>
                            <input type=\"radio\" name=\"tipo\" id=\"itipo2\" value=\"\" checked>
                            <label for=\"tipo\">Email </label>";
                    }
                    ?>
            </div>
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="tdescricao" value="<?php echo $this->view->dados["descricao"]?>" class="form-control">
            <input type="submit" value="Editar" class="btn btn-success mt-2">
        </form>
    </div>
</div>