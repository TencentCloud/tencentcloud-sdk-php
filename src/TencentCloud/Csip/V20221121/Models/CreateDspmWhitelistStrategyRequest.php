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
 * @method string getStrategyType() 获取策略类型
 * @method void setStrategyType(string $StrategyType) 设置策略类型
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method string getName() 获取白名单
 * @method void setName(string $Name) 设置白名单
 * @method string getRule() 获取规则
 * @method void setRule(string $Rule) 设置规则
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getHost() 获取主机
 * @method void setHost(string $Host) 设置主机
 * @method string getRiskId() 获取风险id
 * @method void setRiskId(string $RiskId) 设置风险id
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateDspmWhitelistStrategyRequest extends AbstractModel
{
    /**
     * @var string 策略类型
     */
    public $StrategyType;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var string 白名单
     */
    public $Name;

    /**
     * @var string 规则
     */
    public $Rule;

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
     * @var string 风险id
     */
    public $RiskId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $StrategyType 策略类型
     * @param array $MemberId 集团账号的成员id
     * @param string $Name 白名单
     * @param string $Rule 规则
     * @param string $AssetId 资产id
     * @param string $Account 账号
     * @param string $Host 主机
     * @param string $RiskId 风险id
     * @param string $Remark 备注
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
    }
}
