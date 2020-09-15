<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unisinos minha biblioteca</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-1">Livros:</h1>
        <form action="/" class="float-left">
            <input type="text" name="search" value="<?= $_GET['search'] ?? '' ?>" class="form-control" style="display:inline; width:auto; vertical-align:top">
            <button class="btn btn-primary">Procurar</button>
        </form>

        <?php if ($user != null): ?>
            <a href="book_new_view.html" class="btn btn-primary float-right mb-3">Adicionar livro</a>
            <a href="admin_list.php" class="btn btn-secondary float-right mb-3">Ver admin</a>
        <?php else: ?>
            <a href="/login.php" class="btn btn-primary float-right mb-3">Logar</a>
        <?php endif;?>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">Número de páginas</th>
                <th scope="col">Públicado em</th>
                <th scope="col">Públicado por</th>
                <th scope="col">Editado por</th>
                <th scope="col"></th>
            </tr>
            </thead>
            
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <th scope="row"><?= $book['id'] ?></th>
                        <td><?= $book['name'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['page_number'] ?></td>
                        <td><?= $book['published_at'] ?></td>
                        <td><?= $book['published_by'] ?></td>
                        <td><?= $book['edited_by'] ?></td>
                        <td><a href="edit_book.php?book_id=<?= $book['id'] ?>">Editar</a> <a href="delete_book.php?book_id=<?= $book['id'] ?>">Deletar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>