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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同审查清单检查点
 *
 * @method string getSummary() 获取<p>合同风险审查清单检查点名称</p>
 * @method void setSummary(string $Summary) 设置<p>合同风险审查清单检查点名称</p>
 * @method string getExplanation() 获取<p>合同风险审查清单检查点详细描述，说明具体风险信息</p>
 * @method void setExplanation(string $Explanation) 设置<p>合同风险审查清单检查点详细描述，说明具体风险信息</p>
 * @method string getRiskLevel() 获取<p>合同风险审查清单检查点对应的风险等级，一般分为 高风险、中风险、一般风险</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>合同风险审查清单检查点对应的风险等级，一般分为 高风险、中风险、一般风险</p>
 * @method string getId() 获取<p>合同风险审查清单检查点ID，创建清单时无需填写</p>
 * @method void setId(string $Id) 设置<p>合同风险审查清单检查点ID，创建清单时无需填写</p>
 * @method boolean getIsIndispensable() 获取<p>合同风险审查清单检查点是否不可缺失，若为true，相关条款未出现在内容中，视作风险</p>
 * @method void setIsIndispensable(boolean $IsIndispensable) 设置<p>合同风险审查清单检查点是否不可缺失，若为true，相关条款未出现在内容中，视作风险</p>
 * @method boolean getIsConsistentWithReferenceItem() 获取<p>合同风险审查清单检查点是否要求和参考条款一致</p>
 * @method void setIsConsistentWithReferenceItem(boolean $IsConsistentWithReferenceItem) 设置<p>合同风险审查清单检查点是否要求和参考条款一致</p>
 * @method string getReferenceItem() 获取<p>合同风险审查清单检查点参考条款，用于辅助审查</p>
 * @method void setReferenceItem(string $ReferenceItem) 设置<p>合同风险审查清单检查点参考条款，用于辅助审查</p>
 * @method string getSuggestion() 获取<p>合同风险审查清单检查点固定修改建议，优先级高于AiSuggestion</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>合同风险审查清单检查点固定修改建议，优先级高于AiSuggestion</p>
 * @method string getAiSuggestion() 获取<p>合同风险审查清单检查点AI修改建议提示，会参考该配置生成对应的修改建议</p>
 * @method void setAiSuggestion(string $AiSuggestion) 设置<p>合同风险审查清单检查点AI修改建议提示，会参考该配置生成对应的修改建议</p>
 * @method array getRiskPresentation() 获取<p>合同风险审查清单检查点表现标签，用于自定义不同的风险类型</p>
 * @method void setRiskPresentation(array $RiskPresentation) 设置<p>合同风险审查清单检查点表现标签，用于自定义不同的风险类型</p>
 */
class ChecklistPoint extends AbstractModel
{
    /**
     * @var string <p>合同风险审查清单检查点名称</p>
     */
    public $Summary;

    /**
     * @var string <p>合同风险审查清单检查点详细描述，说明具体风险信息</p>
     */
    public $Explanation;

    /**
     * @var string <p>合同风险审查清单检查点对应的风险等级，一般分为 高风险、中风险、一般风险</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>合同风险审查清单检查点ID，创建清单时无需填写</p>
     */
    public $Id;

    /**
     * @var boolean <p>合同风险审查清单检查点是否不可缺失，若为true，相关条款未出现在内容中，视作风险</p>
     */
    public $IsIndispensable;

    /**
     * @var boolean <p>合同风险审查清单检查点是否要求和参考条款一致</p>
     */
    public $IsConsistentWithReferenceItem;

    /**
     * @var string <p>合同风险审查清单检查点参考条款，用于辅助审查</p>
     */
    public $ReferenceItem;

    /**
     * @var string <p>合同风险审查清单检查点固定修改建议，优先级高于AiSuggestion</p>
     */
    public $Suggestion;

    /**
     * @var string <p>合同风险审查清单检查点AI修改建议提示，会参考该配置生成对应的修改建议</p>
     */
    public $AiSuggestion;

    /**
     * @var array <p>合同风险审查清单检查点表现标签，用于自定义不同的风险类型</p>
     */
    public $RiskPresentation;

    /**
     * @param string $Summary <p>合同风险审查清单检查点名称</p>
     * @param string $Explanation <p>合同风险审查清单检查点详细描述，说明具体风险信息</p>
     * @param string $RiskLevel <p>合同风险审查清单检查点对应的风险等级，一般分为 高风险、中风险、一般风险</p>
     * @param string $Id <p>合同风险审查清单检查点ID，创建清单时无需填写</p>
     * @param boolean $IsIndispensable <p>合同风险审查清单检查点是否不可缺失，若为true，相关条款未出现在内容中，视作风险</p>
     * @param boolean $IsConsistentWithReferenceItem <p>合同风险审查清单检查点是否要求和参考条款一致</p>
     * @param string $ReferenceItem <p>合同风险审查清单检查点参考条款，用于辅助审查</p>
     * @param string $Suggestion <p>合同风险审查清单检查点固定修改建议，优先级高于AiSuggestion</p>
     * @param string $AiSuggestion <p>合同风险审查清单检查点AI修改建议提示，会参考该配置生成对应的修改建议</p>
     * @param array $RiskPresentation <p>合同风险审查清单检查点表现标签，用于自定义不同的风险类型</p>
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
        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Explanation",$param) and $param["Explanation"] !== null) {
            $this->Explanation = $param["Explanation"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsIndispensable",$param) and $param["IsIndispensable"] !== null) {
            $this->IsIndispensable = $param["IsIndispensable"];
        }

        if (array_key_exists("IsConsistentWithReferenceItem",$param) and $param["IsConsistentWithReferenceItem"] !== null) {
            $this->IsConsistentWithReferenceItem = $param["IsConsistentWithReferenceItem"];
        }

        if (array_key_exists("ReferenceItem",$param) and $param["ReferenceItem"] !== null) {
            $this->ReferenceItem = $param["ReferenceItem"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("AiSuggestion",$param) and $param["AiSuggestion"] !== null) {
            $this->AiSuggestion = $param["AiSuggestion"];
        }

        if (array_key_exists("RiskPresentation",$param) and $param["RiskPresentation"] !== null) {
            $this->RiskPresentation = $param["RiskPresentation"];
        }
    }
}
