<?php

class postModel extends Model
{
    public function __construct() {
        parent::__construct();
    }    
            
    public function getPosts()
    {        
        /*
        $post = array(
            'id' => 1,
            'titulo' => 'Título Post',
            'cuerpo' => 'Cuerpo Post...',            
        );
        
        return $post;*/
        
        $post = $this->_db->query("select * from posts");        
        return $post->fetchall();
    
    }
}

?>
