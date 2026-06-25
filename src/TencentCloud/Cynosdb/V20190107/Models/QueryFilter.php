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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤器。用于 DescribeClusterAndInstances 接口的过滤条件。
 *
 * @method array getValues() 获取字段值列表，与 Names 一一对应。InstanceId/ClusterId 为精确匹配，InstanceName 默认模糊匹配
 * @method void setValues(array $Values) 设置字段值列表，与 Names 一一对应。InstanceId/ClusterId 为精确匹配，InstanceName 默认模糊匹配
 * @method array getNames() 获取搜索字段名称列表，仅支持以下 3 个字段（不区分大小写，多个值为 OR 关系）：ClusterId（按集群 ID 过滤，精确匹配）、InstanceId（按实例 ID 反查所属集群）、InstanceName（按实例名称反查所属集群，默认 LIKE 模糊匹配，ExactMatch=true 时精确匹配）。InstanceId 与 InstanceName 同时传入时取交集（AND 语义）。
 * @method void setNames(array $Names) 设置搜索字段名称列表，仅支持以下 3 个字段（不区分大小写，多个值为 OR 关系）：ClusterId（按集群 ID 过滤，精确匹配）、InstanceId（按实例 ID 反查所属集群）、InstanceName（按实例名称反查所属集群，默认 LIKE 模糊匹配，ExactMatch=true 时精确匹配）。InstanceId 与 InstanceName 同时传入时取交集（AND 语义）。
 * @method boolean getExactMatch() 获取是否精确匹配。仅对 InstanceName 生效：true 精确匹配，false（默认）LIKE 模糊匹配。
 * @method void setExactMatch(boolean $ExactMatch) 设置是否精确匹配。仅对 InstanceName 生效：true 精确匹配，false（默认）LIKE 模糊匹配。
 * @method string getName() 获取搜索字段名称（单个字段模式，与 Names 二选一）。支持：ClusterId、InstanceId、InstanceName
 * @method void setName(string $Name) 设置搜索字段名称（单个字段模式，与 Names 二选一）。支持：ClusterId、InstanceId、InstanceName
 * @method string getOperator() 获取操作符（预留字段，当前未启用）。可选值：>、>=、!=、=、<、<=
 * @method void setOperator(string $Operator) 设置操作符（预留字段，当前未启用）。可选值：>、>=、!=、=、<、<=
 */
class QueryFilter extends AbstractModel
{
    /**
     * @var array 字段值列表，与 Names 一一对应。InstanceId/ClusterId 为精确匹配，InstanceName 默认模糊匹配
     */
    public $Values;

    /**
     * @var array 搜索字段名称列表，仅支持以下 3 个字段（不区分大小写，多个值为 OR 关系）：ClusterId（按集群 ID 过滤，精确匹配）、InstanceId（按实例 ID 反查所属集群）、InstanceName（按实例名称反查所属集群，默认 LIKE 模糊匹配，ExactMatch=true 时精确匹配）。InstanceId 与 InstanceName 同时传入时取交集（AND 语义）。
     */
    public $Names;

    /**
     * @var boolean 是否精确匹配。仅对 InstanceName 生效：true 精确匹配，false（默认）LIKE 模糊匹配。
     */
    public $ExactMatch;

    /**
     * @var string 搜索字段名称（单个字段模式，与 Names 二选一）。支持：ClusterId、InstanceId、InstanceName
     */
    public $Name;

    /**
     * @var string 操作符（预留字段，当前未启用）。可选值：>、>=、!=、=、<、<=
     * @deprecated
     */
    public $Operator;

    /**
     * @param array $Values 字段值列表，与 Names 一一对应。InstanceId/ClusterId 为精确匹配，InstanceName 默认模糊匹配
     * @param array $Names 搜索字段名称列表，仅支持以下 3 个字段（不区分大小写，多个值为 OR 关系）：ClusterId（按集群 ID 过滤，精确匹配）、InstanceId（按实例 ID 反查所属集群）、InstanceName（按实例名称反查所属集群，默认 LIKE 模糊匹配，ExactMatch=true 时精确匹配）。InstanceId 与 InstanceName 同时传入时取交集（AND 语义）。
     * @param boolean $ExactMatch 是否精确匹配。仅对 InstanceName 生效：true 精确匹配，false（默认）LIKE 模糊匹配。
     * @param string $Name 搜索字段名称（单个字段模式，与 Names 二选一）。支持：ClusterId、InstanceId、InstanceName
     * @param string $Operator 操作符（预留字段，当前未启用）。可选值：>、>=、!=、=、<、<=
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
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
