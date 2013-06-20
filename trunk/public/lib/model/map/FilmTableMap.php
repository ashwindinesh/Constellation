<?php


/**
 * This class defines the structure of the 'film' table.
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
class FilmTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.FilmTableMap';

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
		$this->setName('film');
		$this->setPhpName('Film');
		$this->setClassname('Film');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('FILM_ID', 'FilmId', 'INTEGER', true, 11, null);
		$this->addColumn('FILM_NAME', 'FilmName', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_ALT_NAME', 'FilmAltName', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_MAKERS', 'FilmMakers', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FILM_PRODUCTION_COMPANY', 'FilmProductionCompany', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FILM_LOGO', 'FilmLogo', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_HOMELOGO', 'FilmHomelogo', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_TRAILER_FILE', 'FilmTrailerFile', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_MOVIE_FILE', 'FilmMovieFile', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_MAKER_MESSAGE', 'FilmMakerMessage', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FILM_TICKET_PRICE', 'FilmTicketPrice', 'FLOAT', false, 10, null);
		$this->addColumn('FILM_HOSTBYREQUEST_PRICE', 'FilmHostbyrequestPrice', 'FLOAT', false, 10, null);
		$this->addColumn('FILM_STATUS', 'FilmStatus', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_FEATURED', 'FilmFeatured', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_CREATED_AT', 'FilmCreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('FILM_UPDATED_AT', 'FilmUpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('FILM_SETUP_PRICE', 'FilmSetupPrice', 'FLOAT', false, 10, null);
		$this->addColumn('FILM_INFO', 'FilmInfo', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FILM_CAST', 'FilmCast', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FILM_RUNNING_TIME', 'FilmRunningTime', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_TOTAL_SEATS', 'FilmTotalSeats', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_SHORT_NAME', 'FilmShortName', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_SYNOPSIS', 'FilmSynopsis', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_STILL_IMAGE', 'FilmStillImage', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_BACKGROUND_IMAGE', 'FilmBackgroundImage', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_SPLASH_IMAGE', 'FilmSplashImage', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_GEOBLOCKING_ENABLED', 'FilmGeoblockingEnabled', 'TINYINT', false, 1, null);
		$this->addColumn('FILM_GEOBLOCKING_TYPE', 'FilmGeoblockingType', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_SHORT_URL', 'FilmShortUrl', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_REVIEW', 'FilmReview', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FILM_STARTDATE', 'FilmStartdate', 'TIMESTAMP', false, null, null);
		$this->addColumn('FILM_ENDDATE', 'FilmEnddate', 'TIMESTAMP', false, null, null);
		$this->addColumn('FK_FILM_SPONSOR_ID', 'FkFilmSponsorId', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_BITRATE_MINIMUM', 'FilmBitrateMinimum', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_BITRATE_LOW', 'FilmBitrateLow', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_BITRATE_SMALL', 'FilmBitrateSmall', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_BITRATE_MEDIUM', 'FilmBitrateMedium', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_BITRATE_LARGE', 'FilmBitrateLarge', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_BITRATE_LARGEST', 'FilmBitrateLargest', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_USE_SPONSOR_CODES', 'FilmUseSponsorCodes', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_ALLOW_HOSTBYREQUEST', 'FilmAllowHostbyrequest', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_ALLOW_USER_HOSTING', 'FilmAllowUserHosting', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_ALTERNATE_TEMPLATE', 'FilmAlternateTemplate', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_ALTERNATE_OPTS', 'FilmAlternateOpts', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_CDN', 'FilmCdn', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_SHARE', 'FilmShare', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_PREUSER', 'FilmPreuser', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_FREEWITHINVITE', 'FilmFreewithinvite', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_FREE_SCREENING', 'FilmFreeScreening', 'TINYINT', false, 4, null);
		$this->addColumn('FILM_TWITTER_TAGS', 'FilmTwitterTags', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FK_USER_ID', 'FkUserId', 'INTEGER', false, 11, null);
		$this->addColumn('FILM_WEBSITE', 'FilmWebsite', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_FACEBOOK', 'FilmFacebook', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_TWITTER', 'FilmTwitter', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_YOUTUBE_TRAILER', 'FilmYoutubeTrailer', 'VARCHAR', false, 255, null);
		$this->addColumn('FILM_OOYALA_EMBED', 'FilmOoyalaEmbed', 'VARCHAR', false, 255, null);
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

} // FilmTableMap