<?php

namespace Map;

use \Catmodsis;
use \CatmodsisQuery;
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
 * This class defines the structure of the 'catmodsis' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CatmodsisTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CatmodsisTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'blogrodolfodb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'catmodsis';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Catmodsis';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Catmodsis';

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
     * the column name for the cvemodsis field
     */
    const COL_CVEMODSIS = 'catmodsis.cvemodsis';

    /**
     * the column name for the nommodsis field
     */
    const COL_NOMMODSIS = 'catmodsis.nommodsis';

    /**
     * the column name for the dirmodsis field
     */
    const COL_DIRMODSIS = 'catmodsis.dirmodsis';

    /**
     * the column name for the icnmodsis field
     */
    const COL_ICNMODSIS = 'catmodsis.icnmodsis';

    /**
     * the column name for the ordmodsis field
     */
    const COL_ORDMODSIS = 'catmodsis.ordmodsis';

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
        self::TYPE_PHPNAME       => array('Cvemodsis', 'Nommodsis', 'Dirmodsis', 'Icnmodsis', 'Ordmodsis', ),
        self::TYPE_CAMELNAME     => array('cvemodsis', 'nommodsis', 'dirmodsis', 'icnmodsis', 'ordmodsis', ),
        self::TYPE_COLNAME       => array(CatmodsisTableMap::COL_CVEMODSIS, CatmodsisTableMap::COL_NOMMODSIS, CatmodsisTableMap::COL_DIRMODSIS, CatmodsisTableMap::COL_ICNMODSIS, CatmodsisTableMap::COL_ORDMODSIS, ),
        self::TYPE_FIELDNAME     => array('cvemodsis', 'nommodsis', 'dirmodsis', 'icnmodsis', 'ordmodsis', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Cvemodsis' => 0, 'Nommodsis' => 1, 'Dirmodsis' => 2, 'Icnmodsis' => 3, 'Ordmodsis' => 4, ),
        self::TYPE_CAMELNAME     => array('cvemodsis' => 0, 'nommodsis' => 1, 'dirmodsis' => 2, 'icnmodsis' => 3, 'ordmodsis' => 4, ),
        self::TYPE_COLNAME       => array(CatmodsisTableMap::COL_CVEMODSIS => 0, CatmodsisTableMap::COL_NOMMODSIS => 1, CatmodsisTableMap::COL_DIRMODSIS => 2, CatmodsisTableMap::COL_ICNMODSIS => 3, CatmodsisTableMap::COL_ORDMODSIS => 4, ),
        self::TYPE_FIELDNAME     => array('cvemodsis' => 0, 'nommodsis' => 1, 'dirmodsis' => 2, 'icnmodsis' => 3, 'ordmodsis' => 4, ),
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
        $this->setName('catmodsis');
        $this->setPhpName('Catmodsis');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Catmodsis');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cvemodsis', 'Cvemodsis', 'INTEGER', true, 10, null);
        $this->addColumn('nommodsis', 'Nommodsis', 'VARCHAR', true, 50, null);
        $this->addColumn('dirmodsis', 'Dirmodsis', 'VARCHAR', true, 100, null);
        $this->addColumn('icnmodsis', 'Icnmodsis', 'VARCHAR', true, 30, null);
        $this->addColumn('ordmodsis', 'Ordmodsis', 'INTEGER', true, 10, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Catdirsis', '\\Catdirsis', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':cvemodsis',
    1 => ':cvemodsis',
  ),
), 'SET NULL', null, 'Catdirses', false);
        $this->addRelation('Relperrol', '\\Relperrol', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':cvemodsis',
    1 => ':cvemodsis',
  ),
), 'SET NULL', null, 'Relperrols', false);
    } // buildRelations()
    /**
     * Method to invalidate the instance pool of all tables related to catmodsis     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CatdirsisTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Cvemodsis', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CatmodsisTableMap::CLASS_DEFAULT : CatmodsisTableMap::OM_CLASS;
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
     * @return array           (Catmodsis object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CatmodsisTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CatmodsisTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CatmodsisTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CatmodsisTableMap::OM_CLASS;
            /** @var Catmodsis $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CatmodsisTableMap::addInstanceToPool($obj, $key);
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
            $key = CatmodsisTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CatmodsisTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Catmodsis $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CatmodsisTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CatmodsisTableMap::COL_CVEMODSIS);
            $criteria->addSelectColumn(CatmodsisTableMap::COL_NOMMODSIS);
            $criteria->addSelectColumn(CatmodsisTableMap::COL_DIRMODSIS);
            $criteria->addSelectColumn(CatmodsisTableMap::COL_ICNMODSIS);
            $criteria->addSelectColumn(CatmodsisTableMap::COL_ORDMODSIS);
        } else {
            $criteria->addSelectColumn($alias . '.cvemodsis');
            $criteria->addSelectColumn($alias . '.nommodsis');
            $criteria->addSelectColumn($alias . '.dirmodsis');
            $criteria->addSelectColumn($alias . '.icnmodsis');
            $criteria->addSelectColumn($alias . '.ordmodsis');
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
        return Propel::getServiceContainer()->getDatabaseMap(CatmodsisTableMap::DATABASE_NAME)->getTable(CatmodsisTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CatmodsisTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CatmodsisTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CatmodsisTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Catmodsis or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Catmodsis object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Catmodsis) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CatmodsisTableMap::DATABASE_NAME);
            $criteria->add(CatmodsisTableMap::COL_CVEMODSIS, (array) $values, Criteria::IN);
        }

        $query = CatmodsisQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CatmodsisTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CatmodsisTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the catmodsis table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CatmodsisQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Catmodsis or Criteria object.
     *
     * @param mixed               $criteria Criteria or Catmodsis object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Catmodsis object
        }

        if ($criteria->containsKey(CatmodsisTableMap::COL_CVEMODSIS) && $criteria->keyContainsValue(CatmodsisTableMap::COL_CVEMODSIS) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CatmodsisTableMap::COL_CVEMODSIS.')');
        }


        // Set the correct dbName
        $query = CatmodsisQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CatmodsisTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CatmodsisTableMap::buildTableMap();
