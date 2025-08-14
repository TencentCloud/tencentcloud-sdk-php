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
 * ModifyOwaspRuleStatus请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getRuleStatus() 获取规则开关，0：关闭、1：开启、2：只观察
 * @method void setRuleStatus(integer $RuleStatus) 设置规则开关，0：关闭、1：开启、2：只观察
 * @method boolean getSelectAll() 获取是否全选
 * @method void setSelectAll(boolean $SelectAll) 设置是否全选
 * @method array getRuleIDs() 获取规则ID列表
 * @method void setRuleIDs(array $RuleIDs) 设置规则ID列表
 * @method integer getTypeId() 获取如果反转需要传入类型
 * @method void setTypeId(integer $TypeId) 设置如果反转需要传入类型
 * @method integer getReason() 获取修改原因 0：无(兼容记录为空) 1：业务自身特性误报避免 2：规则误报上报 3：核心业务规则灰度 4：其它
 * @method void setReason(integer $Reason) 设置修改原因 0：无(兼容记录为空) 1：业务自身特性误报避免 2：规则误报上报 3：核心业务规则灰度 4：其它
 */
class ModifyOwaspRuleStatusRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 规则开关，0：关闭、1：开启、2：只观察
     */
    public $RuleStatus;

    /**
     * @var boolean 是否全选
     */
    public $SelectAll;

    /**
     * @var array 规则ID列表
     */
    public $RuleIDs;

    /**
     * @var integer 如果反转需要传入类型
     */
    public $TypeId;

    /**
     * @var integer 修改原因 0：无(兼容记录为空) 1：业务自身特性误报避免 2：规则误报上报 3：核心业务规则灰度 4：其它
     */
    public $Reason;

    /**
     * @param string $Domain 域名
     * @param integer $RuleStatus 规则开关，0：关闭、1：开启、2：只观察
     * @param boolean $SelectAll 是否全选
     * @param array $RuleIDs 规则ID列表
     * @param integer $TypeId 如果反转需要传入类型
     * @param integer $Reason 修改原因 0：无(兼容记录为空) 1：业务自身特性误报避免 2：规则误报上报 3：核心业务规则灰度 4：其它
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

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
