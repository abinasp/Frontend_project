<?php
    require_once 'config.php';

    $id = $_GET['id'];
    $url = "$API_URL/customer/get-single-customer";
    $data = json_encode(array('customer_id'=>$id));
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
    $customerDetails = $decodeResponse['data'];
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
        <script>
            var customerId = <?php echo $id; ?>
        </script>
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
            <div style="padding:5em; border: 1px solid rgb(234, 234, 234);box-shadow: rgb(165, 160, 160) 0px 1px 0px;border-radius:4px ; max-height: 328px; ">
            <p>
                <b>Account number:</b> <?php echo $customerDetails['account_number'];?>
            </p>
            <p>
                <b>Name:</b> <?php echo $customerDetails['name'];?>
            </p>
            <p>
                <b>Mobile:</b> <?php echo $customerDetails['mobile'];?>
            </p>
            <p>
                <b>Amount:</b> <?php echo $customerDetails['amount'];?>
            </p>
            <a href="#regst" style="margin-top:5vh;" class="waves-effect waves-light btn view-btn modal-trigger">Update</a>
            </div>
            <div style="  padding:5em;border: 1px solid rgb(234, 234, 234);box-shadow: rgb(165, 160, 160) 0px 1px 0px;;border-radius:4px;  min-height: 328px; "><img style="max-width: 170px;" src="img/logo.png"
                />
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="regst" class="modal">
            <a
                href="#!"
                class="modal-close waves-effect waves-green btn-flat right"
                ><i class="material-icons">close</i></a
            >
            <div class="modal-content">
                <div class="col s6">
                    <div class="input-field col s12">
                        <i class="material-icons prefix"
                            >account_balance_wallet
                        </i>
                        <input
                            type="text"
                            id="c_account"
                            class="validate"
                            name="cAccount"
                            value="<?php echo $customerDetails['account_number']?>"
                        /><label>Account number</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input
                            type="text"
                            id="c_name"
                            class="validate"
                            name="cName"
                            value="<?php echo $customerDetails['name']?>"
                        /><label>Name</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input
                            type="text"
                            id="c_father_name"
                            class="validate"
                            name="cFathername"
                            value="<?php echo $customerDetails['father_name']?>"
                        /><label>Father's Name </label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">contact_mail</i>
                        <input
                            type="text"
                            id="c_address"
                            class="validate"
                            name="cAddress"
                            value="<?php echo $customerDetails['address']?>"
                        ></input>
                        <label>Address</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone_iphone</i>
                        <input
                            type="text"
                            id="c_mobile"
                            class="validate"
                            name="cMobile"
                            value="<?php echo $customerDetails['mobile']?>"
                        />
                        <label>Mobile</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input
                            type="text"
                            id="c_national_id"
                            class="validate"
                            name="cNationalId"
                            value="<?php echo $customerDetails['national_id']?>"
                        />
                        <label>National Id</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">event</i>
                        <select id="c_type" value="<?php echo $customerDetails['type']?>">
                            <option value="" disabled selected
                                >Choose your option</option
                            >
                            <option value="Monthly">Monthly</option>
                            <option value="One time">One time</option>
                            <option value="Daily">Daily</option>
                        </select>
                        <label>Type</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="lni-rupee prefix"></i>
                        <input
                            type="text"
                            id="c_amount"
                            class="validate"
                            name="cAmount"
                            value="<?php echo $customerDetails['amount']?>"
                        />
                        <label>Amount</label>
                    </div>

                    <div class="input-field col s12">
                        <input
                            type="file"
                            id="c_image"
                            class="validate"
                            name="cImage"
                        />
                    </div>
                    <div class="input-field col s12">
                        <button
                            class="btn waves-effect waves-light"
                            type="submit"
                            onclick="OnUpdateCustmer()">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>