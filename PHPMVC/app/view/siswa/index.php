

<div class="container mt-3">
        <div class="row">
            <div class="col-6">
            <div class="row">
            <div class="col-lg-6">
           <?php Flasher::flash(); ?>
           </div>
           </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah Data Siswa
                </button>
                
                <!-- Modal -->
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body">
 <form action="<?= BASE_URL; ?>/siswa/tambah" method="POST">
   <input type="hidden" name="id" id="id">
 <div class="form-group">
 <label for="nama">Nama</label>
 <input type="text" class="form-control" id="nama" name="nama">
 </div>
 <div  class="form-group">
 <label for="jenis_kelamin">Jenis Kelamin</label>
 <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
 <option value="laki-laki">Laki - laki</option>
 <option value="perempuan">Perempuan</option>
 </select>
 </div>
 <div class="form-group">
 <label for="alamat">Alamat</label>
 <input type="text" class="form-control" id="alamat" name="alamat">
 </div>
 </div>
 <div class="modal-footer">
     <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 </div>
 </div>
 </div>
 </div>
                <h3 class="mt-4">Data Siswa</h3>
                    <div class="table-responsive mt-3">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            $no = 1;
                            ?>

                            <?php foreach ($data['siswa'] as $siswa ) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $siswa['nama']; ?></td>
                                    <td>
                                        <span> <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>"
                                         class="badge badge-danger " onclick="return confirm('yakin?');">hapus</a></span>
                                        <span><a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge
                                         badge-success tampilModalUbah " data-toggle="modal" data-target="#formModal"
                                         data-id="<?= $siswa['id']; ?>">ubah</a></span>
                                       
                                        <span> <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" 
                                        class="badge badge-primary ">detail</a></span>
                                    </td>
                                    </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                   </div>
                   </div>
                   </div>
                   

                  
                