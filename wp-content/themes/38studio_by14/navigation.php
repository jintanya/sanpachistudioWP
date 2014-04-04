<?php
/**
 * The template for global navigation
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="header_blogs">
	<table class="header_menu" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="../index.html"><img src="../images/1_sub_off.jpg" width="180" /></a>
			</td>
		</tr>
		<tr>
			<td>
				<?php if(in_category('schedule')): ?>
				<a href=""><img src="../images/2_o.jpg" width="180" /></a>
					<?php else : ?>
					<a href="../schedule.html"><img src="../images/2_off.jpg" width="180" /></a>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php if(in_category('map')): ?>
					<a href=""><img src="../images/3_o.jpg" width="180" /></a>
				<?php else : ?>
					<a href="../map.html"><img src="../images/3_off.jpg" width="180" /></a>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php if(in_category('recipes')): ?>
					<a href=""><img src="../images/8_o.jpg" width="180" /></a>
				<?php else : ?>
					<a href="../gohan/recipe/index.html"><img src="../images/8_off.jpg" width="180" /></a>
				<?php endif; ?>
			</td>
		</tr>
		<!--tr>
			<td><a href="../webshop/index.html"><img src="../images/6_sub_off.jpg" width="180" /></a></td>
		</tr-->
	</table>
</div>