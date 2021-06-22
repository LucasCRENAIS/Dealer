<?php

namespace Dealer\Model\Map;

use Dealer\Model\DealerVersion;
use Dealer\Model\DealerVersionQuery;
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
 * This class defines the structure of the 'dealer_version' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class DealerVersionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;
    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Dealer.Model.Map.DealerVersionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'thelia';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'dealer_version';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Dealer\\Model\\DealerVersion';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Dealer.Model.DealerVersion';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 29;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 29;

    /**
     * the column name for the ID field
     */
    const ID = 'dealer_version.ID';

    /**
     * the column name for the VISIBLE field
     */
    const VISIBLE = 'dealer_version.VISIBLE';

    /**
     * the column name for the ADDRESS1 field
     */
    const ADDRESS1 = 'dealer_version.ADDRESS1';

    /**
     * the column name for the ADDRESS2 field
     */
    const ADDRESS2 = 'dealer_version.ADDRESS2';

    /**
     * the column name for the ADDRESS3 field
     */
    const ADDRESS3 = 'dealer_version.ADDRESS3';

    /**
     * the column name for the ZIPCODE field
     */
    const ZIPCODE = 'dealer_version.ZIPCODE';

    /**
     * the column name for the CITY field
     */
    const CITY = 'dealer_version.CITY';

    /**
     * the column name for the COUNTRY_ID field
     */
    const COUNTRY_ID = 'dealer_version.COUNTRY_ID';

    /**
     * the column name for the LATITUDE field
     */
    const LATITUDE = 'dealer_version.LATITUDE';

    /**
     * the column name for the LONGITUDE field
     */
    const LONGITUDE = 'dealer_version.LONGITUDE';

    /**
     * the column name for the CREATED_AT field
     */
    const CREATED_AT = 'dealer_version.CREATED_AT';

    /**
     * the column name for the UPDATED_AT field
     */
    const UPDATED_AT = 'dealer_version.UPDATED_AT';

    /**
     * the column name for the VERSION field
     */
    const VERSION = 'dealer_version.VERSION';

    /**
     * the column name for the VERSION_CREATED_AT field
     */
    const VERSION_CREATED_AT = 'dealer_version.VERSION_CREATED_AT';

    /**
     * the column name for the VERSION_CREATED_BY field
     */
    const VERSION_CREATED_BY = 'dealer_version.VERSION_CREATED_BY';

    /**
     * the column name for the DEALER_SHEDULES_IDS field
     */
    const DEALER_SHEDULES_IDS = 'dealer_version.DEALER_SHEDULES_IDS';

    /**
     * the column name for the DEALER_SHEDULES_VERSIONS field
     */
    const DEALER_SHEDULES_VERSIONS = 'dealer_version.DEALER_SHEDULES_VERSIONS';

    /**
     * the column name for the DEALER_CONTACT_IDS field
     */
    const DEALER_CONTACT_IDS = 'dealer_version.DEALER_CONTACT_IDS';

    /**
     * the column name for the DEALER_CONTACT_VERSIONS field
     */
    const DEALER_CONTACT_VERSIONS = 'dealer_version.DEALER_CONTACT_VERSIONS';

    /**
     * the column name for the DEALER_CONTENT_IDS field
     */
    const DEALER_CONTENT_IDS = 'dealer_version.DEALER_CONTENT_IDS';

    /**
     * the column name for the DEALER_CONTENT_VERSIONS field
     */
    const DEALER_CONTENT_VERSIONS = 'dealer_version.DEALER_CONTENT_VERSIONS';

    /**
     * the column name for the DEALER_FOLDER_IDS field
     */
    const DEALER_FOLDER_IDS = 'dealer_version.DEALER_FOLDER_IDS';

    /**
     * the column name for the DEALER_FOLDER_VERSIONS field
     */
    const DEALER_FOLDER_VERSIONS = 'dealer_version.DEALER_FOLDER_VERSIONS';

    /**
     * the column name for the DEALER_BRAND_IDS field
     */
    const DEALER_BRAND_IDS = 'dealer_version.DEALER_BRAND_IDS';

    /**
     * the column name for the DEALER_BRAND_VERSIONS field
     */
    const DEALER_BRAND_VERSIONS = 'dealer_version.DEALER_BRAND_VERSIONS';

    /**
     * the column name for the DEALER_PRODUCT_IDS field
     */
    const DEALER_PRODUCT_IDS = 'dealer_version.DEALER_PRODUCT_IDS';

    /**
     * the column name for the DEALER_PRODUCT_VERSIONS field
     */
    const DEALER_PRODUCT_VERSIONS = 'dealer_version.DEALER_PRODUCT_VERSIONS';

    /**
     * the column name for the DEALER_ADMIN_IDS field
     */
    const DEALER_ADMIN_IDS = 'dealer_version.DEALER_ADMIN_IDS';

    /**
     * the column name for the DEALER_ADMIN_VERSIONS field
     */
    const DEALER_ADMIN_VERSIONS = 'dealer_version.DEALER_ADMIN_VERSIONS';

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
        self::TYPE_PHPNAME       => array('Id', 'Visible', 'Address1', 'Address2', 'Address3', 'Zipcode', 'City', 'CountryId', 'Latitude', 'Longitude', 'CreatedAt', 'UpdatedAt', 'Version', 'VersionCreatedAt', 'VersionCreatedBy', 'DealerShedulesIds', 'DealerShedulesVersions', 'DealerContactIds', 'DealerContactVersions', 'DealerContentIds', 'DealerContentVersions', 'DealerFolderIds', 'DealerFolderVersions', 'DealerBrandIds', 'DealerBrandVersions', 'DealerProductIds', 'DealerProductVersions', 'DealerAdminIds', 'DealerAdminVersions', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'visible', 'address1', 'address2', 'address3', 'zipcode', 'city', 'countryId', 'latitude', 'longitude', 'createdAt', 'updatedAt', 'version', 'versionCreatedAt', 'versionCreatedBy', 'dealerShedulesIds', 'dealerShedulesVersions', 'dealerContactIds', 'dealerContactVersions', 'dealerContentIds', 'dealerContentVersions', 'dealerFolderIds', 'dealerFolderVersions', 'dealerBrandIds', 'dealerBrandVersions', 'dealerProductIds', 'dealerProductVersions', 'dealerAdminIds', 'dealerAdminVersions', ),
        self::TYPE_COLNAME       => array(DealerVersionTableMap::ID, DealerVersionTableMap::VISIBLE, DealerVersionTableMap::ADDRESS1, DealerVersionTableMap::ADDRESS2, DealerVersionTableMap::ADDRESS3, DealerVersionTableMap::ZIPCODE, DealerVersionTableMap::CITY, DealerVersionTableMap::COUNTRY_ID, DealerVersionTableMap::LATITUDE, DealerVersionTableMap::LONGITUDE, DealerVersionTableMap::CREATED_AT, DealerVersionTableMap::UPDATED_AT, DealerVersionTableMap::VERSION, DealerVersionTableMap::VERSION_CREATED_AT, DealerVersionTableMap::VERSION_CREATED_BY, DealerVersionTableMap::DEALER_SHEDULES_IDS, DealerVersionTableMap::DEALER_SHEDULES_VERSIONS, DealerVersionTableMap::DEALER_CONTACT_IDS, DealerVersionTableMap::DEALER_CONTACT_VERSIONS, DealerVersionTableMap::DEALER_CONTENT_IDS, DealerVersionTableMap::DEALER_CONTENT_VERSIONS, DealerVersionTableMap::DEALER_FOLDER_IDS, DealerVersionTableMap::DEALER_FOLDER_VERSIONS, DealerVersionTableMap::DEALER_BRAND_IDS, DealerVersionTableMap::DEALER_BRAND_VERSIONS, DealerVersionTableMap::DEALER_PRODUCT_IDS, DealerVersionTableMap::DEALER_PRODUCT_VERSIONS, DealerVersionTableMap::DEALER_ADMIN_IDS, DealerVersionTableMap::DEALER_ADMIN_VERSIONS, ),
        self::TYPE_RAW_COLNAME   => array('ID', 'VISIBLE', 'ADDRESS1', 'ADDRESS2', 'ADDRESS3', 'ZIPCODE', 'CITY', 'COUNTRY_ID', 'LATITUDE', 'LONGITUDE', 'CREATED_AT', 'UPDATED_AT', 'VERSION', 'VERSION_CREATED_AT', 'VERSION_CREATED_BY', 'DEALER_SHEDULES_IDS', 'DEALER_SHEDULES_VERSIONS', 'DEALER_CONTACT_IDS', 'DEALER_CONTACT_VERSIONS', 'DEALER_CONTENT_IDS', 'DEALER_CONTENT_VERSIONS', 'DEALER_FOLDER_IDS', 'DEALER_FOLDER_VERSIONS', 'DEALER_BRAND_IDS', 'DEALER_BRAND_VERSIONS', 'DEALER_PRODUCT_IDS', 'DEALER_PRODUCT_VERSIONS', 'DEALER_ADMIN_IDS', 'DEALER_ADMIN_VERSIONS', ),
        self::TYPE_FIELDNAME     => array('id', 'visible', 'address1', 'address2', 'address3', 'zipcode', 'city', 'country_id', 'latitude', 'longitude', 'created_at', 'updated_at', 'version', 'version_created_at', 'version_created_by', 'dealer_shedules_ids', 'dealer_shedules_versions', 'dealer_contact_ids', 'dealer_contact_versions', 'dealer_content_ids', 'dealer_content_versions', 'dealer_folder_ids', 'dealer_folder_versions', 'dealer_brand_ids', 'dealer_brand_versions', 'dealer_product_ids', 'dealer_product_versions', 'dealer_admin_ids', 'dealer_admin_versions', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Visible' => 1, 'Address1' => 2, 'Address2' => 3, 'Address3' => 4, 'Zipcode' => 5, 'City' => 6, 'CountryId' => 7, 'Latitude' => 8, 'Longitude' => 9, 'CreatedAt' => 10, 'UpdatedAt' => 11, 'Version' => 12, 'VersionCreatedAt' => 13, 'VersionCreatedBy' => 14, 'DealerShedulesIds' => 15, 'DealerShedulesVersions' => 16, 'DealerContactIds' => 17, 'DealerContactVersions' => 18, 'DealerContentIds' => 19, 'DealerContentVersions' => 20, 'DealerFolderIds' => 21, 'DealerFolderVersions' => 22, 'DealerBrandIds' => 23, 'DealerBrandVersions' => 24, 'DealerProductIds' => 25, 'DealerProductVersions' => 26, 'DealerAdminIds' => 27, 'DealerAdminVersions' => 28, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'visible' => 1, 'address1' => 2, 'address2' => 3, 'address3' => 4, 'zipcode' => 5, 'city' => 6, 'countryId' => 7, 'latitude' => 8, 'longitude' => 9, 'createdAt' => 10, 'updatedAt' => 11, 'version' => 12, 'versionCreatedAt' => 13, 'versionCreatedBy' => 14, 'dealerShedulesIds' => 15, 'dealerShedulesVersions' => 16, 'dealerContactIds' => 17, 'dealerContactVersions' => 18, 'dealerContentIds' => 19, 'dealerContentVersions' => 20, 'dealerFolderIds' => 21, 'dealerFolderVersions' => 22, 'dealerBrandIds' => 23, 'dealerBrandVersions' => 24, 'dealerProductIds' => 25, 'dealerProductVersions' => 26, 'dealerAdminIds' => 27, 'dealerAdminVersions' => 28, ),
        self::TYPE_COLNAME       => array(DealerVersionTableMap::ID => 0, DealerVersionTableMap::VISIBLE => 1, DealerVersionTableMap::ADDRESS1 => 2, DealerVersionTableMap::ADDRESS2 => 3, DealerVersionTableMap::ADDRESS3 => 4, DealerVersionTableMap::ZIPCODE => 5, DealerVersionTableMap::CITY => 6, DealerVersionTableMap::COUNTRY_ID => 7, DealerVersionTableMap::LATITUDE => 8, DealerVersionTableMap::LONGITUDE => 9, DealerVersionTableMap::CREATED_AT => 10, DealerVersionTableMap::UPDATED_AT => 11, DealerVersionTableMap::VERSION => 12, DealerVersionTableMap::VERSION_CREATED_AT => 13, DealerVersionTableMap::VERSION_CREATED_BY => 14, DealerVersionTableMap::DEALER_SHEDULES_IDS => 15, DealerVersionTableMap::DEALER_SHEDULES_VERSIONS => 16, DealerVersionTableMap::DEALER_CONTACT_IDS => 17, DealerVersionTableMap::DEALER_CONTACT_VERSIONS => 18, DealerVersionTableMap::DEALER_CONTENT_IDS => 19, DealerVersionTableMap::DEALER_CONTENT_VERSIONS => 20, DealerVersionTableMap::DEALER_FOLDER_IDS => 21, DealerVersionTableMap::DEALER_FOLDER_VERSIONS => 22, DealerVersionTableMap::DEALER_BRAND_IDS => 23, DealerVersionTableMap::DEALER_BRAND_VERSIONS => 24, DealerVersionTableMap::DEALER_PRODUCT_IDS => 25, DealerVersionTableMap::DEALER_PRODUCT_VERSIONS => 26, DealerVersionTableMap::DEALER_ADMIN_IDS => 27, DealerVersionTableMap::DEALER_ADMIN_VERSIONS => 28, ),
        self::TYPE_RAW_COLNAME   => array('ID' => 0, 'VISIBLE' => 1, 'ADDRESS1' => 2, 'ADDRESS2' => 3, 'ADDRESS3' => 4, 'ZIPCODE' => 5, 'CITY' => 6, 'COUNTRY_ID' => 7, 'LATITUDE' => 8, 'LONGITUDE' => 9, 'CREATED_AT' => 10, 'UPDATED_AT' => 11, 'VERSION' => 12, 'VERSION_CREATED_AT' => 13, 'VERSION_CREATED_BY' => 14, 'DEALER_SHEDULES_IDS' => 15, 'DEALER_SHEDULES_VERSIONS' => 16, 'DEALER_CONTACT_IDS' => 17, 'DEALER_CONTACT_VERSIONS' => 18, 'DEALER_CONTENT_IDS' => 19, 'DEALER_CONTENT_VERSIONS' => 20, 'DEALER_FOLDER_IDS' => 21, 'DEALER_FOLDER_VERSIONS' => 22, 'DEALER_BRAND_IDS' => 23, 'DEALER_BRAND_VERSIONS' => 24, 'DEALER_PRODUCT_IDS' => 25, 'DEALER_PRODUCT_VERSIONS' => 26, 'DEALER_ADMIN_IDS' => 27, 'DEALER_ADMIN_VERSIONS' => 28, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'visible' => 1, 'address1' => 2, 'address2' => 3, 'address3' => 4, 'zipcode' => 5, 'city' => 6, 'country_id' => 7, 'latitude' => 8, 'longitude' => 9, 'created_at' => 10, 'updated_at' => 11, 'version' => 12, 'version_created_at' => 13, 'version_created_by' => 14, 'dealer_shedules_ids' => 15, 'dealer_shedules_versions' => 16, 'dealer_contact_ids' => 17, 'dealer_contact_versions' => 18, 'dealer_content_ids' => 19, 'dealer_content_versions' => 20, 'dealer_folder_ids' => 21, 'dealer_folder_versions' => 22, 'dealer_brand_ids' => 23, 'dealer_brand_versions' => 24, 'dealer_product_ids' => 25, 'dealer_product_versions' => 26, 'dealer_admin_ids' => 27, 'dealer_admin_versions' => 28, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $this->setName('dealer_version');
        $this->setPhpName('DealerVersion');
        $this->setClassName('\\Dealer\\Model\\DealerVersion');
        $this->setPackage('Dealer.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ID', 'Id', 'INTEGER' , 'dealer', 'ID', true, null, null);
        $this->addColumn('VISIBLE', 'Visible', 'TINYINT', true, null, 0);
        $this->addColumn('ADDRESS1', 'Address1', 'VARCHAR', true, 255, null);
        $this->addColumn('ADDRESS2', 'Address2', 'VARCHAR', false, 255, null);
        $this->addColumn('ADDRESS3', 'Address3', 'VARCHAR', false, 255, null);
        $this->addColumn('ZIPCODE', 'Zipcode', 'VARCHAR', true, 10, null);
        $this->addColumn('CITY', 'City', 'VARCHAR', true, 255, null);
        $this->addColumn('COUNTRY_ID', 'CountryId', 'INTEGER', true, null, null);
        $this->addColumn('LATITUDE', 'Latitude', 'DECIMAL', false, 16, 0);
        $this->addColumn('LONGITUDE', 'Longitude', 'DECIMAL', false, 16, 0);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addPrimaryKey('VERSION', 'Version', 'INTEGER', true, null, 0);
        $this->addColumn('VERSION_CREATED_AT', 'VersionCreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('VERSION_CREATED_BY', 'VersionCreatedBy', 'VARCHAR', false, 100, null);
        $this->addColumn('DEALER_SHEDULES_IDS', 'DealerShedulesIds', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_SHEDULES_VERSIONS', 'DealerShedulesVersions', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_CONTACT_IDS', 'DealerContactIds', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_CONTACT_VERSIONS', 'DealerContactVersions', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_CONTENT_IDS', 'DealerContentIds', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_CONTENT_VERSIONS', 'DealerContentVersions', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_FOLDER_IDS', 'DealerFolderIds', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_FOLDER_VERSIONS', 'DealerFolderVersions', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_BRAND_IDS', 'DealerBrandIds', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_BRAND_VERSIONS', 'DealerBrandVersions', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_PRODUCT_IDS', 'DealerProductIds', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_PRODUCT_VERSIONS', 'DealerProductVersions', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_ADMIN_IDS', 'DealerAdminIds', 'ARRAY', false, null, null);
        $this->addColumn('DEALER_ADMIN_VERSIONS', 'DealerAdminVersions', 'ARRAY', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Dealer', '\\Dealer\\Model\\Dealer', RelationMap::MANY_TO_ONE, array('id' => 'id', ), 'CASCADE', null);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \Dealer\Model\DealerVersion $obj A \Dealer\Model\DealerVersion object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getVersion()));
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \Dealer\Model\DealerVersion object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \Dealer\Model\DealerVersion) {
                $key = serialize(array((string) $value->getId(), (string) $value->getVersion()));

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \Dealer\Model\DealerVersion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Version', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize(array((string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], (string) $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Version', TableMap::TYPE_PHPNAME, $indexType)]));
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

            return $pks;
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
        return $withPrefix ? DealerVersionTableMap::CLASS_DEFAULT : DealerVersionTableMap::OM_CLASS;
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
     * @return array (DealerVersion object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = DealerVersionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = DealerVersionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + DealerVersionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DealerVersionTableMap::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            DealerVersionTableMap::addInstanceToPool($obj, $key);
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
            $key = DealerVersionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = DealerVersionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DealerVersionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(DealerVersionTableMap::ID);
            $criteria->addSelectColumn(DealerVersionTableMap::VISIBLE);
            $criteria->addSelectColumn(DealerVersionTableMap::ADDRESS1);
            $criteria->addSelectColumn(DealerVersionTableMap::ADDRESS2);
            $criteria->addSelectColumn(DealerVersionTableMap::ADDRESS3);
            $criteria->addSelectColumn(DealerVersionTableMap::ZIPCODE);
            $criteria->addSelectColumn(DealerVersionTableMap::CITY);
            $criteria->addSelectColumn(DealerVersionTableMap::COUNTRY_ID);
            $criteria->addSelectColumn(DealerVersionTableMap::LATITUDE);
            $criteria->addSelectColumn(DealerVersionTableMap::LONGITUDE);
            $criteria->addSelectColumn(DealerVersionTableMap::CREATED_AT);
            $criteria->addSelectColumn(DealerVersionTableMap::UPDATED_AT);
            $criteria->addSelectColumn(DealerVersionTableMap::VERSION);
            $criteria->addSelectColumn(DealerVersionTableMap::VERSION_CREATED_AT);
            $criteria->addSelectColumn(DealerVersionTableMap::VERSION_CREATED_BY);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_SHEDULES_IDS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_SHEDULES_VERSIONS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_CONTACT_IDS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_CONTACT_VERSIONS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_CONTENT_IDS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_CONTENT_VERSIONS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_FOLDER_IDS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_FOLDER_VERSIONS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_BRAND_IDS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_BRAND_VERSIONS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_PRODUCT_IDS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_PRODUCT_VERSIONS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_ADMIN_IDS);
            $criteria->addSelectColumn(DealerVersionTableMap::DEALER_ADMIN_VERSIONS);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.VISIBLE');
            $criteria->addSelectColumn($alias . '.ADDRESS1');
            $criteria->addSelectColumn($alias . '.ADDRESS2');
            $criteria->addSelectColumn($alias . '.ADDRESS3');
            $criteria->addSelectColumn($alias . '.ZIPCODE');
            $criteria->addSelectColumn($alias . '.CITY');
            $criteria->addSelectColumn($alias . '.COUNTRY_ID');
            $criteria->addSelectColumn($alias . '.LATITUDE');
            $criteria->addSelectColumn($alias . '.LONGITUDE');
            $criteria->addSelectColumn($alias . '.CREATED_AT');
            $criteria->addSelectColumn($alias . '.UPDATED_AT');
            $criteria->addSelectColumn($alias . '.VERSION');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_AT');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_BY');
            $criteria->addSelectColumn($alias . '.DEALER_SHEDULES_IDS');
            $criteria->addSelectColumn($alias . '.DEALER_SHEDULES_VERSIONS');
            $criteria->addSelectColumn($alias . '.DEALER_CONTACT_IDS');
            $criteria->addSelectColumn($alias . '.DEALER_CONTACT_VERSIONS');
            $criteria->addSelectColumn($alias . '.DEALER_CONTENT_IDS');
            $criteria->addSelectColumn($alias . '.DEALER_CONTENT_VERSIONS');
            $criteria->addSelectColumn($alias . '.DEALER_FOLDER_IDS');
            $criteria->addSelectColumn($alias . '.DEALER_FOLDER_VERSIONS');
            $criteria->addSelectColumn($alias . '.DEALER_BRAND_IDS');
            $criteria->addSelectColumn($alias . '.DEALER_BRAND_VERSIONS');
            $criteria->addSelectColumn($alias . '.DEALER_PRODUCT_IDS');
            $criteria->addSelectColumn($alias . '.DEALER_PRODUCT_VERSIONS');
            $criteria->addSelectColumn($alias . '.DEALER_ADMIN_IDS');
            $criteria->addSelectColumn($alias . '.DEALER_ADMIN_VERSIONS');
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
        return Propel::getServiceContainer()->getDatabaseMap(DealerVersionTableMap::DATABASE_NAME)->getTable(DealerVersionTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getServiceContainer()->getDatabaseMap(DealerVersionTableMap::DATABASE_NAME);
      if (!$dbMap->hasTable(DealerVersionTableMap::TABLE_NAME)) {
        $dbMap->addTableObject(new DealerVersionTableMap());
      }
    }

    /**
     * Performs a DELETE on the database, given a DealerVersion or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or DealerVersion object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(DealerVersionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Dealer\Model\DealerVersion) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DealerVersionTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(DealerVersionTableMap::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(DealerVersionTableMap::VERSION, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = DealerVersionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) { DealerVersionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) { DealerVersionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the dealer_version table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return DealerVersionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a DealerVersion or Criteria object.
     *
     * @param mixed               $criteria Criteria or DealerVersion object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(DealerVersionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from DealerVersion object
        }


        // Set the correct dbName
        $query = DealerVersionQuery::create()->mergeWith($criteria);

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

} // DealerVersionTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
DealerVersionTableMap::buildTableMap();
