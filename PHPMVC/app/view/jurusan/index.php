

<div class="container mt-3">
        <div class="row">
            <div class="col-6">
            <div class="row">
            <div class="col-lg-6">
           <?php Flasher::flash(); ?>
           </div>
           </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Ubah Data Jurusan
                </button>
                
                <!-- Modal -->
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="formModalLabel">Ubah Data Jurusan</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body">
 <form action="<?= BASE_URL; ?>/jurusan/tambah" method="POST">
 <input type="hidden" name="id" id="id">
 <div class="form-group">
 <label for="nama">Kode Jurusan</label>
 <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan">
 </div>
 <!-- <div class="form-group">
 <label for="nama">Nama</label>
 <input type="text" class="form-control" id="nama" name="nama">
 </div> -->
 <div class="form-group">
 <label for="mapel">Jurusan</label>
 <select class="form-control" id="nama_jurusan" name="nama_jurusan">
 <option value="TKP">Teknik Kontruksi dan Perumahan</option>
 <option value="DPIB">Desain Pemodelan dan Informasi Bangunan</option>
 <option value="TPTU">Teknik Pemanasan Tata Udara dan Pendingin</option>
 <option value="RPL">Rekayasa Perangkat Lunak</option>
 <option value="TP">Teknik Pengelasan</option>
 <option value="Kuliner">Kuliner</option>
 <option value="Akutansi">Akutansi</option>
 </select>
 </div>
 </div>
 <div class="modal-footer">
     <button type="submit" class="btn btn-primary">Ubah Data Jurusan</button>
</form>
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 </div>
 </div>
 </div>
 </div>
                <h3 class="mt-4">Data Jurusan</h3>
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

                            <?php foreach ($data['jurusan'] as $jurusan ) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $jurusan['nama_jurusan']; ?></td>
                                    <td>
                                        <span> <a href="<?= BASE_URL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>"
                                         class="badge badge-danger " onclick="return confirm('yakin?');">hapus</a></span>
                                        <span><a href="<?= BASE_URL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" class="badge
                                         badge-success tampilModalUbah " data-toggle="modal" data-target="#formModal"
                                         data-id="<?= $jurusan['id']; ?>">ubah</a></span>
                                       
                                        <!-- <span> <a href="<?= BASE_URL; ?>/jurusan/detail/<?= $jurusan['id']; ?>" 
                                        class="badge badge-primary ">detail</a></span> -->
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
                   

                  
                