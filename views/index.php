<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <input type="text" name="username" class="form-control mb-2"
                        placeholder="USERNAME" required autofocus>
                        <input type="password" name="password" class="form-control mb-5"
                        placeholder="PASSWORD">

                        <button type="submit" class="btn btn-primary w-100" 
                        name="btn_submit">Log in</button>
                    </form>

                    <p class="text-center mt-3 small">
                        <a href="register.php">Create Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>