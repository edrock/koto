<?php

	/*
	*/
	class Post extends CI_Model {

		function __construct(){
			parent::__construct();
		}//end construct

		function addPost($postTitle,$postHead,$postBody,$authorID,$postCreateTime,$active){

			//post information
			$this->postTitle = $postTitle;
			$this->postHead = $postHead;
			$this->postBody = $postBody;
			$this->authorID = $authorID;
			$this->postCreateTime = $postCreateTime;
			$this->active = $active;

			//array of post info
			$postDataArray =  array(
				'postTitle' => $this->postTitle,
				'postHead' => $this->postHead,
				'postBody' => $this->postBody,
				'authorID' => $this->authorID,
				'postCreateTime' => $this->postCreateTime,
				'active' => $this->active 
				);

			//Insert post to database
			$this->db->insert('posts',$postDataArray);

		}//end addPost function

		function editPost($postID,$postTitle,$postHead,$postBody,$authorID,$postCreateTime,$postModifyTime,$active){

			// post info
			$this->postID = $postID;
			$this->postTitle = $postTitle;
			$this->postHead = $postHead;
			$this->postBody = $postBody;
			$this->authorID = $authorID;
			$this->postCreateTime = $postCreateTime;
			$this->postModifyTime = $postModifyTime;
			$this->active = $active;

			//array of post info
			$postDataArray =  array(
				'postTitle' => $this->postTitle,
				'postHead' => $this->postHead,
				'postBody' => $this->postBody,
				'authorID' => $this->authorID,
				'postCreateTime' => $this->postCreateTime,
				'postModifyTime' => $this->postModifyTime,
				'active' => $this->active 
				);

			//update post info
			$this->db->update('posts',$postDataArray)->where('postID' => $this->postID);

		}//end editPost function

		function deletePost($postID){
			$this->db->delete('posts',array('postID' => $postID));
		}//end deletePost function

		function showPosts(){

		}//end showPosts function

	}//end class