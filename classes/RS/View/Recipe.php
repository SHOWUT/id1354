<?php
namespace RS\View;
use Id1354fw\View\AbstractRequestHandler;
use RS\Controller\Controller;
class Recipe extends AbstractRequestHandler{
    private $rid;
    private $seeCom;
	
	public function setRid($rid){
		$this->rid = $rid;
    }
    
    public function setSeeCom($seeCom){
		$this->seeCom = $seeCom;
	}
	
	protected function doExecute(){		
		$controller = new Controller();
		
		#$recipe = $controller->getRecipe($this->recipe);
		#$this->addVariable('recipe', $recipe);
		
		$comments = $controller->showComments($this->rid);
		$this->addVariable('comments', $comments);
        
        if ($this->rid === 1) {
            return 'rMeatballs';
        }
		else {
            return 'rPancakes';
        }
	}
}
?>