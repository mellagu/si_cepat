<!-- Modal -->
<form action="?page=act-layanan" method="POST">
   <div class="modal fade" id="layananModal" tabindex="-1" aria-labelledby="layananModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="layananModalLabel">
                  Tambah Data Layanan
               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="layanan">Layanan</label>
                        <input type="text" class="form-control" id="layanan" name="layanan">
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" name="btn-addLayanan" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
</form>