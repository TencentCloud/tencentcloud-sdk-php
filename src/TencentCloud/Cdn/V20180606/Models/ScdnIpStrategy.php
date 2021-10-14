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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * scdn的IP白名单策略
 *
 * @method string getDomain() 获取域名|global表示全部域名
 * @method void setDomain(string $Domain) 设置域名|global表示全部域名
 * @method string getStrategyId() 获取策略ID
 * @method void setStrategyId(string $StrategyId) 设置策略ID
 * @method array getIpList() 获取IP白名单列表
 * @method void setIpList(array $IpList) 设置IP白名单列表
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getRuleType() 获取规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleValue() 获取规则值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleValue(array $RuleValue) 设置规则值
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScdnIpStrategy extends AbstractModel
{
    /**
     * @var string 域名|global表示全部域名
     */
    public $Domain;

    /**
     * @var string 策略ID
     */
    public $StrategyId;

    /**
     * @var array IP白名单列表
     */
    public $IpList;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 规则类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var array 规则值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleValue;

    /**
     * @param string $Domain 域名|global表示全部域名
     * @param string $StrategyId 策略ID
     * @param array $IpList IP白名单列表
     * @param string $UpdateTime 更新时间
     * @param string $Remark 备注
     * @param string $RuleType 规则类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleValue 规则值
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }
    }
}
