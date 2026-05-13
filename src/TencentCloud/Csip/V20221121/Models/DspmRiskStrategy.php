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
 * Dspm 风险策略
 *
 * @method string getStrategyType() 获取策略类型
 * @method void setStrategyType(string $StrategyType) 设置策略类型
 * @method string getName() 获取策略名
 * @method void setName(string $Name) 设置策略名
 * @method string getStrategyCategory() 获取策略类型
 * @method void setStrategyCategory(string $StrategyCategory) 设置策略类型
 * @method integer getIsEnabled() 获取是否启用。0-禁用 1-启用
 * @method void setIsEnabled(integer $IsEnabled) 设置是否启用。0-禁用 1-启用
 * @method string getRiskLevel() 获取风险等级。
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级。
 * @method string getRule() 获取策略规则
 * @method void setRule(string $Rule) 设置策略规则
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getDescription() 获取策略内容
 * @method void setDescription(string $Description) 设置策略内容
 * @method integer getHitCount() 获取命中次数
 * @method void setHitCount(integer $HitCount) 设置命中次数
 * @method string getRiskType() 获取风险类型。risk-风险；alarm-告警。
 * @method void setRiskType(string $RiskType) 设置风险类型。risk-风险；alarm-告警。
 * @method integer getAppId() 获取资产所属账号app id
 * @method void setAppId(integer $AppId) 设置资产所属账号app id
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method string getUin() 获取资产所属账号uin
 * @method void setUin(string $Uin) 设置资产所属账号uin
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 */
class DspmRiskStrategy extends AbstractModel
{
    /**
     * @var string 策略类型
     */
    public $StrategyType;

    /**
     * @var string 策略名
     */
    public $Name;

    /**
     * @var string 策略类型
     */
    public $StrategyCategory;

    /**
     * @var integer 是否启用。0-禁用 1-启用
     */
    public $IsEnabled;

    /**
     * @var string 风险等级。
     */
    public $RiskLevel;

    /**
     * @var string 策略规则
     */
    public $Rule;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 策略内容
     */
    public $Description;

    /**
     * @var integer 命中次数
     */
    public $HitCount;

    /**
     * @var string 风险类型。risk-风险；alarm-告警。
     */
    public $RiskType;

    /**
     * @var integer 资产所属账号app id
     */
    public $AppId;

    /**
     * @var string 账号昵称
     */
    public $NickName;

    /**
     * @var string 资产所属账号uin
     */
    public $Uin;

    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @param string $StrategyType 策略类型
     * @param string $Name 策略名
     * @param string $StrategyCategory 策略类型
     * @param integer $IsEnabled 是否启用。0-禁用 1-启用
     * @param string $RiskLevel 风险等级。
     * @param string $Rule 策略规则
     * @param string $Remark 备注
     * @param string $Description 策略内容
     * @param integer $HitCount 命中次数
     * @param string $RiskType 风险类型。risk-风险；alarm-告警。
     * @param integer $AppId 资产所属账号app id
     * @param string $NickName 账号昵称
     * @param string $Uin 资产所属账号uin
     * @param integer $StrategyId 策略id
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
