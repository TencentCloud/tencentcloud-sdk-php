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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修复设置
 *
 * @method string getRemediationTemplateId() 获取修正模板 ID。
 * @method void setRemediationTemplateId(string $RemediationTemplateId) 设置修正模板 ID。
 * @method string getRemediationId() 获取修正设置 ID。
 * @method void setRemediationId(string $RemediationId) 设置修正设置 ID。
 * @method string getRemediationSourceType() 获取执行修正的模板来源
 * @method void setRemediationSourceType(string $RemediationSourceType) 设置执行修正的模板来源
 * @method string getRemediationType() 获取修正类型。取值：
SCF：函数计算（自定义修正）。
 * @method void setRemediationType(string $RemediationType) 设置修正类型。取值：
SCF：函数计算（自定义修正）。
 * @method string getOwnerUin() 获取账号ID
 * @method void setOwnerUin(string $OwnerUin) 设置账号ID
 * @method string getInvokeType() 获取修正执行方式。取值：
MANUAL_EXECUTION：手动执行。
 * @method void setInvokeType(string $InvokeType) 设置修正执行方式。取值：
MANUAL_EXECUTION：手动执行。
 * @method string getRuleId() 获取规则 ID。
 * @method void setRuleId(string $RuleId) 设置规则 ID。
 */
class Remediation extends AbstractModel
{
    /**
     * @var string 修正模板 ID。
     */
    public $RemediationTemplateId;

    /**
     * @var string 修正设置 ID。
     */
    public $RemediationId;

    /**
     * @var string 执行修正的模板来源
     */
    public $RemediationSourceType;

    /**
     * @var string 修正类型。取值：
SCF：函数计算（自定义修正）。
     */
    public $RemediationType;

    /**
     * @var string 账号ID
     */
    public $OwnerUin;

    /**
     * @var string 修正执行方式。取值：
MANUAL_EXECUTION：手动执行。
     */
    public $InvokeType;

    /**
     * @var string 规则 ID。
     */
    public $RuleId;

    /**
     * @param string $RemediationTemplateId 修正模板 ID。
     * @param string $RemediationId 修正设置 ID。
     * @param string $RemediationSourceType 执行修正的模板来源
     * @param string $RemediationType 修正类型。取值：
SCF：函数计算（自定义修正）。
     * @param string $OwnerUin 账号ID
     * @param string $InvokeType 修正执行方式。取值：
MANUAL_EXECUTION：手动执行。
     * @param string $RuleId 规则 ID。
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
        if (array_key_exists("RemediationTemplateId",$param) and $param["RemediationTemplateId"] !== null) {
            $this->RemediationTemplateId = $param["RemediationTemplateId"];
        }

        if (array_key_exists("RemediationId",$param) and $param["RemediationId"] !== null) {
            $this->RemediationId = $param["RemediationId"];
        }

        if (array_key_exists("RemediationSourceType",$param) and $param["RemediationSourceType"] !== null) {
            $this->RemediationSourceType = $param["RemediationSourceType"];
        }

        if (array_key_exists("RemediationType",$param) and $param["RemediationType"] !== null) {
            $this->RemediationType = $param["RemediationType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
