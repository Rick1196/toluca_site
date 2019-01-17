<?php

namespace Base;

use \Tbldenuncia as ChildTbldenuncia;
use \TbldenunciaQuery as ChildTbldenunciaQuery;
use \Exception;
use \PDO;
use Map\TbldenunciaTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbldenuncia' table.
 *
 *
 *
 * @method     ChildTbldenunciaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildTbldenunciaQuery orderByTitulo($order = Criteria::ASC) Order by the titulo column
 * @method     ChildTbldenunciaQuery orderByContext($order = Criteria::ASC) Order by the context column
 * @method     ChildTbldenunciaQuery orderByIdUser($order = Criteria::ASC) Order by the id_user column
 * @method     ChildTbldenunciaQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildTbldenunciaQuery orderByIdTopic($order = Criteria::ASC) Order by the id_topic column
 * @method     ChildTbldenunciaQuery orderByResponsable($order = Criteria::ASC) Order by the responsable column
 * @method     ChildTbldenunciaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildTbldenunciaQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildTbldenunciaQuery groupById() Group by the id column
 * @method     ChildTbldenunciaQuery groupByTitulo() Group by the titulo column
 * @method     ChildTbldenunciaQuery groupByContext() Group by the context column
 * @method     ChildTbldenunciaQuery groupByIdUser() Group by the id_user column
 * @method     ChildTbldenunciaQuery groupByStatus() Group by the status column
 * @method     ChildTbldenunciaQuery groupByIdTopic() Group by the id_topic column
 * @method     ChildTbldenunciaQuery groupByResponsable() Group by the responsable column
 * @method     ChildTbldenunciaQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildTbldenunciaQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildTbldenunciaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTbldenunciaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTbldenunciaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTbldenunciaQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTbldenunciaQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTbldenunciaQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTbldenunciaQuery leftJoinTopics($relationAlias = null) Adds a LEFT JOIN clause to the query using the Topics relation
 * @method     ChildTbldenunciaQuery rightJoinTopics($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Topics relation
 * @method     ChildTbldenunciaQuery innerJoinTopics($relationAlias = null) Adds a INNER JOIN clause to the query using the Topics relation
 *
 * @method     ChildTbldenunciaQuery joinWithTopics($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Topics relation
 *
 * @method     ChildTbldenunciaQuery leftJoinWithTopics() Adds a LEFT JOIN clause and with to the query using the Topics relation
 * @method     ChildTbldenunciaQuery rightJoinWithTopics() Adds a RIGHT JOIN clause and with to the query using the Topics relation
 * @method     ChildTbldenunciaQuery innerJoinWithTopics() Adds a INNER JOIN clause and with to the query using the Topics relation
 *
 * @method     ChildTbldenunciaQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method     ChildTbldenunciaQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method     ChildTbldenunciaQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method     ChildTbldenunciaQuery joinWithUsers($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Users relation
 *
 * @method     ChildTbldenunciaQuery leftJoinWithUsers() Adds a LEFT JOIN clause and with to the query using the Users relation
 * @method     ChildTbldenunciaQuery rightJoinWithUsers() Adds a RIGHT JOIN clause and with to the query using the Users relation
 * @method     ChildTbldenunciaQuery innerJoinWithUsers() Adds a INNER JOIN clause and with to the query using the Users relation
 *
 * @method     ChildTbldenunciaQuery leftJoinDenunciareplies($relationAlias = null) Adds a LEFT JOIN clause to the query using the Denunciareplies relation
 * @method     ChildTbldenunciaQuery rightJoinDenunciareplies($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Denunciareplies relation
 * @method     ChildTbldenunciaQuery innerJoinDenunciareplies($relationAlias = null) Adds a INNER JOIN clause to the query using the Denunciareplies relation
 *
 * @method     ChildTbldenunciaQuery joinWithDenunciareplies($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Denunciareplies relation
 *
 * @method     ChildTbldenunciaQuery leftJoinWithDenunciareplies() Adds a LEFT JOIN clause and with to the query using the Denunciareplies relation
 * @method     ChildTbldenunciaQuery rightJoinWithDenunciareplies() Adds a RIGHT JOIN clause and with to the query using the Denunciareplies relation
 * @method     ChildTbldenunciaQuery innerJoinWithDenunciareplies() Adds a INNER JOIN clause and with to the query using the Denunciareplies relation
 *
 * @method     \TopicsQuery|\UsersQuery|\DenunciarepliesQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTbldenuncia findOne(ConnectionInterface $con = null) Return the first ChildTbldenuncia matching the query
 * @method     ChildTbldenuncia findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTbldenuncia matching the query, or a new ChildTbldenuncia object populated from the query conditions when no match is found
 *
 * @method     ChildTbldenuncia findOneById(int $id) Return the first ChildTbldenuncia filtered by the id column
 * @method     ChildTbldenuncia findOneByTitulo(string $titulo) Return the first ChildTbldenuncia filtered by the titulo column
 * @method     ChildTbldenuncia findOneByContext(string $context) Return the first ChildTbldenuncia filtered by the context column
 * @method     ChildTbldenuncia findOneByIdUser(int $id_user) Return the first ChildTbldenuncia filtered by the id_user column
 * @method     ChildTbldenuncia findOneByStatus(int $status) Return the first ChildTbldenuncia filtered by the status column
 * @method     ChildTbldenuncia findOneByIdTopic(int $id_topic) Return the first ChildTbldenuncia filtered by the id_topic column
 * @method     ChildTbldenuncia findOneByResponsable(int $responsable) Return the first ChildTbldenuncia filtered by the responsable column
 * @method     ChildTbldenuncia findOneByCreatedAt(string $created_at) Return the first ChildTbldenuncia filtered by the created_at column
 * @method     ChildTbldenuncia findOneByUpdatedAt(string $updated_at) Return the first ChildTbldenuncia filtered by the updated_at column *

 * @method     ChildTbldenuncia requirePk($key, ConnectionInterface $con = null) Return the ChildTbldenuncia by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOne(ConnectionInterface $con = null) Return the first ChildTbldenuncia matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTbldenuncia requireOneById(int $id) Return the first ChildTbldenuncia filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByTitulo(string $titulo) Return the first ChildTbldenuncia filtered by the titulo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByContext(string $context) Return the first ChildTbldenuncia filtered by the context column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByIdUser(int $id_user) Return the first ChildTbldenuncia filtered by the id_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByStatus(int $status) Return the first ChildTbldenuncia filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByIdTopic(int $id_topic) Return the first ChildTbldenuncia filtered by the id_topic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByResponsable(int $responsable) Return the first ChildTbldenuncia filtered by the responsable column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByCreatedAt(string $created_at) Return the first ChildTbldenuncia filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTbldenuncia requireOneByUpdatedAt(string $updated_at) Return the first ChildTbldenuncia filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTbldenuncia[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTbldenuncia objects based on current ModelCriteria
 * @method     ChildTbldenuncia[]|ObjectCollection findById(int $id) Return ChildTbldenuncia objects filtered by the id column
 * @method     ChildTbldenuncia[]|ObjectCollection findByTitulo(string $titulo) Return ChildTbldenuncia objects filtered by the titulo column
 * @method     ChildTbldenuncia[]|ObjectCollection findByContext(string $context) Return ChildTbldenuncia objects filtered by the context column
 * @method     ChildTbldenuncia[]|ObjectCollection findByIdUser(int $id_user) Return ChildTbldenuncia objects filtered by the id_user column
 * @method     ChildTbldenuncia[]|ObjectCollection findByStatus(int $status) Return ChildTbldenuncia objects filtered by the status column
 * @method     ChildTbldenuncia[]|ObjectCollection findByIdTopic(int $id_topic) Return ChildTbldenuncia objects filtered by the id_topic column
 * @method     ChildTbldenuncia[]|ObjectCollection findByResponsable(int $responsable) Return ChildTbldenuncia objects filtered by the responsable column
 * @method     ChildTbldenuncia[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildTbldenuncia objects filtered by the created_at column
 * @method     ChildTbldenuncia[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildTbldenuncia objects filtered by the updated_at column
 * @method     ChildTbldenuncia[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TbldenunciaQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TbldenunciaQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'blogrodolfodb', $modelName = '\\Tbldenuncia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTbldenunciaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTbldenunciaQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTbldenunciaQuery) {
            return $criteria;
        }
        $query = new ChildTbldenunciaQuery();
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
     * @return ChildTbldenuncia|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TbldenunciaTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TbldenunciaTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTbldenuncia A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, titulo, context, id_user, status, id_topic, responsable, created_at, updated_at FROM tbldenuncia WHERE id = :p0';
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
            /** @var ChildTbldenuncia $obj */
            $obj = new ChildTbldenuncia();
            $obj->hydrate($row);
            TbldenunciaTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTbldenuncia|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TbldenunciaTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TbldenunciaTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the titulo column
     *
     * Example usage:
     * <code>
     * $query->filterByTitulo('fooValue');   // WHERE titulo = 'fooValue'
     * $query->filterByTitulo('%fooValue%', Criteria::LIKE); // WHERE titulo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titulo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByTitulo($titulo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titulo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_TITULO, $titulo, $comparison);
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
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByContext($context = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($context)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_CONTEXT, $context, $comparison);
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
     * @see       filterByUsers()
     *
     * @param     mixed $idUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByIdUser($idUser = null, $comparison = null)
    {
        if (is_array($idUser)) {
            $useMinMax = false;
            if (isset($idUser['min'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_ID_USER, $idUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUser['max'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_ID_USER, $idUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_ID_USER, $idUser, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status > 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the id_topic column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTopic(1234); // WHERE id_topic = 1234
     * $query->filterByIdTopic(array(12, 34)); // WHERE id_topic IN (12, 34)
     * $query->filterByIdTopic(array('min' => 12)); // WHERE id_topic > 12
     * </code>
     *
     * @see       filterByTopics()
     *
     * @param     mixed $idTopic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByIdTopic($idTopic = null, $comparison = null)
    {
        if (is_array($idTopic)) {
            $useMinMax = false;
            if (isset($idTopic['min'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_ID_TOPIC, $idTopic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTopic['max'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_ID_TOPIC, $idTopic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_ID_TOPIC, $idTopic, $comparison);
    }

    /**
     * Filter the query on the responsable column
     *
     * Example usage:
     * <code>
     * $query->filterByResponsable(1234); // WHERE responsable = 1234
     * $query->filterByResponsable(array(12, 34)); // WHERE responsable IN (12, 34)
     * $query->filterByResponsable(array('min' => 12)); // WHERE responsable > 12
     * </code>
     *
     * @param     mixed $responsable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByResponsable($responsable = null, $comparison = null)
    {
        if (is_array($responsable)) {
            $useMinMax = false;
            if (isset($responsable['min'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_RESPONSABLE, $responsable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($responsable['max'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_RESPONSABLE, $responsable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_RESPONSABLE, $responsable, $comparison);
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
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TbldenunciaTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TbldenunciaTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Topics object
     *
     * @param \Topics|ObjectCollection $topics The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByTopics($topics, $comparison = null)
    {
        if ($topics instanceof \Topics) {
            return $this
                ->addUsingAlias(TbldenunciaTableMap::COL_ID_TOPIC, $topics->getId(), $comparison);
        } elseif ($topics instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TbldenunciaTableMap::COL_ID_TOPIC, $topics->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTopics() only accepts arguments of type \Topics or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Topics relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function joinTopics($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Topics');

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
            $this->addJoinObject($join, 'Topics');
        }

        return $this;
    }

    /**
     * Use the Topics relation Topics object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TopicsQuery A secondary query class using the current class as primary query
     */
    public function useTopicsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTopics($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Topics', '\TopicsQuery');
    }

    /**
     * Filter the query by a related \Users object
     *
     * @param \Users|ObjectCollection $users The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof \Users) {
            return $this
                ->addUsingAlias(TbldenunciaTableMap::COL_ID_USER, $users->getId(), $comparison);
        } elseif ($users instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TbldenunciaTableMap::COL_ID_USER, $users->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
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
     * Filter the query by a related \Denunciareplies object
     *
     * @param \Denunciareplies|ObjectCollection $denunciareplies the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function filterByDenunciareplies($denunciareplies, $comparison = null)
    {
        if ($denunciareplies instanceof \Denunciareplies) {
            return $this
                ->addUsingAlias(TbldenunciaTableMap::COL_ID, $denunciareplies->getIdDenuncia(), $comparison);
        } elseif ($denunciareplies instanceof ObjectCollection) {
            return $this
                ->useDenunciarepliesQuery()
                ->filterByPrimaryKeys($denunciareplies->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDenunciareplies() only accepts arguments of type \Denunciareplies or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Denunciareplies relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function joinDenunciareplies($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Denunciareplies');

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
            $this->addJoinObject($join, 'Denunciareplies');
        }

        return $this;
    }

    /**
     * Use the Denunciareplies relation Denunciareplies object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DenunciarepliesQuery A secondary query class using the current class as primary query
     */
    public function useDenunciarepliesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDenunciareplies($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Denunciareplies', '\DenunciarepliesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTbldenuncia $tbldenuncia Object to remove from the list of results
     *
     * @return $this|ChildTbldenunciaQuery The current query, for fluid interface
     */
    public function prune($tbldenuncia = null)
    {
        if ($tbldenuncia) {
            $this->addUsingAlias(TbldenunciaTableMap::COL_ID, $tbldenuncia->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbldenuncia table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TbldenunciaTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TbldenunciaTableMap::clearInstancePool();
            TbldenunciaTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TbldenunciaTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TbldenunciaTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TbldenunciaTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TbldenunciaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TbldenunciaQuery
