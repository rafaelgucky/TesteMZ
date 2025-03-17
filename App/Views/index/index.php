<button class="btn btn-success my-1">Adicionar Item</button>
    <table class="table table-striped table-hover shadow">
        <thead class="table-dark">
            <tr>
                <th class="col-9">Nome</th>
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
                            <td class=\"col-9\">" . $dado . "</td>
                            <td class=\"col-1 text-center\">B</td>
                            <td class=\"col-1 text-center\">B</td>
                            <td class=\"col-1 text-center\">B</td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>
