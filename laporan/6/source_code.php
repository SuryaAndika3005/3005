<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die("Akses langsung tidak diizinkan.");
} //agar tidak bisa diakses langsung dari browser

//PRAKTIKUM 6

$querysql = <<<'EOT'
CREATE TABLE `mahasiswa` (
 `id` int(11) NOT NULL,
 `nim` varchar(16) NOT NULL,
 `nama` varchar(128) NOT NULL,
 `jurusan` varchar(128) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
EOT;

$config = <<<EOT
<?php
    define('BASE_URL', 'http://localhost/web_programming/lab06/');
?>
EOT;

$database = <<<'EOT'
<?php
class Database {
    private $host = "localhost";
    private $db_name = "pemrograman_web";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        } catch (Exception $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>
EOT;

$alert = <<<'EOT'
<?php
function alert($msg, $sts) {
    if($sts == 1) {
        $tipe = 'success';
    } else {
        $tipe = 'danger';
    }

    echo '
        <div class="alert alert-'.$tipe.'" role="alert">'.$msg.'
        </div>
    ';
}
EOT;

$model = <<<'EOT'
<?php
session_start();
class Mahasiswa {
    private $conn;
    private $table_name = "mahasiswa";

    public $id;
    public $nim;
    public $nama;
    public $jurusan;

    public function __construct($db) {
        $this->conn = $db;
    }
EOT;

    $modelcreate = <<<'EOT'
        public function create() {
            $query = "INSERT INTO " . $this->table_name . " SET nim=?, nama=?, jurusan=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("sss", $this->nim, $this->nama, $this->jurusan);
            if ($stmt->execute()) {
                $_SESSION['flash_message'] = "Data berhasil disimpan!";
                header("Location: " . BASE_URL . "index.php?msg=1");
            } else {
                $_SESSION['flash_message'] = "Data gagal disimpan!";
                header("Location: " . BASE_URL . "index.php?msg=0");
            }
        }
    EOT;

$modelread = <<<'EOT'
    public function read($id="") {
        if ($id == "") {
            $query = "SELECT * FROM " . $this->table_name;
        } else {
            $query = "SELECT * FROM " . $this->table_name . " WHERE id= " . $id;
        }
        $result = $this->conn->query($query);
        return $result;
    }
EOT;

$modelupdate = <<<'EOT'
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nim=?, nama=?, jurusan=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", $this->nim, $this->nama, $this->jurusan, $this->id);
        if ($stmt->execute()) {
            $_SESSION['flash_message'] = "Data berhasil diupdate!";
            header("Location: " . BASE_URL . "index.php?msg=1");
        } else {
            $_SESSION['flash_message'] = "Data gagal diupdate!";
            header("Location: " . BASE_URL . "index.php?msg=0");
        }
    }
EOT;

$modeldelete = <<<'EOT'
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->id);
        if ($stmt->execute()) {
            $_SESSION['flash_message'] = "Data berhasil dihapus!";
            header("Location: " . BASE_URL . "index.php?msg=1");
        } else {
            $_SESSION['flash_message'] = "Data gagal disimpan!";
            header("Location: " . BASE_URL . "index.php?msg=0");
        }
    }
}
?>
EOT;

$function = <<<'EOT'
<?php
include_once '../config/Database.php';
include '../config/Config.php';
include_once '../model/Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();
$mahasiswa = new Mahasiswa($db);

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'create') {
        $mahasiswa->nim = $_POST['nim'];
        $mahasiswa->nama = $_POST['nama'];
        $mahasiswa->jurusan = $_POST['jurusan'];
        $mahasiswa->create();
    } elseif ($_GET['action'] == 'delete') {
        $mahasiswa->id = $_GET['id'];
        $mahasiswa->delete();
    } elseif ($_GET['action'] == 'update') {
        $mahasiswa->id = $_POST['id'];
        $mahasiswa->nim = $_POST['nim'];
        $mahasiswa->nama = $_POST['nama'];
        $mahasiswa->jurusan = $_POST['jurusan'];
        $mahasiswa->update();
    }
}
?>
EOT;

$index = <<<'EOT'
<?php
include 'function/Alert.php'; 
include_once './config/Database.php'; 
include_once './model/Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();
$mahasiswa = new Mahasiswa($db);
$result = $mahasiswa->read();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OOP - CRUD</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center">Data Mahasiswa</h4>
                    <a class="btn btn-primary btn-sm mb-2" href="create.php">Tambah Mahasiswa</a>
                    <!-- show alert -->
                    <?php
                        if (isset($_SESSION['flash_message']) && isset($_GET['msg'])) { 
                            if ($_GET['msg'] == '1') {
                                alert($_SESSION['flash_message'], 1);
                            }else{
                                alert($_SESSION['flash_message'], 0);
                            }
                        }
                    ?>
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>JURUSAN</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$row['nim']?></td>
                                    <td><?=$row['nama']?></td>
                                    <td><?=$row['jurusan']?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="edit.php?id=<?=$row['id']?>">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="function/Mahasiswa.php?action=delete&&id=<?=$row ['id']?>" onclick="return confirm('Anda yakin ingin menghapus Data <?php echo $row['nama'];?>?');">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
EOT;

$create = <<<'EOT'
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OOP - Create</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Create Mahasiswa</h1>
                <form action="function/Mahasiswa.php?action=create" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" required>
                    </div>
                        <button type="submit" class="btn btn-primary mt-2">Create</button>
                </form>
            </div>
        </div>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
EOT;

$edit = <<<'EOT'
<?php
include_once './config/Database.php'; 
include_once './model/Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();

$mahasiswa = new Mahasiswa($db);

if (isset($_GET['id'])) {
$result = $mahasiswa->read($_GET['id'])->fetch_assoc();
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OOP - Edit</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Edit Mahasiswa</h1>
                <form action="function/Mahasiswa.php?action=update" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="hidden" class="form-control" name="id" value="<?=$result['id'];?>" required>
                        <input type="text" class="form-control" name="nim" value="<?=$result['nim'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?=$result['nama'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?=$result['jurusan'];?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt- 2">Update</button>
                </form>
            </div>
        </div>
        <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>
EOT;

$form = <<<'EOT'
<?php
include_once './config/Database.php';
include_once './model/Mahasiswa.php';

$database = new Database();
$db = $database->getConnection();
$mahasiswa = new Mahasiswa($db);

$isEdit = false;
$data = [
    'id' => '',
    'nim' => '',
    'nama' => '',
    'jurusan' => ''
];

if (isset($_GET['id'])) {
    $result = $mahasiswa->read($_GET['id'])->fetch_assoc();
    if ($result) {
        $isEdit = true;
        $data = $result;
    }
}

$formAction = $isEdit ? 'function/Mahasiswa.php?action=update' : 'function/Mahasiswa.php?action=create';
$formTitle = $isEdit ? 'Edit Mahasiswa' : 'Create Mahasiswa';
$submitText = $isEdit ? 'Update' : 'Create';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $formTitle ?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <h1><?= $formTitle ?></h1>
        <form action="<?= $formAction ?>" method="post">
            <?php if ($isEdit): ?>
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <?php endif; ?>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" value="<?= $data['nim'] ?>" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" value="<?= $data['jurusan'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2"><?= $submitText ?></button>
        </form>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
EOT;
?>
