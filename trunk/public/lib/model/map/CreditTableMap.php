<?php


/**
 * This class defines the structure of the 'credit' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu 26 Apr 2012 01:25:33 PM EDT
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CreditTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CreditTableMap';

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
		$this->setName('credit');
		$this->setPhpName('Credit');
		$this->setClassname('Credit');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('CREDIT_ID', 'CreditId', 'INTEGER', true, 11, null);
		$this->addColumn('FK_HOST_ID', 'FkHostId', 'INTEGER', false, 11, null);
		$this->addColumn('FK_SCREENING_ID', 'FkScreeningId', 'INTEGER', false, 11, null);
		$this->addColumn('CREDIT_AUDIENCE_NO', 'CreditAudienceNo', 'INTEGER', false, 11, null);
		$this->addColumn('CREDIT_AMOUNT', 'CreditAmount', 'FLOAT', false, 10, null);
		$this->addColumn('CREDIT_PAID_STATUS', 'CreditPaidStatus', 'TINYINT', false, 1, null);
		$this->addColumn('CREDIT_CREATED_AT', 'CreditCreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('CREDIT_UPDATED_AT', 'CreditUpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('CREDIT_TO_CC', 'CreditToCc', 'TINYINT', false, 1, 0);
		$this->addColumn('CREDIT_TO_PAYPAL', 'CreditToPaypal', 'TINYINT', false, 1, 0);
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

} // CreditTableMap
