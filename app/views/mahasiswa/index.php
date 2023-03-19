<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <?php //Flasher::flash();?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>mahasiswa/cari" method="post">

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
            </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="row mb-2">
                <div class="d-flex justify-content-between">
                    <h3>Daftar Mahasiswa</h3>
                    <button type="button" class="btn btn-primary btn-sm p-3 m-0" data-bs-toggle="modal" data-bs-target="#tambah">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs['nama']?>
                    <a href="<?= BASEURL;?>mahasiswa/detail/<?= $mhs['id']?>" class="badge bg-secondary btn btn-primary">Detail</a>
                    <a href="<?= BASEURL;?>mahasiswa/delete/<?= $mhs['id']?>" class="badge bg-secondary btn btn-primary">Delete</a>
                    <a href="#" data-bs-target="#update<?php echo $mhs['id']; ?>" data-bs-toggle="modal" class="badge bg-secondary btn btn-primary">Edit</a>
                </li>
                <div class="modal fade" id="update<?php echo $mhs['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="judulModal">update Data Mahasiswa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL;?>mahasiswa/update/<?=$mhs['id'];?>" method="post">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" value="<?=$mhs['nama'];?>" name="nama" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="number" class="form-control" id="nip" name="nip" value="<?= $mhs['nip']?>" placeholder="nip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $mhs['email']?>" placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>mahasiswa/tambah" method="post">
            <div class="form-group">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="number" class="form-control" id="nip" name="nip" placeholder="nip">
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
