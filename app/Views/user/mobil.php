<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Kapasitas</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Detail</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Allen</td>
                        <td>Otto</td>
                        <td> <img src="/img/driver_pic/Allen.jpg" alt="" class="driver_pic"> </td>
                        <td>
                            <a href="" class="btn btn-success"> Edit</a>
                            <a href="" class="btn btn-danger"> Hapus</a>
                        </td>
                    </tr>
                    <?php foreach ($mobil as $mbl) : ?>
                        <tr>
                            <th scope="row">2</th>
                            <td><?= $mbl['merk_mobil'];
                                echo " "; ?><?= $mbl['jenis_mobil']; ?></td>
                            <td><?= $mbl['jml_penumpang']; ?></td>
                            <td> <img src="/img/mobil_pic/<?= $mbl['foto_1']; ?>" alt="" class="driver_pic"> </td>
                            <td>
                                <a href="/mobil/<?= $mbl['id_mobil']; ?>" class="btn btn-success"> Detail</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>