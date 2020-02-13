<?php
includeHeader();
?>
<div class="container">
    <div class="col-6">
        <form method="post" action="index.php?page=aksi_tambah_dosen">
            <fieldset>
                <legend>Tambah Dosen</legend>
                <div class="form-group">
                    <input type="text" class="form-control" id="user_id" name="nama" placeholder="Nama"> <br>
                    <div class="form-group">
                        <select class="custom-select" name="pendidikan_terakhir">
                              <option selected="">Pendidikan Terakhir</option>
                              <option value="1">S1</option>
                              <option value="2">S2</option>
                                <option value="3">S3</option>   

                        </select>
                    </div>

                     <textarea class="form-control" id="exampleTextarea" name="alamat" rows="3" placeholder="Alamat"></textarea> <br>
                    <input type="text" class="form-control" id="user_id" name="email" placeholder="Email"><br>
                    <input type="text" class="form-control" id="user_id" name="noTelp" placeholder="No Telp"><br>
                        <div class="form-group">
                            <select class="form-control" id="level" name="dosenPA">
                                <option selected="">Dosen PA</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak </option>
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
