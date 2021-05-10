<main>

    <section class="mt-2">
        <a href="paciente.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">

        <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" name="CPF" value="<?=$obPaciente->CPF?>">
        </div>

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?=$obPaciente->nome?>">
        </div>

        <div class="form-group">
            <label>Plano de saude</label>
            <input type="text" class="form-control" name="plano_saude" value="<?=$obPaciente->plano_saude?>">
        </div>

        <div class="form-group">
            <label>Sexo</label>
            
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="sexo" value="m" <?=$obPaciente->sexo == 'm' ? 'checked' : '' ?>> Masculino
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="sexo" value="f" <?=$obPaciente->sexo == 'f' ? 'checked' : '' ?>> Feminino
                    </label>
                </div>

            </div>

        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descrição" rows="5"><?=$obPaciente->descrição?></textarea>
        </div>

        <div class="form-group">
            <label>Código da UTI</label>
            <input type="text" class="form-control" name="uti_codigo" value="<?=$obPaciente->uti_codigo?>">
        </div>

        <div class="form-group">
            <label>Coren do Enfermeiro</label>
            <input type="text" class="form-control" name="enfermeiro_coren" value="<?=$obPaciente->enfermeiro_coren?>">
        </div>

        <div class="form-group">
            <label>CRM do Médico</label>
            <input type="text" class="form-control" name="crm_medico" value="<?=$obPaciente->crm_medico?>">
        </div>

        <div class="form-group">
            <label>Código da Enfermidade</label>
            <input type="text" class="form-control" name="enfermidade_codigo" value="<?=$obPaciente->enfermidade_codigo?>">
        </div>
        
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>