<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Admin | Portfolio Iqbal</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body class="admin-body">
<?php
require_once 'koneksi.php';

// Pesan hasil operasi CRUD
$pesan = '';
$jenisPesan = '';

// Ambil data untuk mode ubah
$editData = null;
if (isset($_GET['ubah'])) {
	$idUbah = (int) $_GET['ubah'];
	$stmt = $mysqli->prepare('SELECT id, nama_file, kategori, jenis FROM galeri WHERE id = ?');
	$stmt->bind_param('i', $idUbah);
	$stmt->execute();
	$result = $stmt->get_result();
	$editData = $result->fetch_assoc();
	$stmt->close();
}

// Tambah atau ubah data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$namaFile = trim($_POST['nama_file'] ?? '');
	$kategori = trim($_POST['kategori'] ?? '');
	$jenis = trim($_POST['jenis'] ?? '');

	if ($namaFile === '' || $kategori === '' || $jenis === '') {
		$pesan = 'Semua kolom wajib diisi.';
		$jenisPesan = 'error';
	} elseif (isset($_POST['id']) && (int) $_POST['id'] > 0) {
		$id = (int) $_POST['id'];
		$stmt = $mysqli->prepare('UPDATE galeri SET nama_file = ?, kategori = ?, jenis = ? WHERE id = ?');
		$stmt->bind_param('sssi', $namaFile, $kategori, $jenis, $id);

		if ($stmt->execute()) {
			$pesan = 'Data berhasil diperbarui.';
			$jenisPesan = 'success';
		} else {
			$pesan = 'Data gagal diperbarui.';
			$jenisPesan = 'error';
		}
		$stmt->close();
		header('Location: admin.php?pesan=' . urlencode($pesan) . '&jenis=' . urlencode($jenisPesan));
		exit;
	} else {
		$stmt = $mysqli->prepare('INSERT INTO galeri (nama_file, kategori, jenis) VALUES (?, ?, ?)');
		$stmt->bind_param('sss', $namaFile, $kategori, $jenis);

		if ($stmt->execute()) {
			$pesan = 'Data berhasil ditambahkan.';
			$jenisPesan = 'success';
		} else {
			$pesan = 'Data gagal ditambahkan.';
			$jenisPesan = 'error';
		}
		$stmt->close();
		header('Location: admin.php?pesan=' . urlencode($pesan) . '&jenis=' . urlencode($jenisPesan));
		exit;
	}
}

// Hapus data
if (isset($_GET['hapus'])) {
	$idHapus = (int) $_GET['hapus'];
	$stmt = $mysqli->prepare('DELETE FROM galeri WHERE id = ?');
	$stmt->bind_param('i', $idHapus);
	$stmt->execute();
	$stmt->close();
	header('Location: admin.php?pesan=Data berhasil dihapus.&jenis=success');
	exit;
}

if (isset($_GET['pesan'])) {
	$pesan = $_GET['pesan'];
	$jenisPesan = $_GET['jenis'] ?? '';
}

$dataGaleri = $mysqli->query('SELECT id, nama_file, kategori, jenis FROM galeri ORDER BY id DESC');
?>

<main class="admin-container">
	<a class="admin-back" href="index.php">&larr; Kembali ke Portfolio</a>
	<h1 class="admin-title">Admin Dashboard</h1>
	<p class="admin-subtitle">Kelola data section galeri</p>

	<?php if ($pesan !== ''): ?>
		<div class="admin-alert <?php echo htmlspecialchars($jenisPesan); ?>">
			<?php echo htmlspecialchars($pesan); ?>
		</div>
	<?php endif; ?>

	<section class="admin-card">
		<h2><?php echo $editData ? 'Ubah Data' : 'Tambah Data'; ?></h2>
		<form class="admin-form" method="post">
			<?php if ($editData): ?>
				<input type="hidden" name="id" value="<?php echo (int) $editData['id']; ?>">
			<?php endif; ?>

			<label>
				Nama File
				<input type="text" name="nama_file" required maxlength="150"
					value="<?php echo htmlspecialchars($editData['nama_file'] ?? ''); ?>">
			</label>

			<label>
				Kategori
				<input type="text" name="kategori" required maxlength="100"
					value="<?php echo htmlspecialchars($editData['kategori'] ?? ''); ?>">
			</label>

			<label>
				Jenis
				<input type="text" name="jenis" required maxlength="100"
					value="<?php echo htmlspecialchars($editData['jenis'] ?? ''); ?>">
			</label>

			<div class="admin-actions">
				<button class="admin-btn primary" type="submit">
					<?php echo $editData ? 'Simpan Perubahan' : 'Tambah Data'; ?>
				</button>
				<?php if ($editData): ?>
					<a class="admin-btn secondary" href="admin.php">Batal</a>
				<?php endif; ?>
			</div>
		</form>
	</section>

	<section class="admin-card">
		<h2>Data Galeri</h2>
		<div class="admin-table-wrap">
			<table class="admin-table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama File</th>
						<th>Kategori</th>
						<th>Jenis</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php if ($dataGaleri && $dataGaleri->num_rows > 0): ?>
					<?php while ($data = $dataGaleri->fetch_assoc()) : ?>
						<tr>
							<td><?php echo (int) $data['id']; ?></td>
							<td><?php echo htmlspecialchars($data['nama_file']); ?></td>
							<td><?php echo htmlspecialchars($data['kategori']); ?></td>
							<td><?php echo htmlspecialchars($data['jenis']); ?></td>
							<td class="admin-row-actions">
								<a href="admin.php?ubah=<?php echo (int) $data['id']; ?>">Ubah</a>
								<a class="delete" href="admin.php?hapus=<?php echo (int) $data['id']; ?>"
									onclick="return confirm('Hapus data ini?');">Hapus</a>
							</td>
						</tr>
					<?php endwhile; ?>
				<?php else: ?>
					<tr>
						<td colspan="5">Belum ada data galeri.</td>
					</tr>
				<?php endif; ?>
				</tbody>
			</table>
		</div>
	</section>
</main>
</body>
</html>
