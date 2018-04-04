<html>
<head>
<title>Example</title>
</head>
<body>
<form method="get" action="email.php">
<input type="hidden" name="to" value="davidson.bp@hotmail.com">
<input type="hidden" name="subject" value="subject in subject line">
<table>
<tr>
<td>name:</td>
<td><input type="text" name="name" style="border-width:"></td></tr>
<tr>
<td>email:</td>
<td><input type="text" name="email" style="border-width:"></td>
</tr>
</table>
<br>
message:<br>
<textarea name="message" rows="14" cols="44"></textarea><br>
<br>
<input type="submit" value="submit" name="submit" style="background:#004080; font-family: Verdana; font-size: 10pt; color: #C0C0C0; font-weight: bold; border-width: 1; border-color: #0080FF; margin-left: 0px;"><br>
</body>
</html>