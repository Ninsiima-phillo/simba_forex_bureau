<?php
include "database.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP INTERVIEW</title>

</head>

<body>

    <center><u>Table of Simba forex bureau Clients</u></center><br />
    <?php
    function viewclients()
    {
        global $connect;
        $select = mysqli_query($connect, "SELECT * FROM clients_table");
        if ((mysqli_num_rows($select) > 0)) {
    ?>
            <div>
                <table>

                    <tr>
                        <td>No.</td>
                        <td>Client Name</td>
                        <td>Initial Amount(USD)</td>
                        <td>Final Amount(USD)</td>
                    </tr>


                    <tr>
                        <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                            <td><?php echo $row['id']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $row['client_name']; ?></td>
                            <td><?php echo $row['initial_usd']; ?></td>
                            <td><?php
                                $initial_usd = $row['initial_usd'];
                                $usd_buying = 3870 * $initial_usd;
                                $ugx_selling = (1 / 3650);
                                if ($usd_buying > 1000000) {
                                    $ura_tax = 0.02;
                                    $taxed_usd_buying = $usd_buying * $ura_tax;
                                    $new_usd_buying = $usd_buying - $taxed_usd_buying;

                                    $final_amount_taxed =  $new_usd_buying * $ugx_selling;

                                    echo $final_amount_taxed;
                                } else {
                                    $final_amount_notax =  $usd_buying * $ugx_selling;
                                    echo $final_amount_notax;
                                }
                                ?></td>
                    </tr>



                <?php } ?>


                </table>
            </div>

        <?php
        }
        ?>
        </div>

</body>

</html>
<?php
    }
    viewclients();
?>