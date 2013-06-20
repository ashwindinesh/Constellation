<?php

/**
 * Base static class for performing query and update operations on the 'user' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu 26 Apr 2012 01:25:36 PM EDT
 *
 * @package    lib.model.om
 */
abstract class BaseUserPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'user';

	/** the related Propel class for this table */
	const OM_CLASS = 'User';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.User';

	/** the related TableMap class for this table */
	const TM_CLASS = 'UserTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 32;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the USER_ID field */
	const USER_ID = 'user.USER_ID';

	/** the column name for the USER_FB_UID field */
	const USER_FB_UID = 'user.USER_FB_UID';

	/** the column name for the USER_T_UID field */
	const USER_T_UID = 'user.USER_T_UID';

	/** the column name for the USER_FULL_NAME field */
	const USER_FULL_NAME = 'user.USER_FULL_NAME';

	/** the column name for the USER_FNAME field */
	const USER_FNAME = 'user.USER_FNAME';

	/** the column name for the USER_LNAME field */
	const USER_LNAME = 'user.USER_LNAME';

	/** the column name for the USER_USERNAME field */
	const USER_USERNAME = 'user.USER_USERNAME';

	/** the column name for the USER_EMAIL field */
	const USER_EMAIL = 'user.USER_EMAIL';

	/** the column name for the USER_EDITABLE_EMAIL field */
	const USER_EDITABLE_EMAIL = 'user.USER_EDITABLE_EMAIL';

	/** the column name for the USER_PASSWORD field */
	const USER_PASSWORD = 'user.USER_PASSWORD';

	/** the column name for the USER_PASSWORD_LEGACY field */
	const USER_PASSWORD_LEGACY = 'user.USER_PASSWORD_LEGACY';

	/** the column name for the USER_BIO field */
	const USER_BIO = 'user.USER_BIO';

	/** the column name for the USER_FACEBOOK_URL field */
	const USER_FACEBOOK_URL = 'user.USER_FACEBOOK_URL';

	/** the column name for the USER_TWITTER_URL field */
	const USER_TWITTER_URL = 'user.USER_TWITTER_URL';

	/** the column name for the USER_WEBSITE_URL field */
	const USER_WEBSITE_URL = 'user.USER_WEBSITE_URL';

	/** the column name for the USER_STATUS field */
	const USER_STATUS = 'user.USER_STATUS';

	/** the column name for the USER_CREATED_AT field */
	const USER_CREATED_AT = 'user.USER_CREATED_AT';

	/** the column name for the USER_UPDATED_AT field */
	const USER_UPDATED_AT = 'user.USER_UPDATED_AT';

	/** the column name for the USER_TYPE field */
	const USER_TYPE = 'user.USER_TYPE';

	/** the column name for the USER_CONTACT_EMAIL_ID field */
	const USER_CONTACT_EMAIL_ID = 'user.USER_CONTACT_EMAIL_ID';

	/** the column name for the USER_T_USERNAME field */
	const USER_T_USERNAME = 'user.USER_T_USERNAME';

	/** the column name for the USER_PHOTO_URL field */
	const USER_PHOTO_URL = 'user.USER_PHOTO_URL';

	/** the column name for the USER_IMAGE field */
	const USER_IMAGE = 'user.USER_IMAGE';

	/** the column name for the USER_DEFAULT_TIMEZONE field */
	const USER_DEFAULT_TIMEZONE = 'user.USER_DEFAULT_TIMEZONE';

	/** the column name for the USER_BIRTHDAY_DATE field */
	const USER_BIRTHDAY_DATE = 'user.USER_BIRTHDAY_DATE';

	/** the column name for the USER_BROADCAST_STATUS field */
	const USER_BROADCAST_STATUS = 'user.USER_BROADCAST_STATUS';

	/** the column name for the USER_T_OAUTH_TOKEN field */
	const USER_T_OAUTH_TOKEN = 'user.USER_T_OAUTH_TOKEN';

	/** the column name for the USER_T_OAUTH_TOKEN_SECRET field */
	const USER_T_OAUTH_TOKEN_SECRET = 'user.USER_T_OAUTH_TOKEN_SECRET';

	/** the column name for the USER_UAL field */
	const USER_UAL = 'user.USER_UAL';

	/** the column name for the USER_OPTIN field */
	const USER_OPTIN = 'user.USER_OPTIN';

	/** the column name for the USER_OPTIN_DATE field */
	const USER_OPTIN_DATE = 'user.USER_OPTIN_DATE';

	/** the column name for the USER_TAGLINE field */
	const USER_TAGLINE = 'user.USER_TAGLINE';

	/**
	 * An identiy map to hold any loaded instances of User objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array User[]
	 */
	public static $instances = array();


	// symfony behavior
	
	/**
	 * Indicates whether the current model includes I18N.
	 */
	const IS_I18N = false;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('UserId', 'UserFbUid', 'UserTUid', 'UserFullName', 'UserFname', 'UserLname', 'UserUsername', 'UserEmail', 'UserEditableEmail', 'UserPassword', 'UserPasswordLegacy', 'UserBio', 'UserFacebookUrl', 'UserTwitterUrl', 'UserWebsiteUrl', 'UserStatus', 'UserCreatedAt', 'UserUpdatedAt', 'UserType', 'UserContactEmailId', 'UserTUsername', 'UserPhotoUrl', 'UserImage', 'UserDefaultTimezone', 'UserBirthdayDate', 'UserBroadcastStatus', 'UserTOauthToken', 'UserTOauthTokenSecret', 'UserUal', 'UserOptin', 'UserOptinDate', 'UserTagline', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('userId', 'userFbUid', 'userTUid', 'userFullName', 'userFname', 'userLname', 'userUsername', 'userEmail', 'userEditableEmail', 'userPassword', 'userPasswordLegacy', 'userBio', 'userFacebookUrl', 'userTwitterUrl', 'userWebsiteUrl', 'userStatus', 'userCreatedAt', 'userUpdatedAt', 'userType', 'userContactEmailId', 'userTUsername', 'userPhotoUrl', 'userImage', 'userDefaultTimezone', 'userBirthdayDate', 'userBroadcastStatus', 'userTOauthToken', 'userTOauthTokenSecret', 'userUal', 'userOptin', 'userOptinDate', 'userTagline', ),
		BasePeer::TYPE_COLNAME => array (self::USER_ID, self::USER_FB_UID, self::USER_T_UID, self::USER_FULL_NAME, self::USER_FNAME, self::USER_LNAME, self::USER_USERNAME, self::USER_EMAIL, self::USER_EDITABLE_EMAIL, self::USER_PASSWORD, self::USER_PASSWORD_LEGACY, self::USER_BIO, self::USER_FACEBOOK_URL, self::USER_TWITTER_URL, self::USER_WEBSITE_URL, self::USER_STATUS, self::USER_CREATED_AT, self::USER_UPDATED_AT, self::USER_TYPE, self::USER_CONTACT_EMAIL_ID, self::USER_T_USERNAME, self::USER_PHOTO_URL, self::USER_IMAGE, self::USER_DEFAULT_TIMEZONE, self::USER_BIRTHDAY_DATE, self::USER_BROADCAST_STATUS, self::USER_T_OAUTH_TOKEN, self::USER_T_OAUTH_TOKEN_SECRET, self::USER_UAL, self::USER_OPTIN, self::USER_OPTIN_DATE, self::USER_TAGLINE, ),
		BasePeer::TYPE_FIELDNAME => array ('user_id', 'user_fb_uid', 'user_t_uid', 'user_full_name', 'user_fname', 'user_lname', 'user_username', 'user_email', 'user_editable_email', 'user_password', 'user_password_legacy', 'user_bio', 'user_facebook_url', 'user_twitter_url', 'user_website_url', 'user_status', 'user_created_at', 'user_updated_at', 'user_type', 'user_contact_email_id', 'user_t_username', 'user_photo_url', 'user_image', 'user_default_timezone', 'user_birthday_date', 'user_broadcast_status', 'user_t_oauth_token', 'user_t_oauth_token_secret', 'user_ual', 'user_optin', 'user_optin_date', 'user_tagline', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('UserId' => 0, 'UserFbUid' => 1, 'UserTUid' => 2, 'UserFullName' => 3, 'UserFname' => 4, 'UserLname' => 5, 'UserUsername' => 6, 'UserEmail' => 7, 'UserEditableEmail' => 8, 'UserPassword' => 9, 'UserPasswordLegacy' => 10, 'UserBio' => 11, 'UserFacebookUrl' => 12, 'UserTwitterUrl' => 13, 'UserWebsiteUrl' => 14, 'UserStatus' => 15, 'UserCreatedAt' => 16, 'UserUpdatedAt' => 17, 'UserType' => 18, 'UserContactEmailId' => 19, 'UserTUsername' => 20, 'UserPhotoUrl' => 21, 'UserImage' => 22, 'UserDefaultTimezone' => 23, 'UserBirthdayDate' => 24, 'UserBroadcastStatus' => 25, 'UserTOauthToken' => 26, 'UserTOauthTokenSecret' => 27, 'UserUal' => 28, 'UserOptin' => 29, 'UserOptinDate' => 30, 'UserTagline' => 31, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('userId' => 0, 'userFbUid' => 1, 'userTUid' => 2, 'userFullName' => 3, 'userFname' => 4, 'userLname' => 5, 'userUsername' => 6, 'userEmail' => 7, 'userEditableEmail' => 8, 'userPassword' => 9, 'userPasswordLegacy' => 10, 'userBio' => 11, 'userFacebookUrl' => 12, 'userTwitterUrl' => 13, 'userWebsiteUrl' => 14, 'userStatus' => 15, 'userCreatedAt' => 16, 'userUpdatedAt' => 17, 'userType' => 18, 'userContactEmailId' => 19, 'userTUsername' => 20, 'userPhotoUrl' => 21, 'userImage' => 22, 'userDefaultTimezone' => 23, 'userBirthdayDate' => 24, 'userBroadcastStatus' => 25, 'userTOauthToken' => 26, 'userTOauthTokenSecret' => 27, 'userUal' => 28, 'userOptin' => 29, 'userOptinDate' => 30, 'userTagline' => 31, ),
		BasePeer::TYPE_COLNAME => array (self::USER_ID => 0, self::USER_FB_UID => 1, self::USER_T_UID => 2, self::USER_FULL_NAME => 3, self::USER_FNAME => 4, self::USER_LNAME => 5, self::USER_USERNAME => 6, self::USER_EMAIL => 7, self::USER_EDITABLE_EMAIL => 8, self::USER_PASSWORD => 9, self::USER_PASSWORD_LEGACY => 10, self::USER_BIO => 11, self::USER_FACEBOOK_URL => 12, self::USER_TWITTER_URL => 13, self::USER_WEBSITE_URL => 14, self::USER_STATUS => 15, self::USER_CREATED_AT => 16, self::USER_UPDATED_AT => 17, self::USER_TYPE => 18, self::USER_CONTACT_EMAIL_ID => 19, self::USER_T_USERNAME => 20, self::USER_PHOTO_URL => 21, self::USER_IMAGE => 22, self::USER_DEFAULT_TIMEZONE => 23, self::USER_BIRTHDAY_DATE => 24, self::USER_BROADCAST_STATUS => 25, self::USER_T_OAUTH_TOKEN => 26, self::USER_T_OAUTH_TOKEN_SECRET => 27, self::USER_UAL => 28, self::USER_OPTIN => 29, self::USER_OPTIN_DATE => 30, self::USER_TAGLINE => 31, ),
		BasePeer::TYPE_FIELDNAME => array ('user_id' => 0, 'user_fb_uid' => 1, 'user_t_uid' => 2, 'user_full_name' => 3, 'user_fname' => 4, 'user_lname' => 5, 'user_username' => 6, 'user_email' => 7, 'user_editable_email' => 8, 'user_password' => 9, 'user_password_legacy' => 10, 'user_bio' => 11, 'user_facebook_url' => 12, 'user_twitter_url' => 13, 'user_website_url' => 14, 'user_status' => 15, 'user_created_at' => 16, 'user_updated_at' => 17, 'user_type' => 18, 'user_contact_email_id' => 19, 'user_t_username' => 20, 'user_photo_url' => 21, 'user_image' => 22, 'user_default_timezone' => 23, 'user_birthday_date' => 24, 'user_broadcast_status' => 25, 'user_t_oauth_token' => 26, 'user_t_oauth_token_secret' => 27, 'user_ual' => 28, 'user_optin' => 29, 'user_optin_date' => 30, 'user_tagline' => 31, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. UserPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(UserPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{
		$criteria->addSelectColumn(UserPeer::USER_ID);
		$criteria->addSelectColumn(UserPeer::USER_FB_UID);
		$criteria->addSelectColumn(UserPeer::USER_T_UID);
		$criteria->addSelectColumn(UserPeer::USER_FULL_NAME);
		$criteria->addSelectColumn(UserPeer::USER_FNAME);
		$criteria->addSelectColumn(UserPeer::USER_LNAME);
		$criteria->addSelectColumn(UserPeer::USER_USERNAME);
		$criteria->addSelectColumn(UserPeer::USER_EMAIL);
		$criteria->addSelectColumn(UserPeer::USER_EDITABLE_EMAIL);
		$criteria->addSelectColumn(UserPeer::USER_PASSWORD);
		$criteria->addSelectColumn(UserPeer::USER_PASSWORD_LEGACY);
		$criteria->addSelectColumn(UserPeer::USER_BIO);
		$criteria->addSelectColumn(UserPeer::USER_FACEBOOK_URL);
		$criteria->addSelectColumn(UserPeer::USER_TWITTER_URL);
		$criteria->addSelectColumn(UserPeer::USER_WEBSITE_URL);
		$criteria->addSelectColumn(UserPeer::USER_STATUS);
		$criteria->addSelectColumn(UserPeer::USER_CREATED_AT);
		$criteria->addSelectColumn(UserPeer::USER_UPDATED_AT);
		$criteria->addSelectColumn(UserPeer::USER_TYPE);
		$criteria->addSelectColumn(UserPeer::USER_CONTACT_EMAIL_ID);
		$criteria->addSelectColumn(UserPeer::USER_T_USERNAME);
		$criteria->addSelectColumn(UserPeer::USER_PHOTO_URL);
		$criteria->addSelectColumn(UserPeer::USER_IMAGE);
		$criteria->addSelectColumn(UserPeer::USER_DEFAULT_TIMEZONE);
		$criteria->addSelectColumn(UserPeer::USER_BIRTHDAY_DATE);
		$criteria->addSelectColumn(UserPeer::USER_BROADCAST_STATUS);
		$criteria->addSelectColumn(UserPeer::USER_T_OAUTH_TOKEN);
		$criteria->addSelectColumn(UserPeer::USER_T_OAUTH_TOKEN_SECRET);
		$criteria->addSelectColumn(UserPeer::USER_UAL);
		$criteria->addSelectColumn(UserPeer::USER_OPTIN);
		$criteria->addSelectColumn(UserPeer::USER_OPTIN_DATE);
		$criteria->addSelectColumn(UserPeer::USER_TAGLINE);
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(UserPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			UserPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseUserPeer', $criteria, $con);
		}

		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     User
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = UserPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return UserPeer::populateObjects(UserPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			UserPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseUserPeer', $criteria, $con);
		}


		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      User $value A User object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(User $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getUserId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A User object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof User) {
				$key = (string) $value->getUserId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or User object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     User Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to user
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = UserPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = UserPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = UserPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				UserPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseUserPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseUserPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new UserTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean  Whether or not to return the path wit hthe class name 
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? UserPeer::CLASS_DEFAULT : UserPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a User or Criteria object.
	 *
	 * @param      mixed $values Criteria or User object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseUserPeer:doInsert:pre') as $sf_hook)
    {
      if (false !== $sf_hook_retval = call_user_func($sf_hook, 'BaseUserPeer', $values, $con))
      {
        return $sf_hook_retval;
      }
    }

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from User object
		}

		if ($criteria->containsKey(UserPeer::USER_ID) && $criteria->keyContainsValue(UserPeer::USER_ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserPeer::USER_ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseUserPeer:doInsert:post') as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseUserPeer', $values, $con, $pk);
    }

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a User or Criteria object.
	 *
	 * @param      mixed $values Criteria or User object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseUserPeer:doUpdate:pre') as $sf_hook)
    {
      if (false !== $sf_hook_retval = call_user_func($sf_hook, 'BaseUserPeer', $values, $con))
      {
        return $sf_hook_retval;
      }
    }

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(UserPeer::USER_ID);
			$selectCriteria->add(UserPeer::USER_ID, $criteria->remove(UserPeer::USER_ID), $comparison);

		} else { // $values is User object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseUserPeer:doUpdate:post') as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseUserPeer', $values, $con, $ret);
    }

    return $ret;
	}

	/**
	 * Method to DELETE all rows from the user table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(UserPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			UserPeer::clearInstancePool();
			UserPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a User or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or User object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			UserPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof User) { // it's a model object
			// invalidate the cache for this single object
			UserPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UserPeer::USER_ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				UserPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			UserPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given User object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      User $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(User $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UserPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UserPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(UserPeer::DATABASE_NAME, UserPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     User
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = UserPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(UserPeer::DATABASE_NAME);
		$criteria->add(UserPeer::USER_ID, $pk);

		$v = UserPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(UserPeer::DATABASE_NAME);
			$criteria->add(UserPeer::USER_ID, $pks, Criteria::IN);
			$objs = UserPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseUserPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseUserPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUserPeer::buildTableMap();
