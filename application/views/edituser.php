<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<?php foreach($admin as $u){ ?>
	<form action="<?php echo base_url(). 'adminmasuk/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input readonly name="username" value="<?php echo $u->username ?>">
				</td>
			</tr>

            <tr>
				<td>Email</td>
				<td>
                <input type="email" name="email" value="<?php echo $u->email ?>">
				</td>
			</tr>

            <tr>
				<td>Password</td>
				<td>
                <input type="text" name="password" value="<?php echo $u->password ?>">
				</td>
			</tr>

            <tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
			
		</table>
	</form>	
	<?php } ?>
</body>
</html>