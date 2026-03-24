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
 * CreateRemediation请求参数结构体
 *
 * @method string getRuleId() 获取<p>规则 ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则 ID</p>
 * @method string getRemediationType() 获取<p>修正类型取值：   SCF：云函数（自定义修正）。</p>
 * @method void setRemediationType(string $RemediationType) 设置<p>修正类型取值：   SCF：云函数（自定义修正）。</p>
 * @method string getRemediationTemplateId() 获取<p>修正模板 ID</p>
 * @method void setRemediationTemplateId(string $RemediationTemplateId) 设置<p>修正模板 ID</p>
 * @method string getInvokeType() 获取<p>修正执行方式。<br>取值：   MANUAL_EXECUTION：手动执行</p>
 * @method void setInvokeType(string $InvokeType) 设置<p>修正执行方式。<br>取值：   MANUAL_EXECUTION：手动执行</p>
 * @method string getSourceType() 获取<p>执行修正的模板来源<br>CUSTOM：自定义模板。</p>
 * @method void setSourceType(string $SourceType) 设置<p>执行修正的模板来源<br>CUSTOM：自定义模板。</p>
 */
class CreateRemediationRequest extends AbstractModel
{
    /**
     * @var string <p>规则 ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>修正类型取值：   SCF：云函数（自定义修正）。</p>
     */
    public $RemediationType;

    /**
     * @var string <p>修正模板 ID</p>
     */
    public $RemediationTemplateId;

    /**
     * @var string <p>修正执行方式。<br>取值：   MANUAL_EXECUTION：手动执行</p>
     */
    public $InvokeType;

    /**
     * @var string <p>执行修正的模板来源<br>CUSTOM：自定义模板。</p>
     */
    public $SourceType;

    /**
     * @param string $RuleId <p>规则 ID</p>
     * @param string $RemediationType <p>修正类型取值：   SCF：云函数（自定义修正）。</p>
     * @param string $RemediationTemplateId <p>修正模板 ID</p>
     * @param string $InvokeType <p>修正执行方式。<br>取值：   MANUAL_EXECUTION：手动执行</p>
     * @param string $SourceType <p>执行修正的模板来源<br>CUSTOM：自定义模板。</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RemediationType",$param) and $param["RemediationType"] !== null) {
            $this->RemediationType = $param["RemediationType"];
        }

        if (array_key_exists("RemediationTemplateId",$param) and $param["RemediationTemplateId"] !== null) {
            $this->RemediationTemplateId = $param["RemediationTemplateId"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
