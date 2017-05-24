				<img class="pointer" style="position: absolute"
					src="/img/thinker.jpg" width="60" height="49">
				<div class="brand pointer">
					Backlund ApS <span class="fa fa-home"></span>
				</div>
				<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse"
					data-target="#menu-content"></i>

				<div class="menu-list">
					<!-- Language -->
					<ul id="menu-content" class="menu-content collapse out">
						<li data-toggle="collapse" data-target="#languages"
							class="collapsed"><a href="#"> <i
								class="fa fa-language fa-lg"></i> Language <span class="arrow"></span>
						</a></li>
						<ul class="sub-menu collapse" id="languages">
							<li id="DAN" class="active"><a href="/">Dansk</a></li>
							<li id="ENG"><a href="eng/" >English</a></li>
							<li id="DEU"><a href="deu/" >Deutsch</a></li>
						</ul>
						<!-- Products -->
						<li id="Produkter" class="linked <?php echo strcmp($_GET['page'],'Produkter')? '':'active' ?>"><a href="?page=Produkter"><i
								class="fa fa-angle-right fa-lg"></i> Produkter<span
								class="arrow"></span></a></li>
						<ul class="sub-menu <?php 
						$pages = explode(',' , $_GET['page']);
						$page = $pages[0];					
						echo strcmp($page,'Produkter')? 'collapse':'' ?>" id="products">
							<li id="Toiletter"><a href="?page=Produkter,Toiletter">Toiletter</a></li>
							<li id="Muldtoilet"><a href="?page=Produkter,Muldtoilet">Muldtoilet</a></li>
							<li id="SeparettVilla"><a href="?page=Produkter,SeparettVilla">Separett Villa 9000 & 9010</a></li>
							<li id="SeparettWeekend"><a href="?page=Produkter,SeparettWeekend">Separett Weekend 7010</a></li>
							<li id="SeparettRescueCamping"><a href="?page=Produkter,SeparettRescueCamping">Separett Rescue Camping</a></li>
							<li id="SeparettTilbehoer"><a href="?page=Produkter,SeparettTilbehoer">Separett Tilbehør</a></li>
							<li id="ToerDas"><a href="?page=Produkter,ToerDas">Tørdas 500 & 501</a></li>
							<li id="Sanitoa"><a href="?page=Produkter,Sanitoa">Separett Sanitoa</a></li>
							<li id="Flame"><a href="?page=Produkter,Flame">Forbrændingstoilet Flame</a></li>
							<li id="BarneToilet"><a href="?page=Produkter,BarneToilet">Barnetoiletsæde</a></li>
							<li id="BarneSkammel"><a href="?page=Produkter,BarneSkammel">Barneskammel</a></li>
							<li id="EcoDry"><a href="?page=Produkter,EcoDry">EcoDry</a></li>
							<li id="ESMP"><a href="?page=Produkter,ESMP">ESMP</a></li>
							<li id="EcoDryBoks"><a href="?page=Produkter,EcoDryBoks">EcoDry + Boks</a></li>
							<li id="Separationstoilet"><a href="?page=Produkter,Separationstoilet">Separationstoilet</a></li>
							<li id="Vakuumtoilet"><a href="?page=Produkter,Vakuumtoilet">Vakuumtoilet</a></li>
							<li id="Kompost"><a href="?page=Produkter,Kompost">Kompostbeh.</a></li>
							<li id="Afvanding"><a href="?page=Produkter,Afvanding">Afvanding</a></li>
						</ul>


						<li id="Nyheder" class="linked"><a href="?page=Nyheder"> <i class="fa fa-angle-right fa-lg"></i>
								Nyheder
						</a></li>
						<li id="Arrangementer" class="linked"><a href="?page=Arrangementer"> <i class="fa fa-angle-right fa-lg"></i>
								Arrangementer
						</a></li>
						<li id="Aabenthus"class="linked"><a href="?page=Aabenthus"> <i class="fa fa-angle-right fa-lg"></i>
								Åbent hus
						</a></li>
						<li id="Pileplantage" class="linked"><a href="?page=Pileplantage"> <i class="fa fa-angle-right fa-lg"></i>
								Pileplantage
						</a></li>
						<li id="Pileanlaeg" class="linked"><a href="?page=Pileanlaeg"> <i class="fa fa-angle-right fa-lg"></i>
								Pileanlæg
						</a></li>
						<li id="Raadgivning" class="linked"><a href="?page=Raadgivning"> <i class="fa fa-angle-right fa-lg"></i>
								Rådgivning
						</a></li>
						<li id="Foredrag" class="linked"><a href="?page=Foredrag"> <i class="fa fa-angle-right fa-lg"></i>
								Foredrag
						</a></li>
						<li id="Projekter" class="linked"><a href="?page=Projekter"> <i class="fa fa-angle-right fa-lg"></i>
								Projekter
						</a></li>
						<li id="Artikler" class="linked"><a href="?page=Artikler"> <i class="fa fa-angle-right fa-lg"></i>
								Artikler
						</a></li>
						<li id="Rapporter" class="linked"><a href="?page=Rapporter"> <i class="fa fa-angle-right fa-lg"></i>
								Rapporter
						</a></li>	
						
					</ul>
				</div>