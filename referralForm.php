<html>
<head>
    <meta charset="UTF-8">
    <title>Referral Page</title>
</head>
<body>
<header>
    <h1>Refer A Friend</h1>
</header>
<table>
    <tr>
        <td><form action="sendReferral.php" method="post"></td>
        <th>First Name</th>
            <td><input type="text" name="firstName"></td>
        <th>Last Name</th>
            <td><input type="text" name="lastName"></td>
        <th>Email Address</th>
            <td><input type="email" name="email"></td>
        <td><input type="submit" name="sendReferralEamil"></td>
    </tr>
</table><br><br>
<footer>
    &copy; <?php echo date("Y");?>
</footer>
</body>
</html>
