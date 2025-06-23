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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查项视角风险
 *
 * @method string getRiskRuleId() 获取检查项规则ID
 * @method void setRiskRuleId(string $RiskRuleId) 设置检查项规则ID
 * @method string getRiskTitle() 获取风险名称
 * @method void setRiskTitle(string $RiskTitle) 设置风险名称
 * @method string getCheckType() 获取检查类型
 * @method void setCheckType(string $CheckType) 设置检查类型
 * @method string getSeverity() 获取风险等级
 * @method void setSeverity(string $Severity) 设置风险等级
 * @method string getRiskDesc() 获取存在1个风险项
 * @method void setRiskDesc(string $RiskDesc) 设置存在1个风险项
 * @method string getCreateTime() 获取首次发现时间
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
 * @method string getUpdateTime() 获取风险更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置风险更新时间
 * @method string getProvider() 获取云厂商
 * @method void setProvider(string $Provider) 设置云厂商
 * @method integer getRiskStatus() 获取风险状态
 * @method void setRiskStatus(integer $RiskStatus) 设置风险状态
 * @method integer getAssetCount() 获取受影响资产数量
 * @method void setAssetCount(integer $AssetCount) 设置受影响资产数量
 * @method integer getRiskCount() 获取风险数量
 * @method void setRiskCount(integer $RiskCount) 设置风险数量
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getEventType() 获取事件类型
 * @method void setEventType(string $EventType) 设置事件类型
 */
class CheckViewRiskItem extends AbstractModel
{
    /**
     * @var string 检查项规则ID
     */
    public $RiskRuleId;

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
     * @var string 存在1个风险项
     */
    public $RiskDesc;

    /**
     * @var string 首次发现时间
     */
    public $CreateTime;

    /**
     * @var string 风险更新时间
     */
    public $UpdateTime;

    /**
     * @var string 云厂商
     */
    public $Provider;

    /**
     * @var integer 风险状态
     */
    public $RiskStatus;

    /**
     * @var integer 受影响资产数量
     */
    public $AssetCount;

    /**
     * @var integer 风险数量
     */
    public $RiskCount;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 事件类型
     */
    public $EventType;

    /**
     * @param string $RiskRuleId 检查项规则ID
     * @param string $RiskTitle 风险名称
     * @param string $CheckType 检查类型
     * @param string $Severity 风险等级
     * @param string $RiskDesc 存在1个风险项
     * @param string $CreateTime 首次发现时间
     * @param string $UpdateTime 风险更新时间
     * @param string $Provider 云厂商
     * @param integer $RiskStatus 风险状态
     * @param integer $AssetCount 受影响资产数量
     * @param integer $RiskCount 风险数量
     * @param string $AssetType 资产类型
     * @param string $EventType 事件类型
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
        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
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

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }
    }
}
