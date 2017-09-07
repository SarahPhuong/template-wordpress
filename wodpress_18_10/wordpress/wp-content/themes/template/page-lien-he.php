<?php 
/**
*   Template Name: Template trang_lien_he
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
	
if(isset($_REQUEST["bt_gui"]))
{
	$ten=$_REQUEST["txt-name"];
	$email=$_REQUEST["txt-email"];
	$sdt=$_REQUEST["txt-tel"];
	$noidung=$_REQUEST["txt-message"];

	$today = date("j/n/Y"); 
	$html="<b>Người gửi :</b> :".$ten."<br/>";
	$html.="<b>Ngày gửi :</b> :".$today."<br/>";	
	$html.="<b>Số điện thoại :</b> :".$sdt."<br/>";	
	$html.="<b>Email :</b> ".$email."<br/>";
	$html.="<b>Nội dung :</b> ".$noidung."<br/>";
	
	$my_post = array(
		'post_title'    => 'Liên hệ',
		'post_content'  => $html,
		'post_status'   => 'private', 
		'post_type'     => 'kh-lien-he',
	);
	wp_insert_post( $my_post );
	
	$headers = 'From : '. $email . "\r\n" .
	'Reply-To: '. $email . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";	
	wp_mail($mail_nhan,"Thông tin liên hệ từ website ", $html,$headers);		 
	wp_redirect(get_permalink($page_lien_he) );
}

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
				    
				   <div class="tr_content">
							  										<article class="clearfix content-contact"> 
									<div class="row-fluid" style="height:420px;">
										<div class="map">
										   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2329.83748456382!2d106.64443367281677!3d10.864468534527372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zdGggMDcgdMOibiB0aOG7m2kgaGnhu4dwIHF1YW4gMTI!5e0!3m2!1svi!2s!4v1462896320393" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen=""></iframe>
										</div>
										<div class="clear"></div>
									</div> 									
									<div class="clear"></div>
									<div class="row-fluid">
										<div class="column_container">
											<header class="sectionTitle clearfix">
													<h3><strong>Liên Hệ</strong></h3>
											</header> 
											<section class="rbText clearfix autop" style="line-height:20px">		
                                                <h4>   CÔNG TY TNHH SẢN XUẤT-THƯƠNG MẠI-CƠ KHÍ-DỊCH VỤ NAM NGUYÊN</h4>											
												<b>Địa chỉ :</b> 36/3I đường TTH07 –KP3- phường Tân Thới Hiệp- Q12 -TP HCM <br>
												<b>Điện thoại: </b>   0903 369 814 <br>
												
												
												<b>Email:</b>  cokhitrungthanh123@gmail.com <br>
												
												
											<p></p>
											</section> 
										</div>  
										
										<div class="column_container form">
											<header class="sectionTitle clearfix con-none">
													<h3><strong>Gửi Thông Tin Liên Hệ</strong></h3>
											</header> 
											<section class="rbForm full autop">
												<form method="POST">
													<div class="column_container2 span4">
														<label for="name">Tên</label>
														<input type="text" id="txt-name" name="txt-name" class="name" required="">
													</div>
													<div class="column_container2 span4">
														<label for="email">Email</label>
														<input type="email" id="txt-email" name="txt-email" class="email" required="">
													</div>
													<div class="column_container2 span4">
														<label for="tel">Số Điện Thoại</label>
														<input type="text" id="txt-tel" name="txt-tel" class="tel" required="">
													</div>
													<div class="column_container2 span12">
														<label for="message">Nội Dung</label>
														<textarea type="text" id="txt-message" name="txt-message" class="message"></textarea>
													</div>													
													<div class="column_container2 span12">
														<input type="submit" class="submit" name="bt_gui" value="Gửi" onclick="return check_err();">
													</div>
												</form>
											</section> 
										</div> 
									</div>
									
								</article>
					
			 
		</div>
				 
				 
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