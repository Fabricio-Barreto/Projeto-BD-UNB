<?php


    $resultados = '';
    foreach($pacientes as $paciente){
        $resultados .= '<tr>
            <td>'.$paciente->Paciente.'</td>
            <td>'.$paciente->Medico.'</td>
            <td>'.$paciente->Enfermeiro.'</td>
            <td>'.$paciente->Enfermidade.'</td>
            <td>'.$paciente->Hospital.'</td>
            <td>'.$paciente->UTI_TIPO.'</td>
        </tr>
        ';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan="6" class="text-center">Nenhuma vaga encontrada</td>
                                                        </tr>';

?>

<main>

    <section>

        <table class="table bg-light mt-3">

            <thread>
                <tr>
                    <th>Paciente</th>
                    <th>Medico</th>
                    <th>Enfermeiro</th>
                    <th>Enfermidade</th>
                    <th>Hospital</th>
                    <th>UTI Tipo</th>
                </tr>
            </thread>
            <tbody>
                <?=$resultados?>
            </tbody>



        </table>

    </section>

</main>