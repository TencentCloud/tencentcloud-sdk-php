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
 * 描述数据库中某个对象所属的类型、是在哪个数据库、模式、表中的对象。
 *
 * @method string getObjectType() 获取<p>支持使用的数据库对象类型有：account,database,schema,sequence,procedure,type,function,table,view,matview,column。</p>
 * @method void setObjectType(string $ObjectType) 设置<p>支持使用的数据库对象类型有：account,database,schema,sequence,procedure,type,function,table,view,matview,column。</p>
 * @method string getObjectName() 获取<p>所描述的数据库对象名称，或者当ModifyType为grantRole / revokeRole时，必须等于顶层UserName</p>
 * @method void setObjectName(string $ObjectName) 设置<p>所描述的数据库对象名称，或者当ModifyType为grantRole / revokeRole时，必须等于顶层UserName</p>
 * @method string getDatabaseName() 获取<p>所要描述的数据库对象，所属的数据库名称。当描述对象类型不为database时，此参数必选。</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>所要描述的数据库对象，所属的数据库名称。当描述对象类型不为database时，此参数必选。</p>
 * @method string getSchemaName() 获取<p>所要描述的数据库对象，所属的模式名称。当描述对象不为database、schema时，此参数必选。</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>所要描述的数据库对象，所属的模式名称。当描述对象不为database、schema时，此参数必选。</p>
 * @method string getTableName() 获取<p>所要描述的数据库对象，所属的表名称。当描述的对象类型为column时，此参数必填。</p>
 * @method void setTableName(string $TableName) 设置<p>所要描述的数据库对象，所属的表名称。当描述的对象类型为column时，此参数必填。</p>
 */
class DatabaseObject extends AbstractModel
{
    /**
     * @var string <p>支持使用的数据库对象类型有：account,database,schema,sequence,procedure,type,function,table,view,matview,column。</p>
     */
    public $ObjectType;

    /**
     * @var string <p>所描述的数据库对象名称，或者当ModifyType为grantRole / revokeRole时，必须等于顶层UserName</p>
     */
    public $ObjectName;

    /**
     * @var string <p>所要描述的数据库对象，所属的数据库名称。当描述对象类型不为database时，此参数必选。</p>
     */
    public $DatabaseName;

    /**
     * @var string <p>所要描述的数据库对象，所属的模式名称。当描述对象不为database、schema时，此参数必选。</p>
     */
    public $SchemaName;

    /**
     * @var string <p>所要描述的数据库对象，所属的表名称。当描述的对象类型为column时，此参数必填。</p>
     */
    public $TableName;

    /**
     * @param string $ObjectType <p>支持使用的数据库对象类型有：account,database,schema,sequence,procedure,type,function,table,view,matview,column。</p>
     * @param string $ObjectName <p>所描述的数据库对象名称，或者当ModifyType为grantRole / revokeRole时，必须等于顶层UserName</p>
     * @param string $DatabaseName <p>所要描述的数据库对象，所属的数据库名称。当描述对象类型不为database时，此参数必选。</p>
     * @param string $SchemaName <p>所要描述的数据库对象，所属的模式名称。当描述对象不为database、schema时，此参数必选。</p>
     * @param string $TableName <p>所要描述的数据库对象，所属的表名称。当描述的对象类型为column时，此参数必填。</p>
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
        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
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
