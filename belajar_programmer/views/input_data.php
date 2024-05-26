$server ="localhost";
$username ="root";
$password ="";
$database_name ="input";


$koneksi = mysqli_connect($server,$username,$password,$database_name);

 $nama    = $_POST['nama'];
 $alamat  = $_POST['alamat'];
 $nomorhp = $_POST['nomorhp'];



require_once '../connect.php';

$query = mysqli_query($koneksi, "INSERT INTO input VALUE('', '$nama', '$alamat', '$nomorhp')");




if($query) {

    echo "<script>alert('Data Berhasil DiInput'); window.location.href = '../index.php';</script>";
}else{

    echo "<script>alert('Data Gagal DiInput'); window.location.href = '../daftar.php';</script>";
}
