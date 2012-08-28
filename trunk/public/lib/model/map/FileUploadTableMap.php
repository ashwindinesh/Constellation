<?php


/**
 * This class defines the structure of the 'file_upload' table.
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
class FileUploadTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.FileUploadTableMap';

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
		$this->setName('file_upload');
		$this->setPhpName('FileUpload');
		$this->setClassname('FileUpload');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('FILE_UPLOAD_ID', 'FileUploadId', 'INTEGER', true, 11, null);
		$this->addColumn('FILE_UPLOAD_USER', 'FileUploadUser', 'VARCHAR', false, 255, null);
		$this->addColumn('FILE_UPLOAD_FILENAME', 'FileUploadFilename', 'VARCHAR', false, 255, null);
		$this->addColumn('FILE_UPLOAD_DATE_DISCOVERY', 'FileUploadDateDiscovery', 'TIMESTAMP', false, null, null);
		$this->addColumn('FILE_UPLOAD_DATE', 'FileUploadDate', 'VARCHAR', false, 255, null);
		$this->addColumn('FILE_UPLOAD_STATUS', 'FileUploadStatus', 'TINYINT', false, 4, null);
		$this->addColumn('FILE_UPLOAD_FILM', 'FileUploadFilm', 'INTEGER', false, 11, null);
		$this->addColumn('FILE_UPLOAD_CLIENT', 'FileUploadClient', 'VARCHAR', false, 255, null);
		$this->addColumn('FILE_UPLOAD_SIZE', 'FileUploadSize', 'BIGINT', false, 11, null);
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

} // FileUploadTableMap
