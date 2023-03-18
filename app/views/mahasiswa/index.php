<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Mahasiswa</h1>
            <?php foreach ($data['mhs'] as $mhs): ?>
                <ul>
                    <li><?= $mhs['nama']?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>