<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['mahasiswa'] as $index => $mhs):?>
            <tr>
                <td><?=$index+1?></td>
                <td><?=$mhs['nama'];?></td>
                <td><?=$mhs['nim'];?></td>
                <td><?=$mhs['jurusan'];?></td>
                <td><?=$mhs['email'];?></td>
                <td>
                    <a href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs['nim']?>">
                        <button class="edit">Edit</button>
                    </a>
                    <button class="delete">Hapus</button>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <button class="btn-tambah">
        <a href="<?= BASEURL ?>/mahasiswa/create">Tambah Mahasiswa Baru</a>
    </button>
</div>
