<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div class="card w-25 m-auto">
        <h4 class="card-title text-center mb-4 mt-1">Logar</h4>
        <hr>
        
        <form action="/login_action.php" method="post">
            <div class="form-group">
                <div class="input-group">
                    <input name="email" class="form-control" placeholder="email" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input name="password" class="form-control" placeholder="******" type="password">
                </div>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div>
        </form>
    </div>
</body>
</html>