<?php


/**
 * This class defines the structure of the 'selenium_test' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu 26 Apr 2012 01:25:35 PM EDT
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class SeleniumTestTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.SeleniumTestTableMap';

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
		$this->setName('selenium_test');
		$this->setPhpName('SeleniumTest');
		$this->setClassname('SeleniumTest');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('SELENIUM_TEST_ID', 'SeleniumTestId', 'INTEGER', true, 11, null);
		$this->addColumn('SELENIUM_TEST_NAME', 'SeleniumTestName', 'VARCHAR', false, 255, null);
		$this->addColumn('SELENIUM_TEST_SCOPE', 'SeleniumTestScope', 'VARCHAR', false, 255, null);
		$this->addColumn('SELENIUM_TEST_DESCRIPTION', 'SeleniumTestDescription', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SELENIUM_TEST_GROUP', 'SeleniumTestGroup', 'VARCHAR', false, 255, null);
		$this->addColumn('SELENIUM_TEST_SLEEP', 'SeleniumTestSleep', 'INTEGER', false, 11, null);
		$this->addColumn('SELENIUM_TEST_META', 'SeleniumTestMeta', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SELENIUM_TEST_LATEST_RESULT', 'SeleniumTestLatestResult', 'VARCHAR', false, 255, null);
		$this->addColumn('SELENIUM_TEST_LATEST_RESULT_DATE', 'SeleniumTestLatestResultDate', 'TIMESTAMP', false, null, null);
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

} // SeleniumTestTableMap
