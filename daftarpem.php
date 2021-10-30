<div class="content-wrapper">
    <section class="content-header">
        <h1>
            DAFTAR PEMBELIAN
            <small>DATA</small>
        </h1>
    </section>

    <section class="content">
        <br>
        <br>
        <table class="table" border='3'>
            <tr bgcolor="skyblue">
                <th>Nomor</th>
                <th>Nomor Pembelian</th>
                <th>Nama Pembeli</th>
                <th>Alamat Pembeli</th>
                <th>Nomor Telepon</th>
                <th>Jenis Sepatu</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
            <?php
            $no = 1;
            foreach ($sepatu as $spt) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $spt->no_pem ?></td>
                    <td><?= $spt->nama_pem ?></td>
                    <td><?= $spt->alamat ?></td>
                    <td><?= $spt->notelp ?></td>
                    <td><?= $spt->jenis_sepatu ?></td>
                    <td><?= $spt->ukuran ?></td>
                    <td><?= $spt->jumlah ?></td>
                    <td><?= $spt->harga ?></td>
                    <td><?= $spt->total ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</div>