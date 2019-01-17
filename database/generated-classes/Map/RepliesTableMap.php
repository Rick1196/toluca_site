<?php

namespace Map;

use \Replies;
use \RepliesQuery;
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
 * This class defines the structure of the 'replies' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class RepliesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.RepliesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'blogrodolfodb';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'replies';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Replies';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Replies';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the id field
     */
    const COL_ID = 'replies.id';

    /**
     * the column name for the id_forum field
     */
    const COL_ID_FORUM = 'replies.id_forum';

    /**
     * the column name for the content field
     */
    const COL_CONTENT = 'replies.content';

    /**
     * the column name for the nombre field
     */
    const COL_NOMBRE = 'replies.nombre';

    /**
     * the column name for the apellidos field
     */
    const COL_APELLIDOS = 'replies.apellidos';

    /**
     * the column name for the correo field
     */
    const COL_CORREO = 'replies.correo';

    /**
     * the column name for the id_topic field
     */
    const COL_ID_TOPIC = 'replies.id_topic';

    /**
     * the column name for the id_user field
     */
    const COL_ID_USER = 'replies.id_user';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'replies.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'replies.updated_at';

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
        self::TYPE_PHPNAME       => array('Id', 'IdForum', 'Content', 'Nombre', 'Apellidos', 'Correo', 'IdTopic', 'IdUser', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('id', 'idForum', 'content', 'nombre', 'apellidos', 'correo', 'idTopic', 'idUser', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(RepliesTableMap::COL_ID, RepliesTableMap::COL_ID_FORUM, RepliesTableMap::COL_CONTENT, RepliesTableMap::COL_NOMBRE, RepliesTableMap::COL_APELLIDOS, RepliesTableMap::COL_CORREO, RepliesTableMap::COL_ID_TOPIC, RepliesTableMap::COL_ID_USER, RepliesTableMap::COL_CREATED_AT, RepliesTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id', 'id_forum', 'content', 'nombre', 'apellidos', 'correo', 'id_topic', 'id_user', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'IdForum' => 1, 'Content' => 2, 'Nombre' => 3, 'Apellidos' => 4, 'Correo' => 5, 'IdTopic' => 6, 'IdUser' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'idForum' => 1, 'content' => 2, 'nombre' => 3, 'apellidos' => 4, 'correo' => 5, 'idTopic' => 6, 'idUser' => 7, 'createdAt' => 8, 'updatedAt' => 9, ),
        self::TYPE_COLNAME       => array(RepliesTableMap::COL_ID => 0, RepliesTableMap::COL_ID_FORUM => 1, RepliesTableMap::COL_CONTENT => 2, RepliesTableMap::COL_NOMBRE => 3, RepliesTableMap::COL_APELLIDOS => 4, RepliesTableMap::COL_CORREO => 5, RepliesTableMap::COL_ID_TOPIC => 6, RepliesTableMap::COL_ID_USER => 7, RepliesTableMap::COL_CREATED_AT => 8, RepliesTableMap::COL_UPDATED_AT => 9, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'id_forum' => 1, 'content' => 2, 'nombre' => 3, 'apellidos' => 4, 'correo' => 5, 'id_topic' => 6, 'id_user' => 7, 'created_at' => 8, 'updated_at' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $this->setName('replies');
        $this->setPhpName('Replies');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Replies');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignKey('id_forum', 'IdForum', 'INTEGER', 'forums', 'id', true, 10, null);
        $this->addColumn('content', 'Content', 'LONGVARCHAR', true, null, null);
        $this->addColumn('nombre', 'Nombre', 'VARCHAR', true, 255, null);
        $this->addColumn('apellidos', 'Apellidos', 'VARCHAR', true, 255, null);
        $this->addColumn('correo', 'Correo', 'VARCHAR', true, 255, null);
        $this->addColumn('id_topic', 'IdTopic', 'INTEGER', false, 10, null);
        $this->addColumn('id_user', 'IdUser', 'INTEGER', false, 10, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Forums', '\\Forums', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':id_forum',
    1 => ':id',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? RepliesTableMap::CLASS_DEFAULT : RepliesTableMap::OM_CLASS;
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
     * @return array           (Replies object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = RepliesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = RepliesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + RepliesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RepliesTableMap::OM_CLASS;
            /** @var Replies $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            RepliesTableMap::addInstanceToPool($obj, $key);
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
            $key = RepliesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = RepliesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Replies $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RepliesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(RepliesTableMap::COL_ID);
            $criteria->addSelectColumn(RepliesTableMap::COL_ID_FORUM);
            $criteria->addSelectColumn(RepliesTableMap::COL_CONTENT);
            $criteria->addSelectColumn(RepliesTableMap::COL_NOMBRE);
            $criteria->addSelectColumn(RepliesTableMap::COL_APELLIDOS);
            $criteria->addSelectColumn(RepliesTableMap::COL_CORREO);
            $criteria->addSelectColumn(RepliesTableMap::COL_ID_TOPIC);
            $criteria->addSelectColumn(RepliesTableMap::COL_ID_USER);
            $criteria->addSelectColumn(RepliesTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(RepliesTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_forum');
            $criteria->addSelectColumn($alias . '.content');
            $criteria->addSelectColumn($alias . '.nombre');
            $criteria->addSelectColumn($alias . '.apellidos');
            $criteria->addSelectColumn($alias . '.correo');
            $criteria->addSelectColumn($alias . '.id_topic');
            $criteria->addSelectColumn($alias . '.id_user');
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
        return Propel::getServiceContainer()->getDatabaseMap(RepliesTableMap::DATABASE_NAME)->getTable(RepliesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(RepliesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(RepliesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new RepliesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Replies or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Replies object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(RepliesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Replies) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RepliesTableMap::DATABASE_NAME);
            $criteria->add(RepliesTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = RepliesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            RepliesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                RepliesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the replies table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return RepliesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Replies or Criteria object.
     *
     * @param mixed               $criteria Criteria or Replies object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RepliesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Replies object
        }

        if ($criteria->containsKey(RepliesTableMap::COL_ID) && $criteria->keyContainsValue(RepliesTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RepliesTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = RepliesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // RepliesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
RepliesTableMap::buildTableMap();
