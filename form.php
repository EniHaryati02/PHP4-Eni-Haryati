
<!DOCTYPE html>
<html>

<head>
    <title>DATA USER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
	<style>
		.form-group {
			margin-bottom: 1rem;
		}
	</style>
</head>

<body>

    <div class="container">
        <h1 class="text-center my-5">DATA USER</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">phone number</label>
                <input type="text" class="form-control" name="phone" required>
            </div>

            <div class="form-group">
                <label for="role">role</label>
                <select class="form-control" name="role" required>
                    <option value="">choose</option>
                    <option value="admin">admin</option>
                    <option value="staff">staff</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">address</label>
                <textarea class="form-control" name="address"></textarea>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password" required>
                    <button class="btn btn-outline-secondary" type="button" id="showPasswordBtn"><i
                            class="fas fa-eye"></i></button>
                </div>
            </div>

            <div class="form-group">
                <label for="avatar">avatar</label>
                <input type="file" class="form-control" name="avatar" accept="image/*">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">save</button>
            <a href="readuser.php" class="btn btn-danger">back</a>

        </form>
    </div>
</body>

</html>