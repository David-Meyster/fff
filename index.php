<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="images/logotip.svg" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="style.js" defer></script>
	<title>TopDrop - Бесплатные Кейсы Standoff 2! Кейсы стандофф 2</title>

</head>

<?php
    $db = new mysqli(
        'localhost',
        'root',
        'root',
        'topdrop'
    );

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    $query = $db->query("SELECT `password` FROM `users` WHERE `user_name` = '$user_name'");
    $user = $query->fetch_assoc();

	$balance = $db->query("SELECT `balance` FROM `users` WHERE `user_name` = '$user_name'");
	$balance = $balance->fetch_array();
	
	if($user && password_verify($password, $user['password'])) {
		setcookie('user', $user_name, time() + 3600 * 24 * 30, "/");
	}

	if (strlen($balance['balance']) == 1) {
		$balance['balance'] = $balance['balance'].'.00 ₽';
	} elseif (strlen($balance['balance']) == 2) {
		$balance['balance'] = $balance['balance'].'.00 ₽';
	} elseif (strlen($balance['balance']) == 3) {
		$balance['balance'] = $balance['balance'].' ₽';
	} elseif (strlen($balance['balance']) >= 4) {
		$balance['balance'] = $balance['balance'].'₽';
	} else {
		$balance['balance'] = $balance['balance'].'0.00 ₽';
	}

?>

<body onload="theme_init()">
	<section>
		<div class="main_start">
			<!-- Logotip -->
			<a href="index.php" class="logotip_link">
				<span class="logotip_left"></span>
				<span class="logotip_right"></span>
				<span class="logotip_center"></span>
			</a>
			<!-- Thems dark and light -->
			<div class="wrap">
				<label class="switch">
					<input type="checkbox" onclick="theme()" />
					<span class="slider">
						<span class="family" id="light-text">Dark</span>
					</span>
				</label>
			</div>
		</div>

		<div class="balance__align">
			<?php if($_COOKIE['user']): ?>
				<button class="replenish_balance_box">
					<span class="replenish_balance">+</span>
				</button>
				<a href="auth.html" class="balance" id="balance">
					<?php print($balance['balance'])?>
				</a>
			<?php else: ?>
				<a href="reg.html" class="balance" id="balance">
					Войти
				</a>
			<?php endif;?>
		</div>

		<div class="loader">
			<a class="box_main" href="index.html"><span style="--i: 10">
					<header>TopDrop</header>
				</span>
			</a>
			<a class="box_main" href="index.html"><span style="--i: 9">Техподдержка</span></a>
			<a class="box_main" href="index.html"><span style="--i: 8">Профиль</span></a>
			<a class="box_main" href="PayMent/payment.html"><span style="--i: 7">Вывод</span></a>
			<a class="box_main" href="index.html"><span style="--i: 6">Скоро</span></a>
			<a class="box_main" href="index.html"><span style="--i: 5"></span></a>
			<a class="box_main" href="index.html"><span style="--i: 4"></span></a>
			<a class="box_main" href="index.html"><span style="--i: 3"></span></a>
			<a class="box_main" href="index.html"><span style="--i: 2"></span></a>
			<a class="box_main" href="index.html"><span style="--i: 1"></span></a>
		</div>
	</section>

	<section class="cases">
		<div class="container">
			<h3 class="vertical_line">Коллекции</h3>
			<ul class="cases_item_box">
				<li class="cases_item">
					<a class="cases_link" href="case/empire.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/empire.webp" alt="empire">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">39 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">79 ₽</span>
								</span>
							</span>
							<span class="cases_name">Empire Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/project_z9.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/project_z9.webp"
								alt="project_z9">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">39 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">79 ₽</span>
								</span>
							</span>
							<span class="cases_name">Project Z9</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/revival.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/revival.webp" alt="revival">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">39 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">79 ₽</span>
								</span>
							</span>
							<span class="cases_name">Revival Collections</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/scorpion.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/scorpion.webp" alt="scorpion">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">39 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">79 ₽</span>
								</span>
							</span>
							<span class="cases_name">Scorpion Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/sharp.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/sharp.webp" alt="sharp">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">79 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">129 ₽</span>
								</span>
							</span>
							<span class="cases_name">Sharp Collections</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/rival.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/rival.webp" alt="rival">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">29 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">59 ₽</span>
								</span>
							</span>
							<span class="cases_name">Rival Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/origin.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/origin.webp" alt="origin">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">29 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">59 ₽</span>
								</span>
							</span>
							<span class="cases_name">Origin Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/fable.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/fable.webp" alt="fable">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">29 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">59 ₽</span>
								</span>
							</span>
							<span class="cases_name">Fable Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/furios.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/collections_cases/furios.webp" alt="furios">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">29 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">59 ₽</span>
								</span>
							</span>
							<span class="cases_name">Furios Case</span>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="cases">
		<div class="container">
			<h3 class="vertical_line">Фарм кейсы</h3>
			<ul class="cases_item_box">
				<li class="cases_item">
					<a class="cases_link" href="case/farm_karambit_gold.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/farm_cases/farm_karambit_gold.png"
								alt="farm_karambit_gold">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">9 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">29 ₽</span>
								</span>
							</span>
							<span class="cases_name">Фарм Karambit Gold</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/farm_akr_treasure_hunter.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/farm_cases/farm_akr_treasure_hunter.png"
								alt="farm_akr_treasure_hunter">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">9 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">29 ₽</span>
								</span>
							</span>
							<span class="cases_name">Фарм AKR Treasure Hunter</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/farm_butterfly.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/farm_cases/farm_butterfly.png"
								alt="farm_butterfly">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">9 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">29 ₽</span>
								</span>
							</span>
							<span class="cases_name">Фарм Butterfly</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/farm_m4_samurai_st.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/farm_cases/farm_m4_samurai_st.png"
								alt="farm_m4_samurai_st">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">9 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">29 ₽</span>
								</span>
							</span>
							<span class="cases_name">Фарм M4 Samurai ST</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/farm_awm_treasure_hunter.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/farm_cases/farm_awm_treasure_hunter.png"
								alt="farm_awm_treasure_hunter">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">9 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">29 ₽</span>
								</span>
							</span>
							<span class="cases_name">Фарм AWM Treasure Hunter</span>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="cases">
		<div class="container">
			<h3 class="vertical_line">Топ сборки</h3>
			<ul class="cases_item_box">
				<li class="cases_item">
					<a class="cases_link" href="case/rare_case.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/assemblies_cases/rare_case.png" alt="rare_case">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">19 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">39 ₽</span>
								</span>
							</span>
							<span class="cases_name">Rare Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/epic_case.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/assemblies_cases/epic_case.png" alt="epic_case">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">49 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">89 ₽</span>
								</span>
							</span>
							<span class="cases_name">Epic Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/legendary_case.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/assemblies_cases/legendary_case.png"
								alt="legendary_case">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">119 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">199 ₽</span>
								</span>
							</span>
							<span class="cases_name">Legendary Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/arcane_case.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/assemblies_cases/arcane_case.png"
								alt="arcane_case">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">699 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">1099 ₽</span>
								</span>
							</span>
							<span class="cases_name">Arcane Case</span>
						</div>
					</a>
				</li>
				<li class="cases_item">
					<a class="cases_link" href="case/knife_case.html">
						<span class="cases_wrapper">
							<img class="cases_images" src="cases_img/assemblies_cases/knife_case.png" alt="knife_case">
						</span>
						<div class="cases_info">
							<span class="cases_cost">
								<span class="cases_cost_box_new">
									<span class="cases_cost_new">1799 ₽</span>
								</span>
								<span class="cases_cost_box_old">
									<span class="cases_cost_old">3499 ₽</span>
								</span>
							</span>
							<span class="cases_name">Knife Case</span>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="cases"></section>
	<section class="cases"></section>
	<section class="cases"></section>
	<section class="cases"></section>
	<section class="cases"></section>
</body>

</html>