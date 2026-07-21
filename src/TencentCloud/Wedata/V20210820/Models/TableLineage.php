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
 * @method string getDatasourceId() 获取<p>数据源id</p>
 * @method void setDatasourceId(string $DatasourceId) 设置<p>数据源id</p>
 * @method string getDatabaseName() 获取<p>库名称</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>库名称</p>
 * @method string getTableName() 获取<p>表名称</p>
 * @method void setTableName(string $TableName) 设置<p>表名称</p>
 * @method string getCatalogName() 获取<p>catalog值,仅使用DLC且开启TcLake的支持,其他类型传空即可</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>catalog值,仅使用DLC且开启TcLake的支持,其他类型传空即可</p>
 * @method string getSchemaName() 获取<p>schema名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名称</p>
 * @method array getExtParams() 获取<p>扩展参数</p>
 * @method void setExtParams(array $ExtParams) 设置<p>扩展参数</p>
 * @method string getTableType() 获取<p>table类型 TABLE｜VIEW</p>
 * @method void setTableType(string $TableType) 设置<p>table类型 TABLE｜VIEW</p>
 */
class TableLineage extends AbstractModel
{
    /**
     * @var string <p>数据源id</p>
     */
    public $DatasourceId;

    /**
     * @var string <p>库名称</p>
     */
    public $DatabaseName;

    /**
     * @var string <p>表名称</p>
     */
    public $TableName;

    /**
     * @var string <p>catalog值,仅使用DLC且开启TcLake的支持,其他类型传空即可</p>
     */
    public $CatalogName;

    /**
     * @var string <p>schema名称</p>
     */
    public $SchemaName;

    /**
     * @var array <p>扩展参数</p>
     */
    public $ExtParams;

    /**
     * @var string <p>table类型 TABLE｜VIEW</p>
     */
    public $TableType;

    /**
     * @param string $DatasourceId <p>数据源id</p>
     * @param string $DatabaseName <p>库名称</p>
     * @param string $TableName <p>表名称</p>
     * @param string $CatalogName <p>catalog值,仅使用DLC且开启TcLake的支持,其他类型传空即可</p>
     * @param string $SchemaName <p>schema名称</p>
     * @param array $ExtParams <p>扩展参数</p>
     * @param string $TableType <p>table类型 TABLE｜VIEW</p>
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
