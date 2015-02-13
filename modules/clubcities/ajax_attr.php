<?php
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
$id_product=Tools::getValue('id_product');
$id_attribute=Tools::getValue('id_attribute');

 function getAttributesParams($id_product, $id_product_attribute,$id_group)
	{
		$id_lang = (int)Context::getContext()->language->id;
		$id_shop = (int)Context::getContext()->shop->id;
		
		
			$result = Db::getInstance()->executeS('
			SELECT al.`name`, agl.`name` as `group`, a.id_attribute
			FROM `'._DB_PREFIX_.'attribute` a
			LEFT JOIN `'._DB_PREFIX_.'attribute_lang` al
				ON (al.`id_attribute` = a.`id_attribute` AND al.`id_lang` = '.(int)$id_lang.')
			LEFT JOIN `'._DB_PREFIX_.'product_attribute_combination` pac
				ON (pac.`id_attribute` = a.`id_attribute`)
			 JOIN `'._DB_PREFIX_.'product_attribute` pa
				ON (pa.`id_product_attribute` = pac.`id_product_attribute`)
			'.Shop::addSqlAssociation('product_attribute', 'pa').'
			LEFT JOIN `'._DB_PREFIX_.'attribute_group_lang` agl
				ON (a.`id_attribute_group` = agl.`id_attribute_group` AND agl.`id_lang` = '.(int)$id_lang.')
			WHERE pa.`id_product` = '.(int)$id_product.'
				AND pac.`id_product_attribute` IN ('.$id_product_attribute.') 
				AND  a.id_attribute_group='.(int)$id_group.'
				AND agl.`id_lang` = '.(int)$id_lang);
		
		
		//$result = Cache::retrieve($cache_id);
		return $result;
	}

$result = Db::getInstance()->executeS('
			SELECT pa.id_product_attribute 
			FROM `'._DB_PREFIX_.'product_attribute_combination` ac
			JOIN  `'._DB_PREFIX_.'product_attribute` pa ON (ac.id_product_attribute=pa.id_product_attribute)
			'.Shop::addSqlAssociation('attribute', 'ac').'
			WHERE pa.id_product = '.(int)$id_product.'  AND  ac.id_attribute='.(int)$id_attribute.''
		);

$id_product_attributes=array();
foreach($result as $id_product_attribute){
	$id_product_attributes[]=$id_product_attribute['id_product_attribute'];
}

 $id_product_attributes=implode(',',$id_product_attributes);

  $attributs=getAttributesParams((int)$id_product, $id_product_attributes,4);

  $return='<label class="attribute_label">Texture&nbsp;</label>
  <div class="attribute_list">
		<ul id="color_to_pick_list" class="texture">';

  foreach($attributs as $attribut){
	 //exit(var_dump($attribut));
	 if(!isset($default))
	 $default=$attribut['id_attribute'];
	$return.='<li>
				<a href="http://localhost/prestashop/index.php?id_product=1&controller=product" id="color_'.$attribut['id_attribute'].'" name="'.$attribut['name'].'" class="color_pick" title="'.$attribut['name'].'">
																	
																		<img src="'._THEME_COL_DIR_.$attribut['id_attribute'].'.jpg" alt="" title="" width="20" height="20" />
																
																</a>
															</li>';  
	  
	  
  }
$return.='</ul>';
$return.='<input type="hidden" class="color_pick_hidden" name="group_4" value="'.$default.'" />';

$return.='</div>';
echo  $return;



?>