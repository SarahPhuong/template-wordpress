<?php
    function add_meta_box_type()
    {
        if(isset($_REQUEST['post_type']))
        {
            $type=$_REQUEST['post_type'];
        }
        else
        {
            if(isset($_REQUEST['post']))
            {
                $post=get_post($_REQUEST['post']);
                $type=$post->post_type;
            }
        }
        add_meta_box(	$type.'-type-div', __('NewsJam Meta Box'),  'add_type_meta_box', $type, 'normal', 'low');
    }
    
    function add_type_meta_box($post) {
        if(isset($_REQUEST['post_type']))
        {
            $type=$_REQUEST['post_type'];
        }
        else
        {
            if(isset($_REQUEST['post']))
            {
                $post1=get_post($_REQUEST['post']);
                $type=$post1->post_type;
            }
        }
        $option=get_option_by_type($type);		 
        $option_relate = newsjam_getall_relate_data($option[0]->id);
                    ?>
                        <input type="hidden" name="<?php echo $type;?>" value="<?php echo $type;?>" />
                    <?php        					$tr_kq=tr_query_post_all($option[0]->id);     					 					foreach($tr_kq as $tr_result)
                    {                      $a=str_replace("field-name","",$tr_result->khoa);					 
                    $field='';
                    $khoa_field_name='field-name'.$a;
                    $khoa_field_custom_type='field-custom-type'.$a;
                    $khoa_field_type='field-type'.$a;
                    $khoa_field_check='field-view'.$a;
                    $khoa_field_name_post_type='field-name-post-type'.$a;
                    $khoa_field_name_taxonomy_type='field-name-taxonomy-type'.$a;
                    
                    $field['name']=newsjam_get_relate_data($option[0]->id,$khoa_field_name);
                    $field['custom_type']=newsjam_get_relate_data($option[0]->id,$khoa_field_custom_type);
                    $field['type']=newsjam_get_relate_data($option[0]->id,$khoa_field_type);
                    $field['check']=newsjam_get_relate_data($option[0]->id,$khoa_field_check);
                    $field['name_post_type']=newsjam_get_relate_data($option[0]->id,$khoa_field_name_post_type);
                    $field['name_taxonomy_type']=newsjam_get_relate_data($option[0]->id,$khoa_field_name_taxonomy_type);

                        if($field['name'][0]->giatri !='')
                        {
                            if($field['type'][0]->giatri == '1')
                            {
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);
                                //if (!$value_meta) $value_meta = 0;
                                
                            ?>
                            
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                                <?php
                                if($value_meta)
                                {
                                ?>
                                <li>
                                    <input type="text" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" value="<?php echo $value_meta; ?>" />
                                </li>
                                <?php
                                }
                                else
                                {
                                ?>
                                <li>
                                    <input type="text" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" value="" />
                                </li>
                                <?php
                                }
                                ?>
                                
                            </div>
                            <div style="clear: both;"></div>
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '2')
                            {							
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);								 	if($value_meta!="")									{										$value_meta = number_format($value_meta, 0, ',', ',');									}	
                                //if (!$value_meta) $value_meta = 0;
                                
                            ?>
                            
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                                <?php
                                if($value_meta)
                                {
                                ?>
                                <li>
                                    <input type="text" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" value="<?php echo $value_meta; ?>"									onkeydown="return check_Number(event)" 									onkeyup = "javascript:this.value=Comma(this.value);"/>
                                </li>
                                <?php
                                }
                                else
                                {
                                ?>
                                <li>
                                    <input type="text" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" value="" 									onkeydown="return check_Number(event)" 									onkeyup = "javascript:this.value=Comma(this.value);"									/>
                                </li>
                                <?php
                                }
                                ?>
                                
                            </div>
                            <div style="clear: both;"></div>
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '3')
                            {
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);
                                //if (!$value_meta) $value_meta = 0;
                                
                            ?>
                            
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                                <?php
                                if($value_meta)
                                {
                                ?>
                                <li>
                                    <textarea name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>"><?php echo $value_meta; ?></textarea>
                                    
                                </li>
                                <?php
                                }
                                else
                                {
                                ?>
                                <li>
                                    <textarea name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>"><?php echo $value_meta; ?></textarea>
                                </li>
                                <?php
                                }
                                ?>
                                
                            </div>
                            <div style="clear: both;"></div>
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '4')
                            {
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);
                                //if (!$value_meta) $value_meta = 0;
                                
                            ?>
                            

                            <div class="jamnews-metabox ">
							
                                <li>
                                    <label><b><?php echo $field['name'][0]->giatri;?>:</b></label>
                                </li>
								<div style="clear:both"></div>
                                <?php
								if($field['name'][0]->giatri=="Khách đặt tour")
								{
								  ?>
								  <li><?php echo $value_meta?>
								   
								  </li>
								  <li style="display:none">
								    <?php 
								  
								  the_editor($value_meta,$field['custom_type'][0]->giatri, '', $media_buttons = true);
									?>
								  </li>	
							</div>
								  <?php 
								}
								else
								{

									if($value_meta)
									{
									?>
								</div>
									<?php the_editor($value_meta,$field['custom_type'][0]->giatri, '', $media_buttons = true);
									}
									else
									{
									?>
									</div>
									<?php the_editor($value_meta,$field['custom_type'][0]->giatri, '', $media_buttons = true);
								   
									}
								}	
                                ?>
                            <div style="clear: both;"></div>
                            <?php
                            }
                            if($field['type'][0]->giatri == '5')
                            {
                                $value_meta = get_post_meta($post->ID, $field['name_post_type'][0]->giatri, TRUE);
                                //if (!$value_meta) $value_meta = 0;
                                global $wpdb;
                                $query='';
                                $query="select * from  $wpdb->posts post where post_type='".$field['name_post_type'][0]->giatri."' and post_status='publish'";
                                $results = $wpdb->get_results($query);
                            ?>
                            
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                                <li>
                                    <select name="<?php echo $field['name_post_type'][0]->giatri;?>">
                                        <option value="0">Select <?php echo $field['name'][0]->giatri;?></option>
                                        <?php
                                            if (is_array($results)) {
                                                foreach($results as $result)
                                                {
                                                    if($value_meta == $result->ID)
                                                    {
                                        ?>
                                                    <option value="<?php echo $result->ID;?>" selected="selected"><?php echo $result->post_title;?></option>
                                        <?php
                                                    }
                                                    else
                                                    {
                                        ?>
                                                    <option value="<?php echo $result->ID;?>"><?php echo $result->post_title;?></option>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </select>
                                    <?php // print_r($results); ?>
                                </li>
                                
                            </div>
                            <div style="clear: both;"></div>
                            
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '6')
                            {
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);
                                //if (!$value_meta) $value_meta = 0;
                                
                            ?>
                            
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                                <?php
                                if($value_meta == 'on')
                                {
                                ?>
                                <li>
                                    <input type="checkbox" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" checked="checked" />
                                </li>
                                <?php
                                }
                                else
                                {
                                ?>
                                <li>
                                    <input type="checkbox" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" />
                                </li>
                                <?php
                                }
                                ?>
                                
                            </div>
                            <div style="clear: both;"></div>
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '7')
                            {
                                $img='';
                                $value_meta = get_post_custom_values($field['custom_type'][0]->giatri,$post->ID);
                                $status_img = false;
                                if(is_array($value_meta))
                                {
                                    foreach($value_meta as $result =>$value)
                            		{
                            		  $img_post=get_post_custom($value);
                            		  foreach($img_post as $key1 => $value1)
                            		  {
                            				if($key1=="_wp_attached_file")
                            				{
                            				   $img=$value1[0];
                                               $status_img=true;
                            				}
                            		  }
                            		}
                                }
                                
                            ?>
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                               <li class="img_upload">                                    
                                    <input type="file" class="inp_upload" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" /><a id="title_upload_ajax<?php echo $a;?>"><?php echo $img?></a>                             
                               </li>
                               <?php
                                    if($img != '')
                                    {
                               ?>
                               <li id="img_upload_ajax<?php echo $a;?>">
                                    <img  class="img_up" src="<?php echo home_url().'/wp-content/uploads/'.$img ?>" />
                                    <a class="delete<?php echo $a;?>" onmouseover="delete_img_upload(<?php echo $a;?>,'<?php echo $field['custom_type'][0]->giatri; ?>','<?php echo $post->ID;?>','<?php echo plugins_url('/', __FILE__)  ?>')">Delete</a>
                               </li>
                               <?php
                                    }
                               ?>
                                
                            </div>
                            <div style="clear: both;"></div>
                            
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '8')
                            {
                                $value_meta = get_post_meta($post->ID, $field['name_taxonomy_type'][0]->giatri, TRUE);
                                //if (!$value_meta) $value_meta = 0;
                                $categories = get_terms( $field['name_taxonomy_type'][0]->giatri, 'orderby=count&hide_empty=0' );
                            ?>
                            
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                                <li>
                                    <select name="<?php echo $field['name_taxonomy_type'][0]->giatri;?>">
                                        <option value="0">Select <?php echo $field['name'][0]->giatri;?></option>
                                        <?php
                                            if (is_array($categories)) {
                                                foreach($categories as $category)
                                                {
                                                    if($value_meta == $category->term_id)
                                                    {
                                        ?>
                                                    <option value="<?php echo $category->term_id;?>" selected="selected"><?php echo $category->name;?></option>
                                        <?php
                                                    }
                                                    else
                                                    {
                                        ?>
                                                    <option value="<?php echo $category->term_id;?>"><?php echo $category->name;?></option>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </select>
                                    <?php
                                    
                                    ?>
                                </li>
                                
                            </div>
                            <div style="clear: both;"></div>
                            
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '9')
                            {
                                $file='';
                                $value_meta = get_post_custom_values($field['custom_type'][0]->giatri,$post->ID);
                                $status_file = false;
                                if(is_array($value_meta))
                                {
                                    foreach($value_meta as $result =>$value)
                            		{
                            		  $file_post=get_post_custom($value);
                            		  foreach($file_post as $key1 => $value1)
                            		  {
                            				if($key1=="_wp_attached_file")
                            				{
                            				   $file=$value1[0];
                                               $status_file=true;
                            				}
                            		  }
                            		}
                                }
                                
                            ?>
                            <div class="jamnews-metabox">
                                <li>
                                    <label><?php echo $field['name'][0]->giatri;?>:</label>
                                </li>
                               <li class="img_upload">                                    
                                    <input type="file" class="inp_upload" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" /><a id="title_upload_ajax<?php echo $a;?>"><?php echo $file?></a>                             
                               </li>
                               <?php
                                    if($file != '')
                                    {
                               ?>
                               <li id="img_upload_ajax<?php echo $a;?>">
                                    <a class="delete<?php echo $a;?>" onmouseover="delete_img_upload(<?php echo $a;?>,'<?php echo $field['custom_type'][0]->giatri; ?>','<?php echo $post->ID;?>','<?php echo plugins_url('/', __FILE__)  ?>')">Delete</a>
                               </li>
                               <?php
                                    }
                               ?>
                                
                            </div>
                            <div style="clear: both;"></div>
                            
                            <?php    
                              
                            }
                            if($field['type'][0]->giatri == '10')
                            {                               

                                $date='';
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);
                                wp_enqueue_style( 'myStyle_jqueryui');
                                wp_enqueue_script('my_script_jqueryui_handle');
                                
?>
                                <div class="jamnews-metabox">
                                    <li>
                                        <label><?php echo $field['name'][0]->giatri;?>:</label>
                                    </li>
                                    <li>
                                        <input type="text" readonly="" class="jquery_date" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" value="<?php echo $value_meta; ?>" size="30"/>
                                    </li>
                                </div>
                                <div style="clear: both;"></div>
<?php                                
                            }
                            if($field['type'][0]->giatri == '11')
                            {                               

                                $date='';
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);
                                wp_enqueue_style( 'myStyle_jqueryui');
                                wp_enqueue_script('my_script_jqueryui_handle');
                                wp_enqueue_script('my_script_jqueryui_time_handle');
?>
                                <div class="jamnews-metabox">
                                    <li>
                                        <label><?php echo $field['name'][0]->giatri;?>:</label>
                                    </li>
                                    <li>
                                        <input type="text" readonly="" class="jquery_datetime" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" value="<?php echo $value_meta; ?>" size="30"/>
                                    </li>
                                </div>
                                <div style="clear: both;"></div>
<?php                                
                            }
                            if($field['type'][0]->giatri == '12')
                            {                               

                                $date='';
                                $value_meta = get_post_meta($post->ID, $field['custom_type'][0]->giatri, TRUE);
?>
                                <div class="jamnews-metabox">
                                    <li>
                                        <label><?php echo $field['name'][0]->giatri;?>:</label>
                                    </li>
                                    <li>
                                        <input type="text" class="random_str" name="<?php echo $field['custom_type'][0]->giatri;?>" class="<?php echo $field['custom_type'][0]->giatri;?>" id="<?php echo $field['custom_type'][0]->giatri;?>" value="<?php echo $value_meta; ?>" size="30"/>                                        
                                    </li>
                                    <li><a style="margin: 0 0 0 10px;" class="btn_random">Random</a></li>
                                </div>
                                <div style="clear: both;"></div>
<?php                                
                            }                            
                        }
                    }              
    }
    function save_type_meta_box($post_id, $post) { 
        global $post;
        $post1=get_post($_REQUEST['post']);
        $type=$post1->post_type;
        $option=get_option_by_type($type);
        if(isset($_REQUEST[$type]))
        {						
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return $post_id;
            }			$tr_kq=tr_query_post_all($option[0]->id);     					 			foreach($tr_kq as $tr_result)              {                  $i=str_replace("field-name","",$tr_result->khoa);
                $field='';
                $khoa_field_custom_type='field-custom-type'.$i;
                $khoa_field_type='field-type'.$i;
                $khoa_field_name_post_type='field-name-post-type'.$i;
                $khoa_field_name_taxonomy_type='field-name-taxonomy-type'.$i;
                $field['name_taxonomy_type']=newsjam_get_relate_data($option[0]->id,$khoa_field_name_taxonomy_type);
                $field['name_post_type']=newsjam_get_relate_data($option[0]->id,$khoa_field_name_post_type);
                $field['custom_type']=newsjam_get_relate_data($option[0]->id,$khoa_field_custom_type);
                $field['type']=newsjam_get_relate_data($option[0]->id,$khoa_field_type);
                if(($field['type'][0]->giatri != '7')&&($field['type'][0]->giatri != '9')&&($field['type'][0]->giatri != '6')&&($field['type'][0]->giatri != '5')&&($field['type'][0]->giatri != '8'))
                {					
                    if($field['custom_type'][0]->giatri != '')
                    {
                        $key= $field['custom_type'][0]->giatri; 					 
                        $value=$_POST[$key];
                        
                        $old= get_post_meta($post->ID, $key, FALSE);
                        if(($value == '')||($value=='0')) 
                        {
                            update_post_meta($post->ID, $key, false);
                        }
                        elseif($value != $old)
                        {							if($field['type'][0]->giatri == '2')							{  							  $value=str_replace(",","",$value);							  							}
                            update_post_meta($post->ID, $key, $value);
                        }
                    }
                }								 				
                elseif(($field['type'][0]->giatri == '6'))
                {
                    if($field['custom_type'][0]->giatri != '')
                    {
                        $key= $field['custom_type'][0]->giatri;
                        
                        $value=$_POST[$key];
                        
                        $old= get_post_meta($post->ID, $key, FALSE);
                        if(($value == '')||($value=='0')) 
                        {                            
                            update_post_meta($post->ID, $key, false);
                        }
                        elseif($value != $old)
                        {
                            update_post_meta($post->ID, $key, $value);
                        }
                    }
                }
                elseif(($field['type'][0]->giatri == '5')||($field['type'][0]->giatri == '8'))
                {
                    if($field['type'][0]->giatri == '5')
                    {
                        $key= $field['name_post_type'][0]->giatri;
                        $value=$_POST[$key];
                        $old= get_post_meta($post->ID, $key, FALSE);
                        if(($value == '')||($value=='0')) 
                        {
                            delete_post_meta($post->ID, $key);
                        }
                        elseif($value != $old)
                        {
                            update_post_meta($post->ID, $key, $value);
                        }
                    }
                    else
                    {
                        $key= $field['name_taxonomy_type'][0]->giatri;
                        $value=$_POST[$key];
                        $old= get_post_meta($post->ID, $key, FALSE);
                        if(($value == '')||($value=='0')) 
                        {
                            delete_post_meta($post->ID, $key);
                        }
                        elseif($value != $old)
                        {
                            update_post_meta($post->ID, $key, $value);
                        }
                    }
                }
                elseif($field['type'][0]->giatri == '7')
                {
                    $key= $field['custom_type'][0]->giatri;
                    require_once( ABSPATH . "wp-admin" . '/includes/image.php' );
                    $uploadfiles = $_FILES[$key];
                    if($uploadfiles['name'] !='')
                    {
                        $f_width=$uploadfiles['width'];
                        $f_height=$uploadfiles['height'];
                        $filename=$uploadfiles['name'];
                        $upload_dir = wp_upload_dir();
                        $filetmp = $uploadfiles['tmp_name'];
                        $filetitle = preg_replace('/\.[^.]+$/', '', basename( $filename ) );						$filetitle=VietCoding_sanitize_title_with_dashes($filetitle);
                        $filetype = wp_check_filetype(basename($filename), null );
                        $allowed_file_types = array('image/jpg','image/jpeg','image/gif','image/png');
                        $filename = $filetitle . '.' . $filetype['ext'];
                        $bien=rand(1,1000);
                        $filename = $filetitle . '_' . $bien . '.' . $filetype['ext'];
                        $filedest = $upload_dir['path'] . '/' . $filename;
                        move_uploaded_file($filetmp, $filedest);

                     $tr_file="image/".$filetype['ext'];                    $attachment = array(						 'guid'           => $upload_dir['url'] . '/' . basename( $filename ),                       'post_mime_type' => $wp_filetype['type'],                      'post_title' => preg_replace('/\.[^.]+$/', '', basename($uploadfiles['name'])),                      'post_content' => '',					  'post_mime_type' => $tr_file,                      'post_status' => 'inherit'                    );
                    $attach_id = wp_insert_attachment( $attachment, $filedest );
                    $metadata = array();
                    $imagesize = getimagesize( $filedest );
                    $metadata['width'] = $imagesize[0];
		            $metadata['height'] = $imagesize[1];
                    list($uwidth, $uheight) = wp_constrain_dimensions($metadata['width'], $metadata['height'], 128, 96);
                    $metadata['hwstring_small'] = "height='$uheight' width='$uwidth'";
                    $metadata['file'] = _wp_relative_upload_path($filedest);
                    global $_wp_additional_image_sizes;
                    foreach ( get_intermediate_image_sizes() as $s ) {
            			$sizes[$s] = array( 'width' => '', 'height' => '', 'crop' => FALSE );
            			if ( isset( $_wp_additional_image_sizes[$s]['width'] ) )
            				$sizes[$s]['width'] = intval( $_wp_additional_image_sizes[$s]['width'] ); // For theme-added sizes
            			else
            				$sizes[$s]['width'] = get_option( "{$s}_size_w" ); // For default sizes set in options
            			if ( isset( $_wp_additional_image_sizes[$s]['height'] ) )
            				$sizes[$s]['height'] = intval( $_wp_additional_image_sizes[$s]['height'] ); // For theme-added sizes
            			else
            				$sizes[$s]['height'] = get_option( "{$s}_size_h" ); // For default sizes set in options
            			if ( isset( $_wp_additional_image_sizes[$s]['crop'] ) )
            				$sizes[$s]['crop'] = intval( $_wp_additional_image_sizes[$s]['crop'] ); // For theme-added sizes
            			else
            				$sizes[$s]['crop'] = get_option( "{$s}_crop" ); // For default sizes set in options
            		}
                    
                    $sizes = apply_filters( 'intermediate_image_sizes_advanced', $sizes );
                    
                    foreach( $sizes as $size => $size_data ) {
                    $resized = image_make_intermediate_size( $filedest, $size_data['width'], $size_data['height'], $size_data['crop'] );
                    
                    if ( $resized )
                      $metadata['sizes'][$size] = $resized;
                    }
/** add images size **/
/*                  
                    $resized2 = image_make_intermediate_size( $filedest, '789', '234', true );
                    $metadata['sizes']['huydz'] = $resized2;
*/                  
                    $image_resize_array = newsjam_getall_relate_data_bykhoa('images-size');
                    if(is_array($image_resize_array))
                    {
                        foreach($image_resize_array as $image_resize)
                        {
                            if($image_resize->option_id == $option[0]->id)
                            {
                                list($name_size, $width_size, $height_size, $crop) = explode(":", $image_resize->giatri);
                                if($crop != '')
                                {
                                    $crop='true';
                                }
                                else
                                {
                                    $crop='';    
                                }
                                $resized = image_make_intermediate_size( $filedest, $width_size, $height_size, $crop );
                                if($resized)
                                {
                                    $metadata['sizes'][$name_size] = $resized;
                                }
                            }
                        }
                    }
                    
/** ----------------------- **/                                                             
                    $image_meta = wp_read_image_metadata( $filedest );
                    if ( $image_meta )
                    {
			        $metadata['image_meta'] = $image_meta;
                    }
                    //$attach_data = wp_generate_attachment_metadata( $attach_id, $filedest );
                    
                    $attach_data=apply_filters( 'wp_generate_attachment_metadata', $metadata, $attach_id );
                    wp_update_attachment_metadata( $attach_id,  $attach_data );
                    update_post_meta($post->ID, $key, $attach_id);
                    
                                            
                    }
                    elseif($_REQUEST['delete-'.$key])
                    {
                        delete_post_meta($post->ID,$key);
                    }
                }
                elseif($field['type'][0]->giatri == '9')
                {
                    $key= $field['custom_type'][0]->giatri;
                    require_once( ABSPATH . "wp-admin" . '/includes/image.php' );
                    $uploadfiles = $_FILES[$key];
                    if($uploadfiles['name'] !='')
                    {
                        
                        $filename=$uploadfiles['name'];
                        $upload_dir = wp_upload_dir();
                        $filetmp = $uploadfiles['tmp_name'];
                        $filetitle = preg_replace('/\.[^.]+$/', '', basename( $filename ) );
                        $filetype = wp_check_filetype(basename($filename), null );
                        $filename = $filetitle . '.' . $filetype['ext'];
                        $bien=rand(1,1000);
                        $filename = $filetitle . '_' . $bien . '.' . $filetype['ext'];
                        $filedest = $upload_dir['path'] . '/' . $filename;
                        move_uploaded_file($filetmp, $filedest);

                    $attachment = array(
                      'post_mime_type' => $wp_filetype['type'],
                      'post_title' => preg_replace('/\.[^.]+$/', '', basename($uploadfiles['name'])),
                      'post_content' => '',
                      'post_status' => 'inherit'
                    );
                    $attach_id = wp_insert_attachment( $attachment, $filedest );
                    
                    
                    $attach_data = wp_generate_attachment_metadata( $attach_id, $filedest );
                    wp_update_attachment_metadata( $attach_id,  $attach_data );
                    update_post_meta($post->ID, $key, $attach_id);
                    
                                            
                    }
                    elseif($_REQUEST['delete-'.$key])
                    {
                        delete_post_meta($post->ID,$key);
                    }
                }
            }
            echo '<script type="text/javascript">window.location = "post.php?post='.$post->ID.'&action=edit";</script>';
        }
        else return $post_id;
    }
function my_newsjam_columns($columns)
{
        $taxonomy='';
        $columns='';
        if(isset($_REQUEST['post_type']))
        {
            $type=$_REQUEST['post_type'];
        }
        else
        {
            if(isset($_REQUEST['post']))
            {
                $post1=get_post($_REQUEST['post']);
                $type=$post1->post_type;
            }
        }
        $option=get_option_by_type($type);

    $columns['cb']="<input type=\"checkbox\" />";
    $columns['id']='ID';
    $columns['title']='Tên bài viết';		$tr_list_taxonomy_type=tr_list_taxonomy_type($option[0]->id);   	 	foreach($tr_list_taxonomy_type as $tr_list_rs)    
    {		$i=str_replace("taxonomy-type","",$tr_list_rs->khoa);
        $key_type_taxonomy='taxonomy-type'.$i;
        $key_name_taxonomy='taxonomy-name'.$i;
        $taxonomy=newsjam_get_relate_data($option[0]->id,$key_type_taxonomy);
        if($taxonomy[0]->giatri !='')
        {
            $taxonomy_name=newsjam_get_relate_data($option[0]->id,$key_name_taxonomy);
            $columns[$taxonomy[0]->giatri]=$taxonomy_name[0]->giatri;
        }
    }	/*	$tr_sl=tr_query_post_count($option[0]->id);
    for ($i=1;$i<=$tr_sl;$i++)
    {
        
        $key_view='field-view'.$i;
        $key_name='field-name'.$i;
        $key_custom_type='field-custom-type'.$i;
        $field_view=newsjam_get_relate_data($option[0]->id,$key_view);
        
        if($field_view[0]->giatri == 'on')
        {
            $name=newsjam_get_relate_data($option[0]->id,$key_name);
            $type=newsjam_get_relate_data($option[0]->id,$key_custom_type);
            $columns[$type[0]->giatri]=$name[0]->giatri;
        }
    }	*/
    $columns['date']='Date';
    return $columns;
}
function my_newsjam_order_id_columns($columns)
{
    $columns['id']='ID';
    return $columns;
}

function my_custom_columns($column)
{
    global $post;
    global $wpdb;
    if ("id" == $column) echo $post->ID;
    
    if(isset($_REQUEST['post_type']))
    {
        $type=$_REQUEST['post_type'];
    }
    else
    {
        if(isset($_REQUEST['post']))
        {
            $post1=get_post($_REQUEST['post']);
            $type=$post1->post_type;
        }
    }
    $option=get_option_by_type($type);			$tr_list_taxonomy_type=tr_list_taxonomy_type($option[0]->id);   	 	foreach($tr_list_taxonomy_type as $tr_list_rs)        {		$i=str_replace("taxonomy-type","",$tr_list_rs->khoa);
        $key_type_taxonomy='taxonomy-type'.$i;
        $field_type_taxonomy=newsjam_get_relate_data($option[0]->id,$key_type_taxonomy);
        if($field_type_taxonomy[0]->giatri ==$column)
        {
            $term_lists = wp_get_post_terms($post->ID, $field_type_taxonomy[0]->giatri, array("fields" => "names"));
            foreach($term_lists as $term)
            {
                echo $term.'<br/>';
            }
            
        }
    }	/*	$tr_sl=tr_query_post_count($option[0]->id);
    for ($i=1;$i<=$tr_sl;$i++)
    {
        $key_view='field-view'.$i;
        $key_custom_type='field-custom-type'.$i;
        $field_view=newsjam_get_relate_data($option[0]->id,$key_view);
        
        if($field_view[0]->giatri == 'on')
        {
            $type=newsjam_get_relate_data($option[0]->id,$key_custom_type);
            if($column==$type[0]->giatri)
            {
                $value=get_post_meta($post->ID,$type[0]->giatri);
                echo $value[0];
            }
        }
    }	*/
}

function taxonomy_filter_restrict_manage_posts() {
    global $typenow;


    $post_types = get_post_types( array( '_builtin' => false ) );

    if ( in_array( $typenow, $post_types ) ) {
    	$filters = get_object_taxonomies( $typenow );

        foreach ( $filters as $tax_slug ) {
            $tax_obj = get_taxonomy( $tax_slug );
            wp_dropdown_categories( array(
                'show_option_all' => __('Show All '.$tax_obj->label ),
                'taxonomy' 	  => $tax_slug,
                'name' 		  => $tax_obj->name,
                'orderby' 	  => 'name',
                'selected' 	  => $_GET[$tax_slug],
                'hierarchical' 	  => $tax_obj->hierarchical,
                'show_count' 	  => false,
                'hide_empty' 	  => true
            ) );
        }
    }
}
function taxonomy_filter_post_type_request( $query ) {
  global $pagenow, $typenow;

  if ( 'edit.php' == $pagenow ) {
    $filters = get_object_taxonomies( $typenow );
    foreach ( $filters as $tax_slug ) {
      $var = &$query->query_vars[$tax_slug];
      if ( isset( $var ) ) {
        $term = get_term_by( 'id', $var, $tax_slug );
        $var = $term->slug;
      }
    }
  }
}
add_action('quick_edit_custom_box', 'on_quick_edit_custom_box', 10, 2);
function on_quick_edit_custom_box($column, $post_type)
{ 
} 
?>