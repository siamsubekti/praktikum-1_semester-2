<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
       <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
        </div>
        <p class="h2 text-center">Form</p>
        <form action="form_nilai.php" method="GET">
            <div class="preview text-center">
                <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
                <div class="browse-button">
                    <i class="fa fa-pencil-alt"></i>
                    <input class="browse-input" type="file" name="UploadedFile" id="UploadedFile"/>
                </div>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Name:</label>
                <input class="form-control" type="text" name="nama" value="" required placeholder="Enter Your Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Mata Kuliah:</label>
                <select name="matkul" class="form-control">
                    <option value="" selected>Choose..</option>
                    <option value="DDP">Dasar-Dasar Pemograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB1">Pemograman Web</option>
                </select>
            </div>
            <div class="form-group">
                <label>Grade UTS:</label>
                <input class="form-control" type="text" name="nilai_uts" value="" required placeholder="Enter UTS Grade"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Grade UAS:</label>
                <input class="form-control" type="text" name="nilai_uas" value="" required placeholder="Enter UAS Grade"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Grade Task:</label>
                <input class="form-control" type="text" name="nilai_tugas" value="" required placeholder="Enter Task Grade"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Submit" name="proses"/>
            </div>
        </form>
        <br/>
        <h3>Daftar Nilai Siswa</h3>
        <div class="container">
            <div class="row">
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai UTS</th>
                    <th>Nilai UAS</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
                        $nama_siswa = isset($_GET['nama']) ? $_GET['nama'] : '';
                        $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '';
                        $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
                        $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
                        $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';
                        echo 'Proses : '.$proses;
                        echo '<br/>Nama : '.$nama_siswa;
                        echo '<br/>Mata Kuliah : '.$mata_kuliah;
                        echo '<br/>Nilai UTS : '.$nilai_uts;
                        echo '<br/>Nilai UAS : '.$nilai_uas;
                        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas.'<br/>';
                        $arr = [is_numeric($nama_siswa),
                                is_numeric($mata_kuliah),
                                is_numeric($nilai_uts),
                                is_numeric($nilai_uas),
                                is_numeric($nilai_tugas)];
                        $nomor = 1;
                            echo '<tr><td>'.is_numeric($nomor).'</td>';
                            echo '<td>'.$nama_siswa.'</td>';
                            echo '<td>'.$mata_kuliah.'</td>';
                            echo '<td>'.$nilai_uts.'</td>';
                            echo '<td>'.$nilai_uas.'</td>';
                            echo '<td>'.$nilai_tugas.'</td>';
                            $nilai_akhir = (is_numeric($nilai_uts) + is_numeric($nilai_uas) + is_numeric($nilai_tugas))/3;
                            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                            echo '<tr/>';
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <script src="form.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
