<html>

<head>
	<title>Output Toko Sepatu</title>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <style type="text/css">
    	h1{
    		font-family: 'Lobster', cursive;
    		}
    	hr{
    		border: 3px solid pink ;
    		}

    	a{
    		height: 100%;
		    width: 100%;
		    padding-left: 50px;
		    padding-right: 50px;
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
		<table>
			<tr>
				<th colspan="3">
					<h1>Tampil Data Toko Sepatu</h1>
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
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>:</td>
				<td>
					<?= $nohp; ?>
				</td>
			</tr>
			<tr>
				<td>Merek Sepatu</td>
				<td>:</td>
				<td>
					<?= $merek; ?>
				</td>
			</tr>
			<tr>
				<td>Ukuran Sepatu</td>
				<td>:</td>
				<td>
					<?= $ukuran; ?>
				</td>
			</tr>
			<tr>
				<td>Harga Sepatu</td>
				<td>:</td>
				<td>
					<?= $harga; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url ('tokosepatu'); ?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>

</body>
</html>