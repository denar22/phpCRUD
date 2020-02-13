<?php
includeHeader();
?>
<div class="container">
    <div class="col-6">
        <form method="post" action="index.php?page=tambah_mahasiswa">
            <fieldset>
                <legend>Tambah Mahasiswa</legend>
                <div class="form-group">
                    <input type="text" class="form-control" id="user_id" name="NIM" placeholder="NIM"><br>
                    <input type="text" class="form-control" id="user_id" name="nama" placeholder="Nama"><br>
                    <textarea class="form-control" id="exampleTextarea" name="lahir" rows="3" placeholder="Tempat Lahir"></textarea> <br>
                    <input type="text" class="form-control" id="user_id" name="tahun_masuk" placeholder="Tahun Masuk"><br>
                <div class="form-group">
                    <select class="custom-select" name="progdi">
                      <option selected="">Pilih Program Studi</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                    <div class="form-group">
                    <select class="custom-select" name="progdi">
                      <option selected="">Dosen PA</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>

                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="submit" class="btn btn-secondary">Reset</button>
            </fieldset>
    </form>
    </div>
</div>



<?php includeFooter();