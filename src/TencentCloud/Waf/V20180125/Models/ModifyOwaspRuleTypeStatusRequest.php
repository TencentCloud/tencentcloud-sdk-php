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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOwaspRuleTypeStatus请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getTypeIDs() 获取规则类型ID列表
 * @method void setTypeIDs(array $TypeIDs) 设置规则类型ID列表
 * @method integer getRuleTypeStatus() 获取规则类型的开关状态，0：关闭、1：开启
 * @method void setRuleTypeStatus(integer $RuleTypeStatus) 设置规则类型的开关状态，0：关闭、1：开启
 */
class ModifyOwaspRuleTypeStatusRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 规则类型ID列表
     */
    public $TypeIDs;

    /**
     * @var integer 规则类型的开关状态，0：关闭、1：开启
     */
    public $RuleTypeStatus;

    /**
     * @param string $Domain 域名
     * @param array $TypeIDs 规则类型ID列表
     * @param integer $RuleTypeStatus 规则类型的开关状态，0：关闭、1：开启
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TypeIDs",$param) and $param["TypeIDs"] !== null) {
            $this->TypeIDs = $param["TypeIDs"];
        }

        if (array_key_exists("RuleTypeStatus",$param) and $param["RuleTypeStatus"] !== null) {
            $this->RuleTypeStatus = $param["RuleTypeStatus"];
        }
    }
}
