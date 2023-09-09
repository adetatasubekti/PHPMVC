<?php
class Jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = "Jurusan";
        $data['jurusan'] = $this->model("Jurusan_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }


public function detail($id)
{
    $data['judul'] = "Detail Jurusan";
    $data['jurusan'] = $this->model("Jurusan_model")->getBlogById($id);
    $this->view('templates/header', $data);
    $this->view('jurusan/detail', $data);
    $this->view('templates/footer');

}
public function tambah()
{
    if( $this->model('Jurusan_model')->tambahDatajurusan($_POST) > 0) {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASE_URL . '/jurusan/index');
        exit;
    } 
}
public function hapus($id)
{
    if( $this->model('Jurusan_model')->hapusDatajurusan($id) > 0) {
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        header('Location: ' . BASE_URL . '/jurusan');
        exit;
    } else {
        Flasher::setFlash('gagal', 'dihapus', 'danger');
        header('Location: ' . BASE_URL . '/jurusan/index');
        exit;
    }
}
public function getubah()
{
    echo json_encode($this->model('Jurusan_model')->getJurusanById($_POST['id']));
}
public function ubah()
{
    if( $this->model('Jurusan_model')->ubahDatajurusan($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASE_URL . '/jurusan/index');
        exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/jurusan/index');
      exit;
} 
}

}
