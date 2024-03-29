<?php

namespace Base;

use \Topics as ChildTopics;
use \TopicsQuery as ChildTopicsQuery;
use \Exception;
use \PDO;
use Map\TopicsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'topics' table.
 *
 *
 *
 * @method     ChildTopicsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildTopicsQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     ChildTopicsQuery orderByContext($order = Criteria::ASC) Order by the context column
 * @method     ChildTopicsQuery orderByIdUser($order = Criteria::ASC) Order by the id_user column
 * @method     ChildTopicsQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildTopicsQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildTopicsQuery groupById() Group by the id column
 * @method     ChildTopicsQuery groupByTitle() Group by the title column
 * @method     ChildTopicsQuery groupByContext() Group by the context column
 * @method     ChildTopicsQuery groupByIdUser() Group by the id_user column
 * @method     ChildTopicsQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildTopicsQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildTopicsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTopicsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTopicsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTopicsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTopicsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTopicsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTopicsQuery leftJoinForums($relationAlias = null) Adds a LEFT JOIN clause to the query using the Forums relation
 * @method     ChildTopicsQuery rightJoinForums($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Forums relation
 * @method     ChildTopicsQuery innerJoinForums($relationAlias = null) Adds a INNER JOIN clause to the query using the Forums relation
 *
 * @method     ChildTopicsQuery joinWithForums($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Forums relation
 *
 * @method     ChildTopicsQuery leftJoinWithForums() Adds a LEFT JOIN clause and with to the query using the Forums relation
 * @method     ChildTopicsQuery rightJoinWithForums() Adds a RIGHT JOIN clause and with to the query using the Forums relation
 * @method     ChildTopicsQuery innerJoinWithForums() Adds a INNER JOIN clause and with to the query using the Forums relation
 *
 * @method     ChildTopicsQuery leftJoinTbldenuncia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tbldenuncia relation
 * @method     ChildTopicsQuery rightJoinTbldenuncia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tbldenuncia relation
 * @method     ChildTopicsQuery innerJoinTbldenuncia($relationAlias = null) Adds a INNER JOIN clause to the query using the Tbldenuncia relation
 *
 * @method     ChildTopicsQuery joinWithTbldenuncia($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Tbldenuncia relation
 *
 * @method     ChildTopicsQuery leftJoinWithTbldenuncia() Adds a LEFT JOIN clause and with to the query using the Tbldenuncia relation
 * @method     ChildTopicsQuery rightJoinWithTbldenuncia() Adds a RIGHT JOIN clause and with to the query using the Tbldenuncia relation
 * @method     ChildTopicsQuery innerJoinWithTbldenuncia() Adds a INNER JOIN clause and with to the query using the Tbldenuncia relation
 *
 * @method     \ForumsQuery|\TbldenunciaQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTopics findOne(ConnectionInterface $con = null) Return the first ChildTopics matching the query
 * @method     ChildTopics findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTopics matching the query, or a new ChildTopics object populated from the query conditions when no match is found
 *
 * @method     ChildTopics findOneById(int $id) Return the first ChildTopics filtered by the id column
 * @method     ChildTopics findOneByTitle(string $title) Return the first ChildTopics filtered by the title column
 * @method     ChildTopics findOneByContext(string $context) Return the first ChildTopics filtered by the context column
 * @method     ChildTopics findOneByIdUser(int $id_user) Return the first ChildTopics filtered by the id_user column
 * @method     ChildTopics findOneByCreatedAt(string $created_at) Return the first ChildTopics filtered by the created_at column
 * @method     ChildTopics findOneByUpdatedAt(string $updated_at) Return the first ChildTopics filtered by the updated_at column *

 * @method     ChildTopics requirePk($key, ConnectionInterface $con = null) Return the ChildTopics by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTopics requireOne(ConnectionInterface $con = null) Return the first ChildTopics matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTopics requireOneById(int $id) Return the first ChildTopics filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTopics requireOneByTitle(string $title) Return the first ChildTopics filtered by the title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTopics requireOneByContext(string $context) Return the first ChildTopics filtered by the context column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTopics requireOneByIdUser(int $id_user) Return the first ChildTopics filtered by the id_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTopics requireOneByCreatedAt(string $created_at) Return the first ChildTopics filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTopics requireOneByUpdatedAt(string $updated_at) Return the first ChildTopics filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTopics[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTopics objects based on current ModelCriteria
 * @method     ChildTopics[]|ObjectCollection findById(int $id) Return ChildTopics objects filtered by the id column
 * @method     ChildTopics[]|ObjectCollection findByTitle(string $title) Return ChildTopics objects filtered by the title column
 * @method     ChildTopics[]|ObjectCollection findByContext(string $context) Return ChildTopics objects filtered by the context column
 * @method     ChildTopics[]|ObjectCollection findByIdUser(int $id_user) Return ChildTopics objects filtered by the id_user column
 * @method     ChildTopics[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildTopics objects filtered by the created_at column
 * @method     ChildTopics[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildTopics objects filtered by the updated_at column
 * @method     ChildTopics[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TopicsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TopicsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'blogrodolfodb', $modelName = '\\Topics', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTopicsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTopicsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTopicsQuery) {
            return $criteria;
        }
        $query = new ChildTopicsQuery();
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
     * @return ChildTopics|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TopicsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TopicsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTopics A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, title, context, id_user, created_at, updated_at FROM topics WHERE id = :p0';
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
            /** @var ChildTopics $obj */
            $obj = new ChildTopics();
            $obj->hydrate($row);
            TopicsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTopics|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TopicsTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TopicsTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TopicsTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TopicsTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TopicsTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%', Criteria::LIKE); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TopicsTableMap::COL_TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the context column
     *
     * Example usage:
     * <code>
     * $query->filterByContext('fooValue');   // WHERE context = 'fooValue'
     * $query->filterByContext('%fooValue%', Criteria::LIKE); // WHERE context LIKE '%fooValue%'
     * </code>
     *
     * @param     string $context The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByContext($context = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($context)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TopicsTableMap::COL_CONTEXT, $context, $comparison);
    }

    /**
     * Filter the query on the id_user column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUser(1234); // WHERE id_user = 1234
     * $query->filterByIdUser(array(12, 34)); // WHERE id_user IN (12, 34)
     * $query->filterByIdUser(array('min' => 12)); // WHERE id_user > 12
     * </code>
     *
     * @param     mixed $idUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByIdUser($idUser = null, $comparison = null)
    {
        if (is_array($idUser)) {
            $useMinMax = false;
            if (isset($idUser['min'])) {
                $this->addUsingAlias(TopicsTableMap::COL_ID_USER, $idUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUser['max'])) {
                $this->addUsingAlias(TopicsTableMap::COL_ID_USER, $idUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TopicsTableMap::COL_ID_USER, $idUser, $comparison);
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
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TopicsTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TopicsTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TopicsTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TopicsTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TopicsTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TopicsTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Forums object
     *
     * @param \Forums|ObjectCollection $forums the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByForums($forums, $comparison = null)
    {
        if ($forums instanceof \Forums) {
            return $this
                ->addUsingAlias(TopicsTableMap::COL_ID, $forums->getIdTopic(), $comparison);
        } elseif ($forums instanceof ObjectCollection) {
            return $this
                ->useForumsQuery()
                ->filterByPrimaryKeys($forums->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByForums() only accepts arguments of type \Forums or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Forums relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function joinForums($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Forums');

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
            $this->addJoinObject($join, 'Forums');
        }

        return $this;
    }

    /**
     * Use the Forums relation Forums object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ForumsQuery A secondary query class using the current class as primary query
     */
    public function useForumsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinForums($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Forums', '\ForumsQuery');
    }

    /**
     * Filter the query by a related \Tbldenuncia object
     *
     * @param \Tbldenuncia|ObjectCollection $tbldenuncia the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTopicsQuery The current query, for fluid interface
     */
    public function filterByTbldenuncia($tbldenuncia, $comparison = null)
    {
        if ($tbldenuncia instanceof \Tbldenuncia) {
            return $this
                ->addUsingAlias(TopicsTableMap::COL_ID, $tbldenuncia->getIdTopic(), $comparison);
        } elseif ($tbldenuncia instanceof ObjectCollection) {
            return $this
                ->useTbldenunciaQuery()
                ->filterByPrimaryKeys($tbldenuncia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTbldenuncia() only accepts arguments of type \Tbldenuncia or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tbldenuncia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function joinTbldenuncia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tbldenuncia');

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
            $this->addJoinObject($join, 'Tbldenuncia');
        }

        return $this;
    }

    /**
     * Use the Tbldenuncia relation Tbldenuncia object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TbldenunciaQuery A secondary query class using the current class as primary query
     */
    public function useTbldenunciaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTbldenuncia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tbldenuncia', '\TbldenunciaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTopics $topics Object to remove from the list of results
     *
     * @return $this|ChildTopicsQuery The current query, for fluid interface
     */
    public function prune($topics = null)
    {
        if ($topics) {
            $this->addUsingAlias(TopicsTableMap::COL_ID, $topics->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the topics table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TopicsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TopicsTableMap::clearInstancePool();
            TopicsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TopicsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TopicsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TopicsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TopicsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TopicsQuery
