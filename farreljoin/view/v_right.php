<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container mt-5">
    <div class="table-responsive">
        <h1>Right Join</h1>
        <table border="1" class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                        <th>No Pengajar</th>
                        <th>Nama Guru</th>
                        <th>TTL</th>
                        <th>No Mapel</th>
                        <th>ID Kelas</th>
                    </tr>
                </thead>
            <tbody>
                        <?php
                            while($kode_kbm = $list_kbm->fetch_array()){
                        ?>
                    <tr>
                        <td><?=($kode_kbm['no_pengajar'] != null) ? $kode_kbm['no_pengajar'] : 'Tidak terdaftar'?></td>
                        <td><?=$kode_kbm['nama_guru']?></td>
                        <td><?=($kode_kbm['TTL'] != null) ? $kode_kbm['TTL'] : 'Tidak terdaftar'?></td>
                        <td><?=($kode_kbm['no_mapel'] != null)? $kode_kbm['no_mapel']: 'Tidak terdaftar'?></td>
                        <td><?=($kode_kbm['id_kelas'] != null)? $kode_kbm['id_kelas']: 'Tidak terdaftar'?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="inner.php" class="btn btn-primary">Inner Join</a>
        <a href="left.php" class="btn btn-primary">Left Join</a>
    </div>
</div>

    