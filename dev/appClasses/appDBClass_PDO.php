<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 22/09/17
 * Time: 18:13
 */

namespace app\dbClass;
use \PDO;

class appDBClass
{
    private $con;
    public $result;
    private $db;

    public function __construct()
    {
        $this->db = parse_ini_file($_SERVER['DOCUMENT_ROOT']."/appConfig/appDatabase.php");
        $this->dbConnect();
    }

    private function dbConnect()
    {
        try {
            $this->con = new PDO("mysql:host=" . $this->db['dbServer'] . ";dbname=" . $this->db['dbName'].";charset=utf8;connect_timeout=15;", $this->db['dbUser'], $this->db['dbPwd'],array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        } catch (\PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function dbSelect($query)
    {
        $result = $this->con->prepare(str_replace("%appDBprefix%",$this->db['dbPrefix'],$query));
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        $result = $this->con->prepare("SELECT FOUND_ROWS()");
        $result->execute();
        $cnt = $result->fetchColumn();

        if($cnt > 0)
        {
            $rtn['rsTotal'] = $cnt;
            $rtn['rsData'] = $data;
        }
        else
        {
            $rtn = null;
        }
        return $rtn;
    }

    public function dbQuery($query)
    {
        $chk = mysqli_query($this->con,str_replace("%appDBprefix%",$this->db['dbPrefix'],$query));
        $cnt = mysqli_num_rows($chk);
        if($cnt > 0)
        {
           $rtn['rsTotal'] = $cnt;
           $rtn['rsData'] = mysqli_fetch_all($chk,MYSQLI_ASSOC);
        }
        else
        {
            $rtn = null;
        }
        return $rtn;
    }


    public function __destruct()
    {
        $this->db = null;
        $this->con = null;
    }


}
