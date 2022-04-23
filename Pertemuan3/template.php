<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Latihan Form Processing</title>
    <style>
       
    </style>
</head>
<body>
    <div class="header">
        <h4>Sistem Penilaian</h4>
    </div>
    <h3 style="margin-left: 10px;">Form Nilai Siswa</h3>
        <hr>
        <div class="m-5 border border-success p-4 rounded">
            <form method="POST" autocomplete="off" action="nilai_siswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-3">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-3">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="DDP">Dasar Dasar Pemograman</option>
                        <option value="BDI">Basis Data</option>
                        <option value="WEB1">Pemograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-3">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-3">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-3">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                
            </form>
        </div>

                <!-- Cetak php -->
                <?php
                    if(isset($_GET['submit'])){
                        $nama = $_GET['nama'];
                        $matkul = $_GET['matkul'];
                        $nilai_uts = $_GET['nilai_uts'];
                        $nilai_uas = $_GET['nilai_uas'];
                        $nilai_tugas = $_GET['nilai_tugas'];
                        $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

                        // if($matkul == 'basis_data'){
                        //     $nama_matkul = 'Basis Data';
                        // }elseif($matkul == 'php'){
                        //     $nama_matkul = 'PHP';
                        // }elseif($matkul == 'ddp'){
                        //     $nama_matkul = 'DDP';
                        // }
                          
                        switch($matkul){
                            case "basis_data": $nama_matkul = "Basis Data"; break;
                            case "php": $nama_matkul = "PHP"; break;
                            case "ddp": $nama_matkul = "Dasar Dasar Pemerograman"; break;
                            default: "";
                        }

                    }?>
                
                <?php if(isset($_GET['submit'])){?>
                    <p>Nama Lengkap : <?= $nama?> </p>
                    <p>Mata Kuliah : <?= $nama_matkul?></p> 
                    <p>Nilai UTS : <?= $nilai_uts?></p> 
                    <p>Nilai UAS : <?= $nilai_uas?></p>
                    <p>Nilai Tugas/Praktikum : <?= $nilai_tugas?></p> 
                    <p>Nilai Akhir : <?= $nilai_akhir?></p> 
                <?php }else{
                    echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai , Grade dan Predikat </div>';
                } ?>
                
</body>
</html>