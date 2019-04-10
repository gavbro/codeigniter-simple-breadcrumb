# codeigniter-simple-breadcrumb

### Description

A simple breadcrumb solution using CodeIgniter's URL helper and built-in PHP functions for CodeIgniter 3.1.10 and up (not tested on previous versions.)

The main goal of this is to create a setting independant breadcrumb solution for CodeIgniter as a library.


## DEMO: https://gavbro.howlhost.ca/


### Table of Contents

1. Requirements
1. Recommentations
1. Installation 
1. Usage
1. Contributing
1. Credits
1. Licence



### 1. Requirements

* CodeIgniter version 3.1.10 or higher installed and working (not tested on anything previous)
* File or FTP access to the web server.
* PHP version 5.6 or higher.

### 2. Recommendations

#### If you plan on using this breadcrumb library on your whole site, consider adding it as a autoloaded library.
##### _(Line #61 in CI version 3.1.10), see https://codeigniter.com/user_guide/general/autoloader.html_

### 3. Installation

Please note: These instructions assume that you have a running webserver configured and ready to go with CodeIgniter 3.1.10 or newer installed and working. For CodeIgniter installation see https://codeigniter.com/user_guide/installation/index.html

		#### bctest: Using the test files included.

			1. Copy the /applications folder contents to your CI installation /applications folder

		#### Stand-alone

			1. Copy the included 'applications/libraries/My_Breadcrumb.php' file into your CI applications/libraries directory.

### 4. Usage 

	#### bctest: Using the test files included.

	1. navigate to yourdomain.tld/bctest
	
	#### Stand-alone
	
	1. Load the `MY_Breadcrumb` library in the page controller of your choice. (`$this->load->library('MY_Breadcrumb');`)
	2. Print the breadcrumb in your view (`<?php echo $this->my_breadcrumb->crumb(); ?>`)
	3. Enjoy!

### 6. Contributing

Feel free to submit contributions to the project. I can't promise that I will accept all submissions, but even any suggestions, helpful points or criticisms that impact development will gain you a note as the contributor. My only request is to keep things similar to what I have started in terms of organization and commenting, just to keep things simple.


### 8. Credits.

Just ME! .. so far..

### 9. License

Free! Download it and use it as you please! I mean, I would appreciate a tweet or a mention, but it is really not necessary.
