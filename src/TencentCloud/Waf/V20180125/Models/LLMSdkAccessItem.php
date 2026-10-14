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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * sdk接入配置
 *
 * @method string getDomain() 获取<p>服务id</p>
 * @method void setDomain(string $Domain) 设置<p>服务id</p>
 * @method string getName() 获取<p>服务名称</p>
 * @method void setName(string $Name) 设置<p>服务名称</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getSdkSource() 获取<p>SDK接入来源，tokenhub 表示通过 TokenHub 创建，空字符串表示通过控制台创建</p>
 * @method void setSdkSource(string $SdkSource) 设置<p>SDK接入来源，tokenhub 表示通过 TokenHub 创建，空字符串表示通过控制台创建</p>
 * @method boolean getMainStatus() 获取<p>总开关</p>
 * @method void setMainStatus(boolean $MainStatus) 设置<p>总开关</p>
 * @method boolean getLimitRuleStatus() 获取<p>限速开关</p>
 * @method void setLimitRuleStatus(boolean $LimitRuleStatus) 设置<p>限速开关</p>
 * @method boolean getContentRuleStatus() 获取<p>内容安全开关</p>
 * @method void setContentRuleStatus(boolean $ContentRuleStatus) 设置<p>内容安全开关</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>修改时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>修改时间</p>
 * @method integer getLimitRuleCount() 获取<p>限流规则数量</p>
 * @method void setLimitRuleCount(integer $LimitRuleCount) 设置<p>限流规则数量</p>
 * @method integer getContentRuleCount() 获取<p>内容安全规则数量</p>
 * @method void setContentRuleCount(integer $ContentRuleCount) 设置<p>内容安全规则数量</p>
 * @method boolean getToolCallStatus() 获取<p>toolcall防护开关</p>
 * @method void setToolCallStatus(boolean $ToolCallStatus) 设置<p>toolcall防护开关</p>
 * @method boolean getLLMProtectStatus() 获取<p>llm推理防护开关</p>
 * @method void setLLMProtectStatus(boolean $LLMProtectStatus) 设置<p>llm推理防护开关</p>
 * @method boolean getContentComplianceStatus() 获取<p>内容合规检测开关</p>
 * @method void setContentComplianceStatus(boolean $ContentComplianceStatus) 设置<p>内容合规检测开关</p>
 * @method boolean getDLPStatus() 获取<p>dlp防护开关</p>
 * @method void setDLPStatus(boolean $DLPStatus) 设置<p>dlp防护开关</p>
 * @method boolean getSkillsStatus() 获取<p>skills防护开关</p>
 * @method void setSkillsStatus(boolean $SkillsStatus) 设置<p>skills防护开关</p>
 * @method boolean getIntentStatus() 获取<p>意图识别检测开关</p>
 * @method void setIntentStatus(boolean $IntentStatus) 设置<p>意图识别检测开关</p>
 * @method integer getEffectiveRules() 获取<p>生效规则数量</p>
 * @method void setEffectiveRules(integer $EffectiveRules) 设置<p>生效规则数量</p>
 */
class LLMSdkAccessItem extends AbstractModel
{
    /**
     * @var string <p>服务id</p>
     */
    public $Domain;

    /**
     * @var string <p>服务名称</p>
     */
    public $Name;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>SDK接入来源，tokenhub 表示通过 TokenHub 创建，空字符串表示通过控制台创建</p>
     */
    public $SdkSource;

    /**
     * @var boolean <p>总开关</p>
     */
    public $MainStatus;

    /**
     * @var boolean <p>限速开关</p>
     */
    public $LimitRuleStatus;

    /**
     * @var boolean <p>内容安全开关</p>
     */
    public $ContentRuleStatus;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>限流规则数量</p>
     */
    public $LimitRuleCount;

    /**
     * @var integer <p>内容安全规则数量</p>
     */
    public $ContentRuleCount;

    /**
     * @var boolean <p>toolcall防护开关</p>
     */
    public $ToolCallStatus;

    /**
     * @var boolean <p>llm推理防护开关</p>
     */
    public $LLMProtectStatus;

    /**
     * @var boolean <p>内容合规检测开关</p>
     */
    public $ContentComplianceStatus;

    /**
     * @var boolean <p>dlp防护开关</p>
     */
    public $DLPStatus;

    /**
     * @var boolean <p>skills防护开关</p>
     */
    public $SkillsStatus;

    /**
     * @var boolean <p>意图识别检测开关</p>
     */
    public $IntentStatus;

    /**
     * @var integer <p>生效规则数量</p>
     */
    public $EffectiveRules;

    /**
     * @param string $Domain <p>服务id</p>
     * @param string $Name <p>服务名称</p>
     * @param string $Remark <p>备注</p>
     * @param string $SdkSource <p>SDK接入来源，tokenhub 表示通过 TokenHub 创建，空字符串表示通过控制台创建</p>
     * @param boolean $MainStatus <p>总开关</p>
     * @param boolean $LimitRuleStatus <p>限速开关</p>
     * @param boolean $ContentRuleStatus <p>内容安全开关</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>修改时间</p>
     * @param integer $LimitRuleCount <p>限流规则数量</p>
     * @param integer $ContentRuleCount <p>内容安全规则数量</p>
     * @param boolean $ToolCallStatus <p>toolcall防护开关</p>
     * @param boolean $LLMProtectStatus <p>llm推理防护开关</p>
     * @param boolean $ContentComplianceStatus <p>内容合规检测开关</p>
     * @param boolean $DLPStatus <p>dlp防护开关</p>
     * @param boolean $SkillsStatus <p>skills防护开关</p>
     * @param boolean $IntentStatus <p>意图识别检测开关</p>
     * @param integer $EffectiveRules <p>生效规则数量</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SdkSource",$param) and $param["SdkSource"] !== null) {
            $this->SdkSource = $param["SdkSource"];
        }

        if (array_key_exists("MainStatus",$param) and $param["MainStatus"] !== null) {
            $this->MainStatus = $param["MainStatus"];
        }

        if (array_key_exists("LimitRuleStatus",$param) and $param["LimitRuleStatus"] !== null) {
            $this->LimitRuleStatus = $param["LimitRuleStatus"];
        }

        if (array_key_exists("ContentRuleStatus",$param) and $param["ContentRuleStatus"] !== null) {
            $this->ContentRuleStatus = $param["ContentRuleStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LimitRuleCount",$param) and $param["LimitRuleCount"] !== null) {
            $this->LimitRuleCount = $param["LimitRuleCount"];
        }

        if (array_key_exists("ContentRuleCount",$param) and $param["ContentRuleCount"] !== null) {
            $this->ContentRuleCount = $param["ContentRuleCount"];
        }

        if (array_key_exists("ToolCallStatus",$param) and $param["ToolCallStatus"] !== null) {
            $this->ToolCallStatus = $param["ToolCallStatus"];
        }

        if (array_key_exists("LLMProtectStatus",$param) and $param["LLMProtectStatus"] !== null) {
            $this->LLMProtectStatus = $param["LLMProtectStatus"];
        }

        if (array_key_exists("ContentComplianceStatus",$param) and $param["ContentComplianceStatus"] !== null) {
            $this->ContentComplianceStatus = $param["ContentComplianceStatus"];
        }

        if (array_key_exists("DLPStatus",$param) and $param["DLPStatus"] !== null) {
            $this->DLPStatus = $param["DLPStatus"];
        }

        if (array_key_exists("SkillsStatus",$param) and $param["SkillsStatus"] !== null) {
            $this->SkillsStatus = $param["SkillsStatus"];
        }

        if (array_key_exists("IntentStatus",$param) and $param["IntentStatus"] !== null) {
            $this->IntentStatus = $param["IntentStatus"];
        }

        if (array_key_exists("EffectiveRules",$param) and $param["EffectiveRules"] !== null) {
            $this->EffectiveRules = $param["EffectiveRules"];
        }
    }
}
