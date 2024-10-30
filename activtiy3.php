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
<?php
    $arrUsersList = array(
        'Admin' => array(
            'admin' => 'Pass1234',
            'renmark' => 'Pogi1234'
        ),
    
        'Content Manager' => array(
            'pepito' => 'manaloto',
            'juan' => 'delacruz'
        ),
    
        'System User' => array(
            'pedro' => 'penduko'
        )
    )
?>

    <div class="container mt-3">
        <?php if(isset($_REQUEST['btnSignIn'])): ?> 
            <?php
                $userType = $_REQUEST['inputUserType'];
                $userUsername = $_REQUEST['inputUserName'];
                $userPassword = $_REQUEST['inputPassword'];

                if (array_key_exists($userUsername, $arrUsersList[$userType]) && ($arrUsersList[$userType][$userUsername] == $userPassword)):
            ?>
                    <div class="alert alert-success alert-dismissible fade show" style="max-width: 350px; margin: auto;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        Welcome to the system: <?php echo $userUsername?>.
                    </div>
                
                <?php else: ?>
                    <div class="alert alert-danger alert-dismissible fade show" style="max-width: 350px; margin: auto;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        Incorrect Username / Password.
                    </div>
                <?php endif; ?>
        <?php endif; ?>
<div class="col-3 col-md-4"> 
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
                <button class="btn btn-lg custom-button btn-block btn-signin" type="submit" name='btnSignIn'>Sign in</button>
                
                </div>
            </form>
        </div>
        </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>