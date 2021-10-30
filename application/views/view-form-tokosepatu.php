<html>

<head>
	<title>Form Input Toko Sepatu</title>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <style type="text/css">
    	h1{
    		font-family: 'Lobster', cursive;
    		}
    	hr{
    		border: 3px solid pink ;
    		}
    	select{
    		height: 45px;
			width: 47%;
		 	outline: none;
			appearance:none;
			font-size: 15px;
			border-radius: 5px;
			padding-left: 10px;
			border: 1px solid #ccc;
			border-bottom-width: 2px;
			transition: all 0.3s ease;
			background: linear-gradient(135deg, #71b7e6, #c07dff);
    	}
    	.submit input{
    		height: 100%;
		    width: 100%;
		    border-radius: 5px;
		    border: none;
		    color: #fff;
		    font-size: 25px;
		    font-weight: 500;
		    font-family: 'Lobster', cursive;
		    letter-spacing: 1px;
		    cursor: pointer;
		    transition: all 0.3s ease;
		    background: linear-gradient(135deg,#9b59b6,#f77ca5);
    	}
    </style>
</head>
<body>
	<center>
		<form action="<?=  base_url('tokosepatu/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						<h1>Form Input Data Toko Sepatu</h1>
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>Nama Pembeli</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
					</td>
				</tr>
				<tr>
					<th>Nomor HP</th>
					<td>:</td>
					<td>
						<input type="text" name="nohp" id="nohp" value="<?= set_value('nohp'); ?>">
					</td>
				</tr>
				<tr>
					<th>Merek Sepatu</th>
					<td>:</td>
					<td>
						<select name="merek" id="merek">
							<option value="">Pilih merek</option>
							<option value="Nike">Nike</option>
							<option value="Adidas">Adidas</option>
							<option value="Kickers">Kickers</option>
							<option value="Eiger">Eiger</option>
							<option value="Bucherri">Bucherri</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Ukuran Sepatu</th>
					<td>:</td>
					<td>
						<select name="ukuran" id="ukuran">
							<option value="">Pilih Ukuran</option>
							<?php for ($i =32; $i <= 44; $i++) : ?>
							<option value="<?= $i; ?>"><?= $i; ?></option>
							<?php endfor; ?>
						</select>
					</td>
				</tr>
				<tr class="submit">
					<td colspan="3" align="center">
						<input type="submit" name="Submit">
					</td>
				</tr>
			</table>
			
		</form>
	</center>

</body>
</html>