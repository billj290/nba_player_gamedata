<?php
session_start();
date_default_timezone_set("Asia/Taipei");

$dsn="mysql:host=localhost;charset=utf8;dbname=nba";
$pdo=new PDO($dsn,'root','');

class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=nba";
    protected $table;
    protected $pdo;

    public function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }
    public function find($id){
        $sql="select * from $this->table ";
        if(is_array($id)){
            $tmp=$this->arrayToSqlarray($id);
            $sql=$sql. " where ". join(" && ",$tmp);
        }else{
            $sql=$sql. " where `id`='$id'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function all(...$arg){
        $sql="select * from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                $tmp=$this->arrayToSqlarray($arg[0]);
                $sql=$sql. " where " . join(" && ",$tmp);
                
            }else{
                $sql=$sql.$arg[0];
            }
        }
        if(isset($arg[1])){
            $sql=$sql.$arg[1];
        }
        
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function save($array){
        if(isset($array['playerid'])){
            $id=$array['playerid'];
            unset($array['playerid']);
            $tmp=$this->arrayToSqlarray($array);
            $sql="update $this->table set ". join(",",$tmp). " where `playerid`='$id'";
        }else{
            $cols=array_keys($array);
            $sql="insert into $this->table (`". join("`,`",$cols). "`) values ('". join("','",$array). "')";
        }

        $this->pdo->exec($sql);
    }
    public function del($id){
        $sql="delete from $this->table ";
        if(is_array($id)){
            $tmp=$this->arrayToSqlarray($id);
            $sql=$sql. " where ". join(" && ",$tmp);
        }else{
            $sql=$sql. " where `id`='$id'";
        }
        $this->pdo->exec($sql);
    }
    private function arrayToSqlarray($array){
        foreach($array as $key => $value){
            $tmp[]="`$key`='$value'";      
        }
        return $tmp;
    }
}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

function q($sql){
    $dsn="mysql:host=localhost;charset=utf8;dbname=nba";
    $pdo=new PDO($dsn,'root','');

    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

$Gamedata=new DB('gamedata');
$Playerid=new DB('playerid');
$Users=new DB('users');
$Tm=new DB('tm');
$Image=new DB('image');
