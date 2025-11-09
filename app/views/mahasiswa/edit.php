    <div class="container">
        <h2>Edit Mahasiswa</h2>
        <form action="<?= BASEURL?>/mahasiswa/update/<?= $data['mhsTarget']['nim']?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required value="<?=$data['mhsTarget']['nama'];?>">
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required value="<?=$data['mhsTarget']['nim'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" required value="<?=$data['mhsTarget']['jurusan'];?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="<?=$data['mhsTarget']['email'];?>">
            </div>
            <button type="submit" class="btn">Edit</button>
        </form>
    </div>
