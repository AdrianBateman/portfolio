<?php
class welcome {

	private $newUser ;
	private $welcomeMessage ;
	
	 public function __construct(
	 	$newUser 		 = "You",
	 	$welcomeMessage = "<p>Hello, I welcome you <big>"	
	 ){
	 	$this -> newUser 	    = $newUser;
	 	$this -> welcomeMessage = $welcomeMessage ;
	}
	
	public function setNewUser($aNewUser) {
		$this -> newUser = $aNewUser ;			
	}
	
	public function getNewUser() {
		return $this -> newUser ;
	}
	
	public function setWelcomeMessage($aWelcomeMessage){
		
		$this -> welcomeMessage = $aWelcomeMessage ;	
		
	}
	
	public function getWelcomeMessage(){
				
		$this -> welcomeMessage .= $this -> newUser ;

		$this -> welcomeMessage .= "</big>, feel free to have a look around.</p>";		
				
		return $this -> welcomeMessage;	
		
	}	
	
}
?>