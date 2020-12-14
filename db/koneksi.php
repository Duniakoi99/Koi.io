<?php
    session_start();

    include 'config.php';

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $cek = mysqli_query($connect, "SELECT * FROM user WHERE username='$user' and password='$pass'");

    $cekdata = mysqli_fetch_array($cek);
    $periksa = mysqli_num_rows($cek);

    if($periksa!=0){
        $_SESSION[id]=$cekdata[id];
        $_SESSION[username]=$cekdata[username];
        $_SESSION[password]=$cekdata[password];
        $_SESSION[level]=$cekdata[level];
        header('location:../ceklogin.php');
    }else{
?>

<script language="javascript">
    alert('Username or Password salah');
    history.go(-1);
</script>

<?php
    }
?>