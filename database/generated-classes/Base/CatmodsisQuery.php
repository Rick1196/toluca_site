<?php

namespace Base;

use \Catmodsis as ChildCatmodsis;
use \CatmodsisQuery as ChildCatmodsisQuery;
use \Exception;
use \PDO;
use Map\CatmodsisTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'catmodsis' table.
 *
 *
 *
 * @method     ChildCatmodsisQuery orderByCvemodsis($order = Criteria::ASC) Order by the cvemodsis column
 * @method     ChildCatmodsisQuery orderByNommodsis($order = Criteria::ASC) Order by the nommodsis column
 * @method     ChildCatmodsisQuery orderByDirmodsis($order = Criteria::ASC) Order by the dirmodsis column
 * @method     ChildCatmodsisQuery orderByIcnmodsis($order = Criteria::ASC) Order by the icnmodsis column
 * @method     ChildCatmodsisQuery orderByOrdmodsis($order = Criteria::ASC) Order by the ordmodsis column
 *
 * @method     ChildCatmodsisQuery groupByCvemodsis() Group by the cvemodsis column
 * @method     ChildCatmodsisQuery groupByNommodsis() Group by the nommodsis column
 * @method     ChildCatmodsisQuery groupByDirmodsis() Group by the dirmodsis column
 * @method     ChildCatmodsisQuery groupByIcnmodsis() Group by the icnmodsis column
 * @method     ChildCatmodsisQuery groupByOrdmodsis() Group by the ordmodsis column
 *
 * @method     ChildCatmodsisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCatmodsisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCatmodsisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCatmodsisQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCatmodsisQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCatmodsisQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCatmodsisQuery leftJoinCatdirsis($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catdirsis relation
 * @method     ChildCatmodsisQuery rightJoinCatdirsis($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catdirsis relation
 * @method     ChildCatmodsisQuery innerJoinCatdirsis($relationAlias = null) Adds a INNER JOIN clause to the query using the Catdirsis relation
 *
 * @method     ChildCatmodsisQuery joinWithCatdirsis($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catdirsis relation
 *
 * @method     ChildCatmodsisQuery leftJoinWithCatdirsis() Adds a LEFT JOIN clause and with to the query using the Catdirsis relation
 * @method     ChildCatmodsisQuery rightJoinWithCatdirsis() Adds a RIGHT JOIN clause and with to the query using the Catdirsis relation
 * @method     ChildCatmodsisQuery innerJoinWithCatdirsis() Adds a INNER JOIN clause and with to the query using the Catdirsis relation
 *
 * @method     ChildCatmodsisQuery leftJoinRelperrol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relperrol relation
 * @method     ChildCatmodsisQuery rightJoinRelperrol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relperrol relation
 * @method     ChildCatmodsisQuery innerJoinRelperrol($relationAlias = null) Adds a INNER JOIN clause to the query using the Relperrol relation
 *
 * @method     ChildCatmodsisQuery joinWithRelperrol($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Relperrol relation
 *
 * @method     ChildCatmodsisQuery leftJoinWithRelperrol() Adds a LEFT JOIN clause and with to the query using the Relperrol relation
 * @method     ChildCatmodsisQuery rightJoinWithRelperrol() Adds a RIGHT JOIN clause and with to the query using the Relperrol relation
 * @method     ChildCatmodsisQuery innerJoinWithRelperrol() Adds a INNER JOIN clause and with to the query using the Relperrol relation
 *
 * @method     \CatdirsisQuery|\RelperrolQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCatmodsis findOne(ConnectionInterface $con = null) Return the first ChildCatmodsis matching the query
 * @method     ChildCatmodsis findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCatmodsis matching the query, or a new ChildCatmodsis object populated from the query conditions when no match is found
 *
 * @method     ChildCatmodsis findOneByCvemodsis(int $cvemodsis) Return the first ChildCatmodsis filtered by the cvemodsis column
 * @method     ChildCatmodsis findOneByNommodsis(string $nommodsis) Return the first ChildCatmodsis filtered by the nommodsis column
 * @method     ChildCatmodsis findOneByDirmodsis(string $dirmodsis) Return the first ChildCatmodsis filtered by the dirmodsis column
 * @method     ChildCatmodsis findOneByIcnmodsis(string $icnmodsis) Return the first ChildCatmodsis filtered by the icnmodsis column
 * @method     ChildCatmodsis findOneByOrdmodsis(int $ordmodsis) Return the first ChildCatmodsis filtered by the ordmodsis column *

 * @method     ChildCatmodsis requirePk($key, ConnectionInterface $con = null) Return the ChildCatmodsis by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatmodsis requireOne(ConnectionInterface $con = null) Return the first ChildCatmodsis matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatmodsis requireOneByCvemodsis(int $cvemodsis) Return the first ChildCatmodsis filtered by the cvemodsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatmodsis requireOneByNommodsis(string $nommodsis) Return the first ChildCatmodsis filtered by the nommodsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatmodsis requireOneByDirmodsis(string $dirmodsis) Return the first ChildCatmodsis filtered by the dirmodsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatmodsis requireOneByIcnmodsis(string $icnmodsis) Return the first ChildCatmodsis filtered by the icnmodsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatmodsis requireOneByOrdmodsis(int $ordmodsis) Return the first ChildCatmodsis filtered by the ordmodsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatmodsis[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCatmodsis objects based on current ModelCriteria
 * @method     ChildCatmodsis[]|ObjectCollection findByCvemodsis(int $cvemodsis) Return ChildCatmodsis objects filtered by the cvemodsis column
 * @method     ChildCatmodsis[]|ObjectCollection findByNommodsis(string $nommodsis) Return ChildCatmodsis objects filtered by the nommodsis column
 * @method     ChildCatmodsis[]|ObjectCollection findByDirmodsis(string $dirmodsis) Return ChildCatmodsis objects filtered by the dirmodsis column
 * @method     ChildCatmodsis[]|ObjectCollection findByIcnmodsis(string $icnmodsis) Return ChildCatmodsis objects filtered by the icnmodsis column
 * @method     ChildCatmodsis[]|ObjectCollection findByOrdmodsis(int $ordmodsis) Return ChildCatmodsis objects filtered by the ordmodsis column
 * @method     ChildCatmodsis[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CatmodsisQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CatmodsisQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'blogrodolfodb', $modelName = '\\Catmodsis', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCatmodsisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCatmodsisQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCatmodsisQuery) {
            return $criteria;
        }
        $query = new ChildCatmodsisQuery();
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
     * @return ChildCatmodsis|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CatmodsisTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCatmodsis A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT cvemodsis, nommodsis, dirmodsis, icnmodsis, ordmodsis FROM catmodsis WHERE cvemodsis = :p0';
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
            /** @var ChildCatmodsis $obj */
            $obj = new ChildCatmodsis();
            $obj->hydrate($row);
            CatmodsisTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCatmodsis|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $keys, Criteria::IN);
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
     * @param     mixed $cvemodsis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByCvemodsis($cvemodsis = null, $comparison = null)
    {
        if (is_array($cvemodsis)) {
            $useMinMax = false;
            if (isset($cvemodsis['min'])) {
                $this->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $cvemodsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cvemodsis['max'])) {
                $this->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $cvemodsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $cvemodsis, $comparison);
    }

    /**
     * Filter the query on the nommodsis column
     *
     * Example usage:
     * <code>
     * $query->filterByNommodsis('fooValue');   // WHERE nommodsis = 'fooValue'
     * $query->filterByNommodsis('%fooValue%', Criteria::LIKE); // WHERE nommodsis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nommodsis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByNommodsis($nommodsis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nommodsis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatmodsisTableMap::COL_NOMMODSIS, $nommodsis, $comparison);
    }

    /**
     * Filter the query on the dirmodsis column
     *
     * Example usage:
     * <code>
     * $query->filterByDirmodsis('fooValue');   // WHERE dirmodsis = 'fooValue'
     * $query->filterByDirmodsis('%fooValue%', Criteria::LIKE); // WHERE dirmodsis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dirmodsis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByDirmodsis($dirmodsis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dirmodsis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatmodsisTableMap::COL_DIRMODSIS, $dirmodsis, $comparison);
    }

    /**
     * Filter the query on the icnmodsis column
     *
     * Example usage:
     * <code>
     * $query->filterByIcnmodsis('fooValue');   // WHERE icnmodsis = 'fooValue'
     * $query->filterByIcnmodsis('%fooValue%', Criteria::LIKE); // WHERE icnmodsis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icnmodsis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByIcnmodsis($icnmodsis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icnmodsis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatmodsisTableMap::COL_ICNMODSIS, $icnmodsis, $comparison);
    }

    /**
     * Filter the query on the ordmodsis column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdmodsis(1234); // WHERE ordmodsis = 1234
     * $query->filterByOrdmodsis(array(12, 34)); // WHERE ordmodsis IN (12, 34)
     * $query->filterByOrdmodsis(array('min' => 12)); // WHERE ordmodsis > 12
     * </code>
     *
     * @param     mixed $ordmodsis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByOrdmodsis($ordmodsis = null, $comparison = null)
    {
        if (is_array($ordmodsis)) {
            $useMinMax = false;
            if (isset($ordmodsis['min'])) {
                $this->addUsingAlias(CatmodsisTableMap::COL_ORDMODSIS, $ordmodsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordmodsis['max'])) {
                $this->addUsingAlias(CatmodsisTableMap::COL_ORDMODSIS, $ordmodsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatmodsisTableMap::COL_ORDMODSIS, $ordmodsis, $comparison);
    }

    /**
     * Filter the query by a related \Catdirsis object
     *
     * @param \Catdirsis|ObjectCollection $catdirsis the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByCatdirsis($catdirsis, $comparison = null)
    {
        if ($catdirsis instanceof \Catdirsis) {
            return $this
                ->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $catdirsis->getCvemodsis(), $comparison);
        } elseif ($catdirsis instanceof ObjectCollection) {
            return $this
                ->useCatdirsisQuery()
                ->filterByPrimaryKeys($catdirsis->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
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
     * Filter the query by a related \Relperrol object
     *
     * @param \Relperrol|ObjectCollection $relperrol the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCatmodsisQuery The current query, for fluid interface
     */
    public function filterByRelperrol($relperrol, $comparison = null)
    {
        if ($relperrol instanceof \Relperrol) {
            return $this
                ->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $relperrol->getCvemodsis(), $comparison);
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
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildCatmodsis $catmodsis Object to remove from the list of results
     *
     * @return $this|ChildCatmodsisQuery The current query, for fluid interface
     */
    public function prune($catmodsis = null)
    {
        if ($catmodsis) {
            $this->addUsingAlias(CatmodsisTableMap::COL_CVEMODSIS, $catmodsis->getCvemodsis(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the catmodsis table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CatmodsisTableMap::clearInstancePool();
            CatmodsisTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CatmodsisTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CatmodsisTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CatmodsisTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CatmodsisTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CatmodsisQuery
