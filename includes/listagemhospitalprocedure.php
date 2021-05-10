<?php

    $resultados = '';

    if(isset($_POST['value'],$hospitais->hospital, $hospitais->Cidade, $hospitais->Sigla)){
        $resultados .= '<tr>
        <td>'.$hospitais->hospital.'</td>
        <td>'.$hospitais->Cidade.'</td>
        <td>'.$hospitais->Sigla.'</td>
    </tr>
    ';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan="6" class="text-center">Nenhuma Pesquisa feita</td>
                                                        </tr>';

?>

<main>

    <section>

        <table class="table bg-light mt-3">

            <thread>
                <tr>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Sigla</th>
                </tr>
            </thread>
            <tbody>
                <?=$resultados?>
            </tbody>



        </table>

    </section>

</main>