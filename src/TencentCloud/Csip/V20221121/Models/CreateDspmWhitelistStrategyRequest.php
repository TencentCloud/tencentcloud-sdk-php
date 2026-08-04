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
 * CreateDspmWhitelistStrategy请求参数结构体
 *
 * @method string getStrategyType() 获取<p>策略类型</p>
 * @method void setStrategyType(string $StrategyType) 设置<p>策略类型</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getName() 获取<p>白名单</p>
 * @method void setName(string $Name) 设置<p>白名单</p>
 * @method string getRule() 获取<p>规则</p>
 * @method void setRule(string $Rule) 设置<p>规则</p>
 * @method string getAssetId() 获取<p>资产id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产id</p>
 * @method string getAccount() 获取<p>账号</p>
 * @method void setAccount(string $Account) 设置<p>账号</p>
 * @method string getHost() 获取<p>主机</p>
 * @method void setHost(string $Host) 设置<p>主机</p>
 * @method string getRiskId() 获取<p>风险id</p>
 * @method void setRiskId(string $RiskId) 设置<p>风险id</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getWhitelistType() 获取<p>白名单的类型</p><p>枚举值：</p><ul><li>static_risk： 静态配置扫描的白名单规则</li><li>audit： 审计白名单规则</li><li>ueba： ueba相关的白名单规则</li></ul>
 * @method void setWhitelistType(string $WhitelistType) 设置<p>白名单的类型</p><p>枚举值：</p><ul><li>static_risk： 静态配置扫描的白名单规则</li><li>audit： 审计白名单规则</li><li>ueba： ueba相关的白名单规则</li></ul>
 */
class CreateDspmWhitelistStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>策略类型</p>
     */
    public $StrategyType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>白名单</p>
     */
    public $Name;

    /**
     * @var string <p>规则</p>
     */
    public $Rule;

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
     * @var string <p>风险id</p>
     */
    public $RiskId;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>白名单的类型</p><p>枚举值：</p><ul><li>static_risk： 静态配置扫描的白名单规则</li><li>audit： 审计白名单规则</li><li>ueba： ueba相关的白名单规则</li></ul>
     */
    public $WhitelistType;

    /**
     * @param string $StrategyType <p>策略类型</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Name <p>白名单</p>
     * @param string $Rule <p>规则</p>
     * @param string $AssetId <p>资产id</p>
     * @param string $Account <p>账号</p>
     * @param string $Host <p>主机</p>
     * @param string $RiskId <p>风险id</p>
     * @param string $Remark <p>备注</p>
     * @param string $WhitelistType <p>白名单的类型</p><p>枚举值：</p><ul><li>static_risk： 静态配置扫描的白名单规则</li><li>audit： 审计白名单规则</li><li>ueba： ueba相关的白名单规则</li></ul>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
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

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("WhitelistType",$param) and $param["WhitelistType"] !== null) {
            $this->WhitelistType = $param["WhitelistType"];
        }
    }
}
