<?php
/**
 * 
 *  React demo   
 *
 * @package    REACT demo
 * @copyright  Copyright (c) 2010 James Littlejohn
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version    $Id$
 */

/**
 * Handles the routing of url requests
 *
 * @package    REACT demo
 * @copyright  Copyright (c) 2010 James Littlejohn
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */	
	class reactRouter
	{
  
//    public $webpage;
  
        /**
     * Constructor 
     *
     *  // 
     *
     * 
     *
     * @param  
     *
     */
   public function __construct($request, $response, $inpath)
		{
				$this->request = $request;
				$this->response = $response;
		
        $this->method = $inpath['method'];
        $this->path = $inpath['path'];
        $this->query = $inpath['query'];
				$this->pageHandler = new reactHandler();
				$this->startRouter();
     
 		} 
    
    
	/**
		 * Take URL and route to correct handler
		 *
		 * 
		 */
		public function startRouter ()
		{
		 // given url route to requestHandler
		 if($this->path == '/'){
echo 'page handler for startpage';		 
			$this->pageHandler->startHomepage($this->request, $this->response, $this->query);
		 
		 }
		 elseif($this->path == '/secondpage')
		 {		 
	echo 'page handler for secondpage';			 
		 $this->pageHandler->secondPage($this->request, $this->response, $this->query);
		 }
		 else
		 {
		 // empty no page to show
//echo 'page handler for secondpage';			 
		 
		 }
		

		}

} // closes class

?>