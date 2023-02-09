<?php
include ('asset/inc/header.php');
?>



		<!-- MAIN -->
		<main>
			<div class="head-title" data-aos="fade-right">
				<div class="left">
					<h1>Votre réseau</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#"><?php echo $_SESSION['user']['nom'] ?></a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Acceuil</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info" data-aos="fade-up"    data-aos-delay="500">
				<li>
                    <div class="blc"><i class="fa-solid fa-xmark"></i></div>
					<span class="text">
						<h3 class="stats_3">1020</h3>
						<p>Les TTL Faibles </p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3 class="stats_1">2834</h3>
						<p>Utilisateur inscrit</p>
					</span>
				</li>
				<li>
                    <div class="blc"><i class="fa-sharp fa-solid fa-desktop"></i></div>
					<span class="text">
						<h3 class="stats_2">$2543</h3>
						<p> Le Nombre d'adresse ip </p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>le nombre de trames qui ont un ttl inférieur à la moitié de la valeur maximale </h3>
                        <!-- Inclure Chart.js avant de définir le graphique -->
                        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
                        <canvas id="chartjs"></canvas>
                        <p>Le Time To Live (TTL) est un paramètre contenu dans les paquets de données envoyés sur Internet qui indique combien de sauts de route un paquet peut effectuer avant d'être abandonné. Le TTL est exprimé en nombre de sauts de route (généralement exprimés en nombre de "sauts de route" ou de "sauts de route IP"). La valeur maximale d'un TTL est de 129 </p>
					</div>

				</div>
				<div class="todo">
					<div class="head">
						<h3>Les différents status des protocoles </h3>
                        <canvas id="chartjs-donut"></canvas>
                        <p> "success" :  le paquet a été envoyé avec succès et que sa destination a été atteinte.
                            <br> "unknown" : le statut du paquet n'est pas connu ou n'a pas pu être déterminé.
                            <br> "failed" : l'envoi du paquet a échoué pour une raison quelconque (par exemple, si la destination n'a pas pu être atteinte).
                            <br> "pending" : le paquet est en attente d'envoi ou de traitement.</p>
				</div>
			</div>
            </div>
                <div class="bloc_h">

                    <div class="table-data">
                        <div class="order">
                            <div class="head">
                                <h3>les différents Protocoles </h3>
                                <canvas id="chartjs-line"></canvas>
                                <p>TCP, ICMP, TLSv2 et UDP sont tous des protocoles de réseau qui sont utilisés pour transmettre des données sur Internet</p>
                            </div>

                        </div>
                        <div class="todo">
                            <div class="head">
                                <h3> Les Logs </h3>
                                <div class="log">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</main>

		<!-- MAIN -->
	</section>

	<!-- CONTENT -->

<script src="js_ajax/js_stats.js"></script>
    <script src="js_ajax/js_charts.js"></script>

<?php
include('asset/inc/footer.php');