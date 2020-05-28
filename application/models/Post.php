<?php

namespace application\models;

use application\core\Model;

class Post extends Model {

	public function showPost() {
		$posts = array( 
            array("Lorem Ipsum oftware like Aldus", 
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's st."),
            
            array("Lorem Ipsum oftware like Aldus", 
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's st."),
        
            array("Lorem Ipsum oftware like Aldus", 
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's st."),
            array("Lorem Ipsum oftware like Aldus", 
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's st."),
            array("Lorem Ipsum oftware like Aldus", 
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's st."),
                        ); 
		return $posts;
	}

}