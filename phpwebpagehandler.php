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
 * Handles preparation of web content
 *
 * @package    REACT demo
 * @copyright  Copyright (c) 2010 James Littlejohn
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */	
	class reactHandler
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
   public function __construct()
		{
     
 		} 
    
    
	/**
		 * Build the home page
		 *
		 * 
		 */
		public function startHomepage ($request, $response, $inquery)
		{
		
		$newpage = LLHeader::thepage();
//$newpage = '<html><body>hello reactive </body></html>';
//$parseurl = parse_url($url);
//echo $parseurl;
    //$i++;
    $response->writeHead();
    $response->end($newpage);
		

		}
		
		/**
		 * Build the second page
		 *
		 * 
		 */
		public function secondPage ($request, $response, $inquery)
		{
//print_r($response);		
		$newpage = LLHeader::thesecondpage();
    $response->writeHead();
    $response->end($newpage);
		

		}


} // closes class

?>