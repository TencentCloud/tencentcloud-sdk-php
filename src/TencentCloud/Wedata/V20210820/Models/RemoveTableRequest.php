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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveTable请求参数结构体
 *
 * @method integer getDatasourceId() 获取数据源id
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源id
 * @method string getDatabaseName() 获取database名称
 * @method void setDatabaseName(string $DatabaseName) 设置database名称
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 */
class RemoveTableRequest extends AbstractModel
{
    /**
     * @var integer 数据源id
     */
    public $DatasourceId;

    /**
     * @var string database名称
     */
    public $DatabaseName;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @param integer $DatasourceId 数据源id
     * @param string $DatabaseName database名称
     * @param string $SchemaName schema名称
     * @param string $TableName 表名称
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
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
