<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<meta name="Leonardo Gomes da Silva" content="">
					<title>Jogo de Jo-Ken-Po</title>
					<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
						<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
							<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
								<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
									<link href="css/stylish-portfolio.min.css" rel="stylesheet">
									</head>
									<body id="page-top">
										<?php
    error_reporting(0);
    $cookieplayer = "Player";
    $cookie1 = $_COOKIE[$cookieplayer];

    $cookiecpu = "CPU";
    $cookie2 = $_COOKIE[$cookiecpu];

    $getp1points =  $_COOKIE['Player'];
    $getcpupoints = $_COOKIE['CPU'];

    $arrX = array("Papel", "Pedra","Tesoura");
    $randIndex = array_rand($arrX);
    

    if($_POST["choice"]=="Pedra"){
        $p1 = 1;
        $p1r = "Pedra";
    }elseif($_POST["choice"]=="Papel"){
        $p1 = 2;
        $p1r = "Papel"; 
    }else{
        $p1 = 3;
        $p1r = "Tesoura";
    }
    
    if($arrX[$randIndex] == "Pedra"){
        $p2 = 1;
        $p2r = "Pedra";
    }elseif($arrX[$randIndex] == "Papel"){
        $p2 = 2;
        $p2r = "Papel";
    }else{
        $p2 = 3;
        $p2r = "Tesoura";
    }


    if($p1 == 1 && $p2 == 2){
        $p1choice = "Pedra";
        $p1choiceImg = 'img/rock.png';
        $cpuchoice = "Papel";
        $cpuchoiceImg = 'img/paper.png';
        $resultado = "CPU Ganhou!";
        setcookie('CPU', $getcpupoints+1, time() + (10 * 365 * 24 * 60 * 60));
    }elseif($p1 == 1 && $p2 == 3){
        $p1choice = "Pedra";
        $p1choiceImg = 'img/rock.png';
        $cpuchoice = "Tesoura";
        $cpuchoiceImg = 'img/scissor.png';
        $resultado = "Player Ganhou!";
        setcookie('Player', $getp1points+1, time() + (10 * 365 * 24 * 60 * 60));
    }elseif($p1 == 2 && $p2 == 1){
        $p1choice = "Papel";
        $p1choiceImg = 'img/paper.png';
        $cpuchoice = "Pedra";
        $cpuchoiceImg = 'img/rock.png';
        $resultado = "Player Ganhou!";
        setcookie('Player', $getp1points+1, time() + (10 * 365 * 24 * 60 * 60));
    }elseif($p1 == 2 && $p2 == 3){
        $p1choice = "Papel";
        $p1choiceImg = 'img/paper.png';
        $cpuchoice = "Tesoura";
        $cpuchoiceImg = 'img/scissor.png';
        $resultado = "CPU Ganhou!";
        setcookie('CPU', $getcpupoints+1, time() + (10 * 365 * 24 * 60 * 60));
    }elseif($p1 == 3 && $p2 == 1){
        $p1choice = "Tesoura";
        $p1choiceImg = 'img/scissor.png';
        $cpuchoice = "Pedra";
        $cpuchoiceImg = 'img/rock.png';
        $resultado = "CPU Ganhou!";    
        setcookie('CPU', $getcpupoints+1, time() + (10 * 365 * 24 * 60 * 60));  
    }elseif($p1 == 3 && $p2 == 2){
        $p1choice = "Tesoura";
        $p1choiceImg = 'img/scissor.png';
        $cpuchoice = "Papel";
        $cpuchoiceImg = 'img/paper.png';
        $resultado = "Player Ganhou!";
        setcookie('Player', $getp1points+1, time() + (10 * 365 * 24 * 60 * 60));
    }elseif($p1 == 1 && $p2 == 1){
        $p1choice = "Pedra";
        $p1choiceImg = 'img/rock.png';
        $cpuchoice = "Pedra";
        $cpuchoiceImg = 'img/rock.png';
        $resultado = "Empate!";
    }elseif($p1 == 2 && $p2 == 2){
        $p1choice = "Papel";
        $p1choiceImg = 'img/paper.png';
        $cpuchoice = "Papel";
        $cpuchoiceImg = 'img/paper.png';
        $resultado = "Empate!";
    }elseif($p1 == 3 && $p2 == 3){
        $p1choice = "Tesoura";
        $p1choiceImg = 'img/scissor.png';
        $cpuchoice = "Tesoura";
        $cpuchoiceImg = 'img/scissor.png';
        $resultado = "Empate!";
    }
    ?>
										<header class="masthead d-flex">
											<div class="container text-center my-auto">
												<a class="btn btn-primary btn-xl js-scroll-trigger" href="index.php">Página Principal</a>
												<br>
													<br>
														<br>
															<div class="btn btn-dark btn-xl js-scroll-trigger">
																<label>P1 Pontos:
      
																	<?php
      if(isset($cookie1) && !empty($cookie1)){
        if($resultado == "CPU Ganhou!"){
          echo $getp1points;
        }elseif($resultado == "Empate!"){
          echo $getp1points;
        }else{
          echo $getp1points+1;
        }
      }else{
        if($resultado == "CPU Ganhou!"){
          echo "0";
        }elseif($resultado == "Empate!"){
          echo "0";
        }else{
          echo $getp1points+1;
        }
      }
       ?>
																</label>
															</div>
															<div class="btn btn-dark btn-xl js-scroll-trigger">
																<label>CPU:
       
																	<?php
       if(isset($cookie2) && !empty($cookie2)){
        if($resultado == "Player Ganhou!"){
          echo $getcpupoints;
         }elseif($resultado == "Empate!"){
          echo $getcpupoints;
         }else{
           echo $getcpupoints+1;
         }
       }else{
         if($resultado == "Player Ganhou!"){
          echo "0";
         }elseif($resultado == "Empate!"){
          echo "0";
         }else{
           echo $getcpupoints+1;
         }
       }
       ?>
																</label>
															</div>
															<br>
																<br>
																	<div class="btn btn-dark btn-xl js-scroll-trigger">
																		<img src='
																			<?php echo $p1choiceImg ?>'>
																			<br>
																				<label>
																					<?php echo $p1choice ?>
																				</label>
																				<br>
																					<label>Player 1</label>
																				</div>
																				<div class="btn btn-dark btn-xl js-scroll-trigger">
																					<img src='
																						<?php echo $cpuchoiceImg?>'>
																						<br>
																							<label>
																								<?php echo $cpuchoice ?>
																							</label>
																							<br>
																								<label>CPU</label>
																							</div>
																							<br>
																								<br>
																									<br>
																										<div class="btn btn-dark btn-xl js-scroll-trigger">
																											<label>
																												<?php echo $resultado ?>
																											</label>
																										</div>
																										<br>
																											<br>
																												<a class="btn btn-primary btn-xl js-scroll-trigger" href="game-default.php">Jogar Novamente!</a>
																											</div>
																										</header>
																										<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
																											<i class="fas fa-angle-up"></i>
																										</a>
																										<script src="vendor/jquery/jquery.min.js"></script>
																										<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
																										<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
																										<script src="js/stylish-portfolio.min.js"></script>
																									</body>
																								</html>
