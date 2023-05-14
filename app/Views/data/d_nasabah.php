<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Nasabah</h3>
                <p class="text-subtitle text-muted">
                  Untuk mengubah data nasabah, perlu otorisasi admin.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="/">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data Nasabah
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Nasabah</div>
              <div class="card-body overflow-auto">
                <div class="col-md-4 mb-3">
                <button
                          id="password"
                          class="btn btn-outline-success btn-md" data-bs-toggle="modal"
                          data-bs-target="#modalTambah"
                        >
                          Tambah Nasabah
                        </button>
                        </div>
                <table class="table" id="table1">
                  <thead>
                    <tr>
                      <th>Nama Nasabah</th>
                      <th>Jenis Nasabah</th>
                      <th>No Telp.</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Annisa Sifa</td>
                      <td><span class="badge bg-primary">Regular</span></td>
                      <td>0812345723</td>
                      <td>
                        <div class="d-flex justify-content-start">
                        	<div class="col-md-4 col-sm-4">
                        <button class="btn btn-outline-info btn-xs" data-bs-toggle="modal"
                          data-bs-target="#modalShow"> Detil</button>
                         </div>
                        <div class="col-md-4 col-sm-4">
                        <button class="btn btn-outline-warning btn-xs" data-bs-toggle="modal"
                          data-bs-target="#modalEdit"> Edit</button>
                         </div>
                         
                        <div class="col-md-4 col-sm-4">
                        <button id="hapus" class="btn btn-outline-danger btn-xs"> Hapus</button>
                         </div>
                         </div>
                         </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Firdaus Setiawan</td>
                      <td><span class="badge bg-warning">Gold</span></td>
                      <td>085629387283</td>
                      <td>
                        <div class="d-flex justify-content-start">
                        	<div class="col-md-4 col-sm-4">
                        <button class="btn btn-outline-info btn-xs" data-bs-toggle="modal"
                          data-bs-target="#modalShow"> Detil</button>
                         </div>
                        <div class="col-md-4 col-sm-4">
                        <button class="btn btn-outline-warning btn-xs" data-bs-toggle="modal"
                          data-bs-target="#modalEdit"> Edit</button>
                         </div>
                         
                        <div class="col-md-4 col-sm-4">
                        <button id="hapus2" class="btn btn-outline-danger btn-xs"> Hapus</button>
                         </div>
                         </div>
                         </div>
                      </td>
                    </tr>
                                        <tr>
                      <td>Fauzi Abdillah</td>
                      <td><span class="badge bg-danger">Banned</span></td>
                      <td>0928737878</td>
                      <td>
                        <div class="d-flex justify-content-start">
                        	<div class="col-md-4 col-sm-4">
                        <button class="btn btn-outline-info btn-xs" data-bs-toggle="modal"
                          data-bs-target="#modalShow"> Detil</button>
                         </div>
                        <div class="col-md-4 col-sm-4">
                        <button class="btn btn-outline-warning btn-xs" data-bs-toggle="modal"
                          data-bs-target="#modalEdit"> Edit</button>
                         </div>
                         
                        <div class="col-md-4 col-sm-4">
                        <button id="hapus3" class="btn btn-outline-danger btn-xs"> Hapus</button>
                         </div>
                         </div>
                         </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
          <!-- Basic Tables end -->
        </div>

         <!-- Modal Detil -->
         <div
                          class="modal fade text-left"
                          id="modalShow"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="myModalLabel33"
                          aria-hidden="true"
                        >
                          <div
                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                            role="document"
                          >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">
                                  Detil Nasabah
                                </h4>
                                <button
                                  type="button"
                                  class="close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <i data-feather="x"></i>
                                </button>
                              </div>
                              <form action="#">
                                <div class="modal-body">
                                  <label>Nama: </label>
                                  <div class="form-group">
                                    <h5>Gunawan Setiadi</h5>
                                  </div>

                                  <label>Alamat: </label>
                                  <div class="form-group">
                                    <p>Jl. Kelapa Sawit 32, Kel. Air Dingin, Kec. Bukit Raya</p>
                                  </div>
                                  
                                  <label>Kota: </label>
                                  <div class="form-group">
                                    <p>Pekanbaru</p>
                                  </div>

                                  <label>NIK: </label>
                                  <div class="form-group">
                                    <p>282840401910003</p>
                                  </div>

                                  <label>No Telp: </label>
                                  <div class="form-group">
                                    <h5>081234567876</h5>
                                  </div>

                                  <label>Jenis Nasabah: </label>
                                  <div class="form-group">
                                    <span class="badge bg-warning">GOLD</span>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button
                                    type="button"
                                    class="btn btn-light-secondary"
                                    data-bs-dismiss="modal"
                                  >
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                  </button>
                                  <button
                                    id="success"
                                    class="btn btn-primary ml-1"
                                    data-bs-dismiss="modal"
                                  >
                                    <i
                                      class="bx bx-check d-block d-sm-none"
                                    ></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                  </button>
                                </div>
                              </form>
                            </div>
                           </div>
                       </div>
                  <!-- End Modal Tambah -->


        <!-- Modal Tambah -->
         <div
                          class="modal fade text-left"
                          id="modalTambah"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="myModalLabel33"
                          aria-hidden="true"
                        >
                          <div
                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                            role="document"
                          >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">
                                  Tambah Kategori
                                </h4>
                                <button
                                  type="button"
                                  class="close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <i data-feather="x"></i>
                                </button>
                              </div>
                              <form action="#">
                                <div class="modal-body">
                                  <label>Kategori: </label>
                                  <div class="form-group">
                                    <input
                                      type="text"
                                      placeholder="Masukkan kategori transaksi"
                                      class="form-control"
                                    />
                                  </div>

                                  <label>Keterangan: </label>
                                  <div class="form-group">
                                    <textarea
                                      class="form-control"
                                    > </textarea>
                                  </div>
                                 
                                </div>
                                <div class="modal-footer">
                                  <button
                                    type="button"
                                    class="btn btn-light-secondary"
                                    data-bs-dismiss="modal"
                                  >
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                  </button>
                                  <button
                                    id="success"
                                    class="btn btn-primary ml-1"
                                    data-bs-dismiss="modal"
                                  >
                                    <i
                                      class="bx bx-check d-block d-sm-none"
                                    ></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                  </button>
                                </div>
                              </form>
                            </div>
                           </div>
                       </div>
                  <!-- End Modal Tambah -->

        <!-- Modal Edit -->
 <div
                          class="modal fade text-left"
                          id="modalEdit"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="myModalLabel33"
                          aria-hidden="true"
                        >
                          <div
                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                            role="document"
                          >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">
                                  Edit Kategori
                                </h4>
                                <button
                                  type="button"
                                  class="close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <i data-feather="x"></i>
                                </button>
                              </div>
                              <form action="#">
                                <div class="modal-body">
                                  <label>Kategori: </label>
                                  <div class="form-group">
                                    <input
                                      type="text"
                                      placeholder="Masukkan kategori transaksi"
                                      class="form-control"
                                    />
                                  </div>

                                  <label>Keterangan: </label>
                                  <div class="form-group">
                                    <textarea
                                      class="form-control"
                                    > </textarea>
                                  </div>
                                 
                                </div>
                                <div class="modal-footer">
                                  <button
                                    type="button"
                                    class="btn btn-light-secondary"
                                    data-bs-dismiss="modal"
                                  >
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                  </button>
                                  <button
                                    type="button" id="edit"
                                    class="btn btn-primary ml-1"
                                    data-bs-dismiss="modal"
                                  >
                                    <i
                                      class="bx bx-check d-block d-sm-none"
                                    ></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                  </button>
                                </div>
                              </form>
                            </div>
                           </div>
                       </div>
                  <!-- End Modal Edit -->

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="assets/extensions/datatables/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>
  <script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script>
      document.getElementById("success").addEventListener("click", (e) => {
          Swal.fire({
            icon: "success",
            title: "Data Berhasil Disimpan",
          });
})

      document.getElementById("edit").addEventListener("click", (e) => {
          Swal.fire({
            icon: "success",
            title: "Data Berhasil Diedit",
          });
})

      document.getElementById("hapus").addEventListener("click", (e) => {
          Swal.fire({
            icon: "success",
            title: "Data Berhasil Dihapus",
          });
})

      document.getElementById("hapus2").addEventListener("click", (e) => {
          Swal.fire({
            icon: "success",
            title: "Data Berhasil Dihapus",
          });
})

      document.getElementById("hapus3").addEventListener("click", (e) => {
          Swal.fire({
            icon: "success",
            title: "Data Berhasil Dihapus",
          });
})
    </script>


<?= $this->endSection(); ?>