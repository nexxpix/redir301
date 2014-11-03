<?php

namespace Redir301\Model\Map;

use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;
use Redir301\Model\Redir301Redirections;
use Redir301\Model\Redir301RedirectionsQuery;


/**
 * This class defines the structure of the 'redir301_redirections' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class Redir301RedirectionsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;
    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Redir301.Model.Map.Redir301RedirectionsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'thelia';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'redir301_redirections';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Redir301\\Model\\Redir301Redirections';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Redir301.Model.Redir301Redirections';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the ID field
     */
    const ID = 'redir301_redirections.ID';

    /**
     * the column name for the PATTERN field
     */
    const PATTERN = 'redir301_redirections.PATTERN';

    /**
     * the column name for the TARGET field
     */
    const TARGET = 'redir301_redirections.TARGET';

    /**
     * the column name for the TRIGGERED field
     */
    const TRIGGERED = 'redir301_redirections.TRIGGERED';

    /**
     * the column name for the TRIGGERED_FIRST field
     */
    const TRIGGERED_FIRST = 'redir301_redirections.TRIGGERED_FIRST';

    /**
     * the column name for the TRIGGERED_LAST field
     */
    const TRIGGERED_LAST = 'redir301_redirections.TRIGGERED_LAST';

    /**
     * the column name for the ACTIVE field
     */
    const ACTIVE = 'redir301_redirections.ACTIVE';

    /**
     * the column name for the CREATED_ON field
     */
    const CREATED_ON = 'redir301_redirections.CREATED_ON';

    /**
     * the column name for the UPDATED_ON field
     */
    const UPDATED_ON = 'redir301_redirections.UPDATED_ON';

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
        self::TYPE_PHPNAME       => array('Id', 'Pattern', 'Target', 'Triggered', 'TriggeredFirst', 'TriggeredLast', 'Active', 'CreatedOn', 'UpdatedOn', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'pattern', 'target', 'triggered', 'triggeredFirst', 'triggeredLast', 'active', 'createdOn', 'updatedOn', ),
        self::TYPE_COLNAME       => array(Redir301RedirectionsTableMap::ID, Redir301RedirectionsTableMap::PATTERN, Redir301RedirectionsTableMap::TARGET, Redir301RedirectionsTableMap::TRIGGERED, Redir301RedirectionsTableMap::TRIGGERED_FIRST, Redir301RedirectionsTableMap::TRIGGERED_LAST, Redir301RedirectionsTableMap::ACTIVE, Redir301RedirectionsTableMap::CREATED_ON, Redir301RedirectionsTableMap::UPDATED_ON, ),
        self::TYPE_RAW_COLNAME   => array('ID', 'PATTERN', 'TARGET', 'TRIGGERED', 'TRIGGERED_FIRST', 'TRIGGERED_LAST', 'ACTIVE', 'CREATED_ON', 'UPDATED_ON', ),
        self::TYPE_FIELDNAME     => array('id', 'pattern', 'target', 'triggered', 'triggered_first', 'triggered_last', 'active', 'created_on', 'updated_on', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Pattern' => 1, 'Target' => 2, 'Triggered' => 3, 'TriggeredFirst' => 4, 'TriggeredLast' => 5, 'Active' => 6, 'CreatedOn' => 7, 'UpdatedOn' => 8, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'pattern' => 1, 'target' => 2, 'triggered' => 3, 'triggeredFirst' => 4, 'triggeredLast' => 5, 'active' => 6, 'createdOn' => 7, 'updatedOn' => 8, ),
        self::TYPE_COLNAME       => array(Redir301RedirectionsTableMap::ID => 0, Redir301RedirectionsTableMap::PATTERN => 1, Redir301RedirectionsTableMap::TARGET => 2, Redir301RedirectionsTableMap::TRIGGERED => 3, Redir301RedirectionsTableMap::TRIGGERED_FIRST => 4, Redir301RedirectionsTableMap::TRIGGERED_LAST => 5, Redir301RedirectionsTableMap::ACTIVE => 6, Redir301RedirectionsTableMap::CREATED_ON => 7, Redir301RedirectionsTableMap::UPDATED_ON => 8, ),
        self::TYPE_RAW_COLNAME   => array('ID' => 0, 'PATTERN' => 1, 'TARGET' => 2, 'TRIGGERED' => 3, 'TRIGGERED_FIRST' => 4, 'TRIGGERED_LAST' => 5, 'ACTIVE' => 6, 'CREATED_ON' => 7, 'UPDATED_ON' => 8, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'pattern' => 1, 'target' => 2, 'triggered' => 3, 'triggered_first' => 4, 'triggered_last' => 5, 'active' => 6, 'created_on' => 7, 'updated_on' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('redir301_redirections');
        $this->setPhpName('Redir301Redirections');
        $this->setClassName('\\Redir301\\Model\\Redir301Redirections');
        $this->setPackage('Redir301.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('PATTERN', 'Pattern', 'VARCHAR', true, 255, null);
        $this->addColumn('TARGET', 'Target', 'VARCHAR', true, 255, null);
        $this->addColumn('TRIGGERED', 'Triggered', 'INTEGER', false, null, null);
        $this->addColumn('TRIGGERED_FIRST', 'TriggeredFirst', 'TIMESTAMP', false, null, null);
        $this->addColumn('TRIGGERED_LAST', 'TriggeredLast', 'TIMESTAMP', false, null, null);
        $this->addColumn('ACTIVE', 'Active', 'TINYINT', true, null, null);
        $this->addColumn('CREATED_ON', 'CreatedOn', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_ON', 'UpdatedOn', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' => array('create_column' => 'created_on', 'update_column' => 'updated_on', ),
        );
    } // getBehaviors()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
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
        return $withPrefix ? Redir301RedirectionsTableMap::CLASS_DEFAULT : Redir301RedirectionsTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     * @return array (Redir301Redirections object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = Redir301RedirectionsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = Redir301RedirectionsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + Redir301RedirectionsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = Redir301RedirectionsTableMap::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            Redir301RedirectionsTableMap::addInstanceToPool($obj, $key);
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
     *         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = Redir301RedirectionsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = Redir301RedirectionsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                Redir301RedirectionsTableMap::addInstanceToPool($obj, $key);
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
     *         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::ID);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::PATTERN);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::TARGET);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::TRIGGERED);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::TRIGGERED_FIRST);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::TRIGGERED_LAST);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::ACTIVE);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::CREATED_ON);
            $criteria->addSelectColumn(Redir301RedirectionsTableMap::UPDATED_ON);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.PATTERN');
            $criteria->addSelectColumn($alias . '.TARGET');
            $criteria->addSelectColumn($alias . '.TRIGGERED');
            $criteria->addSelectColumn($alias . '.TRIGGERED_FIRST');
            $criteria->addSelectColumn($alias . '.TRIGGERED_LAST');
            $criteria->addSelectColumn($alias . '.ACTIVE');
            $criteria->addSelectColumn($alias . '.CREATED_ON');
            $criteria->addSelectColumn($alias . '.UPDATED_ON');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(Redir301RedirectionsTableMap::DATABASE_NAME)->getTable(Redir301RedirectionsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getServiceContainer()->getDatabaseMap(Redir301RedirectionsTableMap::DATABASE_NAME);
      if (!$dbMap->hasTable(Redir301RedirectionsTableMap::TABLE_NAME)) {
        $dbMap->addTableObject(new Redir301RedirectionsTableMap());
      }
    }

    /**
     * Performs a DELETE on the database, given a Redir301Redirections or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Redir301Redirections object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Redir301RedirectionsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Redir301\Model\Redir301Redirections) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(Redir301RedirectionsTableMap::DATABASE_NAME);
            $criteria->add(Redir301RedirectionsTableMap::ID, (array) $values, Criteria::IN);
        }

        $query = Redir301RedirectionsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) { Redir301RedirectionsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) { Redir301RedirectionsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the redir301_redirections table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return Redir301RedirectionsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Redir301Redirections or Criteria object.
     *
     * @param mixed               $criteria Criteria or Redir301Redirections object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Redir301RedirectionsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Redir301Redirections object
        }

        if ($criteria->containsKey(Redir301RedirectionsTableMap::ID) && $criteria->keyContainsValue(Redir301RedirectionsTableMap::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.Redir301RedirectionsTableMap::ID.')');
        }


        // Set the correct dbName
        $query = Redir301RedirectionsQuery::create()->mergeWith($criteria);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = $query->doInsert($con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

} // Redir301RedirectionsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Redir301RedirectionsTableMap::buildTableMap();
