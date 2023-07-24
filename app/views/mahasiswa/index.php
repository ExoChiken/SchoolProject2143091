<div class="container mt-3">
        <button type="button" class="btn btn-primary mb-3 insertModal" data-bs-toggle="modal" data-bs-target="#form">
        Tambah Data Mahasiswa
        </button>
        <ol class="list-group list-group-numbered">
            <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><?= $mhs['nama'] ?></div>
                    </div> 
                    <a href= "<?= BASEURL;?>/mahasiswa/detail/<?=$mhs['id'] ?>" type="submit" class="btn btn-primary position-relative">
                        Detail
                    </a>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" type="submit" name="id" class="btn btn-primary position-relative ms-2" onclick="return confirm('Hapus data?');">
                        Hapus
                    </a>
                    <a href="<?= BASEURL; ?>/mahasiswa/update/<?= $mhs['id'] ?>" type="submit" data-id="<?=$mhs['id'] ?>" class="btn btn-primary position-relative ms-2 modalUpdate"  data-bs-toggle="modal" data-bs-target="#form">
                        Update
                    </a>
                </li>
            <?php endforeach; ?>
        </ol>

            
</div>
<!-- Insert -->
<div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labelModal">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
        <input type="text" class="d-none" id="id" name="id">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
    </div>
  </div>
</div>

<!-- update -->

