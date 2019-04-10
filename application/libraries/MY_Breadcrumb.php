<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_breadcrumb
{
	
	/**
	* Custom breadcrumb libarary for CodeIgniter (Tested on version 3.1.10)
	*
	* Version 1.0
	* Available on GitHub at https://github.com/gavbro/codeigniter-simple-breadcrumb
	*
	* Can be autoloaded in /application/config/autoload.php
	* or loaded as required with $this->library->load('MY_breadcrumb');
	* see https://codeigniter.com/user_guide/general/autoloader.html
	*
	* Originally created by Gavin Brown (http://gavinbrown.ca/) 
	* or @gavbro on twitter!
	* Created on April 10, 2019
	*
	* @see https://www.codeigniter.com/user_guide/general/creating_libraries.html for 
	* assistance in updating or creating custom libraries for codeigniter.
	*
	*/
	
	// Declare variable to contain CI.
  protected $CI;

  // We'll use a constructor, as you can't directly call a function
  // from a property definition.
  public function __construct()
  {
    // Assign the CodeIgniter super-object
    $this->CI =& get_instance();
  }
  
  
  /**
  * Method to create the breadcrumb link link from the address bar url.
  */
  public function crumb()
  {
  	// Assign the full current url in the address bar to a variable
    $url = current_url();
    
    // Assign the url components to an array using parse_url()
    $urlcomp = parse_url($url);
	  $host = $urlcomp["host"] . "/";
	  
	  // Setup a base url based on the current url instead of the base_url() config
	  // setting, just in case it isn't set or is set incorrectly.
	  $baseurl = $urlcomp['scheme'] . "://" . $host;
	  
	  //change the full http://yourdomain.com/ into yourdomain.com/
    $crmb = str_replace($baseurl, $host, $url);
    
    // break the url into an array using "/" as the divider
    $urarray = explode("/", $crmb);
    
    // If the second part of the url is blank ('yourdomain.com/') then you are
    // the top level, dont show the crumb
    if($urarray[1] == "")
    {
    	// Set this to $host if you want it to show
    	// $urlfinal = $host;
    	$urfinal = "";
		}
		else
		{
			// Iterate through all of the link array elements
      foreach($urarray as $key => $val)
      {
      	// If it is the first element, it is the tld.
      	if($key == 0)
      	{
      		// Add the TLD to a new array of links.
      		// Change " . $val . " to HOME if you want it to say home
      		$urcrmb[0] = "<a href=\"" . $baseurl . "\">" . $val . "</a>";
      	}
      	else
      	{
      		// Use an array to keep track of the link patter for each new level
      		// eg: array("0" => "page1", "1" => "page2", "2" => "page3", "3" => "page4",)
      		$brdcrmlnk[] = $val;
      		
      		// If this is the end of the url, we don't want a link, just text
      		if($val == end($urarray))
      		{
      			$urcrmb[$key] = ucfirst($val);
        	}
        	else
        	{
        		// Otherwise, create a link with the full address as the link value
        		// and the url itself as the text
      			$urcrmb[$key] = "<a href=\"" . $baseurl . implode("/", $brdcrmlnk)  . "/\">" . ucfirst($val) . "</a>";
      		}
      	}
      }
      // Reform the whole crumb array as one html line.
      $urfinal = implode(" > ", $urcrmb);
      // For an image instead of ">": $urfinal = implode(" <img src=\"" . $baseurl . "/img/rightarrow_15.png" . "\" alt=\"Navigation Arrow\" /> ", $urcrmb);
    }
    
    // Return the complete breadcrumb to be echoed.
    return $urfinal;
  }
}
