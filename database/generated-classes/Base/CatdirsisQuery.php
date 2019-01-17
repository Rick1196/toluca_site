<?php

namespace Base;

use \Catdirsis as ChildCatdirsis;
use \CatdirsisQuery as ChildCatdirsisQuery;
use \Exception;
use \PDO;
use Map\CatdirsisTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'catdirsis' table.
 *
 *
 *
 * @method     ChildCatdirsisQuery orderByCvedirsis($order = Criteria::ASC) Order by the cvedirsis column
 * @method     ChildCatdirsisQuery orderByCvemodsis($order = Criteria::ASC) Order by the cvemodsis column
 * @method     ChildCatdirsisQuery orderByNomdirsis($order = Criteria::ASC) Order by the nomdirsis column
 * @method     ChildCatdirsisQuery orderByDirdirsis($order = Criteria::ASC) Order by the dirdirsis column
 * @method     ChildCatdirsisQuery orderByIcndirsis($order = Criteria::ASC) Order by the icndirsis column
 * @method     ChildCatdirsisQuery orderByOrddirsis($order = Criteria::ASC) Order by the orddirsis column
 *
 * @method     ChildCatdirsisQuery groupByCvedirsis() Group by the cvedirsis column
 * @method     ChildCatdirsisQuery groupByCvemodsis() Group by the cvemodsis column
 * @method     ChildCatdirsisQuery groupByNomdirsis() Group by the nomdirsis column
 * @method     ChildCatdirsisQuery groupByDirdirsis() Group by the dirdirsis column
 * @method     ChildCatdirsisQuery groupByIcndirsis() Group by the icndirsis column
 * @method     ChildCatdirsisQuery groupByOrddirsis() Group by the orddirsis column
 *
 * @method     ChildCatdirsisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCatdirsisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCatdirsisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCatdirsisQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCatdirsisQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCatdirsisQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCatdirsisQuery leftJoinCatmodsis($relationAlias = null) Adds a LEFT JOIN clause to the query using the Catmodsis relation
 * @method     ChildCatdirsisQuery rightJoinCatmodsis($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Catmodsis relation
 * @method     ChildCatdirsisQuery innerJoinCatmodsis($relationAlias = null) Adds a INNER JOIN clause to the query using the Catmodsis relation
 *
 * @method     ChildCatdirsisQuery joinWithCatmodsis($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Catmodsis relation
 *
 * @method     ChildCatdirsisQuery leftJoinWithCatmodsis() Adds a LEFT JOIN clause and with to the query using the Catmodsis relation
 * @method     ChildCatdirsisQuery rightJoinWithCatmodsis() Adds a RIGHT JOIN clause and with to the query using the Catmodsis relation
 * @method     ChildCatdirsisQuery innerJoinWithCatmodsis() Adds a INNER JOIN clause and with to the query using the Catmodsis relation
 *
 * @method     ChildCatdirsisQuery leftJoinRelperrol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relperrol relation
 * @method     ChildCatdirsisQuery rightJoinRelperrol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relperrol relation
 * @method     ChildCatdirsisQuery innerJoinRelperrol($relationAlias = null) Adds a INNER JOIN clause to the query using the Relperrol relation
 *
 * @method     ChildCatdirsisQuery joinWithRelperrol($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Relperrol relation
 *
 * @method     ChildCatdirsisQuery leftJoinWithRelperrol() Adds a LEFT JOIN clause and with to the query using the Relperrol relation
 * @method     ChildCatdirsisQuery rightJoinWithRelperrol() Adds a RIGHT JOIN clause and with to the query using the Relperrol relation
 * @method     ChildCatdirsisQuery innerJoinWithRelperrol() Adds a INNER JOIN clause and with to the query using the Relperrol relation
 *
 * @method     \CatmodsisQuery|\RelperrolQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCatdirsis findOne(ConnectionInterface $con = null) Return the first ChildCatdirsis matching the query
 * @method     ChildCatdirsis findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCatdirsis matching the query, or a new ChildCatdirsis object populated from the query conditions when no match is found
 *
 * @method     ChildCatdirsis findOneByCvedirsis(int $cvedirsis) Return the first ChildCatdirsis filtered by the cvedirsis column
 * @method     ChildCatdirsis findOneByCvemodsis(int $cvemodsis) Return the first ChildCatdirsis filtered by the cvemodsis column
 * @method     ChildCatdirsis findOneByNomdirsis(string $nomdirsis) Return the first ChildCatdirsis filtered by the nomdirsis column
 * @method     ChildCatdirsis findOneByDirdirsis(string $dirdirsis) Return the first ChildCatdirsis filtered by the dirdirsis column
 * @method     ChildCatdirsis findOneByIcndirsis(string $icndirsis) Return the first ChildCatdirsis filtered by the icndirsis column
 * @method     ChildCatdirsis findOneByOrddirsis(int $orddirsis) Return the first ChildCatdirsis filtered by the orddirsis column *

 * @method     ChildCatdirsis requirePk($key, ConnectionInterface $con = null) Return the ChildCatdirsis by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatdirsis requireOne(ConnectionInterface $con = null) Return the first ChildCatdirsis matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatdirsis requireOneByCvedirsis(int $cvedirsis) Return the first ChildCatdirsis filtered by the cvedirsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatdirsis requireOneByCvemodsis(int $cvemodsis) Return the first ChildCatdirsis filtered by the cvemodsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatdirsis requireOneByNomdirsis(string $nomdirsis) Return the first ChildCatdirsis filtered by the nomdirsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatdirsis requireOneByDirdirsis(string $dirdirsis) Return the first ChildCatdirsis filtered by the dirdirsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatdirsis requireOneByIcndirsis(string $icndirsis) Return the first ChildCatdirsis filtered by the icndirsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCatdirsis requireOneByOrddirsis(int $orddirsis) Return the first ChildCatdirsis filtered by the orddirsis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCatdirsis[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCatdirsis objects based on current ModelCriteria
 * @method     ChildCatdirsis[]|ObjectCollection findByCvedirsis(int $cvedirsis) Return ChildCatdirsis objects filtered by the cvedirsis column
 * @method     ChildCatdirsis[]|ObjectCollection findByCvemodsis(int $cvemodsis) Return ChildCatdirsis objects filtered by the cvemodsis column
 * @method     ChildCatdirsis[]|ObjectCollection findByNomdirsis(string $nomdirsis) Return ChildCatdirsis objects filtered by the nomdirsis column
 * @method     ChildCatdirsis[]|ObjectCollection findByDirdirsis(string $dirdirsis) Return ChildCatdirsis objects filtered by the dirdirsis column
 * @method     ChildCatdirsis[]|ObjectCollection findByIcndirsis(string $icndirsis) Return ChildCatdirsis objects filtered by the icndirsis column
 * @method     ChildCatdirsis[]|ObjectCollection findByOrddirsis(int $orddirsis) Return ChildCatdirsis objects filtered by the orddirsis column
 * @method     ChildCatdirsis[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CatdirsisQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CatdirsisQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'blogrodolfodb', $modelName = '\\Catdirsis', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCatdirsisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCatdirsisQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCatdirsisQuery) {
            return $criteria;
        }
        $query = new ChildCatdirsisQuery();
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
     * @return ChildCatdirsis|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CatdirsisTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CatdirsisTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCatdirsis A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT cvedirsis, cvemodsis, nomdirsis, dirdirsis, icndirsis, orddirsis FROM catdirsis WHERE cvedirsis = :p0';
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
            /** @var ChildCatdirsis $obj */
            $obj = new ChildCatdirsis();
            $obj->hydrate($row);
            CatdirsisTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCatdirsis|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CatdirsisTableMap::COL_CVEDIRSIS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CatdirsisTableMap::COL_CVEDIRSIS, $keys, Criteria::IN);
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
     * @param     mixed $cvedirsis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByCvedirsis($cvedirsis = null, $comparison = null)
    {
        if (is_array($cvedirsis)) {
            $useMinMax = false;
            if (isset($cvedirsis['min'])) {
                $this->addUsingAlias(CatdirsisTableMap::COL_CVEDIRSIS, $cvedirsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cvedirsis['max'])) {
                $this->addUsingAlias(CatdirsisTableMap::COL_CVEDIRSIS, $cvedirsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatdirsisTableMap::COL_CVEDIRSIS, $cvedirsis, $comparison);
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
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByCvemodsis($cvemodsis = null, $comparison = null)
    {
        if (is_array($cvemodsis)) {
            $useMinMax = false;
            if (isset($cvemodsis['min'])) {
                $this->addUsingAlias(CatdirsisTableMap::COL_CVEMODSIS, $cvemodsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cvemodsis['max'])) {
                $this->addUsingAlias(CatdirsisTableMap::COL_CVEMODSIS, $cvemodsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatdirsisTableMap::COL_CVEMODSIS, $cvemodsis, $comparison);
    }

    /**
     * Filter the query on the nomdirsis column
     *
     * Example usage:
     * <code>
     * $query->filterByNomdirsis('fooValue');   // WHERE nomdirsis = 'fooValue'
     * $query->filterByNomdirsis('%fooValue%', Criteria::LIKE); // WHERE nomdirsis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomdirsis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByNomdirsis($nomdirsis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomdirsis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatdirsisTableMap::COL_NOMDIRSIS, $nomdirsis, $comparison);
    }

    /**
     * Filter the query on the dirdirsis column
     *
     * Example usage:
     * <code>
     * $query->filterByDirdirsis('fooValue');   // WHERE dirdirsis = 'fooValue'
     * $query->filterByDirdirsis('%fooValue%', Criteria::LIKE); // WHERE dirdirsis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dirdirsis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByDirdirsis($dirdirsis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dirdirsis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatdirsisTableMap::COL_DIRDIRSIS, $dirdirsis, $comparison);
    }

    /**
     * Filter the query on the icndirsis column
     *
     * Example usage:
     * <code>
     * $query->filterByIcndirsis('fooValue');   // WHERE icndirsis = 'fooValue'
     * $query->filterByIcndirsis('%fooValue%', Criteria::LIKE); // WHERE icndirsis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icndirsis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByIcndirsis($icndirsis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icndirsis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatdirsisTableMap::COL_ICNDIRSIS, $icndirsis, $comparison);
    }

    /**
     * Filter the query on the orddirsis column
     *
     * Example usage:
     * <code>
     * $query->filterByOrddirsis(1234); // WHERE orddirsis = 1234
     * $query->filterByOrddirsis(array(12, 34)); // WHERE orddirsis IN (12, 34)
     * $query->filterByOrddirsis(array('min' => 12)); // WHERE orddirsis > 12
     * </code>
     *
     * @param     mixed $orddirsis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByOrddirsis($orddirsis = null, $comparison = null)
    {
        if (is_array($orddirsis)) {
            $useMinMax = false;
            if (isset($orddirsis['min'])) {
                $this->addUsingAlias(CatdirsisTableMap::COL_ORDDIRSIS, $orddirsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orddirsis['max'])) {
                $this->addUsingAlias(CatdirsisTableMap::COL_ORDDIRSIS, $orddirsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CatdirsisTableMap::COL_ORDDIRSIS, $orddirsis, $comparison);
    }

    /**
     * Filter the query by a related \Catmodsis object
     *
     * @param \Catmodsis|ObjectCollection $catmodsis The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByCatmodsis($catmodsis, $comparison = null)
    {
        if ($catmodsis instanceof \Catmodsis) {
            return $this
                ->addUsingAlias(CatdirsisTableMap::COL_CVEMODSIS, $catmodsis->getCvemodsis(), $comparison);
        } elseif ($catmodsis instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CatdirsisTableMap::COL_CVEMODSIS, $catmodsis->toKeyValue('PrimaryKey', 'Cvemodsis'), $comparison);
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
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
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
     * Filter the query by a related \Relperrol object
     *
     * @param \Relperrol|ObjectCollection $relperrol the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCatdirsisQuery The current query, for fluid interface
     */
    public function filterByRelperrol($relperrol, $comparison = null)
    {
        if ($relperrol instanceof \Relperrol) {
            return $this
                ->addUsingAlias(CatdirsisTableMap::COL_CVEDIRSIS, $relperrol->getCvedirsis(), $comparison);
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
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
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
     * @param   ChildCatdirsis $catdirsis Object to remove from the list of results
     *
     * @return $this|ChildCatdirsisQuery The current query, for fluid interface
     */
    public function prune($catdirsis = null)
    {
        if ($catdirsis) {
            $this->addUsingAlias(CatdirsisTableMap::COL_CVEDIRSIS, $catdirsis->getCvedirsis(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the catdirsis table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CatdirsisTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CatdirsisTableMap::clearInstancePool();
            CatdirsisTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CatdirsisTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CatdirsisTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CatdirsisTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CatdirsisTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CatdirsisQuery
