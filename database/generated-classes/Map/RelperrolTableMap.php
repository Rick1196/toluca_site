<?php

namespace Map;

use \Relperrol;
use \RelperrolQuery;
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
 * This class defines the structure of the 'relperrol' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class RelperrolTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.RelperrolTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'blogrodolfodb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'relperrol';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Relperrol';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Relperrol';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the cveperrol field
     */
    const COL_CVEPERROL = 'relperrol.cveperrol';

    /**
     * the column name for the cveentrol field
     */
    const COL_CVEENTROL = 'relperrol.cveentrol';

    /**
     * the column name for the cvemodsis field
     */
    const COL_CVEMODSIS = 'relperrol.cvemodsis';

    /**
     * the column name for the cvedirsis field
     */
    const COL_CVEDIRSIS = 'relperrol.cvedirsis';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'relperrol.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'relperrol.updated_at';

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
        self::TYPE_PHPNAME       => array('Cveperrol', 'Cveentrol', 'Cvemodsis', 'Cvedirsis', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('cveperrol', 'cveentrol', 'cvemodsis', 'cvedirsis', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(RelperrolTableMap::COL_CVEPERROL, RelperrolTableMap::COL_CVEENTROL, RelperrolTableMap::COL_CVEMODSIS, RelperrolTableMap::COL_CVEDIRSIS, RelperrolTableMap::COL_CREATED_AT, RelperrolTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('cveperrol', 'cveentrol', 'cvemodsis', 'cvedirsis', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Cveperrol' => 0, 'Cveentrol' => 1, 'Cvemodsis' => 2, 'Cvedirsis' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, ),
        self::TYPE_CAMELNAME     => array('cveperrol' => 0, 'cveentrol' => 1, 'cvemodsis' => 2, 'cvedirsis' => 3, 'createdAt' => 4, 'updatedAt' => 5, ),
        self::TYPE_COLNAME       => array(RelperrolTableMap::COL_CVEPERROL => 0, RelperrolTableMap::COL_CVEENTROL => 1, RelperrolTableMap::COL_CVEMODSIS => 2, RelperrolTableMap::COL_CVEDIRSIS => 3, RelperrolTableMap::COL_CREATED_AT => 4, RelperrolTableMap::COL_UPDATED_AT => 5, ),
        self::TYPE_FIELDNAME     => array('cveperrol' => 0, 'cveentrol' => 1, 'cvemodsis' => 2, 'cvedirsis' => 3, 'created_at' => 4, 'updated_at' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
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
        $this->setName('relperrol');
        $this->setPhpName('Relperrol');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Relperrol');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cveperrol', 'Cveperrol', 'INTEGER', true, 10, null);
        $this->addForeignKey('cveentrol', 'Cveentrol', 'INTEGER', 'catentrol', 'cveentrol', false, 10, null);
        $this->addForeignKey('cvemodsis', 'Cvemodsis', 'INTEGER', 'catmodsis', 'cvemodsis', false, 10, null);
        $this->addForeignKey('cvedirsis', 'Cvedirsis', 'INTEGER', 'catdirsis', 'cvedirsis', false, 10, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Catdirsis', '\\Catdirsis', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':cvedirsis',
    1 => ':cvedirsis',
  ),
), 'SET NULL', null, null, false);
        $this->addRelation('Catentrol', '\\Catentrol', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':cveentrol',
    1 => ':cveentrol',
  ),
), 'SET NULL', null, null, false);
        $this->addRelation('Catmodsis', '\\Catmodsis', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':cvemodsis',
    1 => ':cvemodsis',
  ),
), 'SET NULL', null, null, false);
    } // buildRelations()

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveperrol', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveperrol', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveperrol', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveperrol', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveperrol', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cveperrol', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Cveperrol', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? RelperrolTableMap::CLASS_DEFAULT : RelperrolTableMap::OM_CLASS;
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
     * @return array           (Relperrol object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = RelperrolTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = RelperrolTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + RelperrolTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RelperrolTableMap::OM_CLASS;
            /** @var Relperrol $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            RelperrolTableMap::addInstanceToPool($obj, $key);
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
            $key = RelperrolTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = RelperrolTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Relperrol $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RelperrolTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(RelperrolTableMap::COL_CVEPERROL);
            $criteria->addSelectColumn(RelperrolTableMap::COL_CVEENTROL);
            $criteria->addSelectColumn(RelperrolTableMap::COL_CVEMODSIS);
            $criteria->addSelectColumn(RelperrolTableMap::COL_CVEDIRSIS);
            $criteria->addSelectColumn(RelperrolTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(RelperrolTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.cveperrol');
            $criteria->addSelectColumn($alias . '.cveentrol');
            $criteria->addSelectColumn($alias . '.cvemodsis');
            $criteria->addSelectColumn($alias . '.cvedirsis');
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
        return Propel::getServiceContainer()->getDatabaseMap(RelperrolTableMap::DATABASE_NAME)->getTable(RelperrolTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(RelperrolTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(RelperrolTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new RelperrolTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Relperrol or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Relperrol object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(RelperrolTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Relperrol) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RelperrolTableMap::DATABASE_NAME);
            $criteria->add(RelperrolTableMap::COL_CVEPERROL, (array) $values, Criteria::IN);
        }

        $query = RelperrolQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            RelperrolTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                RelperrolTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the relperrol table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return RelperrolQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Relperrol or Criteria object.
     *
     * @param mixed               $criteria Criteria or Relperrol object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RelperrolTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Relperrol object
        }

        if ($criteria->containsKey(RelperrolTableMap::COL_CVEPERROL) && $criteria->keyContainsValue(RelperrolTableMap::COL_CVEPERROL) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RelperrolTableMap::COL_CVEPERROL.')');
        }


        // Set the correct dbName
        $query = RelperrolQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // RelperrolTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
RelperrolTableMap::buildTableMap();
