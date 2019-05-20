<?php
    require_once 'config.php';

    $id = $_GET['id'];
    $url = "$API_URL/user/get-single-user";
    $data = json_encode(array('user_id'=>$id));
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => array('Accept: application/json','Content-Type: application/json'),
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $decodeResponse = json_decode($response,TRUE);
    $userDetails = $decodeResponse['data'];
    
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
        <div class="container" style="align-items:center;height:90vh; display:flex; justify-content:center;">
            <div style="padding:9em; border: 1px solid rgb(234, 234, 234);box-shadow: rgb(165, 160, 160) 0px 1px 0px;border-radius:4px ; max-height: 328px; ">
            <p>
                <b>Name:</b> <?php echo $userDetails['name'];?>
            </p>
            <p>
                <b>User name:</b> <?php echo $userDetails['username'];?>
            </p>
            </div>
            <div style="  padding:5em;border: 1px solid rgb(234, 234, 234);box-shadow: rgb(165, 160, 160) 0px 1px 0px;;border-radius:4px;  min-height: 328px; "><img style="max-width: 170px;" src="img/logo.png"
                />
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>