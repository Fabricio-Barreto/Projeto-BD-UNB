<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;

            case 'error':
                $mensagem = '<div class="alert alert-danger">Ação Não executada!"</div>';
                break;
        }
    }


    $resultados = '';
    foreach($cidades as $cidade){
        $resultados .= '<tr>
            <td>'.$cidade->codigo.'</td>
            <td>'.$cidade->nome.'</td>
            <td>'.$cidade->estado_codigo.'</td>
            <td>
                <a href="editarcidade.php?id='.$cidade->codigo.'">
                    <button type = "button" class="btn btn-primary">Editar</button>
                </a>
                <a href="excluircidade.php?id='.$cidade->codigo.'">
                    <button type = "button" class="btn btn-danger">Excluir</button>
                </a>
            </td>
        </tr>
        ';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan="6" class="text-center">Nenhuma vaga encontrada</td>
                                                        </tr>';

?>

<main>

    <?=$mensagem?>

    <section class="mt-2">
        <a href="cadastrarcidade.php">
            <button class="btn btn-success">Nova Cidade</button>
        </a>
    </section>


    <section>

        <table class="table bg-light mt-3">

            <thread>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Codigo do Estado</th>
                    <th>Ações</th>
                </tr>
            </thread>
            <tbody>
                <?=$resultados?>
            </tbody>



        </table>

    </section>

</main>