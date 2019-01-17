<?php

namespace Base;

use \Catdirsis as ChildCatdirsis;
use \CatdirsisQuery as ChildCatdirsisQuery;
use \Catmodsis as ChildCatmodsis;
use \CatmodsisQuery as ChildCatmodsisQuery;
use \Relperrol as ChildRelperrol;
use \RelperrolQuery as ChildRelperrolQuery;
use \Exception;
use \PDO;
use Map\CatdirsisTableMap;
use Map\CatmodsisTableMap;
use Map\RelperrolTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'catmodsis' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Catmodsis implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\CatmodsisTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the cvemodsis field.
     *
     * @var        int
     */
    protected $cvemodsis;

    /**
     * The value for the nommodsis field.
     *
     * @var        string
     */
    protected $nommodsis;

    /**
     * The value for the dirmodsis field.
     *
     * @var        string
     */
    protected $dirmodsis;

    /**
     * The value for the icnmodsis field.
     *
     * @var        string
     */
    protected $icnmodsis;

    /**
     * The value for the ordmodsis field.
     *
     * @var        int
     */
    protected $ordmodsis;

    /**
     * @var        ObjectCollection|ChildCatdirsis[] Collection to store aggregation of ChildCatdirsis objects.
     */
    protected $collCatdirses;
    protected $collCatdirsesPartial;

    /**
     * @var        ObjectCollection|ChildRelperrol[] Collection to store aggregation of ChildRelperrol objects.
     */
    protected $collRelperrols;
    protected $collRelperrolsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildCatdirsis[]
     */
    protected $catdirsesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildRelperrol[]
     */
    protected $relperrolsScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\Catmodsis object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>Catmodsis</code> instance.  If
     * <code>obj</code> is an instance of <code>Catmodsis</code>, delegates to
     * <code>equals(Catmodsis)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|Catmodsis The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [cvemodsis] column value.
     *
     * @return int
     */
    public function getCvemodsis()
    {
        return $this->cvemodsis;
    }

    /**
     * Get the [nommodsis] column value.
     *
     * @return string
     */
    public function getNommodsis()
    {
        return $this->nommodsis;
    }

    /**
     * Get the [dirmodsis] column value.
     *
     * @return string
     */
    public function getDirmodsis()
    {
        return $this->dirmodsis;
    }

    /**
     * Get the [icnmodsis] column value.
     *
     * @return string
     */
    public function getIcnmodsis()
    {
        return $this->icnmodsis;
    }

    /**
     * Get the [ordmodsis] column value.
     *
     * @return int
     */
    public function getOrdmodsis()
    {
        return $this->ordmodsis;
    }

    /**
     * Set the value of [cvemodsis] column.
     *
     * @param int $v new value
     * @return $this|\Catmodsis The current object (for fluent API support)
     */
    public function setCvemodsis($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cvemodsis !== $v) {
            $this->cvemodsis = $v;
            $this->modifiedColumns[CatmodsisTableMap::COL_CVEMODSIS] = true;
        }

        return $this;
    } // setCvemodsis()

    /**
     * Set the value of [nommodsis] column.
     *
     * @param string $v new value
     * @return $this|\Catmodsis The current object (for fluent API support)
     */
    public function setNommodsis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nommodsis !== $v) {
            $this->nommodsis = $v;
            $this->modifiedColumns[CatmodsisTableMap::COL_NOMMODSIS] = true;
        }

        return $this;
    } // setNommodsis()

    /**
     * Set the value of [dirmodsis] column.
     *
     * @param string $v new value
     * @return $this|\Catmodsis The current object (for fluent API support)
     */
    public function setDirmodsis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dirmodsis !== $v) {
            $this->dirmodsis = $v;
            $this->modifiedColumns[CatmodsisTableMap::COL_DIRMODSIS] = true;
        }

        return $this;
    } // setDirmodsis()

    /**
     * Set the value of [icnmodsis] column.
     *
     * @param string $v new value
     * @return $this|\Catmodsis The current object (for fluent API support)
     */
    public function setIcnmodsis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->icnmodsis !== $v) {
            $this->icnmodsis = $v;
            $this->modifiedColumns[CatmodsisTableMap::COL_ICNMODSIS] = true;
        }

        return $this;
    } // setIcnmodsis()

    /**
     * Set the value of [ordmodsis] column.
     *
     * @param int $v new value
     * @return $this|\Catmodsis The current object (for fluent API support)
     */
    public function setOrdmodsis($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ordmodsis !== $v) {
            $this->ordmodsis = $v;
            $this->modifiedColumns[CatmodsisTableMap::COL_ORDMODSIS] = true;
        }

        return $this;
    } // setOrdmodsis()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
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
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CatmodsisTableMap::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cvemodsis = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CatmodsisTableMap::translateFieldName('Nommodsis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nommodsis = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CatmodsisTableMap::translateFieldName('Dirmodsis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dirmodsis = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CatmodsisTableMap::translateFieldName('Icnmodsis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->icnmodsis = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CatmodsisTableMap::translateFieldName('Ordmodsis', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ordmodsis = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 5; // 5 = CatmodsisTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Catmodsis'), 0, $e);
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
     * @throws PropelException
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
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCatmodsisQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCatdirses = null;

            $this->collRelperrols = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Catmodsis::setDeleted()
     * @see Catmodsis::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCatmodsisQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
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
                CatmodsisTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->catdirsesScheduledForDeletion !== null) {
                if (!$this->catdirsesScheduledForDeletion->isEmpty()) {
                    foreach ($this->catdirsesScheduledForDeletion as $catdirsis) {
                        // need to save related object because we set the relation to null
                        $catdirsis->save($con);
                    }
                    $this->catdirsesScheduledForDeletion = null;
                }
            }

            if ($this->collCatdirses !== null) {
                foreach ($this->collCatdirses as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->relperrolsScheduledForDeletion !== null) {
                if (!$this->relperrolsScheduledForDeletion->isEmpty()) {
                    foreach ($this->relperrolsScheduledForDeletion as $relperrol) {
                        // need to save related object because we set the relation to null
                        $relperrol->save($con);
                    }
                    $this->relperrolsScheduledForDeletion = null;
                }
            }

            if ($this->collRelperrols !== null) {
                foreach ($this->collRelperrols as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[CatmodsisTableMap::COL_CVEMODSIS] = true;
        if (null !== $this->cvemodsis) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CatmodsisTableMap::COL_CVEMODSIS . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CatmodsisTableMap::COL_CVEMODSIS)) {
            $modifiedColumns[':p' . $index++]  = 'cvemodsis';
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_NOMMODSIS)) {
            $modifiedColumns[':p' . $index++]  = 'nommodsis';
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_DIRMODSIS)) {
            $modifiedColumns[':p' . $index++]  = 'dirmodsis';
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_ICNMODSIS)) {
            $modifiedColumns[':p' . $index++]  = 'icnmodsis';
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_ORDMODSIS)) {
            $modifiedColumns[':p' . $index++]  = 'ordmodsis';
        }

        $sql = sprintf(
            'INSERT INTO catmodsis (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'cvemodsis':
                        $stmt->bindValue($identifier, $this->cvemodsis, PDO::PARAM_INT);
                        break;
                    case 'nommodsis':
                        $stmt->bindValue($identifier, $this->nommodsis, PDO::PARAM_STR);
                        break;
                    case 'dirmodsis':
                        $stmt->bindValue($identifier, $this->dirmodsis, PDO::PARAM_STR);
                        break;
                    case 'icnmodsis':
                        $stmt->bindValue($identifier, $this->icnmodsis, PDO::PARAM_STR);
                        break;
                    case 'ordmodsis':
                        $stmt->bindValue($identifier, $this->ordmodsis, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setCvemodsis($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CatmodsisTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getCvemodsis();
                break;
            case 1:
                return $this->getNommodsis();
                break;
            case 2:
                return $this->getDirmodsis();
                break;
            case 3:
                return $this->getIcnmodsis();
                break;
            case 4:
                return $this->getOrdmodsis();
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
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['Catmodsis'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Catmodsis'][$this->hashCode()] = true;
        $keys = CatmodsisTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCvemodsis(),
            $keys[1] => $this->getNommodsis(),
            $keys[2] => $this->getDirmodsis(),
            $keys[3] => $this->getIcnmodsis(),
            $keys[4] => $this->getOrdmodsis(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCatdirses) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'catdirses';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'catdirses';
                        break;
                    default:
                        $key = 'Catdirses';
                }

                $result[$key] = $this->collCatdirses->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRelperrols) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'relperrols';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'relperrols';
                        break;
                    default:
                        $key = 'Relperrols';
                }

                $result[$key] = $this->collRelperrols->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\Catmodsis
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CatmodsisTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Catmodsis
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCvemodsis($value);
                break;
            case 1:
                $this->setNommodsis($value);
                break;
            case 2:
                $this->setDirmodsis($value);
                break;
            case 3:
                $this->setIcnmodsis($value);
                break;
            case 4:
                $this->setOrdmodsis($value);
                break;
        } // switch()

        return $this;
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
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = CatmodsisTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCvemodsis($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setNommodsis($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDirmodsis($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIcnmodsis($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOrdmodsis($arr[$keys[4]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\Catmodsis The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CatmodsisTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CatmodsisTableMap::COL_CVEMODSIS)) {
            $criteria->add(CatmodsisTableMap::COL_CVEMODSIS, $this->cvemodsis);
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_NOMMODSIS)) {
            $criteria->add(CatmodsisTableMap::COL_NOMMODSIS, $this->nommodsis);
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_DIRMODSIS)) {
            $criteria->add(CatmodsisTableMap::COL_DIRMODSIS, $this->dirmodsis);
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_ICNMODSIS)) {
            $criteria->add(CatmodsisTableMap::COL_ICNMODSIS, $this->icnmodsis);
        }
        if ($this->isColumnModified(CatmodsisTableMap::COL_ORDMODSIS)) {
            $criteria->add(CatmodsisTableMap::COL_ORDMODSIS, $this->ordmodsis);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildCatmodsisQuery::create();
        $criteria->add(CatmodsisTableMap::COL_CVEMODSIS, $this->cvemodsis);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getCvemodsis();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCvemodsis();
    }

    /**
     * Generic method to set the primary key (cvemodsis column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCvemodsis($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCvemodsis();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Catmodsis (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNommodsis($this->getNommodsis());
        $copyObj->setDirmodsis($this->getDirmodsis());
        $copyObj->setIcnmodsis($this->getIcnmodsis());
        $copyObj->setOrdmodsis($this->getOrdmodsis());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getCatdirses() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCatdirsis($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRelperrols() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRelperrol($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCvemodsis(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Catmodsis Clone of current object.
     * @throws PropelException
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Catdirsis' == $relationName) {
            $this->initCatdirses();
            return;
        }
        if ('Relperrol' == $relationName) {
            $this->initRelperrols();
            return;
        }
    }

    /**
     * Clears out the collCatdirses collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCatdirses()
     */
    public function clearCatdirses()
    {
        $this->collCatdirses = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCatdirses collection loaded partially.
     */
    public function resetPartialCatdirses($v = true)
    {
        $this->collCatdirsesPartial = $v;
    }

    /**
     * Initializes the collCatdirses collection.
     *
     * By default this just sets the collCatdirses collection to an empty array (like clearcollCatdirses());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCatdirses($overrideExisting = true)
    {
        if (null !== $this->collCatdirses && !$overrideExisting) {
            return;
        }

        $collectionClassName = CatdirsisTableMap::getTableMap()->getCollectionClassName();

        $this->collCatdirses = new $collectionClassName;
        $this->collCatdirses->setModel('\Catdirsis');
    }

    /**
     * Gets an array of ChildCatdirsis objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCatmodsis is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildCatdirsis[] List of ChildCatdirsis objects
     * @throws PropelException
     */
    public function getCatdirses(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCatdirsesPartial && !$this->isNew();
        if (null === $this->collCatdirses || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCatdirses) {
                // return empty collection
                $this->initCatdirses();
            } else {
                $collCatdirses = ChildCatdirsisQuery::create(null, $criteria)
                    ->filterByCatmodsis($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCatdirsesPartial && count($collCatdirses)) {
                        $this->initCatdirses(false);

                        foreach ($collCatdirses as $obj) {
                            if (false == $this->collCatdirses->contains($obj)) {
                                $this->collCatdirses->append($obj);
                            }
                        }

                        $this->collCatdirsesPartial = true;
                    }

                    return $collCatdirses;
                }

                if ($partial && $this->collCatdirses) {
                    foreach ($this->collCatdirses as $obj) {
                        if ($obj->isNew()) {
                            $collCatdirses[] = $obj;
                        }
                    }
                }

                $this->collCatdirses = $collCatdirses;
                $this->collCatdirsesPartial = false;
            }
        }

        return $this->collCatdirses;
    }

    /**
     * Sets a collection of ChildCatdirsis objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $catdirses A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCatmodsis The current object (for fluent API support)
     */
    public function setCatdirses(Collection $catdirses, ConnectionInterface $con = null)
    {
        /** @var ChildCatdirsis[] $catdirsesToDelete */
        $catdirsesToDelete = $this->getCatdirses(new Criteria(), $con)->diff($catdirses);


        $this->catdirsesScheduledForDeletion = $catdirsesToDelete;

        foreach ($catdirsesToDelete as $catdirsisRemoved) {
            $catdirsisRemoved->setCatmodsis(null);
        }

        $this->collCatdirses = null;
        foreach ($catdirses as $catdirsis) {
            $this->addCatdirsis($catdirsis);
        }

        $this->collCatdirses = $catdirses;
        $this->collCatdirsesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Catdirsis objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Catdirsis objects.
     * @throws PropelException
     */
    public function countCatdirses(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCatdirsesPartial && !$this->isNew();
        if (null === $this->collCatdirses || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCatdirses) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCatdirses());
            }

            $query = ChildCatdirsisQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCatmodsis($this)
                ->count($con);
        }

        return count($this->collCatdirses);
    }

    /**
     * Method called to associate a ChildCatdirsis object to this object
     * through the ChildCatdirsis foreign key attribute.
     *
     * @param  ChildCatdirsis $l ChildCatdirsis
     * @return $this|\Catmodsis The current object (for fluent API support)
     */
    public function addCatdirsis(ChildCatdirsis $l)
    {
        if ($this->collCatdirses === null) {
            $this->initCatdirses();
            $this->collCatdirsesPartial = true;
        }

        if (!$this->collCatdirses->contains($l)) {
            $this->doAddCatdirsis($l);

            if ($this->catdirsesScheduledForDeletion and $this->catdirsesScheduledForDeletion->contains($l)) {
                $this->catdirsesScheduledForDeletion->remove($this->catdirsesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildCatdirsis $catdirsis The ChildCatdirsis object to add.
     */
    protected function doAddCatdirsis(ChildCatdirsis $catdirsis)
    {
        $this->collCatdirses[]= $catdirsis;
        $catdirsis->setCatmodsis($this);
    }

    /**
     * @param  ChildCatdirsis $catdirsis The ChildCatdirsis object to remove.
     * @return $this|ChildCatmodsis The current object (for fluent API support)
     */
    public function removeCatdirsis(ChildCatdirsis $catdirsis)
    {
        if ($this->getCatdirses()->contains($catdirsis)) {
            $pos = $this->collCatdirses->search($catdirsis);
            $this->collCatdirses->remove($pos);
            if (null === $this->catdirsesScheduledForDeletion) {
                $this->catdirsesScheduledForDeletion = clone $this->collCatdirses;
                $this->catdirsesScheduledForDeletion->clear();
            }
            $this->catdirsesScheduledForDeletion[]= $catdirsis;
            $catdirsis->setCatmodsis(null);
        }

        return $this;
    }

    /**
     * Clears out the collRelperrols collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addRelperrols()
     */
    public function clearRelperrols()
    {
        $this->collRelperrols = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collRelperrols collection loaded partially.
     */
    public function resetPartialRelperrols($v = true)
    {
        $this->collRelperrolsPartial = $v;
    }

    /**
     * Initializes the collRelperrols collection.
     *
     * By default this just sets the collRelperrols collection to an empty array (like clearcollRelperrols());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRelperrols($overrideExisting = true)
    {
        if (null !== $this->collRelperrols && !$overrideExisting) {
            return;
        }

        $collectionClassName = RelperrolTableMap::getTableMap()->getCollectionClassName();

        $this->collRelperrols = new $collectionClassName;
        $this->collRelperrols->setModel('\Relperrol');
    }

    /**
     * Gets an array of ChildRelperrol objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCatmodsis is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildRelperrol[] List of ChildRelperrol objects
     * @throws PropelException
     */
    public function getRelperrols(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collRelperrolsPartial && !$this->isNew();
        if (null === $this->collRelperrols || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRelperrols) {
                // return empty collection
                $this->initRelperrols();
            } else {
                $collRelperrols = ChildRelperrolQuery::create(null, $criteria)
                    ->filterByCatmodsis($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collRelperrolsPartial && count($collRelperrols)) {
                        $this->initRelperrols(false);

                        foreach ($collRelperrols as $obj) {
                            if (false == $this->collRelperrols->contains($obj)) {
                                $this->collRelperrols->append($obj);
                            }
                        }

                        $this->collRelperrolsPartial = true;
                    }

                    return $collRelperrols;
                }

                if ($partial && $this->collRelperrols) {
                    foreach ($this->collRelperrols as $obj) {
                        if ($obj->isNew()) {
                            $collRelperrols[] = $obj;
                        }
                    }
                }

                $this->collRelperrols = $collRelperrols;
                $this->collRelperrolsPartial = false;
            }
        }

        return $this->collRelperrols;
    }

    /**
     * Sets a collection of ChildRelperrol objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $relperrols A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCatmodsis The current object (for fluent API support)
     */
    public function setRelperrols(Collection $relperrols, ConnectionInterface $con = null)
    {
        /** @var ChildRelperrol[] $relperrolsToDelete */
        $relperrolsToDelete = $this->getRelperrols(new Criteria(), $con)->diff($relperrols);


        $this->relperrolsScheduledForDeletion = $relperrolsToDelete;

        foreach ($relperrolsToDelete as $relperrolRemoved) {
            $relperrolRemoved->setCatmodsis(null);
        }

        $this->collRelperrols = null;
        foreach ($relperrols as $relperrol) {
            $this->addRelperrol($relperrol);
        }

        $this->collRelperrols = $relperrols;
        $this->collRelperrolsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Relperrol objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Relperrol objects.
     * @throws PropelException
     */
    public function countRelperrols(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collRelperrolsPartial && !$this->isNew();
        if (null === $this->collRelperrols || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRelperrols) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRelperrols());
            }

            $query = ChildRelperrolQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCatmodsis($this)
                ->count($con);
        }

        return count($this->collRelperrols);
    }

    /**
     * Method called to associate a ChildRelperrol object to this object
     * through the ChildRelperrol foreign key attribute.
     *
     * @param  ChildRelperrol $l ChildRelperrol
     * @return $this|\Catmodsis The current object (for fluent API support)
     */
    public function addRelperrol(ChildRelperrol $l)
    {
        if ($this->collRelperrols === null) {
            $this->initRelperrols();
            $this->collRelperrolsPartial = true;
        }

        if (!$this->collRelperrols->contains($l)) {
            $this->doAddRelperrol($l);

            if ($this->relperrolsScheduledForDeletion and $this->relperrolsScheduledForDeletion->contains($l)) {
                $this->relperrolsScheduledForDeletion->remove($this->relperrolsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildRelperrol $relperrol The ChildRelperrol object to add.
     */
    protected function doAddRelperrol(ChildRelperrol $relperrol)
    {
        $this->collRelperrols[]= $relperrol;
        $relperrol->setCatmodsis($this);
    }

    /**
     * @param  ChildRelperrol $relperrol The ChildRelperrol object to remove.
     * @return $this|ChildCatmodsis The current object (for fluent API support)
     */
    public function removeRelperrol(ChildRelperrol $relperrol)
    {
        if ($this->getRelperrols()->contains($relperrol)) {
            $pos = $this->collRelperrols->search($relperrol);
            $this->collRelperrols->remove($pos);
            if (null === $this->relperrolsScheduledForDeletion) {
                $this->relperrolsScheduledForDeletion = clone $this->collRelperrols;
                $this->relperrolsScheduledForDeletion->clear();
            }
            $this->relperrolsScheduledForDeletion[]= $relperrol;
            $relperrol->setCatmodsis(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Catmodsis is new, it will return
     * an empty collection; or if this Catmodsis has previously
     * been saved, it will retrieve related Relperrols from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Catmodsis.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildRelperrol[] List of ChildRelperrol objects
     */
    public function getRelperrolsJoinCatdirsis(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildRelperrolQuery::create(null, $criteria);
        $query->joinWith('Catdirsis', $joinBehavior);

        return $this->getRelperrols($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Catmodsis is new, it will return
     * an empty collection; or if this Catmodsis has previously
     * been saved, it will retrieve related Relperrols from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Catmodsis.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildRelperrol[] List of ChildRelperrol objects
     */
    public function getRelperrolsJoinCatentrol(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildRelperrolQuery::create(null, $criteria);
        $query->joinWith('Catentrol', $joinBehavior);

        return $this->getRelperrols($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->cvemodsis = null;
        $this->nommodsis = null;
        $this->dirmodsis = null;
        $this->icnmodsis = null;
        $this->ordmodsis = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collCatdirses) {
                foreach ($this->collCatdirses as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRelperrols) {
                foreach ($this->collRelperrols as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collCatdirses = null;
        $this->collRelperrols = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CatmodsisTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
