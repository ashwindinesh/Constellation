<?php

/**
 * Base class that represents a row from the 'chat_instance' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu 26 Apr 2012 01:25:32 PM EDT
 *
 * @package    lib.model.om
 */
abstract class BaseChatInstance extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ChatInstancePeer
	 */
	protected static $peer;

	/**
	 * The value for the chat_instance_id field.
	 * @var        int
	 */
	protected $chat_instance_id;

	/**
	 * The value for the fk_screening_key field.
	 * @var        string
	 */
	protected $fk_screening_key;

	/**
	 * The value for the chat_instance_key field.
	 * @var        string
	 */
	protected $chat_instance_key;

	/**
	 * The value for the chat_instance_host field.
	 * @var        string
	 */
	protected $chat_instance_host;

	/**
	 * The value for the chat_instance_port field.
	 * @var        int
	 */
	protected $chat_instance_port;

	/**
	 * The value for the chat_instance_count field.
	 * @var        int
	 */
	protected $chat_instance_count;

	/**
	 * The value for the chat_instance_name field.
	 * @var        int
	 */
	protected $chat_instance_name;

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
	
	const PEER = 'ChatInstancePeer';

	/**
	 * Get the [chat_instance_id] column value.
	 * 
	 * @return     int
	 */
	public function getChatInstanceId()
	{
		return $this->chat_instance_id;
	}

	/**
	 * Get the [fk_screening_key] column value.
	 * 
	 * @return     string
	 */
	public function getFkScreeningKey()
	{
		return $this->fk_screening_key;
	}

	/**
	 * Get the [chat_instance_key] column value.
	 * 
	 * @return     string
	 */
	public function getChatInstanceKey()
	{
		return $this->chat_instance_key;
	}

	/**
	 * Get the [chat_instance_host] column value.
	 * 
	 * @return     string
	 */
	public function getChatInstanceHost()
	{
		return $this->chat_instance_host;
	}

	/**
	 * Get the [chat_instance_port] column value.
	 * 
	 * @return     int
	 */
	public function getChatInstancePort()
	{
		return $this->chat_instance_port;
	}

	/**
	 * Get the [chat_instance_count] column value.
	 * 
	 * @return     int
	 */
	public function getChatInstanceCount()
	{
		return $this->chat_instance_count;
	}

	/**
	 * Get the [chat_instance_name] column value.
	 * 
	 * @return     int
	 */
	public function getChatInstanceName()
	{
		return $this->chat_instance_name;
	}

	/**
	 * Set the value of [chat_instance_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ChatInstance The current object (for fluent API support)
	 */
	public function setChatInstanceId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->chat_instance_id !== $v) {
			$this->chat_instance_id = $v;
			$this->modifiedColumns[] = ChatInstancePeer::CHAT_INSTANCE_ID;
		}

		return $this;
	} // setChatInstanceId()

	/**
	 * Set the value of [fk_screening_key] column.
	 * 
	 * @param      string $v new value
	 * @return     ChatInstance The current object (for fluent API support)
	 */
	public function setFkScreeningKey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fk_screening_key !== $v) {
			$this->fk_screening_key = $v;
			$this->modifiedColumns[] = ChatInstancePeer::FK_SCREENING_KEY;
		}

		return $this;
	} // setFkScreeningKey()

	/**
	 * Set the value of [chat_instance_key] column.
	 * 
	 * @param      string $v new value
	 * @return     ChatInstance The current object (for fluent API support)
	 */
	public function setChatInstanceKey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->chat_instance_key !== $v) {
			$this->chat_instance_key = $v;
			$this->modifiedColumns[] = ChatInstancePeer::CHAT_INSTANCE_KEY;
		}

		return $this;
	} // setChatInstanceKey()

	/**
	 * Set the value of [chat_instance_host] column.
	 * 
	 * @param      string $v new value
	 * @return     ChatInstance The current object (for fluent API support)
	 */
	public function setChatInstanceHost($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->chat_instance_host !== $v) {
			$this->chat_instance_host = $v;
			$this->modifiedColumns[] = ChatInstancePeer::CHAT_INSTANCE_HOST;
		}

		return $this;
	} // setChatInstanceHost()

	/**
	 * Set the value of [chat_instance_port] column.
	 * 
	 * @param      int $v new value
	 * @return     ChatInstance The current object (for fluent API support)
	 */
	public function setChatInstancePort($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->chat_instance_port !== $v) {
			$this->chat_instance_port = $v;
			$this->modifiedColumns[] = ChatInstancePeer::CHAT_INSTANCE_PORT;
		}

		return $this;
	} // setChatInstancePort()

	/**
	 * Set the value of [chat_instance_count] column.
	 * 
	 * @param      int $v new value
	 * @return     ChatInstance The current object (for fluent API support)
	 */
	public function setChatInstanceCount($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->chat_instance_count !== $v) {
			$this->chat_instance_count = $v;
			$this->modifiedColumns[] = ChatInstancePeer::CHAT_INSTANCE_COUNT;
		}

		return $this;
	} // setChatInstanceCount()

	/**
	 * Set the value of [chat_instance_name] column.
	 * 
	 * @param      int $v new value
	 * @return     ChatInstance The current object (for fluent API support)
	 */
	public function setChatInstanceName($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->chat_instance_name !== $v) {
			$this->chat_instance_name = $v;
			$this->modifiedColumns[] = ChatInstancePeer::CHAT_INSTANCE_NAME;
		}

		return $this;
	} // setChatInstanceName()

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

			$this->chat_instance_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->fk_screening_key = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->chat_instance_key = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->chat_instance_host = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->chat_instance_port = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->chat_instance_count = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->chat_instance_name = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 7; // 7 = ChatInstancePeer::NUM_COLUMNS - ChatInstancePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ChatInstance object", $e);
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
			$con = Propel::getConnection(ChatInstancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ChatInstancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ChatInstancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseChatInstance:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				ChatInstancePeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseChatInstance:delete:post') as $callable)
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
			$con = Propel::getConnection(ChatInstancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseChatInstance:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseChatInstance:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				ChatInstancePeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ChatInstancePeer::CHAT_INSTANCE_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ChatInstancePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setChatInstanceId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ChatInstancePeer::doUpdate($this, $con);
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


			if (($retval = ChatInstancePeer::doValidate($this, $columns)) !== true) {
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
		$pos = ChatInstancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getChatInstanceId();
				break;
			case 1:
				return $this->getFkScreeningKey();
				break;
			case 2:
				return $this->getChatInstanceKey();
				break;
			case 3:
				return $this->getChatInstanceHost();
				break;
			case 4:
				return $this->getChatInstancePort();
				break;
			case 5:
				return $this->getChatInstanceCount();
				break;
			case 6:
				return $this->getChatInstanceName();
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
		$keys = ChatInstancePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getChatInstanceId(),
			$keys[1] => $this->getFkScreeningKey(),
			$keys[2] => $this->getChatInstanceKey(),
			$keys[3] => $this->getChatInstanceHost(),
			$keys[4] => $this->getChatInstancePort(),
			$keys[5] => $this->getChatInstanceCount(),
			$keys[6] => $this->getChatInstanceName(),
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
		$pos = ChatInstancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setChatInstanceId($value);
				break;
			case 1:
				$this->setFkScreeningKey($value);
				break;
			case 2:
				$this->setChatInstanceKey($value);
				break;
			case 3:
				$this->setChatInstanceHost($value);
				break;
			case 4:
				$this->setChatInstancePort($value);
				break;
			case 5:
				$this->setChatInstanceCount($value);
				break;
			case 6:
				$this->setChatInstanceName($value);
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
		$keys = ChatInstancePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setChatInstanceId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFkScreeningKey($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setChatInstanceKey($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setChatInstanceHost($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setChatInstancePort($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setChatInstanceCount($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setChatInstanceName($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ChatInstancePeer::DATABASE_NAME);

		if ($this->isColumnModified(ChatInstancePeer::CHAT_INSTANCE_ID)) $criteria->add(ChatInstancePeer::CHAT_INSTANCE_ID, $this->chat_instance_id);
		if ($this->isColumnModified(ChatInstancePeer::FK_SCREENING_KEY)) $criteria->add(ChatInstancePeer::FK_SCREENING_KEY, $this->fk_screening_key);
		if ($this->isColumnModified(ChatInstancePeer::CHAT_INSTANCE_KEY)) $criteria->add(ChatInstancePeer::CHAT_INSTANCE_KEY, $this->chat_instance_key);
		if ($this->isColumnModified(ChatInstancePeer::CHAT_INSTANCE_HOST)) $criteria->add(ChatInstancePeer::CHAT_INSTANCE_HOST, $this->chat_instance_host);
		if ($this->isColumnModified(ChatInstancePeer::CHAT_INSTANCE_PORT)) $criteria->add(ChatInstancePeer::CHAT_INSTANCE_PORT, $this->chat_instance_port);
		if ($this->isColumnModified(ChatInstancePeer::CHAT_INSTANCE_COUNT)) $criteria->add(ChatInstancePeer::CHAT_INSTANCE_COUNT, $this->chat_instance_count);
		if ($this->isColumnModified(ChatInstancePeer::CHAT_INSTANCE_NAME)) $criteria->add(ChatInstancePeer::CHAT_INSTANCE_NAME, $this->chat_instance_name);

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
		$criteria = new Criteria(ChatInstancePeer::DATABASE_NAME);

		$criteria->add(ChatInstancePeer::CHAT_INSTANCE_ID, $this->chat_instance_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getChatInstanceId();
	}

	/**
	 * Generic method to set the primary key (chat_instance_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setChatInstanceId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of ChatInstance (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setFkScreeningKey($this->fk_screening_key);

		$copyObj->setChatInstanceKey($this->chat_instance_key);

		$copyObj->setChatInstanceHost($this->chat_instance_host);

		$copyObj->setChatInstancePort($this->chat_instance_port);

		$copyObj->setChatInstanceCount($this->chat_instance_count);

		$copyObj->setChatInstanceName($this->chat_instance_name);


		$copyObj->setNew(true);

		$copyObj->setChatInstanceId(NULL); // this is a auto-increment column, so set to default value

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
	 * @return     ChatInstance Clone of current object.
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
	 * @return     ChatInstancePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ChatInstancePeer();
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
	  if (!$callable = sfMixer::getCallable('BaseChatInstance:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseChatInstance::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseChatInstance
