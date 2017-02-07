
				<div id="background-container">
					<div class="background-layer-3">
						<?php
							$num_shapes = 250;
							function get_style(){
								$width = rand(50,250).'px';
								$height = rand(100,400).'px';
								$opacity = rand(4,8)/10.0;
								$rotation = 'rotate('.rand(0,360).'deg)';
								$color = 'hsl('.(70+rand(-40,40)).', '.rand(50,100).'%, '.rand(33,67).'%)';
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
					<div class="background-layer-2">
						<?php
							for($i = 0; $i < $num_shapes*0.35; $i++){
								echo('<div style="'.get_style().'"></div>');
							}
						?>
					</div>
					<div class="background-layer-1">
						<?php
							for($i = 0; $i < $num_shapes*0.25; $i++){
								
								echo('<div style="'.get_style().'"></div>');
							}
						?>
					</div>
				</div>