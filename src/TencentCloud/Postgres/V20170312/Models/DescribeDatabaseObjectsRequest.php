<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseObjects请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getObjectType() 获取查询的对象类型。支持查询的数据对象有：database,schema,sequence,procedure,type,function,table,view,matview,column。
 * @method void setObjectType(string $ObjectType) 设置查询的对象类型。支持查询的数据对象有：database,schema,sequence,procedure,type,function,table,view,matview,column。
 * @method integer getLimit() 获取单次显示数量，默认20。可选范围为[0,100]。
 * @method void setLimit(integer $Limit) 设置单次显示数量，默认20。可选范围为[0,100]。
 * @method integer getOffset() 获取数据偏移量，从0开始。	
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始。	
 * @method string getDatabaseName() 获取查询对象所属的数据库。当查询对象类型不为database时，此参数必填。
 * @method void setDatabaseName(string $DatabaseName) 设置查询对象所属的数据库。当查询对象类型不为database时，此参数必填。
 * @method string getSchemaName() 获取查询对象所属的模式。当查询对象类型不为database、schema时，此参数必填。
 * @method void setSchemaName(string $SchemaName) 设置查询对象所属的模式。当查询对象类型不为database、schema时，此参数必填。
 * @method string getTableName() 获取查询对象所属的表。当查询对象类型为column时，此参数必填。
 * @method void setTableName(string $TableName) 设置查询对象所属的表。当查询对象类型为column时，此参数必填。
 */
class DescribeDatabaseObjectsRequest extends AbstractModel
{
    /**
     * @var string 实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 查询的对象类型。支持查询的数据对象有：database,schema,sequence,procedure,type,function,table,view,matview,column。
     */
    public $ObjectType;

    /**
     * @var integer 单次显示数量，默认20。可选范围为[0,100]。
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，从0开始。	
     */
    public $Offset;

    /**
     * @var string 查询对象所属的数据库。当查询对象类型不为database时，此参数必填。
     */
    public $DatabaseName;

    /**
     * @var string 查询对象所属的模式。当查询对象类型不为database、schema时，此参数必填。
     */
    public $SchemaName;

    /**
     * @var string 查询对象所属的表。当查询对象类型为column时，此参数必填。
     */
    public $TableName;

    /**
     * @param string $DBInstanceId 实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $ObjectType 查询的对象类型。支持查询的数据对象有：database,schema,sequence,procedure,type,function,table,view,matview,column。
     * @param integer $Limit 单次显示数量，默认20。可选范围为[0,100]。
     * @param integer $Offset 数据偏移量，从0开始。	
     * @param string $DatabaseName 查询对象所属的数据库。当查询对象类型不为database时，此参数必填。
     * @param string $SchemaName 查询对象所属的模式。当查询对象类型不为database、schema时，此参数必填。
     * @param string $TableName 查询对象所属的表。当查询对象类型为column时，此参数必填。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
