<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard Admin</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body class="sb-nav-fixed">

    <div class="container">
        <h2>Membuat CRUD</h2>
        <p>Anda dapat mengelola data user</p>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($admin as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u->username ?></td>
                        <td><?= $u->email ?></td>
                        <td><?= $u->password ?></td>

                        <td>	
                            <?php echo anchor('adminmasuk/edit/'.$u->username,'Ubah'); ?>
                            <?php echo anchor('adminmasuk/hapus/'.$u->username,'Hapus'); ?>	
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
