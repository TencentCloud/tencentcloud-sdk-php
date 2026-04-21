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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频审核输出参数
 *
 * @method integer getHitFlag() 获取<p>该字段用于返回审核内容是否命中审核模型；取值：0（<strong>未命中</strong>）、1（<strong>命中</strong>）。</p>
 * @method void setHitFlag(integer $HitFlag) 设置<p>该字段用于返回审核内容是否命中审核模型；取值：0（<strong>未命中</strong>）、1（<strong>命中</strong>）。</p>
 * @method string getLabel() 获取<p>该字段用于返回检测结果所对应的恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告，<strong>Custom</strong>：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。</p>
 * @method void setLabel(string $Label) 设置<p>该字段用于返回检测结果所对应的恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告，<strong>Custom</strong>：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。</p>
 * @method string getSuggestion() 获取<p>该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br><br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br><br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
 * @method integer getScore() 获取<p>该字段用于返回当前标签下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容。</p>
 * @method void setScore(integer $Score) 设置<p>该字段用于返回当前标签下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容。</p>
 * @method string getText() 获取<p>该字段用于返回音频文件经ASR识别后的文本信息。最长可识别<strong>5小时</strong>的音频文件，若超出时长限制，接口将会报错。</p>
 * @method void setText(string $Text) 设置<p>该字段用于返回音频文件经ASR识别后的文本信息。最长可识别<strong>5小时</strong>的音频文件，若超出时长限制，接口将会报错。</p>
 * @method string getUrl() 获取<p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
 * @method void setUrl(string $Url) 设置<p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
 * @method string getDuration() 获取<p>该字段用于返回音频文件的时长，单位为毫秒。</p>
 * @method void setDuration(string $Duration) 设置<p>该字段用于返回音频文件的时长，单位为毫秒。</p>
 * @method string getExtra() 获取<p>该字段用于返回额外附加信息，不同客户或Biztype下返回信息不同。</p>
 * @method void setExtra(string $Extra) 设置<p>该字段用于返回额外附加信息，不同客户或Biztype下返回信息不同。</p>
 * @method array getTextResults() 获取<p>该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
 * @method void setTextResults(array $TextResults) 设置<p>该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
 * @method array getMoanResults() 获取<p>该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。</p>
 * @method void setMoanResults(array $MoanResults) 设置<p>该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。</p>
 * @method array getLanguageResults() 获取<p>该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
 * @method void setLanguageResults(array $LanguageResults) 设置<p>该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
 * @method string getSubLabel() 获取<p>该字段用于返回当前标签（Lable）下的二级标签。</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>该字段用于返回当前标签（Lable）下的二级标签。</p>
 * @method array getRecognitionResults() 获取<p>识别类标签结果信息列表</p>
 * @method void setRecognitionResults(array $RecognitionResults) 设置<p>识别类标签结果信息列表</p>
 * @method array getSpeakerResults() 获取<p>说话人结果</p>
 * @method void setSpeakerResults(array $SpeakerResults) 设置<p>说话人结果</p>
 * @method array getLabelResults() 获取<p>歌曲识别结果</p>
 * @method void setLabelResults(array $LabelResults) 设置<p>歌曲识别结果</p>
 * @method array getTravelResults() 获取<p>出行结果</p>
 * @method void setTravelResults(array $TravelResults) 设置<p>出行结果</p>
 * @method string getSubTag() 获取<p>三级标签</p>
 * @method void setSubTag(string $SubTag) 设置<p>三级标签</p>
 * @method string getSubTagCode() 获取<p>三级标签码</p>
 * @method void setSubTagCode(string $SubTagCode) 设置<p>三级标签码</p>
 * @method string getHitType() 获取<p>审核检测类型</p>
 * @method void setHitType(string $HitType) 设置<p>审核检测类型</p>
 * @method array getSentences() 获取<p>ASR句子的起止时间</p>
 * @method void setSentences(array $Sentences) 设置<p>ASR句子的起止时间</p>
 * @method string getRequestId() 获取<p>切片请求ID</p>
 * @method void setRequestId(string $RequestId) 设置<p>切片请求ID</p>
 * @method array getAIGCRecognitionResults() 获取<p>AIGC音频片段审核结果</p>
 * @method void setAIGCRecognitionResults(array $AIGCRecognitionResults) 设置<p>AIGC音频片段审核结果</p>
 */
class AudioResult extends AbstractModel
{
    /**
     * @var integer <p>该字段用于返回审核内容是否命中审核模型；取值：0（<strong>未命中</strong>）、1（<strong>命中</strong>）。</p>
     */
    public $HitFlag;

    /**
     * @var string <p>该字段用于返回检测结果所对应的恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告，<strong>Custom</strong>：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。</p>
     */
    public $Label;

    /**
     * @var string <p>该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br><br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
     */
    public $Suggestion;

    /**
     * @var integer <p>该字段用于返回当前标签下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容。</p>
     */
    public $Score;

    /**
     * @var string <p>该字段用于返回音频文件经ASR识别后的文本信息。最长可识别<strong>5小时</strong>的音频文件，若超出时长限制，接口将会报错。</p>
     */
    public $Text;

    /**
     * @var string <p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
     */
    public $Url;

    /**
     * @var string <p>该字段用于返回音频文件的时长，单位为毫秒。</p>
     */
    public $Duration;

    /**
     * @var string <p>该字段用于返回额外附加信息，不同客户或Biztype下返回信息不同。</p>
     */
    public $Extra;

    /**
     * @var array <p>该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
     */
    public $TextResults;

    /**
     * @var array <p>该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。</p>
     */
    public $MoanResults;

    /**
     * @var array <p>该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
     */
    public $LanguageResults;

    /**
     * @var string <p>该字段用于返回当前标签（Lable）下的二级标签。</p>
     */
    public $SubLabel;

    /**
     * @var array <p>识别类标签结果信息列表</p>
     */
    public $RecognitionResults;

    /**
     * @var array <p>说话人结果</p>
     */
    public $SpeakerResults;

    /**
     * @var array <p>歌曲识别结果</p>
     */
    public $LabelResults;

    /**
     * @var array <p>出行结果</p>
     */
    public $TravelResults;

    /**
     * @var string <p>三级标签</p>
     */
    public $SubTag;

    /**
     * @var string <p>三级标签码</p>
     */
    public $SubTagCode;

    /**
     * @var string <p>审核检测类型</p>
     */
    public $HitType;

    /**
     * @var array <p>ASR句子的起止时间</p>
     */
    public $Sentences;

    /**
     * @var string <p>切片请求ID</p>
     */
    public $RequestId;

    /**
     * @var array <p>AIGC音频片段审核结果</p>
     */
    public $AIGCRecognitionResults;

    /**
     * @param integer $HitFlag <p>该字段用于返回审核内容是否命中审核模型；取值：0（<strong>未命中</strong>）、1（<strong>命中</strong>）。</p>
     * @param string $Label <p>该字段用于返回检测结果所对应的恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告，<strong>Custom</strong>：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。</p>
     * @param string $Suggestion <p>该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示具体的后续建议操作。<br><br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
     * @param integer $Score <p>该字段用于返回当前标签下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容。</p>
     * @param string $Text <p>该字段用于返回音频文件经ASR识别后的文本信息。最长可识别<strong>5小时</strong>的音频文件，若超出时长限制，接口将会报错。</p>
     * @param string $Url <p>该字段用于返回审核结果的访问链接（URL）。<br>备注：链接默认有效期为12小时。如果您需要更长时效的链接，请使用<a href="https://cloud.tencent.com/document/product/1265/104001">COS预签名</a>功能更新签名时效。</p>
     * @param string $Duration <p>该字段用于返回音频文件的时长，单位为毫秒。</p>
     * @param string $Extra <p>该字段用于返回额外附加信息，不同客户或Biztype下返回信息不同。</p>
     * @param array $TextResults <p>该字段用于返回音频文件经ASR识别后产生的文本的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
     * @param array $MoanResults <p>该字段用于返回音频文件呻吟检测的详细审核结果。具体结果内容请参见AudioResultDetailMoanResult数据结构的细节描述。</p>
     * @param array $LanguageResults <p>该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。</p>
     * @param string $SubLabel <p>该字段用于返回当前标签（Lable）下的二级标签。</p>
     * @param array $RecognitionResults <p>识别类标签结果信息列表</p>
     * @param array $SpeakerResults <p>说话人结果</p>
     * @param array $LabelResults <p>歌曲识别结果</p>
     * @param array $TravelResults <p>出行结果</p>
     * @param string $SubTag <p>三级标签</p>
     * @param string $SubTagCode <p>三级标签码</p>
     * @param string $HitType <p>审核检测类型</p>
     * @param array $Sentences <p>ASR句子的起止时间</p>
     * @param string $RequestId <p>切片请求ID</p>
     * @param array $AIGCRecognitionResults <p>AIGC音频片段审核结果</p>
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
                $obj = new SpeakerResults();
                $obj->deserialize($value);
                array_push($this->SpeakerResults, $obj);
            }
        }

        if (array_key_exists("LabelResults",$param) and $param["LabelResults"] !== null) {
            $this->LabelResults = [];
            foreach ($param["LabelResults"] as $key => $value){
                $obj = new LabelResults();
                $obj->deserialize($value);
                array_push($this->LabelResults, $obj);
            }
        }

        if (array_key_exists("TravelResults",$param) and $param["TravelResults"] !== null) {
            $this->TravelResults = [];
            foreach ($param["TravelResults"] as $key => $value){
                $obj = new TravelResults();
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

        if (array_key_exists("HitType",$param) and $param["HitType"] !== null) {
            $this->HitType = $param["HitType"];
        }

        if (array_key_exists("Sentences",$param) and $param["Sentences"] !== null) {
            $this->Sentences = [];
            foreach ($param["Sentences"] as $key => $value){
                $obj = new Sentence();
                $obj->deserialize($value);
                array_push($this->Sentences, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("AIGCRecognitionResults",$param) and $param["AIGCRecognitionResults"] !== null) {
            $this->AIGCRecognitionResults = [];
            foreach ($param["AIGCRecognitionResults"] as $key => $value){
                $obj = new AIGCRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AIGCRecognitionResults, $obj);
            }
        }
    }
}
