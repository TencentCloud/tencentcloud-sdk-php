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
 * @method string getWhitelistStrategyId() 获取<p>白名单策略id</p>
 * @method void setWhitelistStrategyId(string $WhitelistStrategyId) 设置<p>白名单策略id</p>
 * @method string getStrategyType() 获取<p>策略类型</p>
 * @method void setStrategyType(string $StrategyType) 设置<p>策略类型</p>
 * @method string getName() 获取<p>白名单策略名</p>
 * @method void setName(string $Name) 设置<p>白名单策略名</p>
 * @method string getStrategyCategory() 获取<p>策略类型</p>
 * @method void setStrategyCategory(string $StrategyCategory) 设置<p>策略类型</p>
 * @method string getRule() 获取<p>策略规则</p>
 * @method void setRule(string $Rule) 设置<p>策略规则</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method string getAssetId() 获取<p>资产id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产id</p>
 * @method string getAccount() 获取<p>账号</p>
 * @method void setAccount(string $Account) 设置<p>账号</p>
 * @method string getHost() 获取<p>主机</p>
 * @method void setHost(string $Host) 设置<p>主机</p>
 * @method string getDescription() 获取<p>策略规则内容描述</p>
 * @method void setDescription(string $Description) 设置<p>策略规则内容描述</p>
 * @method string getRiskType() 获取<p>白名单类型。risk-风险白名单；alarm-告警白名单。</p>
 * @method void setRiskType(string $RiskType) 设置<p>白名单类型。risk-风险白名单；alarm-告警白名单。</p>
 * @method integer getAppId() 获取<p>资产所属账号app id</p>
 * @method void setAppId(integer $AppId) 设置<p>资产所属账号app id</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 * @method string getUin() 获取<p>资产所属账号uin</p>
 * @method void setUin(string $Uin) 设置<p>资产所属账号uin</p>
 * @method string getWhitelistType() 获取<p>白名单类型</p>
 * @method void setWhitelistType(string $WhitelistType) 设置<p>白名单类型</p>
 */
class DspmWhitelistStrategy extends AbstractModel
{
    /**
     * @var string <p>白名单策略id</p>
     */
    public $WhitelistStrategyId;

    /**
     * @var string <p>策略类型</p>
     */
    public $StrategyType;

    /**
     * @var string <p>白名单策略名</p>
     */
    public $Name;

    /**
     * @var string <p>策略类型</p>
     */
    public $StrategyCategory;

    /**
     * @var string <p>策略规则</p>
     */
    public $Rule;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>资产id</p>
     */
    public $AssetId;

    /**
     * @var string <p>账号</p>
     */
    public $Account;

    /**
     * @var string <p>主机</p>
     */
    public $Host;

    /**
     * @var string <p>策略规则内容描述</p>
     */
    public $Description;

    /**
     * @var string <p>白名单类型。risk-风险白名单；alarm-告警白名单。</p>
     */
    public $RiskType;

    /**
     * @var integer <p>资产所属账号app id</p>
     */
    public $AppId;

    /**
     * @var string <p>账号昵称</p>
     */
    public $NickName;

    /**
     * @var string <p>资产所属账号uin</p>
     */
    public $Uin;

    /**
     * @var string <p>白名单类型</p>
     */
    public $WhitelistType;

    /**
     * @param string $WhitelistStrategyId <p>白名单策略id</p>
     * @param string $StrategyType <p>策略类型</p>
     * @param string $Name <p>白名单策略名</p>
     * @param string $StrategyCategory <p>策略类型</p>
     * @param string $Rule <p>策略规则</p>
     * @param string $Remark <p>备注</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param string $AssetId <p>资产id</p>
     * @param string $Account <p>账号</p>
     * @param string $Host <p>主机</p>
     * @param string $Description <p>策略规则内容描述</p>
     * @param string $RiskType <p>白名单类型。risk-风险白名单；alarm-告警白名单。</p>
     * @param integer $AppId <p>资产所属账号app id</p>
     * @param string $NickName <p>账号昵称</p>
     * @param string $Uin <p>资产所属账号uin</p>
     * @param string $WhitelistType <p>白名单类型</p>
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

        if (array_key_exists("WhitelistType",$param) and $param["WhitelistType"] !== null) {
            $this->WhitelistType = $param["WhitelistType"];
        }
    }
}
