<?php 
    require_once('config.php');
    $getUsers = json_decode(@file_get_contents("$API_URL/user/get-users"),TRUE);
    $users = $getUsers['data'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Somobay Somiti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="css/materialize.css" />
        <link rel="stylesheet" href="css/lineIcons.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="<?php echo "$UI_URL/dashboard.php"?>" class="brand-logo"
                    ><img class="responsive-img" src="img/logo.png"
                /></a>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>User name</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(sizeof($users)):?>
                                <?php foreach($users as $user):?>
                                <tr>
                                <td><?php echo $user['name'];?></td>
                                <td><?php echo $user['username'];?></td>
                                <td>
                                    <a
                                        href="<?php echo "http://localhost/Frontend_project/employee.php?id=".$user['id'];?>"
                                        class="waves-effect waves-light btn view-btn modal-trigger"
                                    >
                                        View</a
                                    >
                                </td>
                            </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>