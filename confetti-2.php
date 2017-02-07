<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
		<title>
			Test
		</title>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="page-container" style="height:100vh;">
			<div id="page-overflow-border" style="-webkit-transform-style: preserve-3d;">
				<div id="background-container" style="">
					<div class="star-layer-3">
						<div id="star-layer-3">
						<?php
							$num_shapes = 250;
							function get_style(){
								$width = rand(50,250).'px';
								$height = rand(100,400).'px';
								$opacity = rand(4,8)/10.0;
								$rotation = 'rotate('.rand(0,360).'deg)';
								$color = 'hsl('.(220+rand(-50,50)).', '.rand(50,100).'%, '.rand(33,67).'%)';
								$top = rand(-10,1010).'vh';
								$left = rand(-10,110).'vw';
								$style = '
									position: absolute;
									top: '.$top.';
									left: '.$left.';
									opacity: '.$opacity.';
									transform: '.$rotation.';
									width: '.$width.';
									height: '.$height.';
									background-color: '.$color.';
								';
								return $style;
							}
							
							for($i = 0; $i < $num_shapes*0.4; $i++){
								echo('<div style="'.get_style().'"></div>');
							}
						?>
						</div>
					<!--
						<div id="box-3-1"></div>
						<div id="box-3-2"></div>
						<div id="box-3-3"></div>
						<div id="box-3-4"></div>
						<div id="box-3-5"></div>
					-->
					</div>
					<div class="star-layer-2">
						<div id="star-layer-2">
						<?php
							for($i = 0; $i < $num_shapes*0.35; $i++){
								echo('<div style="'.get_style().'"></div>');
							}
						?>
						</div>
					</div>
					<div class="star-layer-1">
						<div id="star-layer-1">
						<?php
							for($i = 0; $i < $num_shapes*0.25; $i++){
								
								echo('<div style="'.get_style().'"></div>');
							}
						?>
						</div>
					</div>
				</div>
				<div id="content" class="container" style="">
					<div class="row" style="overflow-y:hidden;">
						<div class="col-sm-12" style="overflow-x:visible;">
							<div class="row section-container">
								<div class="col-sm-12">
									It’s official! Come join us at RowdyHacks as we build apps, games, and many other neat projects in 24 hours. Whether you’re a seasoned hacker or new to the hackathon community, we’ve got your back through the whole hacking experience.
									<br />
									If you aren’t familiar, a hackathon is where you turn your crazy ideas into real projects. Plenty of your fellow peers gather to build something they’re passionate about so get involved in making incredible things.
								</div>
							</div>
							<div class="row section-container" id="home-page-cover-image">
								<div class="col-sm-12">
								</div>
							</div>
							<div class="row partial-section-container">
								<div class="col-sm-12 col-md-4">
									<div class="partial-section">
										<h3>
											<img src="images/icons/ic_event_black_48px.svg" class="partial-section-h-icon" />
										</h3>
										Market Events
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="partial-section">
										<h3>
											<img src="images/icons/ic_schedule_black_48px.svg" class="partial-section-h-icon" />
										</h3>
										Send Notifications
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="partial-section">
										<h3>
											<img src="images/icons/ic_room_black_48px.svg" class="partial-section-h-icon" />
										</h3>
										Collect Leads
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
