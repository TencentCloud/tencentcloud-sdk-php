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
 * 资产视角风险信息
 *
 * @method integer getAppId() 获取<p>租户ID</p>
 * @method void setAppId(integer $AppId) 设置<p>租户ID</p>
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method string getProviderName() 获取<p>云厂商名称</p>
 * @method void setProviderName(string $ProviderName) 设置<p>云厂商名称</p>
 * @method string getCloudAccountName() 获取<p>云账号名称</p>
 * @method void setCloudAccountName(string $CloudAccountName) 设置<p>云账号名称</p>
 * @method string getCloudAccountId() 获取<p>云账号ID</p>
 * @method void setCloudAccountId(string $CloudAccountId) 设置<p>云账号ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getCreateTime() 获取<p>首次发现时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>首次发现时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getRiskStatus() 获取<p>风险状态</p>
 * @method void setRiskStatus(integer $RiskStatus) 设置<p>风险状态</p>
 * @method string getRiskTitle() 获取<p>风险名称</p>
 * @method void setRiskTitle(string $RiskTitle) 设置<p>风险名称</p>
 * @method string getCheckType() 获取<p>检查类型</p>
 * @method void setCheckType(string $CheckType) 设置<p>检查类型</p>
 * @method string getSeverity() 获取<p>风险等级</p>
 * @method void setSeverity(string $Severity) 设置<p>风险等级</p>
 * @method string getRiskRuleId() 获取<p>风险规则ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) 设置<p>风险规则ID</p>
 * @method string getClassify() 获取<p>处置分类</p>
 * @method void setClassify(string $Classify) 设置<p>处置分类</p>
 * @method array getStandardTerms() 获取<p>等保合规</p>
 * @method void setStandardTerms(array $StandardTerms) 设置<p>等保合规</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getAssetTypeIconURL() 获取<p>资产类型图标</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) 设置<p>资产类型图标</p>
 */
class AssetRiskItem extends AbstractModel
{
    /**
     * @var integer <p>租户ID</p>
     */
    public $AppId;

    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>云厂商名称</p>
     */
    public $ProviderName;

    /**
     * @var string <p>云账号名称</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>云账号ID</p>
     */
    public $CloudAccountId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>首次发现时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>风险状态</p>
     */
    public $RiskStatus;

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
     * @var string <p>风险规则ID</p>
     */
    public $RiskRuleId;

    /**
     * @var string <p>处置分类</p>
     */
    public $Classify;

    /**
     * @var array <p>等保合规</p>
     */
    public $StandardTerms;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>资产类型图标</p>
     */
    public $AssetTypeIconURL;

    /**
     * @param integer $AppId <p>租户ID</p>
     * @param string $Provider <p>云厂商</p>
     * @param string $ProviderName <p>云厂商名称</p>
     * @param string $CloudAccountName <p>云账号名称</p>
     * @param string $CloudAccountId <p>云账号ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $CreateTime <p>首次发现时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $RiskStatus <p>风险状态</p>
     * @param string $RiskTitle <p>风险名称</p>
     * @param string $CheckType <p>检查类型</p>
     * @param string $Severity <p>风险等级</p>
     * @param string $RiskRuleId <p>风险规则ID</p>
     * @param string $Classify <p>处置分类</p>
     * @param array $StandardTerms <p>等保合规</p>
     * @param string $AssetType <p>资产类型</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("CloudAccountId",$param) and $param["CloudAccountId"] !== null) {
            $this->CloudAccountId = $param["CloudAccountId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
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

        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }
    }
}
