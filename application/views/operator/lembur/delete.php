<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?= $lbr->id_lembur?>"><i class="fa fa-trash"></i></button>
                                    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?= $lbr->id_lembur?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
            <p>Apakah anda yakin akan menghapus data lembur <strong><?= $lbr->nama?></strong> ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a class="btn btn-danger" href="<?php echo base_url('Operator/Lembur/delete/'.$lbr->id_lembur) ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>