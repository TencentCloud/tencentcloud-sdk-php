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
 * DeleteCustomFunction请求参数结构体
 *
 * @method string getClusterIdentifier() 获取集群实例 ID
 * @method void setClusterIdentifier(string $ClusterIdentifier) 设置集群实例 ID
 * @method string getFunctionId() 获取函数 ID
 * @method void setFunctionId(string $FunctionId) 设置函数 ID
 * @method string getProjectId() 获取项目ID，必须填
 * @method void setProjectId(string $ProjectId) 设置项目ID，必须填
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getFunctionType() 获取函数类型，HIVE，SPARK，DLC，CDW_POSTGRESQL
 * @method void setFunctionType(string $FunctionType) 设置函数类型，HIVE，SPARK，DLC，CDW_POSTGRESQL
 * @method string getDatabaseName() 获取数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
 * @method string getSchemaName() 获取模式名
 * @method void setSchemaName(string $SchemaName) 设置模式名
 * @method string getCommandFormat() 获取函数命令格式
 * @method void setCommandFormat(string $CommandFormat) 设置函数命令格式
 */
class DeleteCustomFunctionRequest extends AbstractModel
{
    /**
     * @var string 集群实例 ID
     */
    public $ClusterIdentifier;

    /**
     * @var string 函数 ID
     */
    public $FunctionId;

    /**
     * @var string 项目ID，必须填
     */
    public $ProjectId;

    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数类型，HIVE，SPARK，DLC，CDW_POSTGRESQL
     */
    public $FunctionType;

    /**
     * @var string 数据库名
     */
    public $DatabaseName;

    /**
     * @var string 模式名
     */
    public $SchemaName;

    /**
     * @var string 函数命令格式
     */
    public $CommandFormat;

    /**
     * @param string $ClusterIdentifier 集群实例 ID
     * @param string $FunctionId 函数 ID
     * @param string $ProjectId 项目ID，必须填
     * @param string $FunctionName 函数名称
     * @param string $FunctionType 函数类型，HIVE，SPARK，DLC，CDW_POSTGRESQL
     * @param string $DatabaseName 数据库名
     * @param string $SchemaName 模式名
     * @param string $CommandFormat 函数命令格式
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
        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionType",$param) and $param["FunctionType"] !== null) {
            $this->FunctionType = $param["FunctionType"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("CommandFormat",$param) and $param["CommandFormat"] !== null) {
            $this->CommandFormat = $param["CommandFormat"];
        }
    }
}
