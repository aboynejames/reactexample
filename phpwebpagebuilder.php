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
	class LLHeader
	{
  
    public $webpage;
  
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
   public function __construct()
		{

    $header= $this->startHeader();
     
 		} 
    
    
      /**
         * Build header logic for display page
         *
         * 
         */
        public function startHeader ()
        {
         //stitches together all header functions
        $this->thepage();

        }

        /**
         * Build header logic for display page
         *
         * 
         */
        public function thepage ()
        {

        $webpage = '<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8" />
        <title>REACT PHP</title>
				</head>
				<body>
				new webpage for REACT PHP code and the <a href="/secondpage">Second Page</a> 
				</body>
				</html>';
   
				return $webpage;
	 }
	 
	 
	         /**
         * Build header logic for display page
         *
         * 
         */
        public function thesecondpage ()
        {

        $webpage = '<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8" />
        <title>REACT PHP</title>
				</head>
				<body>
				The Second Page for REACT Example and back to the <a href="/">home page</a>
				</body>
				</html>';
   
				return $webpage;
	 }
} // closes class

?>