<?php
include("./functionality/db.php");
include("./functionality/functions.php");

$sql = "SELECT accountID, username, email FROM account WHERE userrole = 'customer'";
?>
<table class="table">
    <thead>
    <th>Account ID</th>
    <th>username</th>
    <th>email</th>
    <th>verwijder</th>
    <th>pas aan</th>
    </thead>
<?php
    foreach($conn->query($sql) as $row) {
        echo '<tr>
                <td>' . $row["accountID"] . '</td>
                <td>' . $row["username"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>verwijder</td>
                <td>pas aan</td>
              </tr>';
}?>

</table>