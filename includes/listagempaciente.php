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
    foreach($pacientes as $paciente){
        $resultados .= '<tr>
            <td>'.$paciente->codigo.'</td>
            <td>'.$paciente->nome.'</td>
            <td>'.($paciente->sexo == 'm' ? 'Masculino' : 'Feminino').'</td>
            <td>'.$paciente->plano_saude.'</td>
            <td>'.$paciente->descrição.'</td>
            <td>'.$paciente->enfermidade_codigo.'</td>
            <td>'.$paciente->uti_codigo.'</td>
            <td>
                <a href="editarpaciente.php?id='.$paciente->codigo.'">
                    <button type = "button" class="btn btn-primary">Editar</button>
                </a>
                <a href="excluirpaciente.php?id='.$paciente->codigo.'">
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
        <a href="cadastrarpaciente.php">
            <button class="btn btn-success">Novo Paciente</button>
        </a>
    </section>


    <section>

        <table class="table bg-light mt-3">

            <thread>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Plano de Saúde</th>
                    <th>Descrição</th>
                    <th>Codigo da Enfermidade</th>
                    <th>Código da UTI</th>
                    <th>Ações</th>
                </tr>
            </thread>
            <tbody>
                <?=$resultados?>
            </tbody>



        </table>

    </section>

</main>