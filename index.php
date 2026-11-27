<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio | Iqbal Maulana Alfiqi</title>
	
	<!-- link font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400..700;1,400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

	<!-- link style -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header" id="header">
		<div class="container nav">
			<div>
				<h3>
					<span class="accent">Portfolio</span>
				</h3>
				<p>Iqbal Maulana Alfiqi</p>
			</div>
			
			<!-- Tombol hamburger / menu (hanya tampil di layar kecil) -->
			<button class="nav-toggle" id="navToggle" aria-label="Buka menu">
				<span></span><span></span><span></span>
			</button>
			
			<!-- Menu navigasi -->
			<ul class="nav-menu" id="navMenu">
				<li><a href="#beranda" class="nav-link">Home</a></li>
				<li><a href="#tentang" class="nav-link">About</a></li>
				<li><a href="#pencapaian" class="nav-link">Achievement</a></li>
				<li><a href="#galeri" class="nav-link">Gallery</a></li>
				<li><a href="#kontak" class="nav-link">Contact</a></li>
			</ul>
		</div>
	</header>
	<main>
	
		<!-- ======== HERO ======== -->
		
		<section class="hero" id="beranda">
			<div class="container hero-content">
			
				<!-- Teks Hero dan Paragraf Pembuka -->
				<h1 class="reveal">
					<i>Designing Ideas,<br><span class="accent">Capturing Moments</span></i>
				</h1>
				<p class="reveal">Merancang konten yang efektif untuk menjangkau audiens dan membangun kepercayaan terhadap brand.</p>
				
				<!-- Section Tambahan-->
				<div class="row hero-buttons reveal">
					<a href="#tentang" class="btn btn-profile">Lihat Profil</a>
					<a href="#galeri" class="btn btn-gallery">Koleksi Galeri</a>
				</div>
			</div>
		</section>
		
		<!-- ======== TENTANG ======== -->
		
		<section class="about" id="tentang">
			<div class="container">
			
				<div class="row about-border reveal">
					<div class="about-img">
						<!-- Foto Profil -->
						<img src="assets/images/photo-profile.webp" alt="Photo Profile">
					</div>
					<div>
						<!-- Paragraf Inti -->
						<h3><span class="accent">Salam Kenal!</span></h3>
						<h2>Iqbal Maulana Alfiqi</h2>
						<p>
							Seorang pemuda yang memiliki ketertarikan dalam dunia teknologi dan industri kreatif, 
							Juga seorang santri dari MA Ibnu Abbas As Salafy yang berlandaskan pemahaman Ahlussunnah. 
							Di samping menjalani pendidikan, kami belajar bagaimana membuat konten yang efektif di media 
							sosial sebagai langkah untuk mengembangkan diri menjadi kreator konten profesional. Kami juga 
							terus mengasah keterampilan dalam berbagai software kreatif profesional.
						</p>
					</div>
				</div>
				
				<!-- Pengalaman Selama Ini -->
				<div class="block reveal">
					<h3 class="block-title reveal">Pengalaman & Organisasi</h3>
					<ul class="exp-list" data-stagger>
						<li>- Desainer dan Pengelola Website Organisasi Majalah Santri</li>
						<li>- Koordinator Divisi IT Perpustakaan Ibnu Abbas As Salafy</li>
						<li>- Wakil Divisi Media Organisasi Santri Pondok Pesantren Ibnu Abbas </li>
						<li>- Peserta Kelas Desain Grafis Menggunakan CorelDRAW</li>
						<li>- Peserta Kelas Pemrograman Website</li>
					</ul>
				</div>
				
				<!-- ===== Software Kreatif yang dikuasai ===== -->
				<div class="skills reveal">
					<p class="mini accent reveal">What I Use?</p>
					<h3 class="block-title reveal">Software, Language, and AI Prompt</h3>	

					<div class="soft-card reveal">	
						<p class="sub-line">Creative Tools</p>
						<div class="row soft-img">					
							<div class="soft-border column">
								<img src="assets/images/affinity.png">
								<p>Affinity <br>by Canva</p>
							</div>
							<div class="soft-border column">
								<img src="assets/images/coreldraw.png">
								<p>CorelDRAW</p>
							</div>
							<div class="soft-border column">
								<img src="assets/images/adobe-lightroom.png">
								<p>Adobe Lightroom</p>
							</div>
							<div class="soft-border column">
								<img src="assets/images/snapseed.png">
								<p>Snapseed</p>
							</div>
							<div class="soft-border column">
								<img src="assets/images/davinci-resolve.png">
								<p>DaVinci Resolve</p>
							</div>
						</div>
					</div>
					
					<!-- ===== Web Development / Penguasaan Dalam Web Building ===== -->
					<div class="column block lang-card">
						<div class="row code-border">
							<div class="terminal">
								<img src="assets/images/terminal_1.webp" alt="HTML Code"x>
							</div>
							<div class="lang-text">
								<img src="assets/images/html.png" alt="html">
								<h3 class="accent">HTML_</h3>
								<p>
									HyperText Markup Language merupakan bahasa markup yang digunakan sebagai fondasi 
									dalam pembuatan sebuah website. HTML berfungsi untuk menyusun struktur halaman 
									website, mulai dari teks, gambar, tautan, hingga berbagai elemen lainnya.
								</p>
							</div>	
						</div>
						<hr>
						<div class="row code-border">
							<div class="terminal">
								<img src="assets/images/terminal_2.webp" alt="CSS Code">
							</div>
							<div class="lang-text">
								<img src="assets/images/css.png" alt="css">
								<h3 class="accent">CSS_</h3>
								<p>
									Cascading Style Sheets merupakan bahasa stylesheet yang digunakan untuk mengatur 
									tampilan dan desain sebuah website. CSS berfungsi untuk memperindah elemen HTML, 
									mulai dari warna, ukuran, tata letak, hingga animasi agar website terlihat lebih 
									menarik dan responsif.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ===== AI & Workflow ===== -->
			<div class="ai-bg skills reveal">
				<div class="container">
					<div class="reveal">
						<p class="sub-line">AI & Workflow</p>
						<div class="row ai-img">
							<img src="assets/images/chatgpt.png">
							<img src="assets/images/claude.png">
							<img src="assets/images/gemini.png">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ======== PENCAPAIAN ======== -->
		
		<section class="achievement-section" id="pencapaian">
			<div class="container">
				<div class="achievement-list">
					<!-- Lomba PULDAPII Muslim Edufest 2026 -->
					<article class="achievement-card achievement-horizontal reveal">
						<div class="achievement-image">
							<img src="assets/images/poster-puldapii.webp" alt="Poster PULDAPII Muslim Edufest 2026">
						</div>
						<div class="achievement-text">
							<h2>Second Place Winner in the Digital Poster Design Competition at PULDAPII Muslim Edufest 2026</h2>
							<p>
								Meraih Juara II dalam kategori Desain Poster Digital pada ajang PULDAPII 
								Muslim Edufest 2026 yang diselenggarakan di ICE BSD City, Tangerang.
							</p>
						</div>
					</article>
					
					<!-- Perancang Logo Perpustakaan -->
					<article class="achievement-card achievement-vertical reveal">
						<div class="achievement-image">
							<img src="assets/images/perpustakaan.webp" alt="Logo Perpustakaan Ibnu Abbas As Salafy">
						</div>
						<div class="achievement-text">
							<h2>Logo Designer</h2>
							<p>
								Merancang logo resmi milik Perpustakaan Ibnu Abbas As Salafy pada usia 17 tahun. 
								Karya tersebut terpilih untuk merepresentasikan identitas visual perpustakaan.
							</p>
						</div>
					</article>

					<!-- Mindset creative worker -->
					<blockquote class="achievement-mindset reveal">
						<p>
							Dalam pembuatan sebuah desain, visual yang menarik bukan sebagai patokan bahwa desain tersebut baik,
							sebuah desain harus mampu mempresentasikan ciri khas identitas dari sebuah brand.
						</p>
					</blockquote>
				</div>
			</div>
		</section>
		
		<!-- ======== GALERI ======== -->
		<section class="gallery-section" id="galeri">
			<div class="container">
				<h2 class="block-title reveal">Galeri</h2>
				<?php
				require_once 'koneksi.php';
				$galeri = $mysqli->query('SELECT id, nama_file, kategori, jenis FROM galeri ORDER BY id DESC');
				?>
				<div class="gallery-grid">
					<?php if ($galeri && $galeri->num_rows > 0): ?>
						<?php while ($item = $galeri->fetch_assoc()): ?>
							<article class="gallery-card reveal">
								<div class="gallery-card-content">
									<p class="gallery-category"><?php echo htmlspecialchars($item['kategori']); ?></p>
									<h3><?php echo htmlspecialchars($item['nama_file']); ?></h3>
									<p class="gallery-type"><?php echo htmlspecialchars($item['jenis']); ?></p>
								</div>
							</article>
						<?php endwhile; ?>
					<?php else: ?>
						<p class="gallery-empty">Belum ada data galeri.</p>
					<?php endif; ?>
				</div>
			</div>
		</section>

		</section>
		
		<Section id="kontak">
			<img src="assets/images">
		</Section>
	</main>
	<footer>
	
	</footer>
	<script src="js/script.js"></script>
</body>
</html>