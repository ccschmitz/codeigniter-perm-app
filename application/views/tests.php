<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CI Access Library</title>

		<style type="text/css">
			#container{
				margin: 10px;
				border: 1px solid #D0D0D0;
				padding: 25px;
				-webkit-box-shadow: 0 0 8px #D0D0D0;
			}

			p {
				margin: 0;
			}
		</style>
	</head>
	<body>

	<div id="container">
		<h1>Perm Library Tests</h1>

		<h2>Roles</h2>
		<p><strong>Has role 'users':</strong> <u><?php echo $this->perm->has_role('users') ? 'True' : 'False'; ?></u> => should be 'true'</p>
		<p><strong>Has role 'users_create':</strong> <u><?php echo $this->perm->has_role('users_create') ? 'True' : 'False'; ?></u> => should be 'false'</p>
		<p><strong>Has role 'admin':</strong> <u><?php echo $this->perm->has_role('admin') ? 'True' : 'False'; ?></u> => should be 'true'</p>
		<p><strong>Has roles 'users' and 'admin':</strong> <u><?php echo $this->perm->has_role(array('users', 'admin')) ? 'True' : 'False'; ?></u> => should be 'true'</p>
		<p><strong>Has roles 'companies' and 'admin':</strong> <u><?php echo $this->perm->has_role(array('companies', 'admin')) ? 'True' : 'False'; ?></u> => should be 'false'</p>
		<p><strong>Has role in hierarchy 'admin:users:users_create'</strong> <u><?php echo $this->perm->has_role('admin:users:users_create') ? 'True' : 'False'; ?></u> => should be 'true'</p>

		<h2>Groups</h2>
		<p><strong>In group 'admin':</strong> <u><?php echo $this->perm->in_group('admin') ? 'True' : 'False'; ?></u> => should be 'true'</p>
		<p><strong>In group '1':</strong> <u><?php echo $this->perm->in_group(1) ? 'True' : 'False'; ?></u> => should be 'true'</p>
		<p><strong>In group 'users':</strong> <u><?php echo $this->perm->in_group('users') ? 'True' : 'False'; ?></u> => should be 'false'</p>
	</div>

	</body>
</html>