<?php

class Cmodel {
    public function getData(){
        $mysqli = new mysqli('localhost', 'root', '', 'blog_1');

        if(mysqli_connect_errno()) {
            echo 'Connection is not installed';
            exit();
        }

        $mysqli->set_charset('utf-8');

        $query = "Select * From News";

        $result = $mysqli->query($query);
        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);


        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDerMort',
        //     'IMAGE' => 'https://preview.redd.it/yopb58gkiur41.jpg?auto=webp&s=40ed384509be0da6fbf10bfc624bda04955deee2',
        //     'TEXT' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site NEW',
        //     'DATE' => '21.07.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://preview.redd.it/yopb58gkiur41.jpg?auto=webp&s=40ed384509be0da6fbf10bfc624bda04955deee2',
        //     'TEXT' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
        // );
        return $arrayResult;
    }
}