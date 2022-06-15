<?php

require_once('db.php');

class Film
{
    private $db;

    function __construct()
    {
        $this->db = new mysqli(HOST,USER,PASS, DB);
        if ($this->db->connect_error) {
            die("Koneksi Gagal");
        }
    }

    // public function read()
    // {
    //     $order = isset($_GET['order']) ? $_GET['order'] : 'title';
    //     $sort = isset($_GET['sort']) ? $_GET['sort'] : 'ASC';
    //     $begin = isset($_GET['begin']) ? $_GET['begin'] : 0;



    //     if($_GET['rating'] != null) {
    //         $rating = $_GET['rating'];
    //         $sql = "SELECT * FROM film where rating = '$rating' order by $order $sort limit $begin,8";
    //     } else {
    //         $sql = "SELECT * FROM film order by $order $sort limit $begin,8";
    //     }



    //     $result = $this->db->query($sql);
    //     $data = [];
    //     while ($row = $result->fetch_assoc()) {
    //         array_push($data,$row);
    //     }
    //     header("Content-Type: application/json");
    //     echo json_encode($data);
    // }

    public function create($data)
    {
        var_dump($data);
        foreach ($data as $key => $value) {
            $value = is_array($value)?trim(implode(',', $value)) : trim($value);
            $data[$key] = (strlen($value)>0 ? $value :NULL);
        }
        $query = "INSERT INTO buku VALUES(NULL,?,?,?,?,?,?)";
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'sisiii',
            $data['judul_buku'],
            $data['harga'],
            $data['sinopsis'],
            $data['penulis'],
            $data['genre'],
            $data['penerbit']
        );

        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
        $id_buku = $sql->insert_id;
        $sql->close();
        return $id_buku;
    }
}

$film = new Film();

switch (isset($_GET['action'])) {
    case 'create':
        var_dump($_POST);
        $id = $film->create($_POST);
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], "assets/{$id}.jpg");
        break;
    
    default:
        // $film->read();
        break;
}
