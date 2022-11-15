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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextModeration返回参数结构体
 *
 * @method string getBizType() 获取该字段用于返回请求参数中的BizType参数
 * @method void setBizType(string $BizType) 设置该字段用于返回请求参数中的BizType参数
 * @method string getLabel() 获取该字段用于返回检测结果（DetailResults）中所对应的**优先级最高的恶意标签**，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型
 * @method void setLabel(string $Label) 设置该字段用于返回检测结果（DetailResults）中所对应的**优先级最高的恶意标签**，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型
 * @method string getSuggestion() 获取该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method array getKeywords() 获取该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：*加我微信*）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywords(array $Keywords) 设置该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：*加我微信*）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容
 * @method void setScore(integer $Score) 设置该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容
 * @method array getDetailResults() 获取该字段用于返回基于文本风险库审核的详细结果，返回值信息可参阅对应数据结构（DetailResults）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailResults(array $DetailResults) 设置该字段用于返回基于文本风险库审核的详细结果，返回值信息可参阅对应数据结构（DetailResults）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskDetails() 获取该字段用于返回文本检测中存在违规风险的账号检测结果，主要包括违规风险类别和风险等级信息，具体内容可参阅对应数据结构（RiskDetails）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDetails(array $RiskDetails) 设置该字段用于返回文本检测中存在违规风险的账号检测结果，主要包括违规风险类别和风险等级信息，具体内容可参阅对应数据结构（RiskDetails）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataId() 获取该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataId(string $DataId) 设置该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubLabel() 获取该字段用于返回当前标签（Label）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubLabel(string $SubLabel) 设置该字段用于返回当前标签（Label）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContextText() 获取该字段用于返回上下文关联文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContextText(string $ContextText) 设置该字段用于返回上下文关联文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TextModerationResponse extends AbstractModel
{
    /**
     * @var string 该字段用于返回请求参数中的BizType参数
     */
    public $BizType;

    /**
     * @var string 该字段用于返回检测结果（DetailResults）中所对应的**优先级最高的恶意标签**，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型
     */
    public $Label;

    /**
     * @var string 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     */
    public $Suggestion;

    /**
     * @var array 该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：*加我微信*）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keywords;

    /**
     * @var integer 该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容
     */
    public $Score;

    /**
     * @var array 该字段用于返回基于文本风险库审核的详细结果，返回值信息可参阅对应数据结构（DetailResults）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailResults;

    /**
     * @var array 该字段用于返回文本检测中存在违规风险的账号检测结果，主要包括违规风险类别和风险等级信息，具体内容可参阅对应数据结构（RiskDetails）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDetails;

    /**
     * @var string 该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string 该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataId;

    /**
     * @var string 该字段用于返回当前标签（Label）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubLabel;

    /**
     * @var string 该字段用于返回上下文关联文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContextText;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BizType 该字段用于返回请求参数中的BizType参数
     * @param string $Label 该字段用于返回检测结果（DetailResults）中所对应的**优先级最高的恶意标签**，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型
     * @param string $Suggestion 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     * @param array $Keywords 该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：*加我微信*）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容
     * @param array $DetailResults 该字段用于返回基于文本风险库审核的详细结果，返回值信息可参阅对应数据结构（DetailResults）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskDetails 该字段用于返回文本检测中存在违规风险的账号检测结果，主要包括违规风险类别和风险等级信息，具体内容可参阅对应数据结构（RiskDetails）的详细描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataId 该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubLabel 该字段用于返回当前标签（Label）下的二级标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContextText 该字段用于返回上下文关联文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("DetailResults",$param) and $param["DetailResults"] !== null) {
            $this->DetailResults = [];
            foreach ($param["DetailResults"] as $key => $value){
                $obj = new DetailResults();
                $obj->deserialize($value);
                array_push($this->DetailResults, $obj);
            }
        }

        if (array_key_exists("RiskDetails",$param) and $param["RiskDetails"] !== null) {
            $this->RiskDetails = [];
            foreach ($param["RiskDetails"] as $key => $value){
                $obj = new RiskDetails();
                $obj->deserialize($value);
                array_push($this->RiskDetails, $obj);
            }
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("ContextText",$param) and $param["ContextText"] !== null) {
            $this->ContextText = $param["ContextText"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
