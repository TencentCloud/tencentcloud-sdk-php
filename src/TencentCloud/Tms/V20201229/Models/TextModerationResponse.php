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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextModeration返回参数结构体
 *
 * @method string getBizType() 获取<p>该字段用于回显检测对象请求参数中的 BizType，与输入的 BizType 值对应。</p>
 * @method void setBizType(string $BizType) 设置<p>该字段用于回显检测对象请求参数中的 BizType，与输入的 BizType 值对应。</p>
 * @method string getSuggestion() 获取<p>用于标识对本次请求的处置建议，共三种返回值。<br>返回值：<strong>Block</strong>: 建议直接做违规处置，<strong>Review</strong>: 建议人工二次确认，<strong>Pass</strong>: 未识别到风险。</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>用于标识对本次请求的处置建议，共三种返回值。<br>返回值：<strong>Block</strong>: 建议直接做违规处置，<strong>Review</strong>: 建议人工二次确认，<strong>Pass</strong>: 未识别到风险。</p>
 * @method string getLabel() 获取<p>该字段用于返回检测结果（DetailResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型</p>
 * @method void setLabel(string $Label) 设置<p>该字段用于返回检测结果（DetailResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型</p>
 * @method string getSubLabel() 获取<p>对应 Label 字段下的二级子标签，表示该 Label 下更细分的违规点。</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>对应 Label 字段下的二级子标签，表示该 Label 下更细分的违规点。</p>
 * @method integer getScore() 获取<p>该字段标识 SubLabel 的置信度，取值范围为 0 - 100，值越高代表置信度越高。</p>
 * @method void setScore(integer $Score) 设置<p>该字段标识 SubLabel 的置信度，取值范围为 0 - 100，值越高代表置信度越高。</p>
 * @method array getKeywords() 获取<p>该字段标识被检测文本所命中的关键词，可能返回0个或多个关键词。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywords(array $Keywords) 设置<p>该字段标识被检测文本所命中的关键词，可能返回0个或多个关键词。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetailResults() 获取<p>该字段返回的检测的详细信息，返回值信息可参阅对应数据结构 DetailResults 的详细描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailResults(array $DetailResults) 设置<p>该字段返回的检测的详细信息，返回值信息可参阅对应数据结构 DetailResults 的详细描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskDetails() 获取<p>该字段标识入参 User 的检测结果，具体内容参阅数据结构 RiskDetails。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDetails(array $RiskDetails) 设置<p>该字段标识入参 User 的检测结果，具体内容参阅数据结构 RiskDetails。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取<p>该字段用于返回根据您的需求配置的附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
 * @method void setExtra(string $Extra) 设置<p>该字段用于返回根据您的需求配置的附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
 * @method string getDataId() 获取<p>该字段用于回显检测对象请求参数中的 DataId，与输入的 DataId 值对应。</p>
 * @method void setDataId(string $DataId) 设置<p>该字段用于回显检测对象请求参数中的 DataId，与输入的 DataId 值对应。</p>
 * @method string getContextText() 获取<p>历史上下文关联的字段，不再推荐使用。上下文关联审核可通过入参的 SessionId 来实现。</p>
 * @method void setContextText(string $ContextText) 设置<p>历史上下文关联的字段，不再推荐使用。上下文关联审核可通过入参的 SessionId 来实现。</p>
 * @method SentimentAnalysis getSentimentAnalysis() 获取<p>该字段为历史结构字段，不再推荐使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSentimentAnalysis(SentimentAnalysis $SentimentAnalysis) 设置<p>该字段为历史结构字段，不再推荐使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHitType() 获取<p>该字段为历史结构字段，不再推荐使用。</p>
 * @method void setHitType(string $HitType) 设置<p>该字段为历史结构字段，不再推荐使用。</p>
 * @method string getSessionId() 获取<p>该字段用于回显检测对象请求参数中的 SessionId，与输入的 SessionId 值对应。</p>
 * @method void setSessionId(string $SessionId) 设置<p>该字段用于回显检测对象请求参数中的 SessionId，与输入的 SessionId 值对应。</p>
 * @method array getHitSnippetInfos() 获取<p>该字段用于标记导致本次审核命中标签的原文内容位置信息</p>
 * @method void setHitSnippetInfos(array $HitSnippetInfos) 设置<p>该字段用于标记导致本次审核命中标签的原文内容位置信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TextModerationResponse extends AbstractModel
{
    /**
     * @var string <p>该字段用于回显检测对象请求参数中的 BizType，与输入的 BizType 值对应。</p>
     */
    public $BizType;

    /**
     * @var string <p>用于标识对本次请求的处置建议，共三种返回值。<br>返回值：<strong>Block</strong>: 建议直接做违规处置，<strong>Review</strong>: 建议人工二次确认，<strong>Pass</strong>: 未识别到风险。</p>
     */
    public $Suggestion;

    /**
     * @var string <p>该字段用于返回检测结果（DetailResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型</p>
     */
    public $Label;

    /**
     * @var string <p>对应 Label 字段下的二级子标签，表示该 Label 下更细分的违规点。</p>
     */
    public $SubLabel;

    /**
     * @var integer <p>该字段标识 SubLabel 的置信度，取值范围为 0 - 100，值越高代表置信度越高。</p>
     */
    public $Score;

    /**
     * @var array <p>该字段标识被检测文本所命中的关键词，可能返回0个或多个关键词。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keywords;

    /**
     * @var array <p>该字段返回的检测的详细信息，返回值信息可参阅对应数据结构 DetailResults 的详细描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailResults;

    /**
     * @var array <p>该字段标识入参 User 的检测结果，具体内容参阅数据结构 RiskDetails。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDetails;

    /**
     * @var string <p>该字段用于返回根据您的需求配置的附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
     */
    public $Extra;

    /**
     * @var string <p>该字段用于回显检测对象请求参数中的 DataId，与输入的 DataId 值对应。</p>
     */
    public $DataId;

    /**
     * @var string <p>历史上下文关联的字段，不再推荐使用。上下文关联审核可通过入参的 SessionId 来实现。</p>
     */
    public $ContextText;

    /**
     * @var SentimentAnalysis <p>该字段为历史结构字段，不再推荐使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SentimentAnalysis;

    /**
     * @var string <p>该字段为历史结构字段，不再推荐使用。</p>
     */
    public $HitType;

    /**
     * @var string <p>该字段用于回显检测对象请求参数中的 SessionId，与输入的 SessionId 值对应。</p>
     */
    public $SessionId;

    /**
     * @var array <p>该字段用于标记导致本次审核命中标签的原文内容位置信息</p>
     */
    public $HitSnippetInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BizType <p>该字段用于回显检测对象请求参数中的 BizType，与输入的 BizType 值对应。</p>
     * @param string $Suggestion <p>用于标识对本次请求的处置建议，共三种返回值。<br>返回值：<strong>Block</strong>: 建议直接做违规处置，<strong>Review</strong>: 建议人工二次确认，<strong>Pass</strong>: 未识别到风险。</p>
     * @param string $Label <p>该字段用于返回检测结果（DetailResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型</p>
     * @param string $SubLabel <p>对应 Label 字段下的二级子标签，表示该 Label 下更细分的违规点。</p>
     * @param integer $Score <p>该字段标识 SubLabel 的置信度，取值范围为 0 - 100，值越高代表置信度越高。</p>
     * @param array $Keywords <p>该字段标识被检测文本所命中的关键词，可能返回0个或多个关键词。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetailResults <p>该字段返回的检测的详细信息，返回值信息可参阅对应数据结构 DetailResults 的详细描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskDetails <p>该字段标识入参 User 的检测结果，具体内容参阅数据结构 RiskDetails。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra <p>该字段用于返回根据您的需求配置的附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
     * @param string $DataId <p>该字段用于回显检测对象请求参数中的 DataId，与输入的 DataId 值对应。</p>
     * @param string $ContextText <p>历史上下文关联的字段，不再推荐使用。上下文关联审核可通过入参的 SessionId 来实现。</p>
     * @param SentimentAnalysis $SentimentAnalysis <p>该字段为历史结构字段，不再推荐使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HitType <p>该字段为历史结构字段，不再推荐使用。</p>
     * @param string $SessionId <p>该字段用于回显检测对象请求参数中的 SessionId，与输入的 SessionId 值对应。</p>
     * @param array $HitSnippetInfos <p>该字段用于标记导致本次审核命中标签的原文内容位置信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
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

        if (array_key_exists("ContextText",$param) and $param["ContextText"] !== null) {
            $this->ContextText = $param["ContextText"];
        }

        if (array_key_exists("SentimentAnalysis",$param) and $param["SentimentAnalysis"] !== null) {
            $this->SentimentAnalysis = new SentimentAnalysis();
            $this->SentimentAnalysis->deserialize($param["SentimentAnalysis"]);
        }

        if (array_key_exists("HitType",$param) and $param["HitType"] !== null) {
            $this->HitType = $param["HitType"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("HitSnippetInfos",$param) and $param["HitSnippetInfos"] !== null) {
            $this->HitSnippetInfos = [];
            foreach ($param["HitSnippetInfos"] as $key => $value){
                $obj = new HitSnippetInfo();
                $obj->deserialize($value);
                array_push($this->HitSnippetInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
