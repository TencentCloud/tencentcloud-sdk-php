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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险规则
 *
 * @method string getItemId() 获取风险检查项ID
 * @method void setItemId(string $ItemId) 设置风险检查项ID
 * @method string getProvider() 获取云厂商名称
 * @method void setProvider(string $Provider) 设置云厂商名称
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getInstanceName() 获取实例类型名称
 * @method void setInstanceName(string $InstanceName) 设置实例类型名称
 * @method string getRiskTitle() 获取风险名称
 * @method void setRiskTitle(string $RiskTitle) 设置风险名称
 * @method string getCheckType() 获取检查类型
 * @method void setCheckType(string $CheckType) 设置检查类型
 * @method string getSeverity() 获取风险等级
 * @method void setSeverity(string $Severity) 设置风险等级
 * @method string getRiskInfluence() 获取风险危害
 * @method void setRiskInfluence(string $RiskInfluence) 设置风险危害
 */
class RiskRuleItem extends AbstractModel
{
    /**
     * @var string 风险检查项ID
     */
    public $ItemId;

    /**
     * @var string 云厂商名称
     */
    public $Provider;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 实例类型名称
     */
    public $InstanceName;

    /**
     * @var string 风险名称
     */
    public $RiskTitle;

    /**
     * @var string 检查类型
     */
    public $CheckType;

    /**
     * @var string 风险等级
     */
    public $Severity;

    /**
     * @var string 风险危害
     */
    public $RiskInfluence;

    /**
     * @param string $ItemId 风险检查项ID
     * @param string $Provider 云厂商名称
     * @param string $InstanceType 实例类型
     * @param string $InstanceName 实例类型名称
     * @param string $RiskTitle 风险名称
     * @param string $CheckType 检查类型
     * @param string $Severity 风险等级
     * @param string $RiskInfluence 风险危害
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RiskTitle",$param) and $param["RiskTitle"] !== null) {
            $this->RiskTitle = $param["RiskTitle"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("RiskInfluence",$param) and $param["RiskInfluence"] !== null) {
            $this->RiskInfluence = $param["RiskInfluence"];
        }
    }
}
