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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAudioModerationSyncTask返回参数结构体
 *
 * @method string getDataId() 获取请求接口时传入的数据标识
 * @method void setDataId(string $DataId) 设置请求接口时传入的数据标识
 * @method string getName() 获取文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
 * @method void setBizType(string $BizType) 设置Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
 * @method string getSuggestion() 获取智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrText() 获取音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrText(string $AsrText) 设置音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTextResults() 获取音频中对话内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextResults(array $TextResults) 设置音频中对话内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMoanResults() 获取音频中低俗内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMoanResults(array $MoanResults) 设置音频中低俗内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubLabel() 获取该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubLabel(string $SubLabel) 设置该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLanguageResults() 获取该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLanguageResults(array $LanguageResults) 设置该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSpeakerResults() 获取音频中说话人识别返回结果；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeakerResults(array $SpeakerResults) 设置音频中说话人识别返回结果；
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecognitionResults() 获取识别类标签结果信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecognitionResults(array $RecognitionResults) 设置识别类标签结果信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取识别音频时长，单位为毫秒；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置识别音频时长，单位为毫秒；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAudioModerationSyncTaskResponse extends AbstractModel
{
    /**
     * @var string 请求接口时传入的数据标识
     */
    public $DataId;

    /**
     * @var string 文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
     */
    public $BizType;

    /**
     * @var string 智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var string 智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrText;

    /**
     * @var array 音频中对话内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextResults;

    /**
     * @var array 音频中低俗内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MoanResults;

    /**
     * @var string 该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubLabel;

    /**
     * @var array 该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LanguageResults;

    /**
     * @var array 音频中说话人识别返回结果；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeakerResults;

    /**
     * @var array 识别类标签结果信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecognitionResults;

    /**
     * @var string 识别音频时长，单位为毫秒；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DataId 请求接口时传入的数据标识
     * @param string $Name 文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
     * @param string $Suggestion 智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrText 音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TextResults 音频中对话内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MoanResults 音频中低俗内容审核结果；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubLabel 该字段用于返回当前标签（Lable）下的二级标签。
注意：此字段可能返回null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LanguageResults 该字段用于返回音频小语种检测的详细审核结果。具体结果内容请参见AudioResultDetailLanguageResult数据结构的细节描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SpeakerResults 音频中说话人识别返回结果；
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecognitionResults 识别类标签结果信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 识别音频时长，单位为毫秒；
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("AsrText",$param) and $param["AsrText"] !== null) {
            $this->AsrText = $param["AsrText"];
        }

        if (array_key_exists("TextResults",$param) and $param["TextResults"] !== null) {
            $this->TextResults = [];
            foreach ($param["TextResults"] as $key => $value){
                $obj = new TextResult();
                $obj->deserialize($value);
                array_push($this->TextResults, $obj);
            }
        }

        if (array_key_exists("MoanResults",$param) and $param["MoanResults"] !== null) {
            $this->MoanResults = [];
            foreach ($param["MoanResults"] as $key => $value){
                $obj = new MoanResult();
                $obj->deserialize($value);
                array_push($this->MoanResults, $obj);
            }
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("LanguageResults",$param) and $param["LanguageResults"] !== null) {
            $this->LanguageResults = [];
            foreach ($param["LanguageResults"] as $key => $value){
                $obj = new AudioResultDetailLanguageResult();
                $obj->deserialize($value);
                array_push($this->LanguageResults, $obj);
            }
        }

        if (array_key_exists("SpeakerResults",$param) and $param["SpeakerResults"] !== null) {
            $this->SpeakerResults = [];
            foreach ($param["SpeakerResults"] as $key => $value){
                $obj = new AudioResultDetailSpeakerResult();
                $obj->deserialize($value);
                array_push($this->SpeakerResults, $obj);
            }
        }

        if (array_key_exists("RecognitionResults",$param) and $param["RecognitionResults"] !== null) {
            $this->RecognitionResults = [];
            foreach ($param["RecognitionResults"] as $key => $value){
                $obj = new RecognitionResult();
                $obj->deserialize($value);
                array_push($this->RecognitionResults, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
