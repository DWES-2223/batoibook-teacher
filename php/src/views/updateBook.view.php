<!DOCTYPE html>
<html lang="ca">
<head>
    <title>UpdateBook</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    >
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
    >
    </script>
</head>
    <body>
        <h2>Afegir llibre</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $book->id ?>">
            <label for="publisher">Editorial:</label><br>
            <input type="text" id="publisher" name="publisher" value="<?= $book->publisher ?>" required><br>

            <label for="price">Preu:</label><br>
            <input type="number" id="price" name="price" value="<?= $book->price ?>" required><br>
            <label for="pages">Pàgines:</label><br>
            <input type="number" id="pages" name="pages" value="<?= $book->pages ?>" required><br>

            <label for="status">Estat:</label><br>
            <select id="status" name="status" required>
                <option value="new" <?= ($book->status == 'new')?'selected':'' ?>>Nou</option>
                <option value="good" <?= ($book->status == 'good')?'selected':'' ?>>Bo</option>
                <option value="used" <?= ($book->status == 'used')?'selected':'' ?>>Segona mà</option>
                <option value="bad" <?= ($book->status == 'bad')?'selected':'' ?>>Estropejat</option>
            </select><br>

            <label for="photo">Foto:</label><br>
            <input type="file" id="photo" name="photo" required><br>

            <label for="comments">Comentaris:</label><br>
            <textarea id="comments" name="comments"><?= $book->comments ?></textarea><br>

            <label for="idModule">Mòdul:</label><br>
            <select id="idModule" name="idModule">
                <?php foreach (App\Module::getAll() as $module): ?>
                    <option value="<?= $module->code ?>" <?= ($book->idModule == $module->code)?'selected':'' ?>>
                        <?= $module->cliteral ?>
                    </option>
                <?php endforeach; ?>
            <input type="submit" value="Afegir">
        </form>
    </body>
</html>
