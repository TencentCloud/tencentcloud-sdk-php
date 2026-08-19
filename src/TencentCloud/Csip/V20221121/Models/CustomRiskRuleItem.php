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
 * 自定义策略详情
 *
 * @method string getRuleID() 获取<p>风险规则ID</p>
 * @method void setRuleID(string $RuleID) 设置<p>风险规则ID</p>
 * @method string getProvider() 获取<p>腾讯云</p>
 * @method void setProvider(string $Provider) 设置<p>腾讯云</p>
 * @method string getRiskTitle() 获取<p>风险标题</p>
 * @method void setRiskTitle(string $RiskTitle) 设置<p>风险标题</p>
 * @method string getClassify() 获取<p>风险分类</p>
 * @method void setClassify(string $Classify) 设置<p>风险分类</p>
 * @method string getSeverity() 获取<p>风险等级</p>
 * @method void setSeverity(string $Severity) 设置<p>风险等级</p>
 * @method string getStatus() 获取<p>风险规则开启状态</p>
 * @method void setStatus(string $Status) 设置<p>风险规则开启状态</p>
 * @method integer getRelatedUinCount() 获取<p>关联的账号数量</p>
 * @method void setRelatedUinCount(integer $RelatedUinCount) 设置<p>关联的账号数量</p>
 * @method integer getPolicyEnableCount() 获取<p>策略启用的账号数量</p>
 * @method void setPolicyEnableCount(integer $PolicyEnableCount) 设置<p>策略启用的账号数量</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method integer getIsFree() 获取<p>规则是否免费</p>
 * @method void setIsFree(integer $IsFree) 设置<p>规则是否免费</p>
 * @method string getCheckType() 获取<p>检查类型</p>
 * @method void setCheckType(string $CheckType) 设置<p>检查类型</p>
 * @method array getStandardTerms() 获取<p>安全条款规范</p>
 * @method void setStandardTerms(array $StandardTerms) 设置<p>安全条款规范</p>
 * @method string getAssetTypeIconURL() 获取<p>资产类型图标</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) 设置<p>资产类型图标</p>
 */
class CustomRiskRuleItem extends AbstractModel
{
    /**
     * @var string <p>风险规则ID</p>
     */
    public $RuleID;

    /**
     * @var string <p>腾讯云</p>
     */
    public $Provider;

    /**
     * @var string <p>风险标题</p>
     */
    public $RiskTitle;

    /**
     * @var string <p>风险分类</p>
     */
    public $Classify;

    /**
     * @var string <p>风险等级</p>
     */
    public $Severity;

    /**
     * @var string <p>风险规则开启状态</p>
     */
    public $Status;

    /**
     * @var integer <p>关联的账号数量</p>
     */
    public $RelatedUinCount;

    /**
     * @var integer <p>策略启用的账号数量</p>
     */
    public $PolicyEnableCount;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var integer <p>规则是否免费</p>
     */
    public $IsFree;

    /**
     * @var string <p>检查类型</p>
     */
    public $CheckType;

    /**
     * @var array <p>安全条款规范</p>
     */
    public $StandardTerms;

    /**
     * @var string <p>资产类型图标</p>
     */
    public $AssetTypeIconURL;

    /**
     * @param string $RuleID <p>风险规则ID</p>
     * @param string $Provider <p>腾讯云</p>
     * @param string $RiskTitle <p>风险标题</p>
     * @param string $Classify <p>风险分类</p>
     * @param string $Severity <p>风险等级</p>
     * @param string $Status <p>风险规则开启状态</p>
     * @param integer $RelatedUinCount <p>关联的账号数量</p>
     * @param integer $PolicyEnableCount <p>策略启用的账号数量</p>
     * @param string $AssetType <p>资产类型</p>
     * @param integer $IsFree <p>规则是否免费</p>
     * @param string $CheckType <p>检查类型</p>
     * @param array $StandardTerms <p>安全条款规范</p>
     * @param string $AssetTypeIconURL <p>资产类型图标</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("RiskTitle",$param) and $param["RiskTitle"] !== null) {
            $this->RiskTitle = $param["RiskTitle"];
        }

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = $param["Classify"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RelatedUinCount",$param) and $param["RelatedUinCount"] !== null) {
            $this->RelatedUinCount = $param["RelatedUinCount"];
        }

        if (array_key_exists("PolicyEnableCount",$param) and $param["PolicyEnableCount"] !== null) {
            $this->PolicyEnableCount = $param["PolicyEnableCount"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("StandardTerms",$param) and $param["StandardTerms"] !== null) {
            $this->StandardTerms = [];
            foreach ($param["StandardTerms"] as $key => $value){
                $obj = new StandardTerm();
                $obj->deserialize($value);
                array_push($this->StandardTerms, $obj);
            }
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }
    }
}
