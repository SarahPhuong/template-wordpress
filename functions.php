<?php
@session_start();
if(!isset($_SESSION['id_sp']))
{
  $_SESSION['id_sp'] = array();
}
 function add_to_cart($id)
{
        
	 $id_san_pham="id_sp_".$id;
	 $_SESSION[$id_san_pham] =$id;
	 $flag=0;
	if(isset($_SESSION['id_sp']))
	{
			foreach($_SESSION['id_sp'] as $kq)
			{
			   if($kq==$id)
			   {
			     $flag=1;
			   }
			}
			
	 }	
	 
	if($flag==0)
	{	
	   array_push($_SESSION['id_sp'], $id);
	   
	}
	 
}
 function delete_to_cart($id)
{ 
   $id_san_pham="id_sp_".$id;
   $so_luong_sp="so_luong_sp_".$id;
    
   unset($_SESSION[$id_san_pham]);
   unset($_SESSION["id_sp"][$id]);
    unset($_SESSION[$so_luong_sp]);
   
}
 
?>