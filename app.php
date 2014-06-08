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
        $uri = $_SERVER['REQUEST_URI'];
        $sd = explode('=',$uri);
        $tr = explode('?',$sd[0]);

         if ($tr[1]='deletedId'){
             $control = new Control($twig, $db);
             $control->deleteUser($sd[1]);

         } else {

        header('Location: index.php');
         }
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
        $fb_friend = file_get_contents('https://graph.facebook.com/fql?q=SELECT%20friend_count%20FROM%20user%20WHERE%20uid='.$data['id']);
        $friend_data =json_decode($fb_friend,1);
        if(!empty($data['gender'])){
        $gender = $data['gender'];
        } else {
        $gender = '';
        }

        if(!empty($friend_data['data'][0]['friend_count'])){
            $friend_count = $friend_data['data'][0]['friend_count'];
        } else {
            $friend_count = 0;
        }
        //print_r($gender); exit;
        $username = $data['username'];
        $link = 'http://facebook.com/'.$data['username'];
        unset($data['id']);
        unset($data['name']);
        unset($data['gender']);
        unset($data['username']);
        unset($data['link']);
        $meta = json_encode($data);
        // render twig
        $this->view('add.html.twig', array('id' => $id, 'name' => $name, 'gender' => $gender, 'username' => $username, 'link' => $link, 'friend_count' =>$friend_count, 'meta' => $meta));

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
        $friend_count = $postData['friend_count'];
        $meta = addslashes($postData['meta']);

        $sql = "INSERT INTO fb_graph VALUES ('','$fb_id', '$name', '$gender', $friend_count, '$username', '$fb_link','$meta')";
        //print_r($sql); exit;
        $result = mysql_query($sql, $this->dbConn);

        // break into data insert query

        // save using $this->dbConn
        $msg ="Facebook Information successfully inserted";
        $this->showList($msg);
       // $this->view('list.html.twig', array('id' => $fb_id, 'name' => $name, 'gender' => $gender, 'username' => $username, 'link' => $fb_link, 'meta' => $meta));
        // redirect to list page

    }

    public function showList($msg='')
    {
        // fetch list
        $sql = "select * from fb_graph";

        $result = mysql_query($sql, $this->dbConn);
        while($row = mysql_fetch_assoc($result)){
            $list[]=$row;
        }
     //   print_r($list);
        // exit;
        // show list
        $this->view('list.html.twig', array('userList'=>$list,'msg'=>$msg));
    }


    public function deleteUser($id)
    {
        // fetch list
        $sql = "delete from fb_graph where id =".$id;

        $result = mysql_query($sql, $this->dbConn);
        // show list
        $msg = "Facebook user successfully deleted";
        $this->showList($msg);
    }

    public function view($template, $data)
    {
        $this->twigService->clearCacheFiles();
        $tmplt  = $this->twigService->loadTemplate($template);

        echo $tmplt->render($data);
        exit;
    }
}