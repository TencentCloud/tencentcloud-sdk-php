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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权重策略配置。
 *
 * @method string getFunctionId() 获取函数 ID 。
 * @method void setFunctionId(string $FunctionId) 设置函数 ID 。
 * @method integer getWeight() 获取选中权重。取值范围0-100，所有的权重之和需要为100。
选中概率计算方式为：
weight/100。例如设置了两个函数 A 和 B ，其中 A 的权重为30，那么 B 的权重必须为70，最终选中 A 的概率为30%，选中 B 的概率为70%。
 * @method void setWeight(integer $Weight) 设置选中权重。取值范围0-100，所有的权重之和需要为100。
选中概率计算方式为：
weight/100。例如设置了两个函数 A 和 B ，其中 A 的权重为30，那么 B 的权重必须为70，最终选中 A 的概率为30%，选中 B 的概率为70%。
 */
class FunctionWeightedSelection extends AbstractModel
{
    /**
     * @var string 函数 ID 。
     */
    public $FunctionId;

    /**
     * @var integer 选中权重。取值范围0-100，所有的权重之和需要为100。
选中概率计算方式为：
weight/100。例如设置了两个函数 A 和 B ，其中 A 的权重为30，那么 B 的权重必须为70，最终选中 A 的概率为30%，选中 B 的概率为70%。
     */
    public $Weight;

    /**
     * @param string $FunctionId 函数 ID 。
     * @param integer $Weight 选中权重。取值范围0-100，所有的权重之和需要为100。
选中概率计算方式为：
weight/100。例如设置了两个函数 A 和 B ，其中 A 的权重为30，那么 B 的权重必须为70，最终选中 A 的概率为30%，选中 B 的概率为70%。
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
