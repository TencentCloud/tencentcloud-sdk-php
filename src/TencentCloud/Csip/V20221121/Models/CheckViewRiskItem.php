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
 * 检查项视角风险
 *
 * @method string getRiskRuleId() 获取<p>检查项规则ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) 设置<p>检查项规则ID</p>
 * @method string getRiskTitle() 获取<p>风险名称</p>
 * @method void setRiskTitle(string $RiskTitle) 设置<p>风险名称</p>
 * @method string getCheckType() 获取<p>检查类型</p>
 * @method void setCheckType(string $CheckType) 设置<p>检查类型</p>
 * @method string getSeverity() 获取<p>风险等级</p>
 * @method void setSeverity(string $Severity) 设置<p>风险等级</p>
 * @method string getRiskDesc() 获取<p>存在1个风险项</p>
 * @method void setRiskDesc(string $RiskDesc) 设置<p>存在1个风险项</p>
 * @method string getCreateTime() 获取<p>首次发现时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>首次发现时间</p>
 * @method string getUpdateTime() 获取<p>风险更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>风险更新时间</p>
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method integer getRiskStatus() 获取<p>风险状态</p>
 * @method void setRiskStatus(integer $RiskStatus) 设置<p>风险状态</p>
 * @method integer getAssetCount() 获取<p>受影响资产数量</p>
 * @method void setAssetCount(integer $AssetCount) 设置<p>受影响资产数量</p>
 * @method integer getRiskCount() 获取<p>风险数量</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>风险数量</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getEventType() 获取<p>事件类型</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型</p>
 * @method string getClassify() 获取<p>处置分类</p>
 * @method void setClassify(string $Classify) 设置<p>处置分类</p>
 * @method array getStandardTerms() 获取<p>cspm规范条款</p>
 * @method void setStandardTerms(array $StandardTerms) 设置<p>cspm规范条款</p>
 * @method string getAssetTypeIconURL() 获取<p>资产类型图标</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) 设置<p>资产类型图标</p>
 */
class CheckViewRiskItem extends AbstractModel
{
    /**
     * @var string <p>检查项规则ID</p>
     */
    public $RiskRuleId;

    /**
     * @var string <p>风险名称</p>
     */
    public $RiskTitle;

    /**
     * @var string <p>检查类型</p>
     */
    public $CheckType;

    /**
     * @var string <p>风险等级</p>
     */
    public $Severity;

    /**
     * @var string <p>存在1个风险项</p>
     */
    public $RiskDesc;

    /**
     * @var string <p>首次发现时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>风险更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var integer <p>风险状态</p>
     */
    public $RiskStatus;

    /**
     * @var integer <p>受影响资产数量</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>风险数量</p>
     */
    public $RiskCount;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>事件类型</p>
     */
    public $EventType;

    /**
     * @var string <p>处置分类</p>
     */
    public $Classify;

    /**
     * @var array <p>cspm规范条款</p>
     */
    public $StandardTerms;

    /**
     * @var string <p>资产类型图标</p>
     */
    public $AssetTypeIconURL;

    /**
     * @param string $RiskRuleId <p>检查项规则ID</p>
     * @param string $RiskTitle <p>风险名称</p>
     * @param string $CheckType <p>检查类型</p>
     * @param string $Severity <p>风险等级</p>
     * @param string $RiskDesc <p>存在1个风险项</p>
     * @param string $CreateTime <p>首次发现时间</p>
     * @param string $UpdateTime <p>风险更新时间</p>
     * @param string $Provider <p>云厂商</p>
     * @param integer $RiskStatus <p>风险状态</p>
     * @param integer $AssetCount <p>受影响资产数量</p>
     * @param integer $RiskCount <p>风险数量</p>
     * @param string $AssetType <p>资产类型</p>
     * @param string $EventType <p>事件类型</p>
     * @param string $Classify <p>处置分类</p>
     * @param array $StandardTerms <p>cspm规范条款</p>
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

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = $param["Classify"];
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
