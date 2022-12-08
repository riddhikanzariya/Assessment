<?php

class Model 
{
    public $con ="";
    public function __construct()
    {
        $this ->con = new mysqli("localhost","root","","project_php"); //con=connection  host=localhost,path=root,password=blank" ",database=23aug_php
    }
    public function selectAll($tbl)
    {
        $sql = "SELECT * FROM $tbl";
        $q =$this->con->query($sql);
       while($f = $q->fetch_object()) //select ma j fetch karavanu
       {
        $result[] =$f;
       }
       return $result;
    }
    public function InsertData($tbl,$data)
    {
        //insert into tablename (name,pwd......) values (" "," ")
        $key =array_keys($data);
        $dk =implode(",",$key);
        $val =array_values($data);
        $dv =implode("','",$val);

        $sql ="INSERT INTO $tbl ($dk) VALUES ('$dv')";
       // echo $sql; exit;
        $a=$this->con->query($sql);
        return $a;
    }

    //login 
    function select_where($tbl,$where)
    {
        //select * from tbl where name=this and pwd=this where 1=1
        $key =array_keys($where);
        $val =array_values($where);
        $sql ="SELECT * FROM $tbl WHERE 1=1";
        $i=0;
        foreach ($where as $w)
        {
            $sql.= " AND $key[$i] = '$val[$i]'"; //implode na karvu hoy to avi rite thayi sake
            $i++;
        }
        // echo $sql; exit;
        $q =$this->con->query($sql);
        return $q;
    }

    function Delete_data ($tbl,$where)
    {
        $keys =array_keys($where);
        $vals =array_values($where);
        $sql ="DELETE FROM $tbl WHERE 1=1 ";
        $i =0;
        foreach($where as $h)
        {
            $sql.= "  AND $keys[$i]= '$vals[$i]'";
            $i++;
        }
       // echo $sql ; exit;
        $q =$this->con->query($sql);
        return $q;
    }

    //update
    function updatedata($tbl,$data,$where)
    {
        $keys =array_keys($data);
        $val =array_values($data);
        $sql ="UPDATE $tbl SET";
        $i=0;
        $count =count($data);
        foreach($data as $d)
        {
            if($count == $i+1)
            {
                $sql.=" $keys[$i] ='$val[$i]'";
            }
            else 
    {
                $sql.=" $keys[$i] ='$val[$i]',";
            } 
            $i++;
        }
        $sql.="  WHERE 1=1";
        $wk =array_keys($where);
        $wv =array_values($where);
        $k =0;
        foreach($where as $t)
        {
            $sql.=" AND $wk[$k]='$wv[$k]'";
            $k++;
        }
        // echo $sql;exit;
        $q =$this->con->query($sql);
        return $q;
    }
}



?>