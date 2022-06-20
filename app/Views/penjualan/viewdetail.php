<table class="table table-striped table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Produk</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 0;
        foreach ($datadetail->getResultArray() as $r) :
        ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $r['kode']; ?></td>
                <td><?= $r['namaproduk']; ?></td>
                <td><?= $r['qty']; ?></td>
                <td style="text-align: right ;"><?= number_format($r['hargajual'], 0, ",", "."); ?></td>
                <td style="text-align: right ;"><?= number_format($r['subtotal'], 0, ",", "."); ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger" onclick="hapusitem('<?= $r['id'] ?>','<?= $r['namaproduk'] ?>')">
                        <i class="fa fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    function hapusitem(id, nama) {
        Swal.fire({
            title: 'Hapus Item',
            html: `Yakin menghapus data produk <b>${nama}</b>?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `<?= site_url('penjualan/hapusitem') ?>`,
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if (response.sukses == 'berhasil') {
                            dataDetailPenjualan();
                            kosong();
                            window.location.reload();
                            
                        }
                        
                    }
                });
            }
        })
    }
</script>