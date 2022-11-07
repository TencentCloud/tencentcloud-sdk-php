<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableSchemaInfo请求参数结构体
 *
 * @method string getName() 获取表名称
 * @method void setName(string $Name) 设置表名称
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getMsType() 获取表类型
 * @method void setMsType(string $MsType) 设置表类型
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method string getConnectionType() 获取HIVE传rpc
 * @method void setConnectionType(string $ConnectionType) 设置HIVE传rpc
 * @method string getSchemaName() 获取元数据Database下的Schema名称
 * @method void setSchemaName(string $SchemaName) 设置元数据Database下的Schema名称
 */
class DescribeTableSchemaInfoRequest extends AbstractModel
{
    /**
     * @var string 表名称
     */
    public $Name;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 表类型
     */
    public $MsType;

    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var string HIVE传rpc
     */
    public $ConnectionType;

    /**
     * @var string 元数据Database下的Schema名称
     */
    public $SchemaName;

    /**
     * @param string $Name 表名称
     * @param string $DatabaseName 数据库名称
     * @param string $MsType 表类型
     * @param string $DatasourceId 数据源id
     * @param string $ConnectionType HIVE传rpc
     * @param string $SchemaName 元数据Database下的Schema名称
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
