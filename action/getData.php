<?php
include 'conn.php';

class getData extends connection
{


    function HeadNews()
    {
        $sql = "SELECT Heading, Photo FROM `news` AS N JOIN head_news H ON N.Id=H.News_Id WHERE h.isTopHead=1 ORDER BY Time LIMIT 1";
        $res = $this->conn->query($sql);
        return $res;
    }
    function subHead()
    {
        $sql = "SELECT Id, Heading, Photo FROM `news` JOIN head_news on news.Id=head_news.News_Id LIMIT 9;";
        $res = $this->conn->query($sql);
        return $res;
    }
    function CatHead($cat_id)
    {

        $sql = "SELECT  Heading,Photo FROM head_news AS H JOIN news AS N ON H.News_id = N.Id WHERE H.Cat_Id ='$cat_id'";
        $res = $this->conn->query($sql);
        return $res;
    }
    function CatNews($cat_id)
    {
        $sql = "SELECT Heading, Photo FROM `news`  WHERE Cat_Id='$cat_id' AND Id NOT IN (SELECT News_Id FROM head_news) ORDER BY Time DESC LIMIT 4";
        $res = $this->conn->query($sql);
        return $res;
    }

    function lastNews()
    {
        $sql = "SELECT Id, Heading, Photo, Time FROM `news` ORDER BY Time DESC LIMIT 11";
        $res = $this->conn->query($sql);
        return $res;
    }
}
