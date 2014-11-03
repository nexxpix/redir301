<?php

namespace Redir301\Model\Base;

use \Exception;
use \PDO;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Redir301\Model\Redir301Redirections as ChildRedir301Redirections;
use Redir301\Model\Redir301RedirectionsQuery as ChildRedir301RedirectionsQuery;
use Redir301\Model\Map\Redir301RedirectionsTableMap;

/**
 * Base class that represents a query for the 'redir301_redirections' table.
 *
 *
 *
 * @method     ChildRedir301RedirectionsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildRedir301RedirectionsQuery orderByPattern($order = Criteria::ASC) Order by the pattern column
 * @method     ChildRedir301RedirectionsQuery orderByTarget($order = Criteria::ASC) Order by the target column
 * @method     ChildRedir301RedirectionsQuery orderByTriggered($order = Criteria::ASC) Order by the triggered column
 * @method     ChildRedir301RedirectionsQuery orderByTriggeredFirst($order = Criteria::ASC) Order by the triggered_first column
 * @method     ChildRedir301RedirectionsQuery orderByTriggeredLast($order = Criteria::ASC) Order by the triggered_last column
 * @method     ChildRedir301RedirectionsQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     ChildRedir301RedirectionsQuery orderByCreatedOn($order = Criteria::ASC) Order by the created_on column
 * @method     ChildRedir301RedirectionsQuery orderByUpdatedOn($order = Criteria::ASC) Order by the updated_on column
 *
 * @method     ChildRedir301RedirectionsQuery groupById() Group by the id column
 * @method     ChildRedir301RedirectionsQuery groupByPattern() Group by the pattern column
 * @method     ChildRedir301RedirectionsQuery groupByTarget() Group by the target column
 * @method     ChildRedir301RedirectionsQuery groupByTriggered() Group by the triggered column
 * @method     ChildRedir301RedirectionsQuery groupByTriggeredFirst() Group by the triggered_first column
 * @method     ChildRedir301RedirectionsQuery groupByTriggeredLast() Group by the triggered_last column
 * @method     ChildRedir301RedirectionsQuery groupByActive() Group by the active column
 * @method     ChildRedir301RedirectionsQuery groupByCreatedOn() Group by the created_on column
 * @method     ChildRedir301RedirectionsQuery groupByUpdatedOn() Group by the updated_on column
 *
 * @method     ChildRedir301RedirectionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRedir301RedirectionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRedir301RedirectionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRedir301Redirections findOne(ConnectionInterface $con = null) Return the first ChildRedir301Redirections matching the query
 * @method     ChildRedir301Redirections findOneOrCreate(ConnectionInterface $con = null) Return the first ChildRedir301Redirections matching the query, or a new ChildRedir301Redirections object populated from the query conditions when no match is found
 *
 * @method     ChildRedir301Redirections findOneById(int $id) Return the first ChildRedir301Redirections filtered by the id column
 * @method     ChildRedir301Redirections findOneByPattern(string $pattern) Return the first ChildRedir301Redirections filtered by the pattern column
 * @method     ChildRedir301Redirections findOneByTarget(string $target) Return the first ChildRedir301Redirections filtered by the target column
 * @method     ChildRedir301Redirections findOneByTriggered(int $triggered) Return the first ChildRedir301Redirections filtered by the triggered column
 * @method     ChildRedir301Redirections findOneByTriggeredFirst(string $triggered_first) Return the first ChildRedir301Redirections filtered by the triggered_first column
 * @method     ChildRedir301Redirections findOneByTriggeredLast(string $triggered_last) Return the first ChildRedir301Redirections filtered by the triggered_last column
 * @method     ChildRedir301Redirections findOneByActive(int $active) Return the first ChildRedir301Redirections filtered by the active column
 * @method     ChildRedir301Redirections findOneByCreatedOn(string $created_on) Return the first ChildRedir301Redirections filtered by the created_on column
 * @method     ChildRedir301Redirections findOneByUpdatedOn(string $updated_on) Return the first ChildRedir301Redirections filtered by the updated_on column
 *
 * @method     array findById(int $id) Return ChildRedir301Redirections objects filtered by the id column
 * @method     array findByPattern(string $pattern) Return ChildRedir301Redirections objects filtered by the pattern column
 * @method     array findByTarget(string $target) Return ChildRedir301Redirections objects filtered by the target column
 * @method     array findByTriggered(int $triggered) Return ChildRedir301Redirections objects filtered by the triggered column
 * @method     array findByTriggeredFirst(string $triggered_first) Return ChildRedir301Redirections objects filtered by the triggered_first column
 * @method     array findByTriggeredLast(string $triggered_last) Return ChildRedir301Redirections objects filtered by the triggered_last column
 * @method     array findByActive(int $active) Return ChildRedir301Redirections objects filtered by the active column
 * @method     array findByCreatedOn(string $created_on) Return ChildRedir301Redirections objects filtered by the created_on column
 * @method     array findByUpdatedOn(string $updated_on) Return ChildRedir301Redirections objects filtered by the updated_on column
 *
 */
abstract class Redir301RedirectionsQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \Redir301\Model\Base\Redir301RedirectionsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\Redir301\\Model\\Redir301Redirections', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRedir301RedirectionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRedir301RedirectionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \Redir301\Model\Redir301RedirectionsQuery) {
            return $criteria;
        }
        $query = new \Redir301\Model\Redir301RedirectionsQuery();
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
     * @return ChildRedir301Redirections|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Redir301RedirectionsTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(Redir301RedirectionsTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return   ChildRedir301Redirections A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, PATTERN, TARGET, TRIGGERED, TRIGGERED_FIRST, TRIGGERED_LAST, ACTIVE, CREATED_ON, UPDATED_ON FROM redir301_redirections WHERE ID = :p0';
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
            $obj = new ChildRedir301Redirections();
            $obj->hydrate($row);
            Redir301RedirectionsTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildRedir301Redirections|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
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
    public function findPks($keys, $con = null)
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
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Redir301RedirectionsTableMap::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Redir301RedirectionsTableMap::ID, $keys, Criteria::IN);
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
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the pattern column
     *
     * Example usage:
     * <code>
     * $query->filterByPattern('fooValue');   // WHERE pattern = 'fooValue'
     * $query->filterByPattern('%fooValue%'); // WHERE pattern LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pattern The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByPattern($pattern = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pattern)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pattern)) {
                $pattern = str_replace('*', '%', $pattern);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::PATTERN, $pattern, $comparison);
    }

    /**
     * Filter the query on the target column
     *
     * Example usage:
     * <code>
     * $query->filterByTarget('fooValue');   // WHERE target = 'fooValue'
     * $query->filterByTarget('%fooValue%'); // WHERE target LIKE '%fooValue%'
     * </code>
     *
     * @param     string $target The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByTarget($target = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($target)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $target)) {
                $target = str_replace('*', '%', $target);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::TARGET, $target, $comparison);
    }

    /**
     * Filter the query on the triggered column
     *
     * Example usage:
     * <code>
     * $query->filterByTriggered(1234); // WHERE triggered = 1234
     * $query->filterByTriggered(array(12, 34)); // WHERE triggered IN (12, 34)
     * $query->filterByTriggered(array('min' => 12)); // WHERE triggered > 12
     * </code>
     *
     * @param     mixed $triggered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByTriggered($triggered = null, $comparison = null)
    {
        if (is_array($triggered)) {
            $useMinMax = false;
            if (isset($triggered['min'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED, $triggered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($triggered['max'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED, $triggered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED, $triggered, $comparison);
    }

    /**
     * Filter the query on the triggered_first column
     *
     * Example usage:
     * <code>
     * $query->filterByTriggeredFirst('2011-03-14'); // WHERE triggered_first = '2011-03-14'
     * $query->filterByTriggeredFirst('now'); // WHERE triggered_first = '2011-03-14'
     * $query->filterByTriggeredFirst(array('max' => 'yesterday')); // WHERE triggered_first > '2011-03-13'
     * </code>
     *
     * @param     mixed $triggeredFirst The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByTriggeredFirst($triggeredFirst = null, $comparison = null)
    {
        if (is_array($triggeredFirst)) {
            $useMinMax = false;
            if (isset($triggeredFirst['min'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED_FIRST, $triggeredFirst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($triggeredFirst['max'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED_FIRST, $triggeredFirst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED_FIRST, $triggeredFirst, $comparison);
    }

    /**
     * Filter the query on the triggered_last column
     *
     * Example usage:
     * <code>
     * $query->filterByTriggeredLast('2011-03-14'); // WHERE triggered_last = '2011-03-14'
     * $query->filterByTriggeredLast('now'); // WHERE triggered_last = '2011-03-14'
     * $query->filterByTriggeredLast(array('max' => 'yesterday')); // WHERE triggered_last > '2011-03-13'
     * </code>
     *
     * @param     mixed $triggeredLast The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByTriggeredLast($triggeredLast = null, $comparison = null)
    {
        if (is_array($triggeredLast)) {
            $useMinMax = false;
            if (isset($triggeredLast['min'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED_LAST, $triggeredLast['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($triggeredLast['max'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED_LAST, $triggeredLast['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::TRIGGERED_LAST, $triggeredLast, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive(1234); // WHERE active = 1234
     * $query->filterByActive(array(12, 34)); // WHERE active IN (12, 34)
     * $query->filterByActive(array('min' => 12)); // WHERE active > 12
     * </code>
     *
     * @param     mixed $active The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::ACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the created_on column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedOn('2011-03-14'); // WHERE created_on = '2011-03-14'
     * $query->filterByCreatedOn('now'); // WHERE created_on = '2011-03-14'
     * $query->filterByCreatedOn(array('max' => 'yesterday')); // WHERE created_on > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdOn The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByCreatedOn($createdOn = null, $comparison = null)
    {
        if (is_array($createdOn)) {
            $useMinMax = false;
            if (isset($createdOn['min'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::CREATED_ON, $createdOn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdOn['max'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::CREATED_ON, $createdOn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::CREATED_ON, $createdOn, $comparison);
    }

    /**
     * Filter the query on the updated_on column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedOn('2011-03-14'); // WHERE updated_on = '2011-03-14'
     * $query->filterByUpdatedOn('now'); // WHERE updated_on = '2011-03-14'
     * $query->filterByUpdatedOn(array('max' => 'yesterday')); // WHERE updated_on > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedOn The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function filterByUpdatedOn($updatedOn = null, $comparison = null)
    {
        if (is_array($updatedOn)) {
            $useMinMax = false;
            if (isset($updatedOn['min'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::UPDATED_ON, $updatedOn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedOn['max'])) {
                $this->addUsingAlias(Redir301RedirectionsTableMap::UPDATED_ON, $updatedOn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Redir301RedirectionsTableMap::UPDATED_ON, $updatedOn, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildRedir301Redirections $redir301Redirections Object to remove from the list of results
     *
     * @return ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function prune($redir301Redirections = null)
    {
        if ($redir301Redirections) {
            $this->addUsingAlias(Redir301RedirectionsTableMap::ID, $redir301Redirections->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the redir301_redirections table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Redir301RedirectionsTableMap::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            Redir301RedirectionsTableMap::clearInstancePool();
            Redir301RedirectionsTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildRedir301Redirections or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildRedir301Redirections object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public function delete(ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Redir301RedirectionsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(Redir301RedirectionsTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        Redir301RedirectionsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            Redir301RedirectionsTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(Redir301RedirectionsTableMap::UPDATED_ON, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(Redir301RedirectionsTableMap::CREATED_ON, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(Redir301RedirectionsTableMap::UPDATED_ON);
    }

    /**
     * Order by update date asc
     *
     * @return     ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(Redir301RedirectionsTableMap::UPDATED_ON);
    }

    /**
     * Order by create date desc
     *
     * @return     ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(Redir301RedirectionsTableMap::CREATED_ON);
    }

    /**
     * Order by create date asc
     *
     * @return     ChildRedir301RedirectionsQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(Redir301RedirectionsTableMap::CREATED_ON);
    }

} // Redir301RedirectionsQuery
