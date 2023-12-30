<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * from vendor");
$r  = mysqli_fetch_array($query);

while ($row = mysqli_fetch_array($query)) {
    echo '<tr>
			<td>' . $row['vendor_id'] . '</td>
			<td>' . $row['vendor_name'] . '</td>
		</tr>';
}
echo '
	</tbody>
</table>';
