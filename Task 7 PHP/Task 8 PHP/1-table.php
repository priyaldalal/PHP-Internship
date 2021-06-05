<?php
$connetion = mysqli_connect("localhost","root","","db_internship");
//qurry
$q = mysqli_query($connetion, "select * from tbl_resume where user_delete = 0") or die(mysqli_error($connetion));
echo "<table border='1'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>Fname</th>";
echo "<th>Lname</th>";
echo "<th>Email</th>";
echo "<th>Subject</th>";
echo "<th>Message</th>";
echo "</tr>";
$i = 0;
while ($row = mysqli_fetch_array($q)){
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['user_fname']}</td>";
    echo "<td>{$row['user_lname']}</td>";
    echo "<td>{$row['user_email']}</td>";
    echo "<td>{$row['user_subject']}</td>";
    echo "<td>{$row['user_message']}</td>";
    echo "<td><a href='edit.php?id={$row['user_id']}'>Edit</a> / <a href='Delete.php?deleteid={$row['user_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='form.php'>Add Record</a> ";
