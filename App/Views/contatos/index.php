<a href="contatos/create">
    <button class="btn btn-success my-1">Adicionar contato</button>
</a>
    <table class="table table-striped table-hover shadow">
        <thead class="table-dark">
            <tr>
                <th class="col-2">Tipo</th>
                <th class="col-8">Descrição</th>
                <th class="col-1 text-center">Editar</th>
                <th class="col-1 text-center">Exluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($this->view->dados as $dado)
                {
                    $tipo = $dado->getTipo() ? 'Telefone' : 'Email';
                    $descricao = $dado->getDescricao();
                    echo "<tr>
                            <td class=\"col-2\">" . $tipo . "</td>
                            <td class=\"col-8\">" . $descricao . "</td>
                            <td class=\"col-1 text-center\">
                            <form action=\"contatos/update\" method=\"post\">
                                <input type=\"hidden\" name=\"id\" value=" . $dado->getId() . ">
                                <input type=\"hidden\" name=\"tipo\" value=" . $dado->getTipo() . ">
                                <input type=\"hidden\" name=\"descricao\" value=\"" . $descricao . "\">
                                <input type=\"hidden\" name=\"idPessoa\" value=" . $dado->getPessoa()->getId() . ">
                                <input type=\"submit\" value=\"Editar\" class=\"btn btn-sucess\">
                            </form>
                            </td>
                            <td class=\"col-1 text-center\">
                            <form action=\"contatos/delete\" method=\"post\">
                                <input type=\"hidden\" name=\"id\" value=" . $dado->getId() . ">
                                <input type=\"submit\" value=\"Excluir\" class=\"btn btn-sucess\">
                            </form>
                            </td>
                        </tr>";
                }
            ?>
            
        </tbody>
    </table>
