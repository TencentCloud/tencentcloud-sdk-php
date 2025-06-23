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
 * 风险详情
 *
 * @method string getCreateTime() 获取首次发现时间
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getRiskStatus() 获取风险状态
 * @method void setRiskStatus(integer $RiskStatus) 设置风险状态
 * @method string getRiskContent() 获取风险内容
 * @method void setRiskContent(string $RiskContent) 设置风险内容
 * @method string getProvider() 获取云厂商
 * @method void setProvider(string $Provider) 设置云厂商
 * @method string getProviderName() 获取云厂商名称
 * @method void setProviderName(string $ProviderName) 设置云厂商名称
 * @method string getCloudAccountId() 获取云账号
 * @method void setCloudAccountId(string $CloudAccountId) 设置云账号
 * @method string getCloudAccountName() 获取云账号名称
 * @method void setCloudAccountName(string $CloudAccountName) 设置云账号名称
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getRiskId() 获取风险ID
 * @method void setRiskId(integer $RiskId) 设置风险ID
 * @method string getRiskRuleId() 获取风险规则ID
 * @method void setRiskRuleId(string $RiskRuleId) 设置风险规则ID
 * @method string getCheckStatus() 获取风险验证状态
 * @method void setCheckStatus(string $CheckStatus) 设置风险验证状态
 */
class RiskDetailItem extends AbstractModel
{
    /**
     * @var string 首次发现时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 风险状态
     */
    public $RiskStatus;

    /**
     * @var string 风险内容
     */
    public $RiskContent;

    /**
     * @var string 云厂商
     */
    public $Provider;

    /**
     * @var string 云厂商名称
     */
    public $ProviderName;

    /**
     * @var string 云账号
     */
    public $CloudAccountId;

    /**
     * @var string 云账号名称
     */
    public $CloudAccountName;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 风险ID
     */
    public $RiskId;

    /**
     * @var string 风险规则ID
     */
    public $RiskRuleId;

    /**
     * @var string 风险验证状态
     */
    public $CheckStatus;

    /**
     * @param string $CreateTime 首次发现时间
     * @param string $UpdateTime 更新时间
     * @param integer $RiskStatus 风险状态
     * @param string $RiskContent 风险内容
     * @param string $Provider 云厂商
     * @param string $ProviderName 云厂商名称
     * @param string $CloudAccountId 云账号
     * @param string $CloudAccountName 云账号名称
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $RiskId 风险ID
     * @param string $RiskRuleId 风险规则ID
     * @param string $CheckStatus 风险验证状态
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
    }
}
