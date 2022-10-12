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
 * CreateCustomFunction请求参数结构体
 *
 * @method string getType() 获取类型：HIVE、SPARK
 * @method void setType(string $Type) 设置类型：HIVE、SPARK
 * @method string getKind() 获取分类：窗口函数、聚合函数、日期函数......
 * @method void setKind(string $Kind) 设置分类：窗口函数、聚合函数、日期函数......
 * @method string getName() 获取函数名称
 * @method void setName(string $Name) 设置函数名称
 * @method string getClusterIdentifier() 获取集群实例引擎 ID
 * @method void setClusterIdentifier(string $ClusterIdentifier) 设置集群实例引擎 ID
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class CreateCustomFunctionRequest extends AbstractModel
{
    /**
     * @var string 类型：HIVE、SPARK
     */
    public $Type;

    /**
     * @var string 分类：窗口函数、聚合函数、日期函数......
     */
    public $Kind;

    /**
     * @var string 函数名称
     */
    public $Name;

    /**
     * @var string 集群实例引擎 ID
     */
    public $ClusterIdentifier;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param string $Type 类型：HIVE、SPARK
     * @param string $Kind 分类：窗口函数、聚合函数、日期函数......
     * @param string $Name 函数名称
     * @param string $ClusterIdentifier 集群实例引擎 ID
     * @param string $DbName 数据库名称
     * @param string $ProjectId 项目ID
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
