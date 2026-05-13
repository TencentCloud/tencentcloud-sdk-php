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
 * Dspm 白名单策略
 *
 * @method string getWhitelistStrategyId() 获取白名单策略id
 * @method void setWhitelistStrategyId(string $WhitelistStrategyId) 设置白名单策略id
 * @method string getStrategyType() 获取策略类型
 * @method void setStrategyType(string $StrategyType) 设置策略类型
 * @method string getName() 获取白名单策略名
 * @method void setName(string $Name) 设置白名单策略名
 * @method string getStrategyCategory() 获取策略类型
 * @method void setStrategyCategory(string $StrategyCategory) 设置策略类型
 * @method string getRule() 获取策略规则
 * @method void setRule(string $Rule) 设置策略规则
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getHost() 获取主机
 * @method void setHost(string $Host) 设置主机
 * @method string getDescription() 获取策略规则内容描述
 * @method void setDescription(string $Description) 设置策略规则内容描述
 * @method string getRiskType() 获取白名单类型。risk-风险白名单；alarm-告警白名单。
 * @method void setRiskType(string $RiskType) 设置白名单类型。risk-风险白名单；alarm-告警白名单。
 * @method integer getAppId() 获取资产所属账号app id
 * @method void setAppId(integer $AppId) 设置资产所属账号app id
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method string getUin() 获取资产所属账号uin
 * @method void setUin(string $Uin) 设置资产所属账号uin
 */
class DspmWhitelistStrategy extends AbstractModel
{
    /**
     * @var string 白名单策略id
     */
    public $WhitelistStrategyId;

    /**
     * @var string 策略类型
     */
    public $StrategyType;

    /**
     * @var string 白名单策略名
     */
    public $Name;

    /**
     * @var string 策略类型
     */
    public $StrategyCategory;

    /**
     * @var string 策略规则
     */
    public $Rule;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 账号
     */
    public $Account;

    /**
     * @var string 主机
     */
    public $Host;

    /**
     * @var string 策略规则内容描述
     */
    public $Description;

    /**
     * @var string 白名单类型。risk-风险白名单；alarm-告警白名单。
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
     * @param string $WhitelistStrategyId 白名单策略id
     * @param string $StrategyType 策略类型
     * @param string $Name 白名单策略名
     * @param string $StrategyCategory 策略类型
     * @param string $Rule 策略规则
     * @param string $Remark 备注
     * @param string $ModifyTime 修改时间
     * @param string $AssetId 资产id
     * @param string $Account 账号
     * @param string $Host 主机
     * @param string $Description 策略规则内容描述
     * @param string $RiskType 白名单类型。risk-风险白名单；alarm-告警白名单。
     * @param integer $AppId 资产所属账号app id
     * @param string $NickName 账号昵称
     * @param string $Uin 资产所属账号uin
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
        if (array_key_exists("WhitelistStrategyId",$param) and $param["WhitelistStrategyId"] !== null) {
            $this->WhitelistStrategyId = $param["WhitelistStrategyId"];
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

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
    }
}
