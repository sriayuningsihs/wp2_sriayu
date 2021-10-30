<div class="content-wrapper">
    <section class="content-header">
        <h1>
            FORM PEMBELIAN
            <small>FORM</small>
        </h1>
    </section>

    <section class="content">
        <center>
            <form method="POST" action="<?= base_url() . 'sepatu/tambah_aksi' ?>">

                <div class="form-group">
                    <label>Nama Pembeli</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Pembeli</label>
                    <input type="text" name="alamat" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="notelp" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jenis Sepatu</label><br>
                    <select name="sepatu" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option>Pilih</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Kickers">Kickers</option>
                        <option value="Eiger">Eiger</option>
                        <option value="Bucherri">Bucherri</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Ukuran Sepatu</label><br>
                    <select name="ukuran" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option>Pilih</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control">
                </div>
                <br>
                <br>
                <br>
                <button type="Reset" class="btn btn-danger">RESET</button>
                <button type="Submit" class="btn btn-primary">TAMBAH</button>
            </form>
        </center>
    </section>

</div>