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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于返回OCR结果检测详情
 *
 * @method string getScene() 获取该字段表示识别场景，取值默认为OCR（图片OCR识别）。
 * @method void setScene(string $Scene) 设置该字段表示识别场景，取值默认为OCR（图片OCR识别）。
 * @method string getSuggestion() 获取该字段用于返回优先级最高的恶意标签对应的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回优先级最高的恶意标签对应的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method string getLabel() 获取该字段用于返回OCR检测结果所对应的优先级最高的恶意标签，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method void setLabel(string $Label) 设置该字段用于返回OCR检测结果所对应的优先级最高的恶意标签，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method string getSubLabel() 获取该字段用于返回当前标签（Label）下对应的子标签的检测结果，如：*Porn-SexBehavior*等子标签。
 * @method void setSubLabel(string $SubLabel) 设置该字段用于返回当前标签（Label）下对应的子标签的检测结果，如：*Porn-SexBehavior*等子标签。
 * @method integer getScore() 获取该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容。
 * @method void setScore(integer $Score) 设置该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容。
 * @method array getDetails() 获取该字段用于返回OCR识别出的结果的详细内容，如：文本内容、对应标签、识别框位置等信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置该字段用于返回OCR识别出的结果的详细内容，如：文本内容、对应标签、识别框位置等信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取该字段用于返回OCR识别出的文字信息。
 * @method void setText(string $Text) 设置该字段用于返回OCR识别出的文字信息。
 */
class OcrResult extends AbstractModel
{
    /**
     * @var string 该字段表示识别场景，取值默认为OCR（图片OCR识别）。
     */
    public $Scene;

    /**
     * @var string 该字段用于返回优先级最高的恶意标签对应的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     */
    public $Suggestion;

    /**
     * @var string 该字段用于返回OCR检测结果所对应的优先级最高的恶意标签，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     */
    public $Label;

    /**
     * @var string 该字段用于返回当前标签（Label）下对应的子标签的检测结果，如：*Porn-SexBehavior*等子标签。
     */
    public $SubLabel;

    /**
     * @var integer 该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容。
     */
    public $Score;

    /**
     * @var array 该字段用于返回OCR识别出的结果的详细内容，如：文本内容、对应标签、识别框位置等信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @var string 该字段用于返回OCR识别出的文字信息。
     */
    public $Text;

    /**
     * @param string $Scene 该字段表示识别场景，取值默认为OCR（图片OCR识别）。
     * @param string $Suggestion 该字段用于返回优先级最高的恶意标签对应的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     * @param string $Label 该字段用于返回OCR检测结果所对应的优先级最高的恶意标签，表示模型推荐的审核结果，建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     * @param string $SubLabel 该字段用于返回当前标签（Label）下对应的子标签的检测结果，如：*Porn-SexBehavior*等子标签。
     * @param integer $Score 该字段用于返回当前标签（Label）下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容；*色情 0*，则表明该文本不属于色情内容。
     * @param array $Details 该字段用于返回OCR识别出的结果的详细内容，如：文本内容、对应标签、识别框位置等信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 该字段用于返回OCR识别出的文字信息。
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
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

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new OcrTextDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
