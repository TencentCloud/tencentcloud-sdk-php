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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration返回参数结构体
 *
 * @method string getSuggestion() 获取<p>该字段用于返回Label标签下的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>该字段用于返回Label标签下的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
 * @method string getLabel() 获取<p>该字段用于返回检测结果（LabelResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值标签示例：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）。</p>
 * @method void setLabel(string $Label) 设置<p>该字段用于返回检测结果（LabelResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值标签示例：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）。</p>
 * @method string getSubLabel() 获取<p>该字段用于返回检测结果所命中优先级最高的恶意标签下的子标签名称，如：<em>色情--性行为</em>；若未命中任何子标签则返回空字符串。</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>该字段用于返回检测结果所命中优先级最高的恶意标签下的子标签名称，如：<em>色情--性行为</em>；若未命中任何子标签则返回空字符串。</p>
 * @method integer getScore() 获取<p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表图片越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该图片非常有可能属于色情内容；<em>色情 0</em>，则表明该图片不属于色情内容。</p>
 * @method void setScore(integer $Score) 设置<p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表图片越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该图片非常有可能属于色情内容；<em>色情 0</em>，则表明该图片不属于色情内容。</p>
 * @method array getLabelResults() 获取<p>该字段用于返回分类检测模型的详细检测结果；表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。详细返回值信息可参阅对应的数据结构（LabelResults）描述。</p><p>返回值标签示例：Normal:正常，Porn:色情，Abuse:谩骂，Ad:广告（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）<br>注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method void setLabelResults(array $LabelResults) 设置<p>该字段用于返回分类检测模型的详细检测结果；表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。详细返回值信息可参阅对应的数据结构（LabelResults）描述。</p><p>返回值标签示例：Normal:正常，Porn:色情，Abuse:谩骂，Ad:广告（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）<br>注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method array getObjectResults() 获取<p>该字段用于返回物体检测模型的详细检测结果；包括：实体、广告台标、二维码等内容命中的标签名称、标签分数、坐标信息、场景识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（ObjectResults）描述。</p>
 * @method void setObjectResults(array $ObjectResults) 设置<p>该字段用于返回物体检测模型的详细检测结果；包括：实体、广告台标、二维码等内容命中的标签名称、标签分数、坐标信息、场景识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（ObjectResults）描述。</p>
 * @method array getOcrResults() 获取<p>该字段用于返回OCR文本识别的详细检测结果；包括：文本坐标信息、文本识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（OcrResults）描述。</p>
 * @method void setOcrResults(array $OcrResults) 设置<p>该字段用于返回OCR文本识别的详细检测结果；包括：文本坐标信息、文本识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（OcrResults）描述。</p>
 * @method array getLibResults() 获取<p>该字段用于返回基于图片风险库（风险黑库与正常白库）识别的结果,详细返回值信息可参阅对应的数据结构（LibResults）描述。<br>备注：图片风险库目前<strong>暂不支持自定义库</strong>。</p>
 * @method void setLibResults(array $LibResults) 设置<p>该字段用于返回基于图片风险库（风险黑库与正常白库）识别的结果,详细返回值信息可参阅对应的数据结构（LibResults）描述。<br>备注：图片风险库目前<strong>暂不支持自定义库</strong>。</p>
 * @method string getDataId() 获取<p>该字段用于返回检测对象对应请求参数中的DataId。</p>
 * @method void setDataId(string $DataId) 设置<p>该字段用于返回检测对象对应请求参数中的DataId。</p>
 * @method string getBizType() 获取<p>该字段用于返回检测对象对应请求参数中的BizType。</p>
 * @method void setBizType(string $BizType) 设置<p>该字段用于返回检测对象对应请求参数中的BizType。</p>
 * @method string getExtra() 获取<p>该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置<p>该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMD5() 获取<p>该字段用于返回检测对象对应的MD5校验值，以方便校验文件完整性。</p>
 * @method void setFileMD5(string $FileMD5) 设置<p>该字段用于返回检测对象对应的MD5校验值，以方便校验文件完整性。</p>
 * @method array getRecognitionResults() 获取<p>该字段用于返回仅识别图片元素的模型结果；包括：场景模型命中的标签、置信度和位置信息</p>
 * @method void setRecognitionResults(array $RecognitionResults) 设置<p>该字段用于返回仅识别图片元素的模型结果；包括：场景模型命中的标签、置信度和位置信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ImageModerationResponse extends AbstractModel
{
    /**
     * @var string <p>该字段用于返回Label标签下的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
     */
    public $Suggestion;

    /**
     * @var string <p>该字段用于返回检测结果（LabelResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值标签示例：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）。</p>
     */
    public $Label;

    /**
     * @var string <p>该字段用于返回检测结果所命中优先级最高的恶意标签下的子标签名称，如：<em>色情--性行为</em>；若未命中任何子标签则返回空字符串。</p>
     */
    public $SubLabel;

    /**
     * @var integer <p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表图片越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该图片非常有可能属于色情内容；<em>色情 0</em>，则表明该图片不属于色情内容。</p>
     */
    public $Score;

    /**
     * @var array <p>该字段用于返回分类检测模型的详细检测结果；表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。详细返回值信息可参阅对应的数据结构（LabelResults）描述。</p><p>返回值标签示例：Normal:正常，Porn:色情，Abuse:谩骂，Ad:广告（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）<br>注意：此字段可能返回 null，表示取不到有效值。</p>
     */
    public $LabelResults;

    /**
     * @var array <p>该字段用于返回物体检测模型的详细检测结果；包括：实体、广告台标、二维码等内容命中的标签名称、标签分数、坐标信息、场景识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（ObjectResults）描述。</p>
     */
    public $ObjectResults;

    /**
     * @var array <p>该字段用于返回OCR文本识别的详细检测结果；包括：文本坐标信息、文本识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（OcrResults）描述。</p>
     */
    public $OcrResults;

    /**
     * @var array <p>该字段用于返回基于图片风险库（风险黑库与正常白库）识别的结果,详细返回值信息可参阅对应的数据结构（LibResults）描述。<br>备注：图片风险库目前<strong>暂不支持自定义库</strong>。</p>
     */
    public $LibResults;

    /**
     * @var string <p>该字段用于返回检测对象对应请求参数中的DataId。</p>
     */
    public $DataId;

    /**
     * @var string <p>该字段用于返回检测对象对应请求参数中的BizType。</p>
     */
    public $BizType;

    /**
     * @var string <p>该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string <p>该字段用于返回检测对象对应的MD5校验值，以方便校验文件完整性。</p>
     */
    public $FileMD5;

    /**
     * @var array <p>该字段用于返回仅识别图片元素的模型结果；包括：场景模型命中的标签、置信度和位置信息</p>
     */
    public $RecognitionResults;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Suggestion <p>该字段用于返回Label标签下的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
     * @param string $Label <p>该字段用于返回检测结果（LabelResults）中所对应的<strong>优先级最高的恶意标签</strong>，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值标签示例：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）。</p>
     * @param string $SubLabel <p>该字段用于返回检测结果所命中优先级最高的恶意标签下的子标签名称，如：<em>色情--性行为</em>；若未命中任何子标签则返回空字符串。</p>
     * @param integer $Score <p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表图片越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该图片非常有可能属于色情内容；<em>色情 0</em>，则表明该图片不属于色情内容。</p>
     * @param array $LabelResults <p>该字段用于返回分类检测模型的详细检测结果；表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。详细返回值信息可参阅对应的数据结构（LabelResults）描述。</p><p>返回值标签示例：Normal:正常，Porn:色情，Abuse:谩骂，Ad:广告（说明：文档仅示例了部分风险类型，更多返回类型请以实际值为准或<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>进行咨询）<br>注意：此字段可能返回 null，表示取不到有效值。</p>
     * @param array $ObjectResults <p>该字段用于返回物体检测模型的详细检测结果；包括：实体、广告台标、二维码等内容命中的标签名称、标签分数、坐标信息、场景识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（ObjectResults）描述。</p>
     * @param array $OcrResults <p>该字段用于返回OCR文本识别的详细检测结果；包括：文本坐标信息、文本识别结果、建议操作等内容审核信息；详细返回值信息可参阅对应的数据结构（OcrResults）描述。</p>
     * @param array $LibResults <p>该字段用于返回基于图片风险库（风险黑库与正常白库）识别的结果,详细返回值信息可参阅对应的数据结构（LibResults）描述。<br>备注：图片风险库目前<strong>暂不支持自定义库</strong>。</p>
     * @param string $DataId <p>该字段用于返回检测对象对应请求参数中的DataId。</p>
     * @param string $BizType <p>该字段用于返回检测对象对应请求参数中的BizType。</p>
     * @param string $Extra <p>该字段用于返回根据您的需求配置的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMD5 <p>该字段用于返回检测对象对应的MD5校验值，以方便校验文件完整性。</p>
     * @param array $RecognitionResults <p>该字段用于返回仅识别图片元素的模型结果；包括：场景模型命中的标签、置信度和位置信息</p>
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

        if (array_key_exists("LabelResults",$param) and $param["LabelResults"] !== null) {
            $this->LabelResults = [];
            foreach ($param["LabelResults"] as $key => $value){
                $obj = new LabelResult();
                $obj->deserialize($value);
                array_push($this->LabelResults, $obj);
            }
        }

        if (array_key_exists("ObjectResults",$param) and $param["ObjectResults"] !== null) {
            $this->ObjectResults = [];
            foreach ($param["ObjectResults"] as $key => $value){
                $obj = new ObjectResult();
                $obj->deserialize($value);
                array_push($this->ObjectResults, $obj);
            }
        }

        if (array_key_exists("OcrResults",$param) and $param["OcrResults"] !== null) {
            $this->OcrResults = [];
            foreach ($param["OcrResults"] as $key => $value){
                $obj = new OcrResult();
                $obj->deserialize($value);
                array_push($this->OcrResults, $obj);
            }
        }

        if (array_key_exists("LibResults",$param) and $param["LibResults"] !== null) {
            $this->LibResults = [];
            foreach ($param["LibResults"] as $key => $value){
                $obj = new LibResult();
                $obj->deserialize($value);
                array_push($this->LibResults, $obj);
            }
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("FileMD5",$param) and $param["FileMD5"] !== null) {
            $this->FileMD5 = $param["FileMD5"];
        }

        if (array_key_exists("RecognitionResults",$param) and $param["RecognitionResults"] !== null) {
            $this->RecognitionResults = [];
            foreach ($param["RecognitionResults"] as $key => $value){
                $obj = new RecognitionResult();
                $obj->deserialize($value);
                array_push($this->RecognitionResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
