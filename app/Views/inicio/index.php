<script>
    function confirma() {
        if (!confirm('Deseja Excluir esse cadastro!')) {
            return false;
        }
        return true;
    }
</script>

<div class="container mt-3">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">NIVEL</th>
                <th class="text-center">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tarefas as $tarefa) : ?>
                <tr>

                    <td><?= $tarefa['id'] ?></td>
                    <td class="text-uppercase" id="text"><?= $tarefa['descricao'] ?></td>
                    <td class="text-uppercase"><?= $tarefa['nivel'] ?></td>
                    <td class="text-center">
                        <a href="<?= base_url("Inicio/edit/{$tarefa['id']}") ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="<?= base_url("Inicio/delete/{$tarefa['id']}") ?>" class="btn btn-danger btn-sm" onclick="return confirma()">Excluir</a>

                    </td>

                </tr>
            <?php endforeach; ?>

        </tbody>


    </table>
</div>