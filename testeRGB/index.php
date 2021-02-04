<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>CSS Grid #03</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
  	<body>
		<div id="container">
			<section id="head">
				<header>
				<img src="https://www.rgb.com.br/assets/core/publica/imagens/logo-claro.png">
				</header>
				<nav>
					<div id="fone">
						<i class="material-icons" style="font-size:22px;color:black">phone</i>
						<P>00 0000-0000</P>
					</div>
					<div id="pg">
						<div class="dropdown">
							<button class="dropbtn">Páginas</button>
							<div class="dropdown-content">
								<a href="#">Página 1</a>
								<a href="#">Página 2</a>
								<a href="#">Página 3</a>
								<a href="#">Página 4</a>
								<a href="#">Página 5</a>
								<a href="#">Página 6</a>
								<a href="#">Página 7</a>
							</div>
						</div>
						<div class="link"></divclass>
							<a href="#">Página 1</a>
							<a href="#">Página 2</a>
							<a href="#">Página 3</a>
							<a href="#">Página 4</a>
							<a href="#">Página 5</a>
							<a href="#">Página 6</a>
							<a href="#">Página 7</a>
						</div>
					</div>
				</nav>
			</section>
			<main>
			<hr/>
				<section class="imgInLine">
                                    <?php
                                        $servidor = "localhost";
                                        $usuario = "root";
                                        $senha = "";
                                        $dbname = "testergb";

                                        //cria conexão
                                        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
                                        //Pega imgdescription no db
                                        for($i=1; $i < 21; $i++) {
                                        $result_imgdescription = "SELECT * FROM imgdescription where id='$i'";
                                        $resultado_imgdescription = mysqli_query($conn, $result_imgdescription);
                                        $row_imgdescription = mysqli_fetch_assoc($resultado_imgdescription);
                                        
                                            echo "<div class='boxImg'>";
                                            echo "<img src='Imagens/imagens/img_$i.bmp' alt='img_1' id='$i' onclick='Modal.open(this.id)'>";
                                            echo "<p>$row_imgdescription[imgDesc]</p>";
                                            echo "</div>";
                                            
                                        }
                                    ?>
                                    
				</section>
				<hr/>

			</main>
                    
                        <div class="modal-overlay">
                            <div class="modal">
                                <?php
                                    $servidor = "localhost";
                                    $usuario = "root";
                                    $senha = "";
                                    $dbname = "testergb";
                                    //cria conexão
                                    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
                                    //Pega imgdescription no db
                                    $result_imgdescription = "SELECT * FROM imgdescription where id='1'";
                                    $resultado_imgdescription = mysqli_query($conn, $result_imgdescription);
                                    $row_imgdescription = mysqli_fetch_assoc($resultado_imgdescription);
                                    echo "<div class='boxImg'>";
                                    echo "<img src='Imagens/imagens/img_1.bmp' alt='img_1' id='1'>";
                                    echo "<p>$row_imgdescription[imgDesc]</p>";
                                    echo "</div>";
                                ?>
                                <div class="input-group actions">
                                <a 
                                    href="#"
                                    class="button cancel"
                                    onclick="Modal.close()"
                                    >Fechar</a>
                        </div>
                            </div>
                        </div>
                    
			<footer>
				<section id="footer1">
					<div id="footerImg">
						<img src="Imagens/footer/img_1.bmp" alt="img_1" id="img1">
						<p><strong>Pesosas ou Empresa</strong>
							<br> 
							is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
					</div>
					<div id="footerIcon">
						<div id="acesse">
							<strong><p>Acesse Também:</p></strong>
						</div>
						<div id="face">
							<i class="fa fa-facebook-official" style="font-size:22px;color:rgb(0, 110, 255)"></i>
							<p>www.fb.com/loremipsum</p>
						</div>
						<div id="twitter">
							<i class="fa fa-tumblr-square" style="font-size:22px;color:rgb(124, 184, 219)"></i>
							<p>www.twitter.com/loremipsum</p>
						</div>
						<div id="flickr">
							<i class="fa fa-flickr" style="font-size:22px;color:rgb(0, 247, 255)"></i>
							<p>www.flickr.com/loremipsum</p>
						</div>
					</div>
				</section>
				<section id="footer2">
					<div id="footerLogo">
						<div id="Copyright">
							<P>Todos os direitos reservados - © 2012</P>
						</div>
						<div id="rgb">
							<P id="fast">Linha Fast |</P>
							<img src="https://www.rgb.com.br/assets/core/publica/imagens/logo-claro.png">
							<P id="comunicacao">comunicação.com.br</P>
						</div>
					</div>
				</section>
			</footer>
		</div>
            <script src="Modal.js"></script>
	</body>
</html>

        
