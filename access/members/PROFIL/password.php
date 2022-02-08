<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="with=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>My password</title>
    </head>

    <body>
        <header>
            <div class="profile">
                <p>First Name - Last Name</p>
            </div>

            <div class="title">
                <i class="fa fa-user"></i>
                <h3>Password</h3>
            </div>
        </header>

        <!----------- Password change ------------>
        <section>
            <div class="bloc-form">
                <div>
                    <h4 style="font-size: 1.2em;">Password change</h4>
                    <p style="color: #C5C4CB;">Update your password</p>
                </div>

                <form method="post" action="action_password.php">
                    <table>

                        <!----------- Current Password ------------>
                        <tr style="margin-top: 20px;">
                            <td><label for="current-password">Current Password <span class="etoile">*</span></label></td>
                            <td><input type="password" name="current-password" id="current-password" placeholder="Current Password" required/><p class="error-text">Old password Required !</p></td>
                        </tr>

                        <!-----------   New Password ------------>
                        <tr>
                            <td><label for="new-password">New Password <span class="etoile">*</span></label></td>
                            <td><input type="password" name="new-password" id="new-password" placeholder="New Password" required/></td>
                        </tr>

                        <!----------- Retype the new Password ------------>
                        <tr>
                            <td><label for="retype-new-password">Retype the new Password <span class="etoile">*</span></label></td>
                            <td><input type="password" name="retype-new-password" id="retype-new-password" placeholder="Retype the new password" required/></td>
                        </tr>

                        <!----------- Save ------------>
                        <tr class="submit">
                            <td>
                                <!-- <i class="fa fa-floppy-o" aria-hidden="true"></i> -->
                                <input type="submit" name="save" value="Save"/>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </section>

    </body>
</html>