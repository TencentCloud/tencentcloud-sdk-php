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
 * ReportTable请求参数结构体
 *
 * @method integer getDatasourceId() 获取数据源id
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源id
 * @method string getDatabaseName() 获取database名称,字符长度128内
 * @method void setDatabaseName(string $DatabaseName) 设置database名称,字符长度128内
 * @method string getTableName() 获取table名称,字符长度128内
 * @method void setTableName(string $TableName) 设置table名称,字符长度128内
 * @method string getType() 获取表类型,VIEW/TABLE
 * @method void setType(string $Type) 设置表类型,VIEW/TABLE
 * @method string getSchemaName() 获取schema名称,字符长度128内
 * @method void setSchemaName(string $SchemaName) 设置schema名称,字符长度128内
 * @method string getDescription() 获取描述,字符长度1000内
 * @method void setDescription(string $Description) 设置描述,字符长度1000内
 * @method integer getCreateTime() 获取创建时间戳,毫秒,为空默认当前时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳,毫秒,为空默认当前时间
 * @method integer getModifiedTime() 获取修改时间戳,毫秒,为空默认当前时间
 * @method void setModifiedTime(integer $ModifiedTime) 设置修改时间戳,毫秒,为空默认当前时间
 * @method array getColumns() 获取字段信息
 * @method void setColumns(array $Columns) 设置字段信息
 */
class ReportTableRequest extends AbstractModel
{
    /**
     * @var integer 数据源id
     */
    public $DatasourceId;

    /**
     * @var string database名称,字符长度128内
     */
    public $DatabaseName;

    /**
     * @var string table名称,字符长度128内
     */
    public $TableName;

    /**
     * @var string 表类型,VIEW/TABLE
     */
    public $Type;

    /**
     * @var string schema名称,字符长度128内
     */
    public $SchemaName;

    /**
     * @var string 描述,字符长度1000内
     */
    public $Description;

    /**
     * @var integer 创建时间戳,毫秒,为空默认当前时间
     */
    public $CreateTime;

    /**
     * @var integer 修改时间戳,毫秒,为空默认当前时间
     */
    public $ModifiedTime;

    /**
     * @var array 字段信息
     */
    public $Columns;

    /**
     * @param integer $DatasourceId 数据源id
     * @param string $DatabaseName database名称,字符长度128内
     * @param string $TableName table名称,字符长度128内
     * @param string $Type 表类型,VIEW/TABLE
     * @param string $SchemaName schema名称,字符长度128内
     * @param string $Description 描述,字符长度1000内
     * @param integer $CreateTime 创建时间戳,毫秒,为空默认当前时间
     * @param integer $ModifiedTime 修改时间戳,毫秒,为空默认当前时间
     * @param array $Columns 字段信息
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new ReportColumnInfo();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }
    }
}
