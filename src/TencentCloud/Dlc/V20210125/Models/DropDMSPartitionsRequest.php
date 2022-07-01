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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DropDMSPartitions请求参数结构体
 *
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getSchemaName() 获取数据库Schema名称
 * @method void setSchemaName(string $SchemaName) 设置数据库Schema名称
 * @method string getTableName() 获取数据表名称
 * @method void setTableName(string $TableName) 设置数据表名称
 * @method string getName() 获取分区名称
 * @method void setName(string $Name) 设置分区名称
 * @method array getValues() 获取单个分区名称
 * @method void setValues(array $Values) 设置单个分区名称
 * @method boolean getDeleteData() 获取是否删除分区数据
 * @method void setDeleteData(boolean $DeleteData) 设置是否删除分区数据
 */
class DropDMSPartitionsRequest extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 数据库Schema名称
     */
    public $SchemaName;

    /**
     * @var string 数据表名称
     */
    public $TableName;

    /**
     * @var string 分区名称
     */
    public $Name;

    /**
     * @var array 单个分区名称
     */
    public $Values;

    /**
     * @var boolean 是否删除分区数据
     */
    public $DeleteData;

    /**
     * @param string $DatabaseName 数据库名称
     * @param string $SchemaName 数据库Schema名称
     * @param string $TableName 数据表名称
     * @param string $Name 分区名称
     * @param array $Values 单个分区名称
     * @param boolean $DeleteData 是否删除分区数据
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("DeleteData",$param) and $param["DeleteData"] !== null) {
            $this->DeleteData = $param["DeleteData"];
        }
    }
}
