<html>
    <body>
        <h1>Form Demo Post Method</h1>
        <form action="process.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="Name" required=""/></td>
                </tr>
                 <tr>
                    <td>Age</td>
                    <td><input type="number" name="Age" min="1" max="100"required=""/></td>
                </tr>
                <tr>
                    <td>Enrollment Number</td>
                    <td><input type="number" name="ENno" /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"/></td>
                </tr>
                <tr>
                    <td><input type="submit" /> </td>
                    <td><input type="reset" /> </td>
                </tr>
            </table>
            
        </form>
    </body>
</html>