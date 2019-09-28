<?php 
    require __DIR__.'\dbconnect.php'; 

    function fetchNews( $conn )
    {

        $request = $conn->prepare(" SELECT idarticle, judul, isipendek, tanggal, tumbnail FROM articles ORDER BY tanggal DESC ");
        return $request->execute() ? $request->fetchAll() : false; 
    }

    function fetchTestimoni( $conn )
    {

        $request = $conn->prepare(" SELECT idtesti, nama, caption, photo FROM testimoni ORDER BY idtesti DESC ");
        return $request->execute() ? $request->fetchAll() : false; 
    }


    function getAnArticle( $id_article, $conn )
    {

        $request =  $conn->prepare(" SELECT idarticle,  judul, isi, tanggal, tumbnail FROM articles  WHERE idarticle = ? ");
        return $request->execute(array($id_article)) ? $request->fetchAll() : false; 
    }


    function getOtherArticles( $differ_id, $conn )
    {
        $request =  $conn->prepare(" SELECT idarticle,  judul, isipendek, isi, tanggal, tumbnail FROM articles  WHERE idarticle != ? ");
        return $request->execute(array($differ_id)) ? $request->fetchAll() : false; 
    }
?>