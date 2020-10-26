<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/80dbd8c441.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
		
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		font-size: 22px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		padding: 12px 10px 12px 10px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}


	#main {
		background-image: url("<?php echo base_url();?>/images/background.png");
		background-size: cover;
		min-height: 100vh;
	}

	#wrapper {
		overflow-x: hidden;
	}

	#sidebar-wrapper {
		min-height: 100vh;
		
	}

	#sidebar-wrapper .list-group {
		width: 15rem;
	}

	#sidebar-wrapper .sidebar-heading {
		padding: 0.875rem 1.25rem;
		font-size: 1.2rem;
	}


	#page-content-wrapper {
		min-width: 100vw;
	}

	/* .sidebar-heading {
		font: 20px;
	} */
	
	.navbar {
		padding: 14px 20px;
		margin: 0;
	}

	.nav-link {
		padding: 0;
		font-size: 19.2px;
	}

	#class-date-form {
		padding-left: 10px;
		padding-bottom: 10px;
	}

	#red-rocket,
	#yellow-rocket,
	#green-rocket,
	#blue-rocket {
		position: absolute;
		width: 100px;
		height: 225px;
	}
	
	#red-rocket {
		<?php
		$red_points = 0;

		foreach ($teams as $team) {
			if ($team->team_name == 'Red') {
				$red_points = $team->points;
			}
		}
		?>
		bottom: <?php echo $red_points * 6.65; ?>px;
		left: <?php echo 200 + $red_points * 3; ?>px;
		transform: rotate(25deg);
		animation-name: animateRedRocket;
		animation-duration: 4s;
	}

	#yellow-rocket {
		<?php
		$yellow_points = 0;

		foreach ($teams as $team) {
			if ($team->team_name == 'Yellow') {
				$yellow_points = $team->points;
			}
		}
		?>
		bottom: <?php echo $yellow_points * 6; ?>px;
		left: <?php echo 510 + $yellow_points * 1; ?>px;
		transform: rotate(10deg);
		animation-name: animateYellowRocket;
		animation-duration: 4s;
	}

	#green-rocket {
		<?php
		$green_points = 0;

		foreach ($teams as $team) {
			if ($team->team_name == 'Green') {
				$green_points = $team->points;
			}
		}
		?>
		bottom: <?php echo $green_points * 6; ?>px;
		left: <?php echo 825 - $green_points * 1; ?>px;
		transform: rotate(-10deg);
		animation-name: animateGreenRocket;
		animation-duration: 4s;
	}

	#blue-rocket {
		<?php
		$blue_points = 0;

		foreach ($teams as $team) {
			if ($team->team_name == 'Blue') {
				$blue_points = $team->points;
			}
		}
		?>
		bottom: <?php echo $blue_points * 6.65; ?>px;
		left: <?php echo 1135 - $blue_points * 3; ?>px;
		transform: rotate(-25deg);
		animation-name: animateBlueRocket;
		animation-duration: 4s;
	}

	@keyframes animateRedRocket {
		0% {
			bottom: 0px;
			left: 200px;
		}
		100% {
			bottom: <?php echo $red_points * 6.65; ?>px;
			left: <?php echo 200 + $red_points * 3; ?>px;
		}
	}

	@keyframes animateYellowRocket {
		0% {
			bottom: 0px;
			left: 510px;
		}
		100% {
			bottom: <?php echo $yellow_points * 6; ?>px;
			left: <?php echo 510 + $yellow_points * 1; ?>px;
		}
	}

	@keyframes animateGreenRocket {
		0% {
			bottom: 0px;
			left: 825px;
		}
		100% {
			bottom: <?php echo $green_points * 6; ?>px;
			left: <?php echo 825 - $green_points * 1; ?>px;
		}
	}

	@keyframes animateBlueRocket {
		0% {
			bottom: 0px;
			left: 1140px;
		}
		100% {
			bottom: <?php echo $blue_points * 6.65; ?>px;
			left: <?php echo 1135 - $blue_points * 3; ?>px;
		}
	}

	.scene {
		position: relative;
		width: 100%;
		height: 100vh;
		overflow: hidden;
		display: flex;

	}

	.scene i {
		position: absolute;
		top: 100px;
		background: rgba(255,255,255,0.5);
		animation: animateStars linear infinite;
	}

	@keyframes animateStars {
		0% {
			transform: translateY(0);
		}
		100% {
			transform: translateY(100vh);
		}
	}

	.scene .rocket {
		position: relative;
		animation: animate 0.2s ease infinite;;
	}
	
	@keyframes animate {
		0%, 100% {
			transform: translateY(-1px);
		}
		50% {
			transform: translateY(1px);
		}
	}

	#moon {
		position: absolute;
		width: 300px;
		height: 300px;
		left: 570px;
		top: -120px;
	}

	#chart-button {
		width: 75px;
		height: 75px;
		color: white;
		background-color: transparent;
		border: white 2px solid;
		border-radius: 15px;
		margin-top: 20px;
		margin-left: 20px;
		position: absolute;
		z-index: 999;
	}
	</style>
</head>
<body>

	<div class="d-flex" id="wrapper">

		<div class="border-right border-bottom bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom" style="background-color: #6ac6db">Class Buddy</div>

            <h1 class="pt-3 pl-2 m-0">Roll Call</h1>

			<div class="list-group list-group-flush">
				<?php 
				$attributes = ['id' => 'class-date-form'];
				echo form_open('Welcome/', $attributes);
				?>
				<label for="class">Class: </label>
				<?php 
				echo form_dropdown('class', $classes, $class); 
				echo '</br>'
				?>
				
				<label for="date">Date: </label>
				<input type="date" id="date" name="date" value="<?php echo $date; ?>">
				<input type="submit" name="submit" value="Change" />
				<?php echo form_close(); ?>
				
				<?php echo form_open("Welcome/roll_call"); ?>

				<input hidden type="date" id="date" name="date" value="<?php echo $date; ?>">

				<table class="table">
					<thead>
						<tr>
							<!-- <th scope="col">id</th> -->
							<th scope="col">Name</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($student_list as $student) { ?>
						<tr>
							<!-- <th scope="row"><?php echo $student->student_id; ?></th> -->
							<td><?php echo $student->name; ?></td>
							<td>
								<input type="checkbox" name="student_id[]" value="<?php echo $student->student_id; ?>"
								<?php 
								if (in_array($student->student_id, $attended_students))  {
									echo 'checked';
								} 
								?>
								>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

				<input type="submit" name="submit" value="Submit" />

				<?php echo form_close(); ?>
			</div>
        </div>

		<div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #6ac6db">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url('Welcome/'); ?>">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Welcome/classes'); ?>">Classes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Welcome/teams'); ?>">Teams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Welcome/rewards/unredeemed'); ?>">Rewards</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link" href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="main">
				<button type="button" id="chart-button" data-toggle="modal" data-target="#barChartModal"><i class="far fa-chart-bar fa-3x"></i></button>

				<div class="scene">
					<div id="moon-container">
						<img id="moon" src="<?php echo base_url('images/moon.png'); ?>" alt="moon">
					</div>
					
					<div class="rocket">
						<img id="red-rocket" src="<?php echo base_url('images/rocket-red.png'); ?>" alt="rocket">
					</div>

					<div class="rocket">
						<img id="yellow-rocket" src="<?php echo base_url('images/rocket-yellow.png'); ?>" alt="rocket">
					</div>

					<div class="rocket">
						<img id="green-rocket" src="<?php echo base_url('images/rocket-green.png'); ?>" alt="rocket">
					</div>

					<div class="rocket">
						<img id="blue-rocket" src="<?php echo base_url('images/rocket-blue.png'); ?>" alt="rocket">
					</div>
				</div>

				<div class="modal fade" id="barChartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Today's Attendance</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<canvas id="myChart" width="800" height="600"></canvas>
							</div>
						</div>
					</div>
				</div>
				
			</div>
        </div>
	</div>

	<div class="modal fade" id="barChartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Today's Attendance</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<canvas id="myChart" width="800" height="600"></canvas>
				</div>
			</div>
		</div>
	</div>
	
</body>

<script>
	function stars() {
		let count = 20;
		let scene = document.querySelector('.scene');
		let i = 0;
		while (i < count) {
			let star = document.createElement('i');
			let x = Math.floor(Math.random() * window.innerWidth);

			let duration = Math.random() * 2;
			let h = Math.random() * 50;

			star.style.left = x + 'px';
			star.style.width = 1 + 'px';
			star.style.height = 100 + h + 'px';
			star.style.animationDuration = duration + 's';

			scene.appendChild(star);
			i++;
		}
	}
	stars();

	$("#barChartModal").on('shown.bs.modal', function() {
	var ctx = document.getElementById('myChart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Red', 'Yellow', 'Green', 'Blue'],
			datasets: [{
				label: '#',
				data: [<?php echo $team_attendance['Red']; ?>, <?php echo $team_attendance['Yellow']; ?>, <?php echo $team_attendance['Green']; ?>, <?php echo $team_attendance['Blue']; ?>],
				backgroundColor: [
					'rgba(255, 0, 0, 0.8)',
					'rgba(255, 255, 0, 0.8)',
					'rgba(0, 128, 0, 0.8)',
					'rgba(0, 0, 255, 0.8)',
				],
				borderColor: [
					'rgba(255, 0, 0, 1)',
					'rgba(225, 225, 0, 1)',
					'rgba(0, 128, 0, 1)',
					'rgba(0, 0, 255, 1)',
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					gridLines: {
						color: "rgba(0, 0, 0, 0)",
					}
				}],
				yAxes: [{
					ticks: {
						min: 0,
						stepSize: 1,
					},
					gridLines: {
						color: "rgba(0, 0, 0, 0)",
					}

				}]
			},
			animation: {
				duration: 2000,
				easing: 'linear',
			},
		}
	});
	});
</script>
</html>