<?php 
/**
*   Template Name: Template trang_gio_hang
* 
* @package Strawberry Jam Ho Chi Minh
* @subpackage JAM
*
*/
?>

<?php 
	include("header.php");
?>
<body> 
 <?php 
    $page_gio_hang=64; 
    if(isset($_REQUEST["task"]))
	{   
		
		if($_REQUEST["task"]=="add")
		{
			$id=$_REQUEST["id"];
			add_to_cart($id);
			
		}
		if($_REQUEST["task"]=="xoa")
		{
			$id=$_REQUEST["id"];
			delete_to_cart($id);
			wp_redirect(get_permalink($page_gio_hang));
			
		}
	}
	print_r($_SESSION['id_sp'] );
	 
 ?>		
<div class="wrapers">
	<?php 
			include("module/mod_head.php");
		?>
	<section class="content container containers">
		<?php 
			include("module/mod_left.php");
		?>
		<div class="main-right">
		     <div class="sec-sp">	
				<div class="title-sp">
				   <?php 
					the_post();
					
				   ?>
					<h3 class="title-h3"><?php the_title();?></h3>
			 	</div>
				<div class="gioi_thieu">
				    <table class="gio_hang">
						<tr>
							<td>STT</td>
							<td>Hình sản phẩm</td>							
							<td>Tên Sản phẩm</td>
							<td>Giá</td>
							<td></td>
						</tr>
						<?php 
						    $dem=0;
							foreach($_SESSION['id_sp'] as $id)
							{
							   $dem++;
								$name=get_the_title($id);
								$img=do_shortcode('[types field="hinh-dai-dien-sp" id="$id" output="raw"]'); 
								$link=get_permalink($id);
								$gia=do_shortcode('[types field="gia" id="$id"]');
								if($gia=="")
								{
								$gia=" Liên hệ";
								}
								else
								{
								 $gia=number_format($gia, 0, ',', '.');
									$gia=$gia." ₫";
								}
							   
							   
						?>
						<tr>
							<td><?php echo $dem?></td>
							<td><img src="<?php echo $img ?>"/></td>							
							<td><?php echo $name ?></td>
							<td><?php echo $gia ?></td>
							<td><a href="<?php echo get_permalink($page_gio_hang)?>&task=xoa&id=<?php echo $id?>">Xóa</a></td>
						</tr>
						<?php 
							}
						?>
					</table>
				  
				 
				</div>
			</div>	
		</div>
	</section>
	
	
	<?php 
		include("footer.php");
	?>
</div>

</body>
</html>