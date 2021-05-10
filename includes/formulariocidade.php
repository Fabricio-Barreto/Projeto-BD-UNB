<main>

    <section class="mt-2">
        <a href="cidade.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form enctype="multipart/form-data" method="post">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?=$obCidade->nome?>">
        </div>

        <div class="form-group">
            <label>Codigo do Estado</label>
            <input type="text" class="form-control" name="estado_codigo" value="<?=$obCidade->estado_codigo?>">
        </div>
        
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>