<?php

/**
 * Base class that represents a row from the 'click' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu 26 Apr 2012 01:25:32 PM EDT
 *
 * @package    lib.model.om
 */
abstract class BaseClick extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ClickPeer
	 */
	protected static $peer;

	/**
	 * The value for the click_id field.
	 * @var        int
	 */
	protected $click_id;

	/**
	 * The value for the click_referer field.
	 * @var        string
	 */
	protected $click_referer;

	/**
	 * The value for the click_ip field.
	 * @var        string
	 */
	protected $click_ip;

	/**
	 * The value for the click_date field.
	 * @var        string
	 */
	protected $click_date;

	/**
	 * The value for the click_guid field.
	 * @var        string
	 */
	protected $click_guid;

	/**
	 * The value for the fk_click_track_id field.
	 * @var        int
	 */
	protected $fk_click_track_id;

	/**
	 * The value for the click_script field.
	 * @var        string
	 */
	protected $click_script;

	/**
	 * The value for the click_querystring field.
	 * @var        string
	 */
	protected $click_querystring;

	/**
	 * The value for the click_incoming field.
	 * @var        string
	 */
	protected $click_incoming;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	// symfony behavior
	
	const PEER = 'ClickPeer';

	/**
	 * Get the [click_id] column value.
	 * 
	 * @return     int
	 */
	public function getClickId()
	{
		return $this->click_id;
	}

	/**
	 * Get the [click_referer] column value.
	 * 
	 * @return     string
	 */
	public function getClickReferer()
	{
		return $this->click_referer;
	}

	/**
	 * Get the [click_ip] column value.
	 * 
	 * @return     string
	 */
	public function getClickIp()
	{
		return $this->click_ip;
	}

	/**
	 * Get the [optionally formatted] temporal [click_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getClickDate($format = 'Y-m-d H:i:s')
	{
		if ($this->click_date === null) {
			return null;
		}


		if ($this->click_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->click_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->click_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [click_guid] column value.
	 * 
	 * @return     string
	 */
	public function getClickGuid()
	{
		return $this->click_guid;
	}

	/**
	 * Get the [fk_click_track_id] column value.
	 * 
	 * @return     int
	 */
	public function getFkClickTrackId()
	{
		return $this->fk_click_track_id;
	}

	/**
	 * Get the [click_script] column value.
	 * 
	 * @return     string
	 */
	public function getClickScript()
	{
		return $this->click_script;
	}

	/**
	 * Get the [click_querystring] column value.
	 * 
	 * @return     string
	 */
	public function getClickQuerystring()
	{
		return $this->click_querystring;
	}

	/**
	 * Get the [click_incoming] column value.
	 * 
	 * @return     string
	 */
	public function getClickIncoming()
	{
		return $this->click_incoming;
	}

	/**
	 * Set the value of [click_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->click_id !== $v) {
			$this->click_id = $v;
			$this->modifiedColumns[] = ClickPeer::CLICK_ID;
		}

		return $this;
	} // setClickId()

	/**
	 * Set the value of [click_referer] column.
	 * 
	 * @param      string $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickReferer($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_referer !== $v) {
			$this->click_referer = $v;
			$this->modifiedColumns[] = ClickPeer::CLICK_REFERER;
		}

		return $this;
	} // setClickReferer()

	/**
	 * Set the value of [click_ip] column.
	 * 
	 * @param      string $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickIp($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_ip !== $v) {
			$this->click_ip = $v;
			$this->modifiedColumns[] = ClickPeer::CLICK_IP;
		}

		return $this;
	} // setClickIp()

	/**
	 * Sets the value of [click_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickDate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->click_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->click_date !== null && $tmpDt = new DateTime($this->click_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->click_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ClickPeer::CLICK_DATE;
			}
		} // if either are not null

		return $this;
	} // setClickDate()

	/**
	 * Set the value of [click_guid] column.
	 * 
	 * @param      string $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickGuid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_guid !== $v) {
			$this->click_guid = $v;
			$this->modifiedColumns[] = ClickPeer::CLICK_GUID;
		}

		return $this;
	} // setClickGuid()

	/**
	 * Set the value of [fk_click_track_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setFkClickTrackId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fk_click_track_id !== $v) {
			$this->fk_click_track_id = $v;
			$this->modifiedColumns[] = ClickPeer::FK_CLICK_TRACK_ID;
		}

		return $this;
	} // setFkClickTrackId()

	/**
	 * Set the value of [click_script] column.
	 * 
	 * @param      string $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickScript($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_script !== $v) {
			$this->click_script = $v;
			$this->modifiedColumns[] = ClickPeer::CLICK_SCRIPT;
		}

		return $this;
	} // setClickScript()

	/**
	 * Set the value of [click_querystring] column.
	 * 
	 * @param      string $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickQuerystring($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_querystring !== $v) {
			$this->click_querystring = $v;
			$this->modifiedColumns[] = ClickPeer::CLICK_QUERYSTRING;
		}

		return $this;
	} // setClickQuerystring()

	/**
	 * Set the value of [click_incoming] column.
	 * 
	 * @param      string $v new value
	 * @return     Click The current object (for fluent API support)
	 */
	public function setClickIncoming($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_incoming !== $v) {
			$this->click_incoming = $v;
			$this->modifiedColumns[] = ClickPeer::CLICK_INCOMING;
		}

		return $this;
	} // setClickIncoming()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->click_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->click_referer = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->click_ip = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->click_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->click_guid = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->fk_click_track_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->click_script = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->click_querystring = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->click_incoming = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 9; // 9 = ClickPeer::NUM_COLUMNS - ClickPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Click object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClickPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ClickPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClickPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseClick:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				ClickPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseClick:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClickPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseClick:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseClick:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				ClickPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ClickPeer::CLICK_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ClickPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setClickId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ClickPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = ClickPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClickPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getClickId();
				break;
			case 1:
				return $this->getClickReferer();
				break;
			case 2:
				return $this->getClickIp();
				break;
			case 3:
				return $this->getClickDate();
				break;
			case 4:
				return $this->getClickGuid();
				break;
			case 5:
				return $this->getFkClickTrackId();
				break;
			case 6:
				return $this->getClickScript();
				break;
			case 7:
				return $this->getClickQuerystring();
				break;
			case 8:
				return $this->getClickIncoming();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = ClickPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getClickId(),
			$keys[1] => $this->getClickReferer(),
			$keys[2] => $this->getClickIp(),
			$keys[3] => $this->getClickDate(),
			$keys[4] => $this->getClickGuid(),
			$keys[5] => $this->getFkClickTrackId(),
			$keys[6] => $this->getClickScript(),
			$keys[7] => $this->getClickQuerystring(),
			$keys[8] => $this->getClickIncoming(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClickPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setClickId($value);
				break;
			case 1:
				$this->setClickReferer($value);
				break;
			case 2:
				$this->setClickIp($value);
				break;
			case 3:
				$this->setClickDate($value);
				break;
			case 4:
				$this->setClickGuid($value);
				break;
			case 5:
				$this->setFkClickTrackId($value);
				break;
			case 6:
				$this->setClickScript($value);
				break;
			case 7:
				$this->setClickQuerystring($value);
				break;
			case 8:
				$this->setClickIncoming($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClickPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setClickId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setClickReferer($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setClickIp($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setClickDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setClickGuid($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFkClickTrackId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setClickScript($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setClickQuerystring($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setClickIncoming($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ClickPeer::DATABASE_NAME);

		if ($this->isColumnModified(ClickPeer::CLICK_ID)) $criteria->add(ClickPeer::CLICK_ID, $this->click_id);
		if ($this->isColumnModified(ClickPeer::CLICK_REFERER)) $criteria->add(ClickPeer::CLICK_REFERER, $this->click_referer);
		if ($this->isColumnModified(ClickPeer::CLICK_IP)) $criteria->add(ClickPeer::CLICK_IP, $this->click_ip);
		if ($this->isColumnModified(ClickPeer::CLICK_DATE)) $criteria->add(ClickPeer::CLICK_DATE, $this->click_date);
		if ($this->isColumnModified(ClickPeer::CLICK_GUID)) $criteria->add(ClickPeer::CLICK_GUID, $this->click_guid);
		if ($this->isColumnModified(ClickPeer::FK_CLICK_TRACK_ID)) $criteria->add(ClickPeer::FK_CLICK_TRACK_ID, $this->fk_click_track_id);
		if ($this->isColumnModified(ClickPeer::CLICK_SCRIPT)) $criteria->add(ClickPeer::CLICK_SCRIPT, $this->click_script);
		if ($this->isColumnModified(ClickPeer::CLICK_QUERYSTRING)) $criteria->add(ClickPeer::CLICK_QUERYSTRING, $this->click_querystring);
		if ($this->isColumnModified(ClickPeer::CLICK_INCOMING)) $criteria->add(ClickPeer::CLICK_INCOMING, $this->click_incoming);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ClickPeer::DATABASE_NAME);

		$criteria->add(ClickPeer::CLICK_ID, $this->click_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getClickId();
	}

	/**
	 * Generic method to set the primary key (click_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setClickId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Click (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setClickReferer($this->click_referer);

		$copyObj->setClickIp($this->click_ip);

		$copyObj->setClickDate($this->click_date);

		$copyObj->setClickGuid($this->click_guid);

		$copyObj->setFkClickTrackId($this->fk_click_track_id);

		$copyObj->setClickScript($this->click_script);

		$copyObj->setClickQuerystring($this->click_querystring);

		$copyObj->setClickIncoming($this->click_incoming);


		$copyObj->setNew(true);

		$copyObj->setClickId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Click Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     ClickPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ClickPeer();
		}
		return self::$peer;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseClick:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseClick::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseClick
