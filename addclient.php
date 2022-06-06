<?php
include "database.php";
?>
<!DOCTYPE html>

<head>
    <title>PHP INTERVIEW</title>

</head>

<body>
    <?php
    function addclient()
    {
        global $connect;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $client_name = $_POST['client_name'];
            $initial_usd = $_POST['initial_usd'];

            $insert = mysqli_query($connect, "INSERT INTO clients_table (id,client_name,initial_usd) VALUES (NULL, '$client_name','$initial_usd')");
            if ($insert) {
                echo "client added";
            } else {
                echo "client not added";
            }
        }
    ?>

        <div style="float:left; width:60%;">

            <div class="form">
                <div class="form_title">Client form</div>
                <form action="" method="post">
                    Client Name:<br />
                    <input type="text" name="client_name"><br /><br />
                    Initial USD:<br />
                    <input type="number" name="initial_usd"><br /><br />

                    <input type="submit" value="Add Client" />&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" />
                </form>
            </div>

        </div>
        <div>

</body>

</html>
<?php
    }
    addclient();

?>