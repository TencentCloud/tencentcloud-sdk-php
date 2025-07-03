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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频审核输出参数
 *
 * @method integer getHitFlag() 获取该字段用于返回审核内容是否命中审核模型；取值：0（**未命中**）、1（**命中**）。
 * @method void setHitFlag(integer $HitFlag) 设置该字段用于返回审核内容是否命中审核模型；取值：0（**未命中**）、1（**命中**）。
 * @method string getLabel() 获取该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method void setLabel(string $Label) 设置该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method string getSuggestion() 获取该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method integer getScore() 获取该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容。
 * @method void setScore(integer $Score) 设置该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容。
 * @method string getText() 获取该字段用于返回音频文件经ASR识别后的文本信息。最长可识别**5小时**的音频文件，若超出时长限制，接口将会报错。
 * @method void setText(string $Text) 设置该字段用于返回音频文件经ASR识别后的文本信息。最长可识别**5小时**的音频文件，若超出时长限制，接口将会报错。
 * @method string getUrl() 获取该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
 * @method void setUrl(string $Url) 设置该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
 * @method string getDuration() 获取该字段用于返回音频文件的时长，单位为毫秒。
 * @method void setDuration(string $Duration) 设置该字段用于返回音频文件的时长，单位为毫秒。
 * @method string getExtra() 获取该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
 * @method void setExtra(string $Extra) 设置该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
 * @method array getTextResults() 获取该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
 * @method void setTextResults(array $TextResults) 设置该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
 * @method array getMoanResults() 获取该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。
 * @method void setMoanResults(array $MoanResults) 设置该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。
 * @method array getLanguageResults() 获取该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
 * @method void setLanguageResults(array $LanguageResults) 设置该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
 * @method string getSubLabel() 获取该字段用于返回当前标签（Lable）下的二级标签。
 * @method void setSubLabel(string $SubLabel) 设置该字段用于返回当前标签（Lable）下的二级标签。
 * @method array getRecognitionResults() 获取识别类标签结果信息列表
 * @method void setRecognitionResults(array $RecognitionResults) 设置识别类标签结果信息列表
 * @method array getSpeakerResults() 获取该字段用于返回音频文件说话人检测的详细审核结果。
 * @method void setSpeakerResults(array $SpeakerResults) 设置该字段用于返回音频文件说话人检测的详细审核结果。
 * @method array getLabelResults() 获取该字段用于返回音频文件歌曲检测的详细审核结果。
 * @method void setLabelResults(array $LabelResults) 设置该字段用于返回音频文件歌曲检测的详细审核结果。
 * @method array getTravelResults() 获取该字段用于返回音频文件出行检测的详细审核结果。
 * @method void setTravelResults(array $TravelResults) 设置该字段用于返回音频文件出行检测的详细审核结果。
 * @method string getSubTag() 获取三级标签
 * @method void setSubTag(string $SubTag) 设置三级标签
 * @method string getSubTagCode() 获取三级标签码
 * @method void setSubTagCode(string $SubTagCode) 设置三级标签码
 */
class AudioResult extends AbstractModel
{
    /**
     * @var integer 该字段用于返回审核内容是否命中审核模型；取值：0（**未命中**）、1（**命中**）。
     */
    public $HitFlag;

    /**
     * @var string 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     */
    public $Label;

    /**
     * @var string 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     */
    public $Suggestion;

    /**
     * @var integer 该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容。
     */
    public $Score;

    /**
     * @var string 该字段用于返回音频文件经ASR识别后的文本信息。最长可识别**5小时**的音频文件，若超出时长限制，接口将会报错。
     */
    public $Text;

    /**
     * @var string 该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
     */
    public $Url;

    /**
     * @var string 该字段用于返回音频文件的时长，单位为毫秒。
     */
    public $Duration;

    /**
     * @var string 该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
     */
    public $Extra;

    /**
     * @var array 该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
     */
    public $TextResults;

    /**
     * @var array 该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。
     */
    public $MoanResults;

    /**
     * @var array 该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
     */
    public $LanguageResults;

    /**
     * @var string 该字段用于返回当前标签（Lable）下的二级标签。
     */
    public $SubLabel;

    /**
     * @var array 识别类标签结果信息列表
     */
    public $RecognitionResults;

    /**
     * @var array 该字段用于返回音频文件说话人检测的详细审核结果。
     */
    public $SpeakerResults;

    /**
     * @var array 该字段用于返回音频文件歌曲检测的详细审核结果。
     */
    public $LabelResults;

    /**
     * @var array 该字段用于返回音频文件出行检测的详细审核结果。
     */
    public $TravelResults;

    /**
     * @var string 三级标签
     */
    public $SubTag;

    /**
     * @var string 三级标签码
     */
    public $SubTagCode;

    /**
     * @param integer $HitFlag 该字段用于返回审核内容是否命中审核模型；取值：0（**未命中**）、1（**命中**）。
     * @param string $Label 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     * @param string $Suggestion 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br>
返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     * @param integer $Score 该字段用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高** ），越高代表文本越有可能属于当前返回的标签；如：*色情 99*，则表明该文本非常有可能属于色情内容。
     * @param string $Text 该字段用于返回音频文件经ASR识别后的文本信息。最长可识别**5小时**的音频文件，若超出时长限制，接口将会报错。
     * @param string $Url 该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用[COS预签名](https://cloud.tencent.com/document/product/1265/104001)功能更新签名时效。
     * @param string $Duration 该字段用于返回音频文件的时长，单位为毫秒。
     * @param string $Extra 该字段用于返回输入参数中的额外附加信息（Extra），如未配置则默认返回值为空。<br>备注：不同客户或Biztype下返回信息不同，如需配置该字段请提交工单咨询或联系售后专员处理。
     * @param array $TextResults 该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
     * @param array $MoanResults 该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。
     * @param array $LanguageResults 该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
     * @param string $SubLabel 该字段用于返回当前标签（Lable）下的二级标签。
     * @param array $RecognitionResults 识别类标签结果信息列表
     * @param array $SpeakerResults 该字段用于返回音频文件说话人检测的详细审核结果。
     * @param array $LabelResults 该字段用于返回音频文件歌曲检测的详细审核结果。
     * @param array $TravelResults 该字段用于返回音频文件出行检测的详细审核结果。
     * @param string $SubTag 三级标签
     * @param string $SubTagCode 三级标签码
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
        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("TextResults",$param) and $param["TextResults"] !== null) {
            $this->TextResults = [];
            foreach ($param["TextResults"] as $key => $value){
                $obj = new AudioResultDetailTextResult();
                $obj->deserialize($value);
                array_push($this->TextResults, $obj);
            }
        }

        if (array_key_exists("MoanResults",$param) and $param["MoanResults"] !== null) {
            $this->MoanResults = [];
            foreach ($param["MoanResults"] as $key => $value){
                $obj = new AudioResultDetailMoanResult();
                $obj->deserialize($value);
                array_push($this->MoanResults, $obj);
            }
        }

        if (array_key_exists("LanguageResults",$param) and $param["LanguageResults"] !== null) {
            $this->LanguageResults = [];
            foreach ($param["LanguageResults"] as $key => $value){
                $obj = new AudioResultDetailLanguageResult();
                $obj->deserialize($value);
                array_push($this->LanguageResults, $obj);
            }
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("RecognitionResults",$param) and $param["RecognitionResults"] !== null) {
            $this->RecognitionResults = [];
            foreach ($param["RecognitionResults"] as $key => $value){
                $obj = new RecognitionResult();
                $obj->deserialize($value);
                array_push($this->RecognitionResults, $obj);
            }
        }

        if (array_key_exists("SpeakerResults",$param) and $param["SpeakerResults"] !== null) {
            $this->SpeakerResults = [];
            foreach ($param["SpeakerResults"] as $key => $value){
                $obj = new SpeakerResult();
                $obj->deserialize($value);
                array_push($this->SpeakerResults, $obj);
            }
        }

        if (array_key_exists("LabelResults",$param) and $param["LabelResults"] !== null) {
            $this->LabelResults = [];
            foreach ($param["LabelResults"] as $key => $value){
                $obj = new AudioLabelResult();
                $obj->deserialize($value);
                array_push($this->LabelResults, $obj);
            }
        }

        if (array_key_exists("TravelResults",$param) and $param["TravelResults"] !== null) {
            $this->TravelResults = [];
            foreach ($param["TravelResults"] as $key => $value){
                $obj = new TravelResult();
                $obj->deserialize($value);
                array_push($this->TravelResults, $obj);
            }
        }

        if (array_key_exists("SubTag",$param) and $param["SubTag"] !== null) {
            $this->SubTag = $param["SubTag"];
        }

        if (array_key_exists("SubTagCode",$param) and $param["SubTagCode"] !== null) {
            $this->SubTagCode = $param["SubTagCode"];
        }
    }
}
