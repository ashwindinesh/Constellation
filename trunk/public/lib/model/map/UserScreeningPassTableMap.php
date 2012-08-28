<?php


/**
 * This class defines the structure of the 'user_screening_pass' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu 26 Apr 2012 01:25:36 PM EDT
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class UserScreeningPassTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.UserScreeningPassTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('user_screening_pass');
		$this->setPhpName('UserScreeningPass');
		$this->setClassname('UserScreeningPass');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('USER_SCREENING_PASS_ID', 'UserScreeningPassId', 'INTEGER', true, 11, null);
		$this->addColumn('FK_USER_ID', 'FkUserId', 'INTEGER', false, 11, null);
		$this->addColumn('USER_SCREENING_PASS_PASSWORD', 'UserScreeningPassPassword', 'VARCHAR', false, 79, null);
		$this->addColumn('USER_SCREENING_PASS_SALT', 'UserScreeningPassSalt', 'VARCHAR', false, 15, null);
		$this->addColumn('USER_SCREENING_PASS_ACCESS_KEY', 'UserScreeningPassAccessKey', 'VARCHAR', false, 255, null);
		$this->addColumn('USER_SCREENING_PASS_VIEWS', 'UserScreeningPassViews', 'INTEGER', false, 11, null);
		$this->addColumn('USER_SCREENING_PASS_CREATED_AT', 'UserScreeningPassCreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('USER_SCREENING_PASS_UPDATED_AT', 'UserScreeningPassUpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // UserScreeningPassTableMap
