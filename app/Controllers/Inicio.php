<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TarefaModel;

class Inicio extends BaseController
{
    public function index()
    {
        $tarefaModel = new TarefaModel();

        echo View('template/header');
        echo View('inicio/index', [
            'tarefas' => $tarefaModel->findAll()
        ]);
        echo View('template/footer');
    }




    public function create()
    {
        echo View('template/header');
        echo View('inicio/form');
        echo View('template/footer');
    }

    public function store()
    {
        $post = $this->request->getPost();

        $tarefaModel = new TarefaModel();
        if ($tarefaModel->save($post)) {
            return redirect()->to('/inicio');
        } else {
            echo 'deu erro';
        }
    }


    public function edit($id)
    {
        $tarefaModel = new TarefaModel();

        $dados = $tarefaModel->find($id);

        if (is_null($dados)) {
            echo 'Error ';
        }

        echo View('template/header');
        echo View('inicio/form', [
            'dadosTarefas' => $dados
        ]);
        echo View('template/footer');
    }

    public function delete($id)
    {
        $tarefaModel = new TarefaModel();

        if ($tarefaModel->delete($id)) {
            return redirect()->to('/inicio');
        } else {
            echo 'Error';
        }
    }

    public function clean()
    {
        $tarefaModel = new TarefaModel();

        $tarefaModel->clean();

        return redirect()->to('/inicio');
    }
}
