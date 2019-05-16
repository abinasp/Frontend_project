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
                <a href="#" class="brand-logo"
                    ><img class="responsive-img" src="img/logo.png"
                /></a>
                <div id="nav-mobile" class="right">
                    <button href="#regst" class="waves-effect waves-light btn view-btn modal-trigger">Add User</button>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>Account number</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>9154879235</td>
                                <td>Sudhansu</td>
                                <td>8050579390</td>
                                <td><i class="lni-rupee prefix"></i> 15,000</td>
                                <td>
                                    <a
                                        href="#regst"
                                        class="waves-effect waves-light btn view-btn modal-trigger"
                                    >
                                        Update</a
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td>9154879235</td>
                                <td>Sudhansu</td>
                                <td>8050579390</td>
                                <td><i class="lni-rupee prefix"></i> 15,000</td>
                                <td>
                                    <a
                                        href="#regst"
                                        class="waves-effect waves-light btn view-btn modal-trigger"
                                    >
                                        Update</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                        /><label>Account number</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input
                            type="text"
                            id="c_name"
                            class="validate"
                            name="cName"
                        /><label>Name</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input
                            type="text"
                            id="c_father_name"
                            class="validate"
                            name="cFathername"
                        /><label>Father's Name </label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">contact_mail</i>
                        <textarea
                            id="c_address"
                            class="materialize-textarea"
                        ></textarea>
                        <label>Address</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone_iphone</i>
                        <input
                            type="text"
                            id="c_mobile"
                            class="validate"
                            name="cMobile"
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
                        />
                        <label>National Id</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">event</i>
                        <select id="c_type">
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
                        />
                        <label>Amount</label>
                    </div>

                    <div class="input-field col s12">
                        <button
                            class="btn waves-effect waves-light"
                            type="submit"
                            onclick="OnRegisterCustomer()"
                        >
                            Register
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
