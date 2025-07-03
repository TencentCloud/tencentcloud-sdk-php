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
 * 高危基线风险内容
 *
 * @method string getCloudAccountID() 获取云账号ID
 * @method void setCloudAccountID(string $CloudAccountID) 设置云账号ID
 * @method string getAssetID() 获取实例ID
 * @method void setAssetID(string $AssetID) 设置实例ID
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getRiskName() 获取风险名称
 * @method void setRiskName(string $RiskName) 设置风险名称
 * @method string getRiskCategory() 获取风险分类
 * @method void setRiskCategory(string $RiskCategory) 设置风险分类
 * @method string getRiskLevel() 获取风险等级
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
 * @method string getRiskDesc() 获取风险描述
 * @method void setRiskDesc(string $RiskDesc) 设置风险描述
 * @method string getRiskResult() 获取风险结果
 * @method void setRiskResult(string $RiskResult) 设置风险结果
 * @method string getFixAdvice() 获取修复建议
 * @method void setFixAdvice(string $FixAdvice) 设置修复建议
 * @method string getRiskCategoryName() 获取Linux漏洞
 * @method void setRiskCategoryName(string $RiskCategoryName) 设置Linux漏洞
 * @method string getRiskLevelName() 获取风险等级名称
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险等级名称
 * @method string getInstanceStatusName() 获取实例状态
 * @method void setInstanceStatusName(string $InstanceStatusName) 设置实例状态
 * @method string getCreateTime() 获取首次发现时间
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
 * @method string getUpdateTime() 获取最近发现时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近发现时间
 * @method integer getAppID() 获取租户ID
 * @method void setAppID(integer $AppID) 设置租户ID
 */
class HighBaseLineRiskItem extends AbstractModel
{
    /**
     * @var string 云账号ID
     */
    public $CloudAccountID;

    /**
     * @var string 实例ID
     */
    public $AssetID;

    /**
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 风险名称
     */
    public $RiskName;

    /**
     * @var string 风险分类
     */
    public $RiskCategory;

    /**
     * @var string 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 风险描述
     */
    public $RiskDesc;

    /**
     * @var string 风险结果
     */
    public $RiskResult;

    /**
     * @var string 修复建议
     */
    public $FixAdvice;

    /**
     * @var string Linux漏洞
     */
    public $RiskCategoryName;

    /**
     * @var string 风险等级名称
     */
    public $RiskLevelName;

    /**
     * @var string 实例状态
     */
    public $InstanceStatusName;

    /**
     * @var string 首次发现时间
     */
    public $CreateTime;

    /**
     * @var string 最近发现时间
     */
    public $UpdateTime;

    /**
     * @var integer 租户ID
     */
    public $AppID;

    /**
     * @param string $CloudAccountID 云账号ID
     * @param string $AssetID 实例ID
     * @param string $InstanceStatus 实例状态
     * @param string $InstanceName 实例名称
     * @param string $RiskName 风险名称
     * @param string $RiskCategory 风险分类
     * @param string $RiskLevel 风险等级
     * @param string $RiskDesc 风险描述
     * @param string $RiskResult 风险结果
     * @param string $FixAdvice 修复建议
     * @param string $RiskCategoryName Linux漏洞
     * @param string $RiskLevelName 风险等级名称
     * @param string $InstanceStatusName 实例状态
     * @param string $CreateTime 首次发现时间
     * @param string $UpdateTime 最近发现时间
     * @param integer $AppID 租户ID
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
        if (array_key_exists("CloudAccountID",$param) and $param["CloudAccountID"] !== null) {
            $this->CloudAccountID = $param["CloudAccountID"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskCategory",$param) and $param["RiskCategory"] !== null) {
            $this->RiskCategory = $param["RiskCategory"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("RiskResult",$param) and $param["RiskResult"] !== null) {
            $this->RiskResult = $param["RiskResult"];
        }

        if (array_key_exists("FixAdvice",$param) and $param["FixAdvice"] !== null) {
            $this->FixAdvice = $param["FixAdvice"];
        }

        if (array_key_exists("RiskCategoryName",$param) and $param["RiskCategoryName"] !== null) {
            $this->RiskCategoryName = $param["RiskCategoryName"];
        }

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("InstanceStatusName",$param) and $param["InstanceStatusName"] !== null) {
            $this->InstanceStatusName = $param["InstanceStatusName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }
    }
}
