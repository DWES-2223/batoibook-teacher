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
<h2>Book <?= $book->getModule() ?></h2>
<h4>Publisher <?= $book->publisher ?></h4>
<h4>Owner <?= $book->getOwner() ?></h4>
<h4>Price <?= $book->price ?></h4>
<h4>Pages <?= $book->pages ?></h4>
<h4>Status <?= $book->status ?></h4>
<h6><?= $book->comments ?></h6>
</body>
</html>