<?php

namespace Base;

use \Relperrol as ChildRelperrol;
use \RelperrolQuery as ChildRelperrolQuery;
use \Exception;
use \PDO;
use Map\RelperrolTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'relperrol' table.
 *
 *
 *
 * @method     ChildRelperrolQuery orderByCveperrol($order = Criteria::ASC) Order by the cveperrol column
 * @method     ChildRelperrolQuery orderByCveentrol($order = Criteria::ASC) Order by the cveentrol column
 * @method     ChildRelperrolQuery orderByCvemodsis($order = Criteria::ASC) Order by the cvemodsis column
 * @method     ChildRelperrolQuery orderByCvedirsis($order = Criteria::ASC) Order by the cvedirsis column
 * @method     ChildRelperrolQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildRelperrolQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildRelperrolQuery groupByCveperrol() Group by the cveperrol column
 * @method     ChildRelperrolQuery groupByCveentrol() Group by the cveentrol column
 * @method     ChildRelperrolQuery groupByCvemodsis() Group by the cvemodsis column
 * @method     ChildRelperrolQuery groupByCvedirsis() Group by the cvedirsis column
 * @method     ChildRelperrolQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildRelperrolQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildRelperrolQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRelperrolQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRelperrolQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRelperrolQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildRelperrolQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildRelperrolQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildRelperrolQuery leftJoinCatdirsis($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catdirsis relation
 * @method     ChildRelperrolQuery rightJoinCatdirsis($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catdirsis relation
 * @method     ChildRelperrolQuery innerJoinCatdirsis($relationAlias = null) Adds a INNER JOIN clause to the query using the Catdirsis relation
 *
 * @method     ChildRelperrolQuery joinWithCatdirsis($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catdirsis relation
 *
 * @method     ChildRelperrolQuery leftJoinWithCatdirsis() Adds a LEFT JOIN clause and with to the query using the Catdirsis relation
 * @method     ChildRelperrolQuery rightJoinWithCatdirsis() Adds a RIGHT JOIN clause and with to the query using the Catdirsis relation
 * @method     ChildRelperrolQuery innerJoinWithCatdirsis() Adds a INNER JOIN clause and with to the query using the Catdirsis relation
 *
 * @method     ChildRelperrolQuery leftJoinCatentrol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catentrol relation
 * @method     ChildRelperrolQuery rightJoinCatentrol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catentrol relation
 * @method     ChildRelperrolQuery innerJoinCatentrol($relationAlias = null) Adds a INNER JOIN clause to the query using the Catentrol relation
 *
 * @method     ChildRelperrolQuery joinWithCatentrol($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catentrol relation
 *
 * @method     ChildRelperrolQuery leftJoinWithCatentrol() Adds a LEFT JOIN clause and with to the query using the Catentrol relation
 * @method     ChildRelperrolQuery rightJoinWithCatentrol() Adds a RIGHT JOIN clause and with to the query using the Catentrol relation
 * @method     ChildRelperrolQuery innerJoinWithCatentrol() Adds a INNER JOIN clause and with to the query using the Catentrol relation
 *
 * @method     ChildRelperrolQuery leftJoinCatmodsis($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catmodsis relation
 * @method     ChildRelperrolQuery rightJoinCatmodsis($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catmodsis relation
 * @method     ChildRelperrolQuery innerJoinCatmodsis($relationAlias = null) Adds a INNER JOIN clause to the query using the Catmodsis relation
 *
 * @method     ChildRelperrolQuery joinWithCatmodsis($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catmodsis relation
 *
 * @method     ChildRelperrolQuery leftJoinWithCatmodsis() Adds a LEFT JOIN clause and with to the query using the Catmodsis relation
 * @method     ChildRelperrolQuery rightJoinWithCatmodsis() Adds a RIGHT JOIN clause and with to the query using the Catmodsis relation
 * @method     ChildRelperrolQuery innerJoinWithCatmodsis() Adds a INNER JOIN clause and with to the query using the Catmodsis relation
 *
 * @method     \CatdirsisQuery|\CatentrolQuery|\CatmodsisQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildRelperrol findOne(ConnectionInterface $con = null) Return the first ChildRelperrol matching the query
 * @method     ChildRelperrol findOneOrCreate(ConnectionInterface $con = null) Return the first ChildRelperrol matching the query, or a new ChildRelperrol object populated from the query conditions when no match is found
 *
 * @method     ChildRelperrol findOneByCveperrol(int $cveperrol) Return the first ChildRelperrol filtered by the cveperrol column
 * @method     ChildRelperrol findOneByCveentrol(int $cveentrol) Return the first ChildRelperrol filtered by the cveentrol column
 * @method     ChildRelperrol findOneByCvemodsis(int $cvemodsis) Return the first ChildRelperrol filtered by the cvemodsis column
 * @method     ChildRelperrol findOneByCvedirsis(int $cvedirsis) Return the first ChildRelperrol filtered by the cvedirsis column
 * @method     ChildRelperrol findOneByCreatedAt(string $created_at) Return the first ChildRelperrol filtered by the created_at column
 * @method     ChildRelperrol findOneByUpdatedAt(string $updated_at) Return the first ChildRelperrol filtered by the updated_at column *

 * @method     ChildRelperrol requirePk($key, ConnectionInterface $con = null) Return the ChildRelperrol by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRelperrol requireOne(ConnectionInterface $con = null) Return the first ChildRelperrol matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRelperrol requireOneByCveperrol(int $cveperrol) Return the first ChildRelperrol filtered by the cveperrol column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRelperrol requireOneByCveentrol(int $cveentrol) Return the first ChildRelperrol filtered by the cveentrol column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRelperrol requireOneByCvemodsis(int $cvemodsis) Return the first ChildRelperrol filtered by the cvemodsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRelperrol requireOneByCvedirsis(int $cvedirsis) Return the first ChildRelperrol filtered by the cvedirsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRelperrol requireOneByCreatedAt(string $created_at) Return the first ChildRelperrol filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRelperrol requireOneByUpdatedAt(string $updated_at) Return the first ChildRelperrol filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRelperrol[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildRelperrol objects based on current ModelCriteria
 * @method     ChildRelperrol[]|ObjectCollection findByCveperrol(int $cveperrol) Return ChildRelperrol objects filtered by the cveperrol column
 * @method     ChildRelperrol[]|ObjectCollection findByCveentrol(int $cveentrol) Return ChildRelperrol objects filtered by the cveentrol column
 * @method     ChildRelperrol[]|ObjectCollection findByCvemodsis(int $cvemodsis) Return ChildRelperrol objects filtered by the cvemodsis column
 * @method     ChildRelperrol[]|ObjectCollection findByCvedirsis(int $cvedirsis) Return ChildRelperrol objects filtered by the cvedirsis column
 * @method     ChildRelperrol[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildRelperrol objects filtered by the created_at column
 * @method     ChildRelperrol[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildRelperrol objects filtered by the updated_at column
 * @method     ChildRelperrol[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class RelperrolQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RelperrolQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'blogrodolfodb', $modelName = '\\Relperrol', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRelperrolQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRelperrolQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildRelperrolQuery) {
            return $criteria;
        }
        $query = new ChildRelperrolQuery();
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
     * @return ChildRelperrol|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(RelperrolTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = RelperrolTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildRelperrol A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT cveperrol, cveentrol, cvemodsis, cvedirsis, created_at, updated_at FROM relperrol WHERE cveperrol = :p0';
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
            /** @var ChildRelperrol $obj */
            $obj = new ChildRelperrol();
            $obj->hydrate($row);
            RelperrolTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildRelperrol|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RelperrolTableMap::COL_CVEPERROL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RelperrolTableMap::COL_CVEPERROL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cveperrol column
     *
     * Example usage:
     * <code>
     * $query->filterByCveperrol(1234); // WHERE cveperrol = 1234
     * $query->filterByCveperrol(array(12, 34)); // WHERE cveperrol IN (12, 34)
     * $query->filterByCveperrol(array('min' => 12)); // WHERE cveperrol > 12
     * </code>
     *
     * @param     mixed $cveperrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCveperrol($cveperrol = null, $comparison = null)
    {
        if (is_array($cveperrol)) {
            $useMinMax = false;
            if (isset($cveperrol['min'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEPERROL, $cveperrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cveperrol['max'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEPERROL, $cveperrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelperrolTableMap::COL_CVEPERROL, $cveperrol, $comparison);
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
     * @see       filterByCatentrol()
     *
     * @param     mixed $cveentrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCveentrol($cveentrol = null, $comparison = null)
    {
        if (is_array($cveentrol)) {
            $useMinMax = false;
            if (isset($cveentrol['min'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEENTROL, $cveentrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cveentrol['max'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEENTROL, $cveentrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelperrolTableMap::COL_CVEENTROL, $cveentrol, $comparison);
    }

    /**
     * Filter the query on the cvemodsis column
     *
     * Example usage:
     * <code>
     * $query->filterByCvemodsis(1234); // WHERE cvemodsis = 1234
     * $query->filterByCvemodsis(array(12, 34)); // WHERE cvemodsis IN (12, 34)
     * $query->filterByCvemodsis(array('min' => 12)); // WHERE cvemodsis > 12
     * </code>
     *
     * @see       filterByCatmodsis()
     *
     * @param     mixed $cvemodsis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCvemodsis($cvemodsis = null, $comparison = null)
    {
        if (is_array($cvemodsis)) {
            $useMinMax = false;
            if (isset($cvemodsis['min'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEMODSIS, $cvemodsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cvemodsis['max'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEMODSIS, $cvemodsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelperrolTableMap::COL_CVEMODSIS, $cvemodsis, $comparison);
    }

    /**
     * Filter the query on the cvedirsis column
     *
     * Example usage:
     * <code>
     * $query->filterByCvedirsis(1234); // WHERE cvedirsis = 1234
     * $query->filterByCvedirsis(array(12, 34)); // WHERE cvedirsis IN (12, 34)
     * $query->filterByCvedirsis(array('min' => 12)); // WHERE cvedirsis > 12
     * </code>
     *
     * @see       filterByCatdirsis()
     *
     * @param     mixed $cvedirsis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCvedirsis($cvedirsis = null, $comparison = null)
    {
        if (is_array($cvedirsis)) {
            $useMinMax = false;
            if (isset($cvedirsis['min'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEDIRSIS, $cvedirsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cvedirsis['max'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CVEDIRSIS, $cvedirsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelperrolTableMap::COL_CVEDIRSIS, $cvedirsis, $comparison);
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
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelperrolTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(RelperrolTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelperrolTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Catdirsis object
     *
     * @param \Catdirsis|ObjectCollection $catdirsis The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCatdirsis($catdirsis, $comparison = null)
    {
        if ($catdirsis instanceof \Catdirsis) {
            return $this
                ->addUsingAlias(RelperrolTableMap::COL_CVEDIRSIS, $catdirsis->getCvedirsis(), $comparison);
        } elseif ($catdirsis instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelperrolTableMap::COL_CVEDIRSIS, $catdirsis->toKeyValue('PrimaryKey', 'Cvedirsis'), $comparison);
        } else {
            throw new PropelException('filterByCatdirsis() only accepts arguments of type \Catdirsis or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Catdirsis relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function joinCatdirsis($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Catdirsis');

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
            $this->addJoinObject($join, 'Catdirsis');
        }

        return $this;
    }

    /**
     * Use the Catdirsis relation Catdirsis object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CatdirsisQuery A secondary query class using the current class as primary query
     */
    public function useCatdirsisQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCatdirsis($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Catdirsis', '\CatdirsisQuery');
    }

    /**
     * Filter the query by a related \Catentrol object
     *
     * @param \Catentrol|ObjectCollection $catentrol The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCatentrol($catentrol, $comparison = null)
    {
        if ($catentrol instanceof \Catentrol) {
            return $this
                ->addUsingAlias(RelperrolTableMap::COL_CVEENTROL, $catentrol->getCveentrol(), $comparison);
        } elseif ($catentrol instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelperrolTableMap::COL_CVEENTROL, $catentrol->toKeyValue('PrimaryKey', 'Cveentrol'), $comparison);
        } else {
            throw new PropelException('filterByCatentrol() only accepts arguments of type \Catentrol or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Catentrol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function joinCatentrol($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Catentrol');

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
            $this->addJoinObject($join, 'Catentrol');
        }

        return $this;
    }

    /**
     * Use the Catentrol relation Catentrol object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CatentrolQuery A secondary query class using the current class as primary query
     */
    public function useCatentrolQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCatentrol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Catentrol', '\CatentrolQuery');
    }

    /**
     * Filter the query by a related \Catmodsis object
     *
     * @param \Catmodsis|ObjectCollection $catmodsis The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRelperrolQuery The current query, for fluid interface
     */
    public function filterByCatmodsis($catmodsis, $comparison = null)
    {
        if ($catmodsis instanceof \Catmodsis) {
            return $this
                ->addUsingAlias(RelperrolTableMap::COL_CVEMODSIS, $catmodsis->getCvemodsis(), $comparison);
        } elseif ($catmodsis instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelperrolTableMap::COL_CVEMODSIS, $catmodsis->toKeyValue('PrimaryKey', 'Cvemodsis'), $comparison);
        } else {
            throw new PropelException('filterByCatmodsis() only accepts arguments of type \Catmodsis or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Catmodsis relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function joinCatmodsis($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Catmodsis');

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
            $this->addJoinObject($join, 'Catmodsis');
        }

        return $this;
    }

    /**
     * Use the Catmodsis relation Catmodsis object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CatmodsisQuery A secondary query class using the current class as primary query
     */
    public function useCatmodsisQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCatmodsis($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Catmodsis', '\CatmodsisQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildRelperrol $relperrol Object to remove from the list of results
     *
     * @return $this|ChildRelperrolQuery The current query, for fluid interface
     */
    public function prune($relperrol = null)
    {
        if ($relperrol) {
            $this->addUsingAlias(RelperrolTableMap::COL_CVEPERROL, $relperrol->getCveperrol(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the relperrol table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RelperrolTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RelperrolTableMap::clearInstancePool();
            RelperrolTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(RelperrolTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(RelperrolTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            RelperrolTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            RelperrolTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // RelperrolQuery
