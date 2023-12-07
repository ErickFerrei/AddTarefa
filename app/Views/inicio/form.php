<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3><?= isset($dadosTarefas) ? 'Atualizar' : 'Cadastrar' ?> Tarefa</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('Inicio/store') ?>
            <div class="mb-3">
                <label for="descricao" class="form-label fw-bold ">DESCRIÇÃO:</label>
                <input type="text" class="form-control text-uppercase" id="descricao" name="descricao" value="<?= isset($dadosTarefas) ? $dadosTarefas['descricao'] : '' ?>">
                <div id="emailHelp" class="form-text">Ex: Cortar o cabelo, Ler um livro, Fazer o trabalho da escola.</div>
            </div>



            <div class="mb-3">
                <label for="nivel" class="form-label fw-bold">NIVEL DA TAREFA:</label>
                <select class="form-select" aria-label="Default select example" name="nivel">
                    <option selected></option>
                    <option <?= (isset($dadosTarefas) && $dadosTarefas['nivel'] == 'alto') ? 'selected' : '' ?> value="alto">ALTO</option>
                    <option <?= (isset($dadosTarefas) && $dadosTarefas['nivel'] == 'médio') ? 'selected' : '' ?> value="médio">MÉDIO</option>
                    <option <?= (isset($dadosTarefas) && $dadosTarefas['nivel'] == 'baixo') ? 'selected' : '' ?> value="baixo">BAIXO</option>
                </select>
                <div id="emailHelp" class="form-text">Ex: BAIXO | MÉDIO | ALTO.</div>
            </div>




            <input type="hidden" name="id" value="<?= isset($dadosTarefas) ? $dadosTarefas['id'] : '' ?>">

            <button type="submit" class="btn btn-primary"><?= isset($dadosTarefas) ? 'Atualizar' : 'Cadastrar' ?></button>
            <a href="<?= base_url('/inicio') ?>" class="btn btn-secondary">Voltar</a>
            <?php echo form_close() ?>
        </div>
    </div>
</div>