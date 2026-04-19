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
 * 风险详情
 *
 * @method string getCreateTime() 获取<p>首次发现时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>首次发现时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getRiskStatus() 获取<p>风险状态</p>
 * @method void setRiskStatus(integer $RiskStatus) 设置<p>风险状态</p>
 * @method string getRiskContent() 获取<p>风险内容</p>
 * @method void setRiskContent(string $RiskContent) 设置<p>风险内容</p>
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method string getProviderName() 获取<p>云厂商名称</p>
 * @method void setProviderName(string $ProviderName) 设置<p>云厂商名称</p>
 * @method string getCloudAccountId() 获取<p>云账号</p>
 * @method void setCloudAccountId(string $CloudAccountId) 设置<p>云账号</p>
 * @method string getCloudAccountName() 获取<p>云账号名称</p>
 * @method void setCloudAccountName(string $CloudAccountName) 设置<p>云账号名称</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getRiskId() 获取<p>风险ID</p>
 * @method void setRiskId(integer $RiskId) 设置<p>风险ID</p>
 * @method string getRiskRuleId() 获取<p>风险规则ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) 设置<p>风险规则ID</p>
 * @method string getCheckStatus() 获取<p>风险验证状态</p>
 * @method void setCheckStatus(string $CheckStatus) 设置<p>风险验证状态</p>
 * @method integer getAppID() 获取<p>用户AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>用户AppID</p>
 */
class RiskDetailItem extends AbstractModel
{
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
     * @var string <p>风险内容</p>
     */
    public $RiskContent;

    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>云厂商名称</p>
     */
    public $ProviderName;

    /**
     * @var string <p>云账号</p>
     */
    public $CloudAccountId;

    /**
     * @var string <p>云账号名称</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>风险ID</p>
     */
    public $RiskId;

    /**
     * @var string <p>风险规则ID</p>
     */
    public $RiskRuleId;

    /**
     * @var string <p>风险验证状态</p>
     */
    public $CheckStatus;

    /**
     * @var integer <p>用户AppID</p>
     */
    public $AppID;

    /**
     * @param string $CreateTime <p>首次发现时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $RiskStatus <p>风险状态</p>
     * @param string $RiskContent <p>风险内容</p>
     * @param string $Provider <p>云厂商</p>
     * @param string $ProviderName <p>云厂商名称</p>
     * @param string $CloudAccountId <p>云账号</p>
     * @param string $CloudAccountName <p>云账号名称</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $RiskId <p>风险ID</p>
     * @param string $RiskRuleId <p>风险规则ID</p>
     * @param string $CheckStatus <p>风险验证状态</p>
     * @param integer $AppID <p>用户AppID</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("RiskContent",$param) and $param["RiskContent"] !== null) {
            $this->RiskContent = $param["RiskContent"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("CloudAccountId",$param) and $param["CloudAccountId"] !== null) {
            $this->CloudAccountId = $param["CloudAccountId"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }
    }
}
