<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * from vendor");
if (mysqli_num_rows($query) > 0) {
} else {
    $msg = "No Record Found";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-contextual">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Name </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    echo '<tr>
                                    <td>' . $row['vendor_id'] . '</td>
                                    <td>' . $row['vendor_name'] . '</td>
                                    </tr>';
                                }
                                ?>
                            </th>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>