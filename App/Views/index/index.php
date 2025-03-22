<a href="pessoa/create">
    <button class="btn btn-success my-1">Adicionar pessoa</button>
</a>
<form action="" method="post">
    <input type="text" name="searchByNome" id="inome" placeholder="Nome da pessoa">
    <input type="submit" value="Pesquisar" class="btn btn-success my-1">
</form>
    <table class="table table-striped table-hover shadow">
        <thead class="table-dark">
            <tr>
                <th class="col-5">Nome</th>
                <th class="col-4">Cpf</th>
                <th class="col-1 text-center">Ver contatos</th>
                <th class="col-1 text-center">Editar</th>
                <th class="col-1 text-center">Exluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($this->view->dados as $dado)
                {
                    echo "<tr>
                            <td class=\"col-5\">" . $dado->getNome() . "</td>
                            <td class=\"col-4\">" . $dado->getCpf() . "</td>
                            <td class=\"col-1 text-center\">
                            <form action=\"/contatos\" method=\"post\">
                                <input type=\"hidden\" name=\"id\" value=" . $dado->getId() . ">
                                <input type=\"submit\" value=\"Ver contatos\" class=\"btn btn-sucess\">
                            </form>
                            </td>
                            <td class=\"col-1 text-center\">
                            <form action=\"pessoa/update\" method=\"post\">
                                <input type=\"hidden\" name=\"id\" value=" . $dado->getId() . ">
                                <input type=\"hidden\" name=\"nome\" value=\"" . $dado->getNome() . "\">
                                <input type=\"hidden\" name=\"cpf\" value=" . $dado->getCpf() . ">
                                <input type=\"submit\" value=\"Editar\" class=\"btn btn-sucess\">
                            </form>
                            </td>
                            <td class=\"col-1 text-center\">
                            <form action=\"pessoa/delete\" method=\"post\">
                                <input type=\"hidden\" name=\"id\" value=" . $dado->getId() . ">
                                <input type=\"submit\" value=\"Excluir\" class=\"btn btn-sucess\">
                            </form>
                            </td>
                        </tr>";
                }
            ?>
            
        </tbody>
    </table>
