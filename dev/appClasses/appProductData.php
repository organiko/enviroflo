<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 14/01/2018
 * Time: 23:18
 */

namespace app\productData;
use app\dbClass\appDBClass;

class appProductData
{
    private $dbCon;
    public function __construct()
    {
        $this->dbCon = new appDBClass();
    }

    public function productList($v_category)
    {
        if(!is_null($v_category)){ $v_where = " AND category_url = '".$v_category."' ";}else{ $v_where = ""; }
        return $this->dbCon->dbSelect("SELECT product_id, product_link, clnt, category_id, category_url, category_desc, category_status, subcategory_desc, product_desc, manufacturer, product_text, product_status FROM %appDBprefix%_view_product_list WHERE product_status = true ".$v_where." ORDER BY product_id");
    }
}