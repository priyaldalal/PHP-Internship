<?php
$connetion = mysqli_connect("localhost","root","","db_internship");
//qurry
$q = mysqli_query($connetion, "select * from tbl_user where user_delete = 0") or die(mysqli_error($connetion));
echo "<table border='1'>";
echo "<tr>";
echo "<th>user id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($q)){
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='Delete.php?deleteid={$row['user_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='form.php'>Add Record</a> ";