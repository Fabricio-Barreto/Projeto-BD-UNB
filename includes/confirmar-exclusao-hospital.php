<main>

    <h2 class="mt-3">Excluir Hospital</h2>

    <form method="post">

        <div class="form-group">
            <p>Você deseja excluir o Hospital <strong><?=$obHospital -> nome?></strong> do banco de dados?</p>
        </div>

        
        <div class="form-group mt-3">

            <a href="hospital.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>

            <button type="submit" class="btn btn-danger" name="excluir">Excluir</button>
        </div>

    </form>

</main>