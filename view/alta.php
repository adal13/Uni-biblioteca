<?php include 'home/head.php';?>

    <div class="container">
        <div class="row vh-100 justify-content-center align-item-center">
            <div class="mt-5 mb-5 col-auto p-5 card">

                <form action="../models/insert.php" method="post">
                    <fieldset class="">
                        <legend>Registrar</legend>
                            <div class="row-cols-sm-1 mb-3 input-group">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-select" name="nombre">
                            </div>
        
                            <div class="mb-3">
                                <label class="form-label">Volumen</label>
                                <input type="text" class="form-select" name="volumen">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Etiqueta</label>
                                <input type="text" class="form-control" name="etiqueta">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Autor</label>
                                <input type="text" class="form-control" name="autor">
                            </div>

                            <!-- <div class="mb-3">
                                <label for="disabledSelect" class="form-label">status</label>
                                <select id="disabledSelect" class="form-select" name="estatus">
                                    <option>Status</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div> -->
                        
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include 'home/footer.php';?>