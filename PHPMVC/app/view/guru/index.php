<div class="container mt-3">
        <div class="row">
            <div class="col-6">
            <div class="row">
                    <div class="col-lg-6">
                        <?php Flasher::flash(); ?>
                    </div>
                   </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah Data Guru
                </button>
                
                <!-- Modal -->
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="formModalLabel">Tambah Data Guru</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body">
 <form action="<?= BASE_URL; ?>/guru/tambah" method="POST">
   <input type="hidden" name="id" id="id">
</div>
 <div class="form-group">
 <label for="nama">Kode Guru</label>
 <input type="text" class="form-control" id="kode_guru" name="kode_guru">
 </div>
 <div class="form-group">
 <label for="nama_guru">Nama Guru</label>
 <input type="text" class="form-control" id="nama_guru" name="nama_guru">
 </div>
 <div class="form-group">
 <label for="mapel">Mata Pelajaran</label>
 <select class="form-control" id="mapel" name="mapel">
 <option value="pbo">PBO</option>
 <option value="basisdata">Basisdata</option>
 <option value="pemogramanbergerak">Pemograman Bergerak</option>
 </select>
 </div>
 <div class="form-group">
 <label for="prod_noprod">Mapel</label>
 <select class="form-control" id="prod_noprod" name="prod_noprod">
 <option value="produktif">Produktif</option>
 <option value="nonproduktif">Non Produktif</option>
 </select>
 </div>
 <div class="modal-footer">
     <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 </div>
 </div>
 </div>
 </div>
                <h3 class="mt-4">Data Guru</h3>
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

                            <?php foreach ($data['guru'] as $guru ) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $guru['nama_guru']; ?></td>
                                    <td>
                                        <span> <a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>"
                                         class="badge badge-danger " onclick="return confirm('yakin?');">hapus</a></span>
                                        <span><a href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id']; ?>" class="badge
                                         badge-success tampilModalUbah " data-toggle="modal" data-target="#formModal"
                                         data-id="<?= $guru['id']; ?>">ubah</a></span>
                                       
                                        <span> <a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>" 
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
                   

                  
                