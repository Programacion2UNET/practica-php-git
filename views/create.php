<html>
    <head>
        <title>Crear registro</title>
    </head>
    <body>
        <div class="contenedor">
            <form method="post"
                  action="../controllers/biblioteca.php"
            >
                <fieldset>
                    <legend>Datos del libro</legend>
                    <div class="row codigo">
                        <label for="codigo">Código</label>
                        <input id="codigo" name="codigo" type="text"
                               required maxlength="8" placeholder="ABCD1234"
                        >
                    </div>
                    <div class="row titulo">
                        <label for="titulo">Título</label>
                        <input id="titulo" name="titulo" type="text"
                               required maxlength="20" placeholder="Inserte titulo"
                        >
                    </div>
                    <div class="row autor">
                        <label for="autor">Autor</label>
                        <input id="autor" name="autor" type="text"
                               required maxlength="30" placeholder="Inserte nombre del autor"
                        >
                    </div>
                    <div class="row fpublicacion">
                        <label for="fpublicacion">Fecha de publicación</label>
                        <input id="fpublicacion" name="fpublicacion" type="date"
                               required placeholder="Inserte DD/MM/YY"
                        >
                    </div>
                    <div class="row editorial">
                        <label for="editorial">Editorial</label>
                        <input id="editorial" name="editorial" type="text"
                               maxlength="40" placeholder="Inserte nombre de la editorial"
                        >
                    </div>
					<input type="submit" value="Registrar">
                </fieldset>
            </form>
        </div>
    </body>
</html>