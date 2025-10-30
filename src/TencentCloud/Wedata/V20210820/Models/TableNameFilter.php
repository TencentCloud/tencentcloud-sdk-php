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
 * 按表名查询的查询条件
 *
 * @method string getMsType() 获取数据源类型
 * @method void setMsType(string $MsType) 设置数据源类型
 * @method integer getDatasourceId() 获取数据源id
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源id
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getSchemaName() 获取schema
 * @method void setSchemaName(string $SchemaName) 设置schema
 * @method string getName() 获取表名
 * @method void setName(string $Name) 设置表名
 */
class TableNameFilter extends AbstractModel
{
    /**
     * @var string 数据源类型
     */
    public $MsType;

    /**
     * @var integer 数据源id
     */
    public $DatasourceId;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string schema
     */
    public $SchemaName;

    /**
     * @var string 表名
     */
    public $Name;

    /**
     * @param string $MsType 数据源类型
     * @param integer $DatasourceId 数据源id
     * @param string $DatabaseName 数据库名称
     * @param string $SchemaName schema
     * @param string $Name 表名
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
        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
