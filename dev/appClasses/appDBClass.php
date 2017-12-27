<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 22/09/17
 * Time: 18:13
 */

namespace app\dbClass;
use mysqli;
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
        $this->con = new mysqli($this->db['dbServer'], $this->db['dbUser'], $this->db['dbPwd'], $this->db['dbName'], $this->db['dbPort']);

        if(mysqli_connect_error())
        {
            echo '<b>There was a problem connecting to database! </b><br />errno: '.mysqli_connect_errno();
            die();
        }
        $this->con->set_charset("utf8");
        return $this->con;
    }

    public function dbSelect($query)
    {
        $chk = mysqli_query($this->con,str_replace("%appDBprefix%",$this->db['dbPrefix'],$query));
        $cnt = mysqli_num_rows($chk);
        if($cnt > 0)
        {
            $rtn['rsTotal'] = $cnt;
            $rtn['rsData'] = mysqli_fetch_all($chk,MYSQLI_ASSOC);
            $rtn['rsStatus'] = true;
        }
        else
        {
            $rtn['rsStatus'] = false;
        }
        return $rtn;
    }

    public function dbInsert($query)
    {
        $chk = mysqli_query($this->con,str_replace("%appDBprefix%",$this->db['dbPrefix'],$query));
        if($chk)
        {
            $rtn['rsInsertID'] = mysqli_insert_id($this->con);
        }
        else
        {
            $rtn = null;
        }
        return $rtn;
    }

    public function dbUpdate($query)
    {
        if(mysqli_query($this->con,str_replace("%appDBprefix%",$this->db['dbPrefix'],$query)))
        {
            return true;
        }
        else
        {
            //ToDo: Error Log
            die('Erro: '.mysqli_error($this->con));
        };
    }

    public function dbDelete($query)
    {
        if(mysqli_query($this->con,str_replace("%appDBprefix%",$this->db['dbPrefix'],$query)))
        {
            return true;
        }
        else
        {
            //ToDo: Error Log
            die('Erro: '.mysqli_error($this->con));
        };
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
        mysqli_close($this->con);
    }


}


class appDBpdo extends PDO
{
    private $conPDO;
    private $dbPDO;

    public function __construct()
    {
        $this->dbPDO = parse_ini_file($_SERVER['DOCUMENT_ROOT']."/appConfig/appDatabase.php");
        $this->dbConnectPDO();
    }

    private function dbConnectPDO()
    {
        try {
            $this->conPDO = new PDO("mysql:host=" . $this->dbPDO['dbServer'] . ";dbname=" . $this->dbPDO['dbName'].";charset=utf8;connect_timeout=15;", $this->dbPDO['dbUser'], $this->dbPDO['dbPwd'],array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        } catch (\PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


}