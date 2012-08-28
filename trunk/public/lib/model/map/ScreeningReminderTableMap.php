<?php


/**
 * This class defines the structure of the 'screening_reminder' table.
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
class ScreeningReminderTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ScreeningReminderTableMap';

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
		$this->setName('screening_reminder');
		$this->setPhpName('ScreeningReminder');
		$this->setClassname('ScreeningReminder');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('SCREENING_REMINDER_ID', 'ScreeningReminderId', 'INTEGER', true, 11, null);
		$this->addColumn('FK_SCREENING_UNIQUE_KEY', 'FkScreeningUniqueKey', 'VARCHAR', false, 255, null);
		$this->addColumn('FK_SCREENING_ID', 'FkScreeningId', 'INTEGER', false, 11, null);
		$this->addColumn('FK_USER_ID', 'FkUserId', 'INTEGER', false, 11, null);
		$this->addColumn('FK_USER_EMAIL', 'FkUserEmail', 'VARCHAR', false, 255, null);
		$this->addColumn('DATE_ADDED', 'DateAdded', 'TIMESTAMP', false, null, null);
		$this->addColumn('SCREENING_REMINDER_SENT', 'ScreeningReminderSent', 'TINYINT', false, 4, null);
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

} // ScreeningReminderTableMap
