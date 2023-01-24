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
	public $description;

	function __construct($title="null",$authorID="null",$category="null",$description="null")
	{
		$this->title=$title;
		$this->authorID=$authorID;
		$this->category=$category;
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
		$res=conx::$pdo->query('INSERT INTO articles(title,authorID,category,photo,description) values("'.$this->title.'","'.$this->authorID.'","'.$this->category.'""'.$this->description.'") ');
		return $res;
	}

	// Delete function

	public function delete(){
		$res=conx::$pdo->query("DELETE FROM articles where id='".$this->id."' ");
		return $res;
	}

	// update function
	
	public function update($id,$title,$category,$description){
		
		$res = conx::$pdo->query("UPDATE `articles` set title='$title',category='$category',description='$description' WHERE id = '$id'");
		return $res;
	}

	// select function

	public function getArticles(){
		$rech=conx::$pdo->query("select * from articles");
    	$tab=$this->fetchaArray($rech);
    	if(count($tab)<1) return false;
    	return $tab;
	}

	public function getSpecArticle($id){
		$rech=conx::$pdo->query("SELECT * from articles WHERE id = $id");
    	$tab=$this->fetchaArray($rech);
		return $tab;
	}


}
?>