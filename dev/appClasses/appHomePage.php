<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 22/09/17
 * Time: 23:47
 */

namespace app\homeData;
use app\dbClass\appDBClass;

class appHomePage
{
    private $dbCon;
    public function __construct()
    {
        $this->dbCon = new appDBClass();
    }

    public function activeBlocks()
    {
        return $this->dbCon->dbSelect("SELECT block_id, block_order, block_title, block_file, block_status FROM %appDBprefix%_home_block WHERE block_status = true ORDER BY block_order ASC");
    }

    public function activeSlides()
    {
        return $this->dbCon->dbSelect("SELECT slide_id, clnt, slide_order, slide_file, slide_title, slide_text, slide_link_01_title, slide_link_01_url, slide_link_02_title, slide_link_02_url, slide_status FROM %appDBprefix%_home_slider WHERE slide_status = true ORDER BY slide_order ASC");
    }

    public function activePartner($orderBy='partner_order ASC')
    {
        return $this->dbCon->dbSelect("SELECT partner_id, clnt, partner_order, partner_logo, partner_country, partner_market, partner_name, partner_text, partner_url, partner_status FROM %appDBprefix%_home_partner WHERE partner_status = true ORDER BY ".$orderBy);
    }

    public function activeCategory($orderBy='category_id ASC')
    {
        return $this->dbCon->dbSelect("SELECT category_id, clnt, category_order, category_image, category_desc, category_text, category_url, category_status FROM %appDBprefix%_home_category WHERE category_status = true ORDER BY ".$orderBy);
    }

    public function activeService($orderBy='service_id ASC')
    {
        return $this->dbCon->dbSelect("SELECT service_id, clnt, service_order, service_image, service_name, service_text, CONCAT(SUBSTRING_INDEX(service_text, ' ', 10),'...') AS service_home_text, service_status FROM %appDBprefix%_home_service WHERE service_status = true ORDER BY ".$orderBy);
    }
}