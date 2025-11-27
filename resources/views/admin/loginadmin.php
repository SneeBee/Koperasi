<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>

<body>
    <div class="formregister">
        <form action="registeraja" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" required><br>

            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" required><br>

            <label for="email">Email</label>
            <input type="email" name="email" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" required><br>

            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required><br>

            <label for="role">Role</label>
            <select name="role" required>
                <option value="penumpang">Penumpang</option>
                <option value="petugas">Petugas</option>
                <option value="admin">Admin</option>
            </select><br>

            <button type="submit">Register</button>
        </form>
    </div>
</body>

</html>
