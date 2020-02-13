<?php
includeHeader();
?>
<div class="container">
    <div class="col-6">
        <form method="post" action="index.php?page=aksi_tambah_progdi">
            <fieldset>
                <legend>Tambah Progdi</legend>
                <div class="form-group">
                    <input type="text" class="form-control" id="user_id" name="nama_progdi" placeholder="Tambah Progdi"><br>
                    <div class="form-group">
                        <select class="custom-select" name="jenjang">
                              <option selected="">Jenjang</option>
                              <option value="0">D3</option>
                              <option value="1">S1</option>
                                <option value="2">S2</option>
                                <option value="3">S3</option>

                        </select>
                    </div>
                 
                     <input type="text" class="form-control" id="user_id" name="nama_kaprogdi" placeholder="Nama Kaprogdi">

                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="submit" class="btn btn-secondary">Reset</button>
            </fieldset>
    </form>
    </div>
</div>
<?php includeFooter();
