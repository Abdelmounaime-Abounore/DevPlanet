<?php 
/**
 * 
 */
include_once 'conx.php';

class Article
{
	public $id;
	public $title;
	public $publishDate;
	public $authorID;
	public $category;
	public $photo;
	public $description;

	function __construct($title="null",$authorID="null",$category="null",$photo="null",$description="null")
	{
		$this->title=$title;
		$this->authorID=$authorID;
		$this->category=$category;
		$this->photo=$photo;
		$this->description=$description;
	}

	public function fetchaArray($result){
		$rows=array();
		while($row = $result->fetch_assoc()) {
    		$rows[] = $row;
  		}
  		return $rows;
	}
	public function insert(){
		$res=conx::$pdo->query('INSERT INTO articles(title,authorID,category,photo,description) values("'.$this->title.'","'.$this->authorID.'","'.$this->category.'","'.$this->photo.'","'.$this->description.'") ');
		return $res;
	}
	public function delete(){
		$res=conx::$pdo->query("DELETE FROM articles where id='".$this->id."' ");
		return $res;
	}
	public function getArticles(){
		$rech=conx::$pdo->query("select * from articles");
    	$tab=$this->fetchaArray($rech);
    	if(count($tab)<1) return false;
    	return $tab;
	}
	
	

	
}
 ?>