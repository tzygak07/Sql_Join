<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container mt-5">
    <div class="table-responsive">
    <h1>Left Join</h1>
    <table border="1" class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>NIS Siswa</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>TTL Siswa</th>
            <th>No Mapel</th>
            <th>ID Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($kode_kbm = $list_kbm->fetch_array()){
        ?>
            <tr>
                <td><?=($kode_kbm['nis_siswa'] != null) ? $kode_kbm['nis_siswa'] : 'Tidak terdaftar'?></td>
                <td><?=$kode_kbm['nama_siswa']?></td>
                <td><?=$kode_kbm['alamat']?></td>
                <td><?=($kode_kbm['TTL_siswa'] != null) ? $kode_kbm['TTL_siswa'] : 'Tidak terdaftar'?></td>
                <td><?=($kode_kbm['no_mapel'] != null)? $kode_kbm['no_mapel']: 'Tidak terdaftar'?></td>
                <td><?=($kode_kbm['id_kelas'] != null)? $kode_kbm['id_kelas']: 'Tidak terdaftar'?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
    <a href="right.php" class="btn btn-primary">Right Join</a>
    <a href="inner.php" class="btn btn-primary">inner Join</a>
    </div>
</div>
