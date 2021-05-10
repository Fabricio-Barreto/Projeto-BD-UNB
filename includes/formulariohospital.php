<main>

    <section class="mt-2">
        <a href="hospital.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">

        <div class="form-group">
            <label>CEP</label>
            <input type="text" class="form-control" name="cep" value="<?=$obHospital->cep?>">
        </div>

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?=$obHospital->nome?>">
        </div>

        <div class="form-group">
            <label>Nome do Administrador</label>
            <input type="text" class="form-control" name="nomeadm" value="<?=$obHospital->administrador_name?>">
        </div>

        <div class="form-group">
            <label>CPF do Administrador</label>
            <input type="text" class="form-control" name="cpfadm" value="<?=$obHospital->administrador_cpf?>">
        </div>

        <div class="form-group">
            <label>Data de Nascimento do Administrador</label>
            <input type="date" class="form-control" name="nascadm" value="<?=$obHospital->administrador_nasc?>">
        </div>

        <div class="form-group">
            <label>Sexo do Administrador</label>
            
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="sexo" value="m" <?=$obHospital->administrador_sexo == 'm' ? 'checked' : '' ?>> Masculino
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="sexo" value="f" <?=$obHospital->administrador_sexo == 'f' ? 'checked' : '' ?>> Feminino
                    </label>
                </div>

            </div>

        </div>

        <div class="form-group">
            <label>Incio da Gerencia</label>
            <input type="date" class="form-control" name="iniciogeren" value="<?=$obHospital->inicio_gerencia?>">
        </div>

        <div class="form-group">
            <label>Codigo da Cidade</label>
            <input type="text" class="form-control" name="codcid" value="<?=$obHospital->cidade_codigo?>">
        </div>
        
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>