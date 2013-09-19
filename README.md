TBJs Default Codeigniter Install
================================

General Notes
-------------

- This is a complete install of Codeigniter V2.1.4 with Tank Auth V1.0.9 using Apache and MySQL.
- It has a basic infrastructure in place that I use for most sites ( body, header, content, footer, etc ).
- It's designed to run on an Amazon EC2 instance, but should work great on most Linux systems, although some setup may vary.
- If cloning this repo, you will need to follow the System Setup notes below to get the system running correctly.


System Usage
------------

### Domain
- update `.htaccess`
- update `$config['base_url']` in `/config/config.php`

### robots.txt
- by default, `robots.txt` blocks all robots

### Profiling
- turned on and off for every page in `/core/MY_Controller.php` ( on by default )
- `$this->output->enable_profiler( TRUE );`

### autoload
- libraries: tankauth
- helpers: url

### Common System Settings & Variables
- Google Analytics ( or other analytics ): set in `/core/MY_Controller.php`
- Current Class: `$this->class`
- Current Method: `$this->method`
- Page Meta Data:
	- Generic Data: set in `/core/MY_Controller.php`
	- Page Specific: set in respective Controller
	- variables:
		- `$this->head['meta_title']`
		- `$this->head['meta_description']`

### Authentication / Users
- Tank Auth: http://konyukhov.com/soft/tank_auth/
- loaded in `config/autoload.php` by default
	- alternatively, it could be loaded in required controllers `$this->load->library('tank_auth')`
- check if user is logged in: `$this->tank_auth->is_logged_in()`
- get user id: `$this->tank_auth->get_user_id()`
- get user name: `$this->tank_auth->get_username()`

### HTML <head></head>
- Loaded in common views via `/views/common/head.php`
- Any values set in the `$this->head['headers']` array in a controller will be loaded in the <head> of that page
- This data does not need to be passed to views.  It's loaded automatically.
- **Javascript**: load via the `$this->head['headers']` array:
	- eg `$this->head['headers'][] = '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>';`

### Style Sheets ( CSS )
- common style sheets are set in `/core/MY_Controller.php`
	- `common.css`
	- `reset.css`: commented out by default
- to load a specific stylesheet on a page, append a file to the `$this->head['css']` array
- basic styles
	- `body`
	- `#body_wrapper`: sits inside the body, and wraps all other content
	- `#header`
	- `#content`: main content, loaded via the `$this->content` variable
	- `#footer`
	- `.block`

### Views
- Load a main view in a Controller
	- The main views load the common head, header, content, and footer views.
	- eg. `/views/one_column.php` loads `/views/common/header.php`
	- `this->load->view( 'one_column.php' )`
- Headers: load into `$this->head['headers']
	- This does not need to be passed to the main view.
- Main Content: load into `$this->content`
	- This does not need to be passed to the main view.

### Navigation
- loaded by the common views via the `/views/common/header.php` file
- files found in `/views/navigation/`
- **commented out by default**


System Setup
------------

### Server
- designed for an AWS EC2 running Amazon Linux CentOS
- Can probably spin up an AMI

### Linux
- install ( sudo yum install )
	- httpd
	- php
	- php-mysql
	- mysql
	- mysql-server
	- xebug
- check out online_markdown_editor
	- https://github.com/Industrial-Interface/online_markdown_editor.git
	- check out to your root web direcory as the www folder ( eg. /var/ )
- create symlinks
	- /etc/php.ini -> /data/www/external_configs/php.ini
	- /etc/httpd/conf/httpd.conf -> /data/www/external_configs/httpd.conf
	- /etc/rc.d/rc.local -> /data/www/external_configs/rc.local

### mysql
- boot mysql: `sudo /etc/init.d/mysqld start`
- create some users
- create a database and import `database.sql`
- update USER, PASS, and NAME in `codeigniter/application/configs/database.php`
- update the encription key in `/config/config.php`
- this will start on it's own once the system is configured.

### httpd
- boot httpd: 
- this will start on it's own once the system is configured.

### App Libraries
- Codeigniter: http://ellislab.com/codeigniter
- TankAuth: http://konyukhov.com/soft/tank_auth/
