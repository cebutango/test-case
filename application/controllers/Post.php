<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    public function __construct() {
        parent::__construct();	      
	}

    public function index() {
        $title = "Liverpool FC";
        $content = "<p>This is test</p>";
        if ($this->mediumapi->postContent($title, $content)) {
            echo "You posted.";
        } else {
            echo "To post is failed.";
        }
    }
}

?>