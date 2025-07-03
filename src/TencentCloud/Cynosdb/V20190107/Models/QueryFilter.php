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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤器
 *
 * @method array getValues() 获取搜索字符串
 * @method void setValues(array $Values) 设置搜索字符串
 * @method array getNames() 获取搜索字段，目前支持："InstanceId", "ProjectId", "InstanceName", "Vip"
 * @method void setNames(array $Names) 设置搜索字段，目前支持："InstanceId", "ProjectId", "InstanceName", "Vip"
 * @method boolean getExactMatch() 获取是否精确匹配
 * @method void setExactMatch(boolean $ExactMatch) 设置是否精确匹配
 * @method string getName() 获取搜索字段
 * @method void setName(string $Name) 设置搜索字段
 * @method string getOperator() 获取操作符
 * @method void setOperator(string $Operator) 设置操作符
 */
class QueryFilter extends AbstractModel
{
    /**
     * @var array 搜索字符串
     */
    public $Values;

    /**
     * @var array 搜索字段，目前支持："InstanceId", "ProjectId", "InstanceName", "Vip"
     */
    public $Names;

    /**
     * @var boolean 是否精确匹配
     */
    public $ExactMatch;

    /**
     * @var string 搜索字段
     */
    public $Name;

    /**
     * @var string 操作符
     */
    public $Operator;

    /**
     * @param array $Values 搜索字符串
     * @param array $Names 搜索字段，目前支持："InstanceId", "ProjectId", "InstanceName", "Vip"
     * @param boolean $ExactMatch 是否精确匹配
     * @param string $Name 搜索字段
     * @param string $Operator 操作符
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
