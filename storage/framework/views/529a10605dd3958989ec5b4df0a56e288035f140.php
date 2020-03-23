<?php $__env->startSection('title', 'Navigation Page'); ?>
<?php $__env->startSection('home', 'Henrik\'s News Site'); ?>

<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="context">
			<h5>Do yo want to read or write news?</h5>
			<div class="page-navigation">
				<a href='<?php echo url(route('mainList'));; ?>'>News</a><br>
				<a href='<?php echo url(route('newsUpload'));; ?>'>Add-news</a><br>
				<a href='<?php echo url(route('stats'));; ?>'>News statistics</a><br>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('workdiary'); ?>
	<div class='container'>
    	<div class='workdiary'>
			<p></p>
			<p></p>

			<h5>To-do list:</h5>
			<ul>
				<li>Dinamikus URL-feloldás</li>
			</ul>

			<p></p>
			<p></p>
			<h5>Progression</h5>
		
				<p>2020.03.04.</p>
				<ul>
				<li>Cikk felvétel</li>
				<li>Lekérdezések hozzá és statisztikák létrehozása</li>
				<li>Dátum szerinti rendezésre váltás</li>
				<li>Alapvető routing</li>
				<li>Navigation page létrehozása</li>
				<li>Első kontroller és modell létrehozása</li>
				<li>DB létrehozása</li>
				</ul>
				<br>
    		<p>2020.03.22.</p>
			<ul>
				<li>Layout használat (előszőr prevlayout, utána váltás bootstrapes előre elkészített változatra</li>
				<li>Tranzakció használat inserteknél</li>
				<li>Alias használat</li>
				<li>DB queryk try cachelése</li>
				<li>Queryk kiemelése servicebe; Cikk címek kattinthatóvá tétele és kattintásra a cikk külön megjelenítése</li>
				<li>Regisztrációs és login oldalak felállítása rapid authenticationnel</li>
				<li>Korlátozás beállítása, hogy csak belépett userek tölthessenek fel cikkeket</li>
				<li>Oldal szépítés előre elkészített bootstrap mintával</li>
			</ul>			
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BackendProject\resources\views/NavigationPage.blade.php ENDPATH**/ ?>