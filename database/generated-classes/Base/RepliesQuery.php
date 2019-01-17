<?php

namespace Base;

use \Replies as ChildReplies;
use \RepliesQuery as ChildRepliesQuery;
use \Exception;
use \PDO;
use Map\RepliesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'replies' table.
 *
 *
 *
 * @method     ChildRepliesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildRepliesQuery orderByIdForum($order = Criteria::ASC) Order by the id_forum column
 * @method     ChildRepliesQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     ChildRepliesQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     ChildRepliesQuery orderByApellidos($order = Criteria::ASC) Order by the apellidos column
 * @method     ChildRepliesQuery orderByCorreo($order = Criteria::ASC) Order by the correo column
 * @method     ChildRepliesQuery orderByIdTopic($order = Criteria::ASC) Order by the id_topic column
 * @method     ChildRepliesQuery orderByIdUser($order = Criteria::ASC) Order by the id_user column
 * @method     ChildRepliesQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildRepliesQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildRepliesQuery groupById() Group by the id column
 * @method     ChildRepliesQuery groupByIdForum() Group by the id_forum column
 * @method     ChildRepliesQuery groupByContent() Group by the content column
 * @method     ChildRepliesQuery groupByNombre() Group by the nombre column
 * @method     ChildRepliesQuery groupByApellidos() Group by the apellidos column
 * @method     ChildRepliesQuery groupByCorreo() Group by the correo column
 * @method     ChildRepliesQuery groupByIdTopic() Group by the id_topic column
 * @method     ChildRepliesQuery groupByIdUser() Group by the id_user column
 * @method     ChildRepliesQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildRepliesQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildRepliesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRepliesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRepliesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRepliesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildRepliesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildRepliesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildRepliesQuery leftJoinForums($relationAlias = null) Adds a LEFT JOIN clause to the query using the Forums relation
 * @method     ChildRepliesQuery rightJoinForums($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Forums relation
 * @method     ChildRepliesQuery innerJoinForums($relationAlias = null) Adds a INNER JOIN clause to the query using the Forums relation
 *
 * @method     ChildRepliesQuery joinWithForums($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Forums relation
 *
 * @method     ChildRepliesQuery leftJoinWithForums() Adds a LEFT JOIN clause and with to the query using the Forums relation
 * @method     ChildRepliesQuery rightJoinWithForums() Adds a RIGHT JOIN clause and with to the query using the Forums relation
 * @method     ChildRepliesQuery innerJoinWithForums() Adds a INNER JOIN clause and with to the query using the Forums relation
 *
 * @method     \ForumsQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildReplies findOne(ConnectionInterface $con = null) Return the first ChildReplies matching the query
 * @method     ChildReplies findOneOrCreate(ConnectionInterface $con = null) Return the first ChildReplies matching the query, or a new ChildReplies object populated from the query conditions when no match is found
 *
 * @method     ChildReplies findOneById(int $id) Return the first ChildReplies filtered by the id column
 * @method     ChildReplies findOneByIdForum(int $id_forum) Return the first ChildReplies filtered by the id_forum column
 * @method     ChildReplies findOneByContent(string $content) Return the first ChildReplies filtered by the content column
 * @method     ChildReplies findOneByNombre(string $nombre) Return the first ChildReplies filtered by the nombre column
 * @method     ChildReplies findOneByApellidos(string $apellidos) Return the first ChildReplies filtered by the apellidos column
 * @method     ChildReplies findOneByCorreo(string $correo) Return the first ChildReplies filtered by the correo column
 * @method     ChildReplies findOneByIdTopic(int $id_topic) Return the first ChildReplies filtered by the id_topic column
 * @method     ChildReplies findOneByIdUser(int $id_user) Return the first ChildReplies filtered by the id_user column
 * @method     ChildReplies findOneByCreatedAt(string $created_at) Return the first ChildReplies filtered by the created_at column
 * @method     ChildReplies findOneByUpdatedAt(string $updated_at) Return the first ChildReplies filtered by the updated_at column *

 * @method     ChildReplies requirePk($key, ConnectionInterface $con = null) Return the ChildReplies by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOne(ConnectionInterface $con = null) Return the first ChildReplies matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildReplies requireOneById(int $id) Return the first ChildReplies filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByIdForum(int $id_forum) Return the first ChildReplies filtered by the id_forum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByContent(string $content) Return the first ChildReplies filtered by the content column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByNombre(string $nombre) Return the first ChildReplies filtered by the nombre column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByApellidos(string $apellidos) Return the first ChildReplies filtered by the apellidos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByCorreo(string $correo) Return the first ChildReplies filtered by the correo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByIdTopic(int $id_topic) Return the first ChildReplies filtered by the id_topic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByIdUser(int $id_user) Return the first ChildReplies filtered by the id_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByCreatedAt(string $created_at) Return the first ChildReplies filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildReplies requireOneByUpdatedAt(string $updated_at) Return the first ChildReplies filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildReplies[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildReplies objects based on current ModelCriteria
 * @method     ChildReplies[]|ObjectCollection findById(int $id) Return ChildReplies objects filtered by the id column
 * @method     ChildReplies[]|ObjectCollection findByIdForum(int $id_forum) Return ChildReplies objects filtered by the id_forum column
 * @method     ChildReplies[]|ObjectCollection findByContent(string $content) Return ChildReplies objects filtered by the content column
 * @method     ChildReplies[]|ObjectCollection findByNombre(string $nombre) Return ChildReplies objects filtered by the nombre column
 * @method     ChildReplies[]|ObjectCollection findByApellidos(string $apellidos) Return ChildReplies objects filtered by the apellidos column
 * @method     ChildReplies[]|ObjectCollection findByCorreo(string $correo) Return ChildReplies objects filtered by the correo column
 * @method     ChildReplies[]|ObjectCollection findByIdTopic(int $id_topic) Return ChildReplies objects filtered by the id_topic column
 * @method     ChildReplies[]|ObjectCollection findByIdUser(int $id_user) Return ChildReplies objects filtered by the id_user column
 * @method     ChildReplies[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildReplies objects filtered by the created_at column
 * @method     ChildReplies[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildReplies objects filtered by the updated_at column
 * @method     ChildReplies[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class RepliesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RepliesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'blogrodolfodb', $modelName = '\\Replies', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRepliesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRepliesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildRepliesQuery) {
            return $criteria;
        }
        $query = new ChildRepliesQuery();
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
     * @return ChildReplies|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(RepliesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = RepliesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildReplies A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, id_forum, content, nombre, apellidos, correo, id_topic, id_user, created_at, updated_at FROM replies WHERE id = :p0';
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
            /** @var ChildReplies $obj */
            $obj = new ChildReplies();
            $obj->hydrate($row);
            RepliesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildReplies|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RepliesTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RepliesTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_forum column
     *
     * Example usage:
     * <code>
     * $query->filterByIdForum(1234); // WHERE id_forum = 1234
     * $query->filterByIdForum(array(12, 34)); // WHERE id_forum IN (12, 34)
     * $query->filterByIdForum(array('min' => 12)); // WHERE id_forum > 12
     * </code>
     *
     * @see       filterByForums()
     *
     * @param     mixed $idForum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByIdForum($idForum = null, $comparison = null)
    {
        if (is_array($idForum)) {
            $useMinMax = false;
            if (isset($idForum['min'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID_FORUM, $idForum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idForum['max'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID_FORUM, $idForum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_ID_FORUM, $idForum, $comparison);
    }

    /**
     * Filter the query on the content column
     *
     * Example usage:
     * <code>
     * $query->filterByContent('fooValue');   // WHERE content = 'fooValue'
     * $query->filterByContent('%fooValue%', Criteria::LIKE); // WHERE content LIKE '%fooValue%'
     * </code>
     *
     * @param     string $content The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByContent($content = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($content)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_CONTENT, $content, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%', Criteria::LIKE); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the apellidos column
     *
     * Example usage:
     * <code>
     * $query->filterByApellidos('fooValue');   // WHERE apellidos = 'fooValue'
     * $query->filterByApellidos('%fooValue%', Criteria::LIKE); // WHERE apellidos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellidos The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByApellidos($apellidos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellidos)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_APELLIDOS, $apellidos, $comparison);
    }

    /**
     * Filter the query on the correo column
     *
     * Example usage:
     * <code>
     * $query->filterByCorreo('fooValue');   // WHERE correo = 'fooValue'
     * $query->filterByCorreo('%fooValue%', Criteria::LIKE); // WHERE correo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $correo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByCorreo($correo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($correo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_CORREO, $correo, $comparison);
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
     * @param     mixed $idTopic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByIdTopic($idTopic = null, $comparison = null)
    {
        if (is_array($idTopic)) {
            $useMinMax = false;
            if (isset($idTopic['min'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID_TOPIC, $idTopic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTopic['max'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID_TOPIC, $idTopic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_ID_TOPIC, $idTopic, $comparison);
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
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByIdUser($idUser = null, $comparison = null)
    {
        if (is_array($idUser)) {
            $useMinMax = false;
            if (isset($idUser['min'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID_USER, $idUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUser['max'])) {
                $this->addUsingAlias(RepliesTableMap::COL_ID_USER, $idUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_ID_USER, $idUser, $comparison);
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
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(RepliesTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(RepliesTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_CREATED_AT, $createdAt, $comparison);
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
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(RepliesTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(RepliesTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepliesTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Forums object
     *
     * @param \Forums|ObjectCollection $forums The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRepliesQuery The current query, for fluid interface
     */
    public function filterByForums($forums, $comparison = null)
    {
        if ($forums instanceof \Forums) {
            return $this
                ->addUsingAlias(RepliesTableMap::COL_ID_FORUM, $forums->getId(), $comparison);
        } elseif ($forums instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RepliesTableMap::COL_ID_FORUM, $forums->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return $this|ChildRepliesQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildReplies $replies Object to remove from the list of results
     *
     * @return $this|ChildRepliesQuery The current query, for fluid interface
     */
    public function prune($replies = null)
    {
        if ($replies) {
            $this->addUsingAlias(RepliesTableMap::COL_ID, $replies->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the replies table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RepliesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RepliesTableMap::clearInstancePool();
            RepliesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(RepliesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(RepliesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            RepliesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            RepliesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // RepliesQuery
