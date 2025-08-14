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
 * Owasp规则
 *
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method integer getStatus() 获取规则开关，0：关闭、1：开启、2：只观察
 * @method void setStatus(integer $Status) 设置规则开关，0：关闭、1：开启、2：只观察
 * @method integer getLevel() 获取规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
 * @method void setLevel(integer $Level) 设置规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
 * @method integer getVulLevel() 获取威胁等级，0：未知，100：低危，200：中危，300：高危，400：危急
 * @method void setVulLevel(integer $VulLevel) 设置威胁等级，0：未知，100：低危，200：中危，300：高危，400：危急
 * @method string getCveID() 获取CVE ID
 * @method void setCveID(string $CveID) 设置CVE ID
 * @method integer getTypeId() 获取规则所属的类型ID
 * @method void setTypeId(integer $TypeId) 设置规则所属的类型ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取更新时间
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
 * @method integer getLocked() 获取是否被锁定
 * @method void setLocked(integer $Locked) 设置是否被锁定
 * @method integer getReason() 获取修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
 * @method void setReason(integer $Reason) 设置修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
 */
class OwaspRule extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var integer 规则开关，0：关闭、1：开启、2：只观察
     */
    public $Status;

    /**
     * @var integer 规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
     */
    public $Level;

    /**
     * @var integer 威胁等级，0：未知，100：低危，200：中危，300：高危，400：危急
     */
    public $VulLevel;

    /**
     * @var string CVE ID
     */
    public $CveID;

    /**
     * @var integer 规则所属的类型ID
     */
    public $TypeId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $ModifyTime;

    /**
     * @var integer 是否被锁定
     */
    public $Locked;

    /**
     * @var integer 修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
     */
    public $Reason;

    /**
     * @param integer $RuleId 规则ID
     * @param string $Description 规则描述
     * @param integer $Status 规则开关，0：关闭、1：开启、2：只观察
     * @param integer $Level 规则的防护等级，100：宽松、200：正常、300：严格、400：超严格
     * @param integer $VulLevel 威胁等级，0：未知，100：低危，200：中危，300：高危，400：危急
     * @param string $CveID CVE ID
     * @param integer $TypeId 规则所属的类型ID
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 更新时间
     * @param integer $Locked 是否被锁定
     * @param integer $Reason 修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("CveID",$param) and $param["CveID"] !== null) {
            $this->CveID = $param["CveID"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
