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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEWRuleStatus请求参数结构体
 *
 * @method string getEdgeId() 获取vpc规则必填，边id
 * @method void setEdgeId(string $EdgeId) 设置vpc规则必填，边id
 * @method integer getStatus() 获取是否开关开启，0：未开启，1：开启
 * @method void setStatus(integer $Status) 设置是否开关开启，0：未开启，1：开启
 * @method integer getDirection() 获取规则方向，0：出站，1：入站，默认1
 * @method void setDirection(integer $Direction) 设置规则方向，0：出站，1：入站，默认1
 * @method integer getRuleSequence() 获取更改的规则当前执行顺序
 * @method void setRuleSequence(integer $RuleSequence) 设置更改的规则当前执行顺序
 * @method string getRuleType() 获取规则类型，vpc：VPC间规则、nat：Nat边界规则
 * @method void setRuleType(string $RuleType) 设置规则类型，vpc：VPC间规则、nat：Nat边界规则
 */
class ModifyEWRuleStatusRequest extends AbstractModel
{
    /**
     * @var string vpc规则必填，边id
     */
    public $EdgeId;

    /**
     * @var integer 是否开关开启，0：未开启，1：开启
     */
    public $Status;

    /**
     * @var integer 规则方向，0：出站，1：入站，默认1
     */
    public $Direction;

    /**
     * @var integer 更改的规则当前执行顺序
     */
    public $RuleSequence;

    /**
     * @var string 规则类型，vpc：VPC间规则、nat：Nat边界规则
     */
    public $RuleType;

    /**
     * @param string $EdgeId vpc规则必填，边id
     * @param integer $Status 是否开关开启，0：未开启，1：开启
     * @param integer $Direction 规则方向，0：出站，1：入站，默认1
     * @param integer $RuleSequence 更改的规则当前执行顺序
     * @param string $RuleType 规则类型，vpc：VPC间规则、nat：Nat边界规则
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RuleSequence",$param) and $param["RuleSequence"] !== null) {
            $this->RuleSequence = $param["RuleSequence"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
