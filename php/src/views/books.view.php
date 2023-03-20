<html>
    <head>
        <title>Login</title>
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
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Mòdul</th>
            <th scope="col">Editorial</th>
            <th scope="col">Preu</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $book->getModule() ?></td>
                <td><?= $book->publisher ?></td>
                <td><?= $book->price ?></td>
                <td><a href="book.php?book=<?= $book->id ?>">Veure</a></td>
                <td><a href="updateBook.php?book=<?= $book->id ?>">Modificar</a></td>
                <td><a href="deleteBook.php?book=<?= $book->id ?>">Esborrar</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="newBook.php" class="btn btn-primary">Crear nou llibre</a>
</body>
</html>
