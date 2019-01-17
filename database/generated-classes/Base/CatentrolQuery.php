<?php

namespace Base;

use \Catentrol as ChildCatentrol;
use \CatentrolQuery as ChildCatentrolQuery;
use \Exception;
use \PDO;
use Map\CatentrolTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'catentrol' table.
 *
 *
 *
 * @method     ChildCatentrolQuery orderByCveentrol($order = Criteria::ASC) Order by the cveentrol column
 * @method     ChildCatentrolQuery orderByNomentrol($order = Criteria::ASC) Order by the nomentrol column
 * @method     ChildCatentrolQuery orderByDesentrol($order = Criteria::ASC) Order by the desentrol column
 * @method     ChildCatentrolQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildCatentrolQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildCatentrolQuery groupByCveentrol() Group by the cveentrol column
 * @method     ChildCatentrolQuery groupByNomentrol() Group by the nomentrol column
 * @method     ChildCatentrolQuery groupByDesentrol() Group by the desentrol column
 * @method     ChildCatentrolQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildCatentrolQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildCatentrolQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCatentrolQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCatentrolQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCatentrolQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCatentrolQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCatentrolQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCatentrolQuery leftJoinRelperrol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relperrol relation
 * @method     ChildCatentrolQuery rightJoinRelperrol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relperrol relation
 * @method     ChildCatentrolQuery innerJoinRelperrol($relationAlias = null) Adds a INNER JOIN clause to the query using the Relperrol relation
 *
 * @method     ChildCatentrolQuery joinWithRelperrol($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Relperrol relation
 *
 * @method     ChildCatentrolQuery leftJoinWithRelperrol() Adds a LEFT JOIN clause and with to the query using the Relperrol relation
 * @method     ChildCatentrolQuery rightJoinWithRelperrol() Adds a RIGHT JOIN clause and with to the query using the Relperrol relation
 * @method     ChildCatentrolQuery innerJoinWithRelperrol() Adds a INNER JOIN clause and with to the query using the Relperrol relation
 *
 * @method     ChildCatentrolQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method     ChildCatentrolQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method     ChildCatentrolQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method     ChildCatentrolQuery joinWithUsers($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Users relation
 *
 * @method     ChildCatentrolQuery leftJoinWithUsers() Adds a LEFT JOIN clause and with to the query using the Users relation
 * @method     ChildCatentrolQuery rightJoinWithUsers() Adds a RIGHT JOIN clause and with to the query using the Users relation
 * @method     ChildCatentrolQuery innerJoinWithUsers() Adds a INNER JOIN clause and with to the query using the Users relation
 *
 * @method     \RelperrolQuery|\UsersQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCatentrol findOne(ConnectionInterface $con = null) Return the first ChildCatentrol matching the query
 * @method     ChildCatentrol findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCatentrol matching the query, or a new ChildCatentrol object populated from the query conditions when no match is found
 *
 * @method     ChildCatentrol findOneByCveentrol(int $cveentrol) Return the first ChildCatentrol filtered by the cveentrol column
 * @method     ChildCatentrol findOneByNomentrol(string $nomentrol) Return the first ChildCatentrol filtered by the nomentrol column
 * @method     ChildCatentrol findOneByDesentrol(string $desentrol) Return the first ChildCatentrol filtered by the desentrol column
 * @method     ChildCatentrol findOneByCreatedAt(string $created_at) Return the first ChildCatentrol filtered by the created_at column
 * @method     ChildCatentrol findOneByUpdatedAt(string $updated_at) Return the first ChildCatentrol filtered by the updated_at column *

 * @method     ChildCatentrol requirePk($key, ConnectionInterface $con = null) Return the ChildCatentrol by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentrol requireOne(ConnectionInterface $con = null) Return the first ChildCatentrol matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatentrol requireOneByCveentrol(int $cveentrol) Return the first ChildCatentrol filtered by the cveentrol column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentrol requireOneByNomentrol(string $nomentrol) Return the first ChildCatentrol filtered by the nomentrol column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentrol requireOneByDesentrol(string $desentrol) Return the first ChildCatentrol filtered by the desentrol column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentrol requireOneByCreatedAt(string $created_at) Return the first ChildCatentrol filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatentrol requireOneByUpdatedAt(string $updated_at) Return the first ChildCatentrol filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatentrol[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCatentrol objects based on current ModelCriteria
 * @method     ChildCatentrol[]|ObjectCollection findByCveentrol(int $cveentrol) Return ChildCatentrol objects filtered by the cveentrol column
 * @method     ChildCatentrol[]|ObjectCollection findByNomentrol(string $nomentrol) Return ChildCatentrol objects filtered by the nomentrol column
 * @method     ChildCatentrol[]|ObjectCollection findByDesentrol(string $desentrol) Return ChildCatentrol objects filtered by the desentrol column
 * @method     ChildCatentrol[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildCatentrol objects filtered by the created_at column
 * @method     ChildCatentrol[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildCatentrol objects filtered by the updated_at column
 * @method     ChildCatentrol[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CatentrolQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CatentrolQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'blogrodolfodb', $modelName = '\\Catentrol', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCatentrolQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCatentrolQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCatentrolQuery) {
            return $criteria;
        }
        $query = new ChildCatentrolQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCatentrol|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CatentrolTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CatentrolTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCatentrol A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT cveentrol, nomentrol, desentrol, created_at, updated_at FROM catentrol WHERE cveentrol = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCatentrol $obj */
            $obj = new ChildCatentrol();
            $obj->hydrate($row);
            CatentrolTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCatentrol|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cveentrol column
     *
     * Example usage:
     * <code>
     * $query->filterByCveentrol(1234); // WHERE cveentrol = 1234
     * $query->filterByCveentrol(array(12, 34)); // WHERE cveentrol IN (12, 34)
     * $query->filterByCveentrol(array('min' => 12)); // WHERE cveentrol > 12
     * </code>
     *
     * @param     mixed $cveentrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByCveentrol($cveentrol = null, $comparison = null)
    {
        if (is_array($cveentrol)) {
            $useMinMax = false;
            if (isset($cveentrol['min'])) {
                $this->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $cveentrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cveentrol['max'])) {
                $this->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $cveentrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $cveentrol, $comparison);
    }

    /**
     * Filter the query on the nomentrol column
     *
     * Example usage:
     * <code>
     * $query->filterByNomentrol('fooValue');   // WHERE nomentrol = 'fooValue'
     * $query->filterByNomentrol('%fooValue%', Criteria::LIKE); // WHERE nomentrol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomentrol The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByNomentrol($nomentrol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomentrol)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentrolTableMap::COL_NOMENTROL, $nomentrol, $comparison);
    }

    /**
     * Filter the query on the desentrol column
     *
     * Example usage:
     * <code>
     * $query->filterByDesentrol('fooValue');   // WHERE desentrol = 'fooValue'
     * $query->filterByDesentrol('%fooValue%', Criteria::LIKE); // WHERE desentrol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desentrol The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByDesentrol($desentrol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desentrol)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentrolTableMap::COL_DESENTROL, $desentrol, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CatentrolTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CatentrolTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentrolTableMap::COL_CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CatentrolTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CatentrolTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatentrolTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Relperrol object
     *
     * @param \Relperrol|ObjectCollection $relperrol the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByRelperrol($relperrol, $comparison = null)
    {
        if ($relperrol instanceof \Relperrol) {
            return $this
                ->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $relperrol->getCveentrol(), $comparison);
        } elseif ($relperrol instanceof ObjectCollection) {
            return $this
                ->useRelperrolQuery()
                ->filterByPrimaryKeys($relperrol->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRelperrol() only accepts arguments of type \Relperrol or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Relperrol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function joinRelperrol($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Relperrol');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Relperrol');
        }

        return $this;
    }

    /**
     * Use the Relperrol relation Relperrol object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \RelperrolQuery A secondary query class using the current class as primary query
     */
    public function useRelperrolQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRelperrol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Relperrol', '\RelperrolQuery');
    }

    /**
     * Filter the query by a related \Users object
     *
     * @param \Users|ObjectCollection $users the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCatentrolQuery The current query, for fluid interface
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof \Users) {
            return $this
                ->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $users->getCveentrol(), $comparison);
        } elseif ($users instanceof ObjectCollection) {
            return $this
                ->useUsersQuery()
                ->filterByPrimaryKeys($users->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsers() only accepts arguments of type \Users or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Users relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function joinUsers($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Users');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Users');
        }

        return $this;
    }

    /**
     * Use the Users relation Users object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UsersQuery A secondary query class using the current class as primary query
     */
    public function useUsersQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Users', '\UsersQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCatentrol $catentrol Object to remove from the list of results
     *
     * @return $this|ChildCatentrolQuery The current query, for fluid interface
     */
    public function prune($catentrol = null)
    {
        if ($catentrol) {
            $this->addUsingAlias(CatentrolTableMap::COL_CVEENTROL, $catentrol->getCveentrol(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the catentrol table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatentrolTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CatentrolTableMap::clearInstancePool();
            CatentrolTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatentrolTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CatentrolTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CatentrolTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CatentrolTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CatentrolQuery
