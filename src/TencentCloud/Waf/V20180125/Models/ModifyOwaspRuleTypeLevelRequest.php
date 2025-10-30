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
 * ModifyOwaspRuleTypeLevel请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getTypeIDs() 获取规则类型ID列表
 * @method void setTypeIDs(array $TypeIDs) 设置规则类型ID列表
 * @method integer getRuleTypeLevel() 获取规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
 * @method void setRuleTypeLevel(integer $RuleTypeLevel) 设置规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
 */
class ModifyOwaspRuleTypeLevelRequest extends AbstractModel
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
     * @var integer 规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
     */
    public $RuleTypeLevel;

    /**
     * @param string $Domain 域名
     * @param array $TypeIDs 规则类型ID列表
     * @param integer $RuleTypeLevel 规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
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

        if (array_key_exists("RuleTypeLevel",$param) and $param["RuleTypeLevel"] !== null) {
            $this->RuleTypeLevel = $param["RuleTypeLevel"];
        }
    }
}
