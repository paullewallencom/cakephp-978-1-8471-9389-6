<?php
/* SVN FILE: $Id: database.php.default 5818 2007-10-20 12:01:30Z phpnut $ */
/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour ofCake.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.app.config
 * @since			CakePHP(tm) v 0.2.9
 * @version			$Revision: 5818 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2007-10-20 07:01:30 -0500 (Sat, 20 Oct 2007) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * In this file you set up your database connection details.
 *
 * @package		cake
 * @subpackage	cake.config
 */
/**
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * driver => The name of a supported driver; valid options are as follows:
 *		mysql 		- MySQL 4 & 5,
 *		mysqli 		- MySQL 4 & 5 Improved Interface (PHP5 only),
 *		sqlite		- SQLite (PHP5 only),
 *		postgres	- PostgreSQL 7 and higher,
 *		mssql		- Microsoft SQL Server 2000 and higher,
 *		db2			- IBM DB2, Cloudscape, and Apache Derby (http://php.net/ibm-db2)
 *		oracle		- Oracle 8 and higher
 *		adodb-[drivername]	- ADOdb interface wrapper (see below),
 *		pear-[drivername]	- PEAR::DB wrapper
 *
 * You can add custom database drivers (or override existing drivers) by adding the
 * appropriate file to app/models/datasources/dbo.  Drivers should be named 'dbo_x.php',
 * where 'x' is the name of the database.
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * connect =>
 * ADOdb set the connect to one of these
 *	(http://phplens.com/adodb/supported.databases.html) and
 *	append it '|p' for persistent connection. (mssql|p for example, or just mssql for not persistent)
 * For all other databases, this setting is deprecated.
 *
 * host =>
 * the host you connect to the database
 * To add a port number use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database.  This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 */
class DATABASE_CONFIG {
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'port' => '',
		'login' => 'root',
		'password' => '',
		'database' => 'relationship',
		'schema' => '',
		'prefix' => '',
		'encoding' => ''
	);
	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'port' => '',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'schema' => '',
		'prefix' => '',
		'encoding' => ''
	);
}
?>