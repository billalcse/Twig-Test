<?php

namespace app;

require_once 'autoload.php';

global $twig;
global $db;


    if (!empty($_POST['submit'])) {

        $control = new Control($twig, $db);

        switch ($_POST['pagename']) {

            case 'index'   : $control->showForm($_POST); break;

            case 'add' : $control->save($_POST); break;

        }


    } else {

        header('Location: index.php');
    }


use Twig_Environment;

class Control
{

    /** @var Twig_Environment */
    public $twigService;

    public $dbConn;

    public function __construct($twig, $conn)
    {
        $this->twigService = $twig;
        $this->dbConn      = $conn;
    }

    public function showForm($postdata)
    {
        // read url
        $fbusername = $postdata['fb_username'];
        $homepage = file_get_contents('http://graph.facebook.com/'.$fbusername);
        $data =json_decode($homepage,1);
        $id = $data['id'];
        $name = $data['name'];

        if(!empty($data['gender'])){
        $gender = $data['gender'];
        } else {
        $gender = '';
        }
        //print_r($gender); exit;
        $username = $data['username'];
        $link = 'http://graph.facebook.com/'.$data['username'];
        unset($data['id']);
        unset($data['name']);
        unset($data['gender']);
        unset($data['username']);
        unset($data['link']);
        $meta = json_encode($data);
        //echo $homepage;
        //print_r($homepage->id); exit;
        // get data from url

        // build data to show

        // render twig
        $this->view('add.html.twig', array('id' => $id, 'name' => $name, 'gender' => $gender, 'username' => $username, 'link' => $link, 'meta' => $meta));

    }

    public function save($postData)
    {
        //print_r($postData); exit;
        $fb_id = $postData['fb_id'];
        $name = $postData['name'];
        $gender = str_replace(' ', '', $postData['gender']);
       // print_r($gender); exit;
        $username = $postData['username'];
        $fb_link = $postData['fb_link'];
        $meta = addslashes($postData['meta']);
        //$sql = "select * from "
        $sql = "INSERT INTO fb_graph VALUES ('','$fb_id', '$name', '$gender', '$username', '$fb_link','$meta')";
        //print_r($sql); exit;
        $result = mysql_query($sql, $this->dbConn);

        // break into data insert query

        // save using $this->dbConn
        $this->showList();
       // $this->view('list.html.twig', array('id' => $fb_id, 'name' => $name, 'gender' => $gender, 'username' => $username, 'link' => $fb_link, 'meta' => $meta));
        // redirect to list page

    }

    public function showList()
    {
        // fetch list
        $sql = "select * from fb_graph";

        $result = mysql_query($sql, $this->dbConn);
        while($row = mysql_fetch_assoc($result)) {
            print_r($row);
        }

         exit;

        // show list
        $this->view('list.html.twig', array());
    }

    public function view($template, $data)
    {
        $this->twigService->clearCacheFiles();
        $tmplt  = $this->twigService->loadTemplate($template);

        echo $tmplt->render($data);
        exit;
    }
}