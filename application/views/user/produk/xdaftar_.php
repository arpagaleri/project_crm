		<div id="main">
			<div class="full_w">
				<div class="h_title"><?php echo"$judul"; ?></div>
				<h2>Selamat Datang di Daftar Produk</h2>
				<p>Anda dapat menambah, mengubah dan menghapus produk yang ada di daftar.</p>
				
				<div class="entry">
					<div class="sep"></div>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col" style="width: 95px;">Nama Produk</th>
							<th scope="col" style="width: 45px;">Kode</th>
							<th scope="col" style="width: 75px;">Kategori</th>
							<th scope="col" style="width: 65px;">Harga Jual</th>
							<th scope="col" style="width: 65px;">Harga Baru</th>
							<th scope="col" style="width: 85px;">Deskripsi</th>
							<th scope="col">Stok</th>
							<th scope="col" style="width: 45px;">Modify</th>
						</tr>
					</thead>
						
					<tbody>
					
                        <?php foreach($produk as $row):?>
                        <tr>
                            <td><?php echo ucwords($row->nama_produk);?></td>
                            <td><?php echo($row->kode_produk);?></td>
							<td><?php echo($row->nama_kategori);?></td>
                            <td><?php echo($row->harga_jual);?></td>
                            <td><?php echo($row->harga_baru);?></td>
                            <td><?php echo($row->deskripsi_produk);?></td>
							<td><?php echo($row->stok_produk);?></td>
                            <td>
								<a href="<?php echo base_url().'index.php/admin/produk/edit/'.$row->id_produk;?>" class="table-icon edit" title="Edit"></a>
								<a href="<?php echo base_url().'index.php/admin/produk/hapus/'.$row->id_produk;?>" class="table-icon delete" title="Delete" onClick="return confirm('Anda yakin akan menghapus Produk <?php echo ucwords($row->nama_produk); ?> ?')"></a>
							</td>
						</tr>
                        <?php endforeach; ?>
						
					</tbody>
				</table>
				<div class="entry">
					<div class="pagination">
					<?php echo $this->pagination->create_links(); ?>
					<div class="sep"></div>	
					
					<!--<a class="button add" href="">Add new page</a> <a class="button" href="">Categories</a> -->
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>