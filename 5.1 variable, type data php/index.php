<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<script src="https://cdn.tailwindcss.com"></script>
		<title>Portfolio Tailwind CSS</title>
	</head>
	<body>
		<!-- Header Start -->
	<?php 
		$name = "Achmad Alvin Ardiansyah";
		$age = 22;
		$address = "Sidoarjo";
		$job = "Mahasiswa";
		$phone = "0895706077200";
		$email = "alvindian58@gmail.com";
		$interest = "Coding";
		$skill = "HTML, CSS, Javascript, PHP";
		$experience = "Web Programming";
		$education = "Sistem Informasi";
		$github = "https://github.com/ganden16";
		$instagram = "https://instagram.com/alvinn_ardi";
		$whatsapp = "https://wa.me/62895706077200"; 
		?>
		<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
			<div class="container">
				<div class="flex items-center justify-between relative">
					<div class="px-4">
						<a href="#home" class="font-bold text-lg text-primary block py-6"><?= $name; ?></a>
					</div>
					<div class="flex items-center px-4">
						<button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
							<span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
							<span class="hamburger-line transition duration-300 ease-in-out"></span>
							<span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
						</button>

						<nav
							id="nav-menu"
							class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
							<ul class="block lg:flex">
								<li class="group">
									<a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
								</li>
								<li class="group">
									<a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
								</li>
								<li class="group">
									<a href="#portfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
								</li>
								<li class="group">
									<a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
								</li>
								<li class="group">
									<a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
								</li>
								<li class="group">
									<a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- Header End -->

		<!-- Hero Section Start -->

		<section id="home" class="pt-36">
			<div class="container">
				<div class="flex flex-wrap">
					<div class="w-full self-center px-4 lg:w-1/2">
						<h1 class="text-base font-semibold text-primary md:text-xl">
							Halo Semua!, saya
							<span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl"><?= $name; ?></span>
						</h1>
						<h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl"><?= $job; ?> | <span class="text-dark"><?= $interest; ?></span></h2>
						<p class="font-medium text-secondary mb-10 leading-relaxed">
							Saya <?= $age; ?> tahun, dari <?= $address; ?>
							<span class="text-dark font-bold">online</span>
						</p>
						<a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi Saya</a>
					</div>
					<div class="w-full self-end px-4 lg:w-1/2">
						<div class="mt-10 relative lg:mt-0 lg:right-0">
							<img src="img/alvin.png" alt="alvin" class="mx-auto" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Hero Section End -->

		<!-- About Section Start -->

		<section class="pt-36 pb-32">
			<div class="container">
				<div class="flex flex-wrap">
					<div class="w-full px-4 mb-10 lg:w-1/2">
						<h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
						<h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Belajar Web Programming di WPU</h2>
						<p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis laborum ipsam quis!</p>
					</div>
					<div class="w-full px-4 lg:w-1/2">
						<h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Mari berteman</h3>
						<p class="font-medium text-base text-secondary mb-6 lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad sequi ipsa ex sint qui praesentium eligendi iste.</p>
						<div class="flex items-center">
							<!-- Youtube  -->
							<a
								href="https://youtube.com"
								target="_blank"
								class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
								<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
									<title>YouTube</title>
									<path
										d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
								</svg>
							</a>
							<!-- Instagram  -->
							<a
								href=<?= $instagram; ?>
								target="_blank"
								class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
								<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
									<title>Instagram</title>
									<path
										d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
								</svg>
							</a>
							<!-- Twitter  -->
							<a
								href="https://twitter.com"
								target="_blank"
								class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
								<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
									<title>Twitter</title>
									<path
										d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- About Section End -->

		<!-- Portfolio Start -->

		<section id="portfolio" class="pt-36 pb-16 bg-slate-100">
			<div class="container">
				<div class="w-full px-4">
					<div class="max-w-xl mx-auto text-center mb-16">
						<h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
						<h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
						<p class="font-medium text-md text-secondary md:text-lg">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas culpa consequuntur voluptate praesentium assumenda id tempora enim minus eum?
						</p>
					</div>
				</div>

				<div class="w-full px-4 flex flex-wrap justify-center">
					<div class="mb-12 p-4 md:w-1/2">
						<div class="rounded-md shadow-md overflow-hidden">
							<img src="img/portfolio/1.jpg" alt="portfolio1" width="w-full" />
						</div>
						<h3 class="font-semibold text-dark text-xl mt-5 mb-3">Portfolio Pertama</h3>
						<p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore deleniti excepturi voluptatum eaque dolore.</p>
					</div>
					<div class="mb-12 p-4 md:w-1/2">
						<div class="rounded-md shadow-md overflow-hidden">
							<img src="img/portfolio/2.jpg" alt="portfolio2" width="w-full" />
						</div>
						<h3 class="font-semibold text-dark text-xl mt-5 mb-3">Portfolio Kedua</h3>
						<p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore deleniti excepturi voluptatum eaque dolore.</p>
					</div>
					<div class="mb-12 p-4 md:w-1/2">
						<div class="rounded-md shadow-md overflow-hidden">
							<img src="img/portfolio/1.jpg" alt="portfolio3" width="w-full" />
						</div>
						<h3 class="font-semibold text-dark text-xl mt-5 mb-3">Portfolio Ketiga</h3>
						<p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore deleniti excepturi voluptatum eaque dolore.</p>
					</div>
					<div class="mb-12 p-4 md:w-1/2">
						<div class="rounded-md shadow-md overflow-hidden">
							<img src="img/portfolio/2.jpg" alt="portfolio4" width="w-full" />
						</div>
						<h3 class="font-semibold text-dark text-xl mt-5 mb-3">Portfolio Keempat</h3>
						<p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore deleniti excepturi voluptatum eaque dolore.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Portfolio End -->

		<!-- Clients Section Start -->

		<section id="clients" class="pt-36 pb-32 bg-slate-700">
			<div class="container">
				<div class="w-full px-4">
					<div class="mx-auto text-center mb-16">
						<h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
						<h2 class="font-bold text-whitetext-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerja Sama</h2>
						<p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum soluta adipisci nam.</p>
					</div>
				</div>

				<div class="w-full px-4">
					<div class="flex flex-wrap items-center justify-center">
						<a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
							<img src="img/portfolio/g.png" alt="google" />
						</a>
						<a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
							<img src="img/portfolio/g.png" alt="google" />
						</a>
						<a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
							<img src="img/portfolio/g.png" alt="google" />
						</a>
						<a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
							<img src="img/portfolio/g.png" alt="google" />
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Clients Section End -->

		<!-- Blog Section Start -->

		<section id="blog" class="pt-36 pb-32 bg-slate-100">
			<div class="container">
				<div class="w-full px-4">
					<div class="max-w-xl mx-auto text-center mb-16">
						<h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
						<h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
						<p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo provident ratione in.</p>
					</div>
				</div>

				<div class="flex flex-wrap">
					<div class="w-full px-4 lg:w-1/2 xl:w-1/3">
						<div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
							<img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full" />
							<div class="py-8 px-6">
								<h3>
									<a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Tips Belajar Programming</a>
								</h3>
								<p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, temporibus.</p>
								<a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="w-full px-4 lg:w-1/2 xl:w-1/3">
						<div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
							<img src="https://source.unsplash.com/360x200?mechanical+keyboard" alt="keyboard" class="w-full" />
							<div class="py-8 px-6">
								<h3>
									<a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Keyboard GMMK Pro</a>
								</h3>
								<p class="font-medium text-base text-secondary mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur repudiandae minima nobis.</p>
								<a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="w-full px-4 lg:w-1/2 xl:w-1/3">
						<div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
							<img src="https://source.unsplash.com/360x200?coffee" alt="coffee" class="w-full" />
							<div class="py-8 px-6">
								<h3>
									<a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Nikmati Secangkir Kopi</a>
								</h3>
								<p class="font-medium text-base text-secondary mb-4">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quibusdam. Doloribus ad dignissimos eligendi doloremque voluptate.
								</p>
								<a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Blog Section End -->

		<!-- Contact Section Start -->

		<section id="contact" class="pt-36 pb-32">
			<div class="container">
				<div class="w-full px-4">
					<div class="max-w-xl mx-auto text-center mb-16">
						<h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
						<h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
						<p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, doloremque?</p>
					</div>
				</div>

				<form>
					<div class="w-full lg:w-2/3 lg:mx-auto">
						<div class="w-full mb-8 px-4">
							<label for="name" class="text-base text-primary font-bold">Nama</label>
							<input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
						</div>
						<div class="w-full mb-8 px-4">
							<label for="email" class="text-base text-primary font-bold">Email</label>
							<input type="text" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
						</div>
						<div class="w-full mb-8 px-4">
							<label for="message" class="text-base text-primary font-bold">Pesan</label>
							<textarea type="email" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
						</div>
						<div class="w-full px-4">
							<button class="text-base font-semibold bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
						</div>
					</div>
				</form>
			</div>
		</section>

		<!-- Contact Section End -->

		<!-- Footer Start -->

		<footer class="bg-dark pt-24 pb-12">
			<div class="container">
				<div class="flex flex-wrap">
					<div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
						<h2 class="font-bold text-4xl text-white mb-5">WPU</h2>
						<h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
						<p>alvindian85@gmail.com</p>
						<p>Jalan Anusapati No.21a, Sawotratap-Gedangan, Sidoarjo-Jawa Timur</p>
					</div>
					<div class="w-full px-4 mb-12 md:w-1/3">
						<h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
						<ul class="text-slate-300">
							<li>
								<a href="" class="inline-block text-base hover:text-primary">Programming</a>
							</li>
							<li>
								<a href="" class="inline-block text-base hover:text-primary">Teknologi</a>
							</li>
							<li>
								<a href="" class="inline-block text-base hover:text-primary">Gaya Hidup</a>
							</li>
						</ul>
					</div>
					<div class="w-full px-4 mb-12 md:w-1/3">
						<h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
						<ul class="text-slate-300">
							<li>
								<a href="#home" class="inline-block text-base hover:text-primary">Beranda</a>
							</li>
							<li>
								<a href="#about" class="inline-block text-base hover:text-primary">Tentang Saya</a>
							</li>
							<li>
								<a href="#portfolio" class="inline-block text-base hover:text-primary">Portfolio</a>
							</li>
							<li>
								<a href="#clients" class="inline-block text-base hover:text-primary">Clients</a>
							</li>
							<li>
								<a href="#blog" class="inline-block text-base hover:text-primary">Blog</a>
							</li>
							<li>
								<a href="#contact" class="inline-block text-base hover:text-primary">Contact</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="w-full pt-10 border-t border-slate-700">
					<div class="flex items-center justify-center mb-5">
						<!-- Youtube  -->
						<a
							href="https://youtube.com"
							target="_blank"
							class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
								<title>YouTube</title>
								<path
									d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
							</svg>
						</a>
						<!-- Instagram  -->
						<a
							href="https://instagram.com"
							target="_blank"
							class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
								<title>Instagram</title>
								<path
									d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
							</svg>
						</a>
						<!-- Twitter  -->
						<a
							href="https://twitter.com"
							target="_blank"
							class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
								<title>Twitter</title>
								<path
									d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
							</svg>
						</a>
					</div>
					<p class="font-medium text-xs text-slate-400 text-center">Dibuat oleh Achmad Alvin Ardiansyah, dengan menggunakan Tailwind CSS.</p>
				</div>
			</div>
		</footer>

		<!-- Footer End -->
		<script src="script.js"></script>
		<script>
			tailwind.config = {
				theme: {
					container: {
						center: true,
						padding: '16px',
					},
					extend: {
						colors: {
							primary: '#14b8a6',
							secondary: '#64748b',
							dark: '#0f172a',
						},
						screens: {
							'2xl': '1320px',
						},
					},
				},
				plugins: [],
			};
		</script>
	</body>
</html>
