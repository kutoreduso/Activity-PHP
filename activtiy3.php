<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login Systemt</title>
</head>
<body>

<div class="col-3"> 
<div class="card card-container ">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" class="form-signin">
                <select class="form-select" name="inputUserType" id="inputUserType">
                    <option value="Admin">Admin</option>
                    <option value="Content Manager">Content Manager</option>  
                    <option value="System User">System User</option>   
                </select>

                <input type="text" name="inputUserName" id="inputUserName" class="form-control" placeholder="User Name" required autofocus>
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name='btnSignIn'>Sign in</button>
                </div>
            </form><!-- /form -->
        </div><!-- /card-container -->
    <script src="js/bootstrap.js"></script>
</body>
</html>