<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* This is the test view for codeigniter-simple-breadcrumb.
	*
	* Located at: https://github.com/gavbro/codeigniter-simple-breadcrumb 
	*
	*
	* Originally created by Gavin Brown (http://gavinbrown.ca/) 
	* or @gavbro on twitter!
	* Created on April 10, 2019
	*
	* @see https://codeigniter.com/user_guide/general/views.html for 
	* assistance in updating or creating custom views for codeigniter.
	*
	*/
	
	echo "<h3>Breadcrumb</h3>" . $this->my_breadcrumb->crumb();
?>
<br />
<br />
<h3>Regular Links</h3>
<ul>
<li><a href="/">Home</a>
	<ul>
		<li><a href="/bctest">Test 1</a></li>
		<li><a href="/bctest/bctest2">Test 2</a></li>
		<li><a href="/bctest/bctest2/bctest3">Test 3</a></li>
		<li><a href="/bctest/bctest2/bctest3/bctest4">Test 4</a></li>
	</ul>
</li>