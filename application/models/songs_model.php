<?php

class songs_model extends CI_Model {

    /**
     * @desc load both db
     */
    function __construct() {
        parent::__Construct();

        $this->db = $this->load->database('default', TRUE, TRUE);
    }

    function get_songs()
    {
    	$query=$this->db->get('songs');
    	return $query->result_array();
    }
    function add_song($name,$link)
    {
    	$data= array('name'=>$name,'link'=>$link);
    	$this->db->insert('songs',$data);
    	// echo "there";
    }
}
