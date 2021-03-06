				<a href="./"><img class="pointer" style="position: absolute"
					src="/img/thinker.jpg" width="60" height="49">
				<div class="brand pointer">
					Backlund ApS <span class="fa fa-home"></span>
				</div></a>
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
							<li id="DAN"><a href="../">Dänisch</a></li>
							<li id="ENG" ><a href="../eng/" >Englisch</a></li>
							<li id="DEU" class="active"><a href="./" >Deutsch</a></li>
						</ul>
						<!-- Products -->
						<li class="linked" id="Produkter">
							<a href="Produkter"><i class="fa fa-angle-right fa-lg"></i> 
							Produkte</a>
						</li>
						<!-- 
						<li id="produkter" data-toggle="collapse" data-target="#products"
							class="collapsed linked"><a href="#"><i
								class="fa fa-angle-right fa-lg"></i> Products<span
								class="arrow"></span></a></li>
						<ul class="sub-menu collapse linked" id="products">
							<li id="Toiletter"><a href="#">Toilets</a></li>
							<li id="Muldtoilet"><a href="#">Muldtoilet</a></li>
							<li id="SeparettVilla"><a href="#">Separett Villa 9000 & 9010</a></li>
							<li id="SeparettWeekend"><a href="#">Separett Weekend 7010</a></li>
							<li id="SeparettResqueCamping"><a href="#">Separett Rescue Camping</a></li>
							<li id="SeparettTilbehoer"><a href="#">Separett Tilbehør</a></li>
							<li id="ToerDas"><a href="#">Tørdas 500 & 501</a></li>
							<li id="Sanitoa"><a href="#">Separett Sanitoa</a></li>
							<li id="Flame"><a href="#">Forbrændingstoilet Flame</a></li>
							<li id="BarneToilet"><a href="#">Barnetoiletsæde</a></li>
							<li id="BarneSkammel"><a href="#">Barneskammel</a></li>
							<li id="EcoDry"><a  href="#">EcoDry</a></li>
							<li id="ESMP"><a  href="#">ESMP</a></li>
							<li id="EcoDryBoks"><a href="#">EcoDry + Boks</a></li>
							<li id="Separationstoilet"><a href="#">Separationstoilet</a></li>
							<li id="Vakuumtoilet"><a href="#">Vakuumtoilet</a></li>
							<li id="Kompost"><a href="#">Kompostbeh.</a></li>
							<li id="Rapporter"><a href="#">Rapporter</a></li>
						</ul>
						 -->

						<li id="Nyheder" class="linked"><a href="Nyheder"> <i class="fa fa-angle-right fa-lg"></i>
								Neues
						</a></li>
						<!-- 
						<li id="Arrangementer" class="linked"><a href="#"> <i class="fa fa-angle-right fa-lg"></i>
								Arrangementer
						</a></li>
						<li id="Aabenthus"class="linked"><a href="#"> <i class="fa fa-angle-right fa-lg"></i>
								Åbent hus
						</a></li>
						<li id="Pileplantage" class="linked"><a href="#"> <i class="fa fa-angle-right fa-lg"></i>
								Pileplantage
						</a></li>
						<li id="Pileanlaeg" class="linked"><a href="#"> <i class="fa fa-angle-right fa-lg"></i>
								Pileanlæg
						</a></li>
						 -->
						<li id="Raadgivning" class="linked"><a href="Raadgivning"> <i class="fa fa-angle-right fa-lg"></i>
								Beratung
						</a></li>
						
						<li id="Foredrag" class="linked"><a href="Foredrag"> <i class="fa fa-angle-right fa-lg"></i>
								Vorträge
						</a></li>
						 
						<li id="Projekter" class="linked"><a href="Foredrag"> <i class="fa fa-angle-right fa-lg"></i>
								Projekte
						</a></li>
						<li id="Artikler" class="linked"><a href="Artikler"> <i class="fa fa-angle-right fa-lg"></i>
								Artikel
						</a></li>
						<li id="Rapporter" class="linked"><a href="Rapporter"> <i class="fa fa-angle-right fa-lg"></i>
								Berichte
						</a></li>	
						
					</ul>
				</div>
				<script src="/js/jquery-3.1.1.min.js"></script>
				<script>$("ul li").click((event)=>{
						var newLocation = event.target.children[0].href;
						console.log(newLocation);
						if (newLocation && newLocation != "" && newLocation !="eng/" && newLocation != "deu/")
						window.location.replace(newLocation);
				});
						</script>