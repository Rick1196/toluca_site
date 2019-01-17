<?php

namespace Map;

use \Catentrol;
use \CatentrolQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'catentrol' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CatentrolTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CatentrolTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'blogrodolfodb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'catentrol';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Catentrol';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Catentrol';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the cveentrol field
     */
    const COL_CVEENTROL = 'catentrol.cveentrol';

    /**
     * the column name for the nomentrol field
     */
    const COL_NOMENTROL = 'catentrol.nomentrol';

    /**
     * the column name for the desentrol field
     */
    const COL_DESENTROL = 'catentrol.desentrol';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'catentrol.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'catentrol.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Cveentrol', 'Nomentrol', 'Desentrol', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('cveentrol', 'nomentrol', 'desentrol', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(CatentrolTableMap::COL_CVEENTROL, CatentrolTableMap::COL_NOMENTROL, CatentrolTableMap::COL_DESENTROL, CatentrolTableMap::COL_CREATED_AT, CatentrolTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('cveentrol', 'nomentrol', 'desentrol', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Cveentrol' => 0, 'Nomentrol' => 1, 'Desentrol' => 2, 'CreatedAt' => 3, 'UpdatedAt' => 4, ),
        self::TYPE_CAMELNAME     => array('cveentrol' => 0, 'nomentrol' => 1, 'desentrol' => 2, 'createdAt' => 3, 'updatedAt' => 4, ),
        self::TYPE_COLNAME       => array(CatentrolTableMap::COL_CVEENTROL => 0, CatentrolTableMap::COL_NOMENTROL => 1, CatentrolTableMap::COL_DESENTROL => 2, CatentrolTableMap::COL_CREATED_AT => 3, CatentrolTableMap::COL_UPDATED_AT => 4, ),
        self::TYPE_FIELDNAME     => array('cveentrol' => 0, 'nomentrol' => 1, 'desentrol' => 2, 'created_at' => 3, 'updated_at' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('catentrol');
        $this->setPhpName('Catentrol');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Catentrol');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cveentrol', 'Cveentrol', 'INTEGER', true, 10, null);
        $this->addColumn('nomentrol', 'Nomentrol', 'VARCHAR', true, 120, null);
        $this->addColumn('desentrol', 'Desentrol', 'VARCHAR', true, 250, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Relperrol', '\\Relperrol', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':cveentrol',
    1 => ':cveentrol',
  ),
), 'SET NULL', null, 'Relperrols', false);
        $this->addRelation('Users', '\\Users', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':cveentrol',
    1 => ':cveentrol',
  ),
), null, null, 'Userss', false);
    } // buildRelations()
    /**
     * Method to invalidate the instance pool of all tables related to catentrol     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RelperrolTableMap::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveentrol', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveentrol', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveentrol', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveentrol', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveentrol', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveentrol', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Cveentrol', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? CatentrolTableMap::CLASS_DEFAULT : CatentrolTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Catentrol object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CatentrolTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CatentrolTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CatentrolTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CatentrolTableMap::OM_CLASS;
            /** @var Catentrol $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CatentrolTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = CatentrolTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CatentrolTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Catentrol $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CatentrolTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CatentrolTableMap::COL_CVEENTROL);
            $criteria->addSelectColumn(CatentrolTableMap::COL_NOMENTROL);
            $criteria->addSelectColumn(CatentrolTableMap::COL_DESENTROL);
            $criteria->addSelectColumn(CatentrolTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(CatentrolTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.cveentrol');
            $criteria->addSelectColumn($alias . '.nomentrol');
            $criteria->addSelectColumn($alias . '.desentrol');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(CatentrolTableMap::DATABASE_NAME)->getTable(CatentrolTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CatentrolTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CatentrolTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CatentrolTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Catentrol or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Catentrol object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatentrolTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Catentrol) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CatentrolTableMap::DATABASE_NAME);
            $criteria->add(CatentrolTableMap::COL_CVEENTROL, (array) $values, Criteria::IN);
        }

        $query = CatentrolQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CatentrolTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CatentrolTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the catentrol table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CatentrolQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Catentrol or Criteria object.
     *
     * @param mixed               $criteria Criteria or Catentrol object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatentrolTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Catentrol object
        }

        if ($criteria->containsKey(CatentrolTableMap::COL_CVEENTROL) && $criteria->keyContainsValue(CatentrolTableMap::COL_CVEENTROL) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CatentrolTableMap::COL_CVEENTROL.')');
        }


        // Set the correct dbName
        $query = CatentrolQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CatentrolTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CatentrolTableMap::buildTableMap();
