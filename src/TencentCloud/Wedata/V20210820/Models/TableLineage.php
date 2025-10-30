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
 * 表血缘节点
 *
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method string getDatabaseName() 获取库名称
 * @method void setDatabaseName(string $DatabaseName) 设置库名称
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method string getCatalogName() 获取catalog值
 * @method void setCatalogName(string $CatalogName) 设置catalog值
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method array getExtParams() 获取扩展参数
 * @method void setExtParams(array $ExtParams) 设置扩展参数
 * @method string getTableType() 获取table类型 TABLE｜VIEW
 * @method void setTableType(string $TableType) 设置table类型 TABLE｜VIEW
 */
class TableLineage extends AbstractModel
{
    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var string 库名称
     */
    public $DatabaseName;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var string catalog值
     */
    public $CatalogName;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var array 扩展参数
     */
    public $ExtParams;

    /**
     * @var string table类型 TABLE｜VIEW
     */
    public $TableType;

    /**
     * @param string $DatasourceId 数据源id
     * @param string $DatabaseName 库名称
     * @param string $TableName 表名称
     * @param string $CatalogName catalog值
     * @param string $SchemaName schema名称
     * @param array $ExtParams 扩展参数
     * @param string $TableType table类型 TABLE｜VIEW
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

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("ExtParams",$param) and $param["ExtParams"] !== null) {
            $this->ExtParams = [];
            foreach ($param["ExtParams"] as $key => $value){
                $obj = new ExtParam();
                $obj->deserialize($value);
                array_push($this->ExtParams, $obj);
            }
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }
    }
}
