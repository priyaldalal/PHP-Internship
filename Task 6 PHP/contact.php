<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Priyal Tech</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './Themepart/Menue.php';
include './Themepart/logo1.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="pic2.jpg" width="920" height="450" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">CONTACT </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
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
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
                <?php
                        include './Themepart/sidebar.php';
                ?>
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
                include './Themepart/footer.php';
?>
<!-- end #footer -->
</body>
</html>