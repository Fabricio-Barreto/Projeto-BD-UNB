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
    foreach($hospitais as $hospital){
        $resultados .= '<tr>
            <td>'.$hospital->codigo.'</td>
            <td>'.$hospital->cep.'</td>
            <td>'.$hospital->nome.'</td>
            <td>'.$hospital->administrador_name.'</td>
            <td>'.$hospital->administrador_cpf.'</td>
            <td>'.$hospital->administrador_nasc.'</td>
            <td>'.($hospital->administrador_sexo == 'm' ? 'Masculino' : 'Feminino').'</td>
            <td>'.$hospital->inicio_gerencia.'</td>
            <td>'.$hospital->cidade_codigo.'</td>
            <td>
                <a href="editarhospital.php?id='.$hospital->codigo.'">
                    <button type = "button" class="btn btn-primary">Editar</button>
                </a>
                <a href="excluirhospital.php?id='.$hospital->codigo.'">
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
        <a href="cadastrarhospital.php">
            <button class="btn btn-success">Novo hospital</button>
        </a>
    </section>


    <section>

        <table class="table bg-light mt-3">

            <thread>
                <tr>
                    <th>ID</th>
                    <th>Cep</th>
                    <th>Nome</th>
                    <th>Nome do Administrador</th>
                    <th>CPF do Administrador</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Inicio da Gerência</th>
                    <th>Codigo da Cidade</th>
                    <th>Ações</th>
                </tr>
            </thread>
            <tbody>
                <?=$resultados?>
            </tbody>



        </table>

    </section>

</main>