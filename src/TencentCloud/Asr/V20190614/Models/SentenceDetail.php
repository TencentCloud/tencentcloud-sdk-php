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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单句的详细识别结果，包含单个词的时间偏移，一般用于生成字幕的场景。
 *
 * @method string getFinalSentence() 获取<p>单句最终识别结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalSentence(string $FinalSentence) 设置<p>单句最终识别结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSliceSentence() 获取<p>单句中间识别结果，使用空格拆分为多个词</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSliceSentence(string $SliceSentence) 设置<p>单句中间识别结果，使用空格拆分为多个词</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWrittenText() 获取<p>口语转书面语结果，开启该功能才有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrittenText(string $WrittenText) 设置<p>口语转书面语结果，开启该功能才有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartMs() 获取<p>单句开始时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartMs(integer $StartMs) 设置<p>单句开始时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndMs() 获取<p>单句结束时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndMs(integer $EndMs) 设置<p>单句结束时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWordsNum() 获取<p>单句中词个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordsNum(integer $WordsNum) 设置<p>单句中词个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWords() 获取<p>单句中词详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWords(array $Words) 设置<p>单句中词详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSpeechSpeed() 获取<p>单句语速，单位：字数/秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeechSpeed(float $SpeechSpeed) 设置<p>单句语速，单位：字数/秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpeakerId() 获取<p>声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）<br>单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeakerId(integer $SpeakerId) 设置<p>声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）<br>单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEmotionalEnergy() 获取<p>情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmotionalEnergy(float $EmotionalEnergy) 设置<p>情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSilenceTime() 获取<p>本句与上一句之间的静音时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSilenceTime(integer $SilenceTime) 设置<p>本句与上一句之间的静音时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEmotionType() 获取<p>情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmotionType(array $EmotionType) 设置<p>情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyWordResults() 获取<p>关键词识别结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordResults(array $KeyWordResults) 设置<p>关键词识别结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLangType() 获取<p>多语言识别类型</p><ul><li>中文    chinese</li><li>英语    english</li><li>日语    japanese</li><li>韩语    korean</li><li>阿拉伯语    arabic</li><li>菲律宾语    filipino</li><li>法语    french</li><li>印地语    hindi</li><li>印尼语    indonesian</li><li>马来语    malay</li><li>葡萄牙语    portugal</li><li>西班牙语    spanish</li><li>泰语    thai</li><li>土耳其语    turkish</li><li>越南语    vietnam</li><li>德语    german</li></ul>
 * @method void setLangType(string $LangType) 设置<p>多语言识别类型</p><ul><li>中文    chinese</li><li>英语    english</li><li>日语    japanese</li><li>韩语    korean</li><li>阿拉伯语    arabic</li><li>菲律宾语    filipino</li><li>法语    french</li><li>印地语    hindi</li><li>印尼语    indonesian</li><li>马来语    malay</li><li>葡萄牙语    portugal</li><li>西班牙语    spanish</li><li>泰语    thai</li><li>土耳其语    turkish</li><li>越南语    vietnam</li><li>德语    german</li></ul>
 * @method string getSpeakerRoleName() 获取<p>说话人角色名称</p>
 * @method void setSpeakerRoleName(string $SpeakerRoleName) 设置<p>说话人角色名称</p>
 */
class SentenceDetail extends AbstractModel
{
    /**
     * @var string <p>单句最终识别结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalSentence;

    /**
     * @var string <p>单句中间识别结果，使用空格拆分为多个词</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SliceSentence;

    /**
     * @var string <p>口语转书面语结果，开启该功能才有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WrittenText;

    /**
     * @var integer <p>单句开始时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartMs;

    /**
     * @var integer <p>单句结束时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndMs;

    /**
     * @var integer <p>单句中词个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordsNum;

    /**
     * @var array <p>单句中词详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Words;

    /**
     * @var float <p>单句语速，单位：字数/秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeechSpeed;

    /**
     * @var integer <p>声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）<br>单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeakerId;

    /**
     * @var float <p>情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmotionalEnergy;

    /**
     * @var integer <p>本句与上一句之间的静音时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SilenceTime;

    /**
     * @var array <p>情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmotionType;

    /**
     * @var array <p>关键词识别结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordResults;

    /**
     * @var string <p>多语言识别类型</p><ul><li>中文    chinese</li><li>英语    english</li><li>日语    japanese</li><li>韩语    korean</li><li>阿拉伯语    arabic</li><li>菲律宾语    filipino</li><li>法语    french</li><li>印地语    hindi</li><li>印尼语    indonesian</li><li>马来语    malay</li><li>葡萄牙语    portugal</li><li>西班牙语    spanish</li><li>泰语    thai</li><li>土耳其语    turkish</li><li>越南语    vietnam</li><li>德语    german</li></ul>
     */
    public $LangType;

    /**
     * @var string <p>说话人角色名称</p>
     */
    public $SpeakerRoleName;

    /**
     * @param string $FinalSentence <p>单句最终识别结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SliceSentence <p>单句中间识别结果，使用空格拆分为多个词</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WrittenText <p>口语转书面语结果，开启该功能才有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartMs <p>单句开始时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndMs <p>单句结束时间（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WordsNum <p>单句中词个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Words <p>单句中词详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SpeechSpeed <p>单句语速，单位：字数/秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpeakerId <p>声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）<br>单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EmotionalEnergy <p>情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SilenceTime <p>本句与上一句之间的静音时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EmotionType <p>情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyWordResults <p>关键词识别结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LangType <p>多语言识别类型</p><ul><li>中文    chinese</li><li>英语    english</li><li>日语    japanese</li><li>韩语    korean</li><li>阿拉伯语    arabic</li><li>菲律宾语    filipino</li><li>法语    french</li><li>印地语    hindi</li><li>印尼语    indonesian</li><li>马来语    malay</li><li>葡萄牙语    portugal</li><li>西班牙语    spanish</li><li>泰语    thai</li><li>土耳其语    turkish</li><li>越南语    vietnam</li><li>德语    german</li></ul>
     * @param string $SpeakerRoleName <p>说话人角色名称</p>
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
        if (array_key_exists("FinalSentence",$param) and $param["FinalSentence"] !== null) {
            $this->FinalSentence = $param["FinalSentence"];
        }

        if (array_key_exists("SliceSentence",$param) and $param["SliceSentence"] !== null) {
            $this->SliceSentence = $param["SliceSentence"];
        }

        if (array_key_exists("WrittenText",$param) and $param["WrittenText"] !== null) {
            $this->WrittenText = $param["WrittenText"];
        }

        if (array_key_exists("StartMs",$param) and $param["StartMs"] !== null) {
            $this->StartMs = $param["StartMs"];
        }

        if (array_key_exists("EndMs",$param) and $param["EndMs"] !== null) {
            $this->EndMs = $param["EndMs"];
        }

        if (array_key_exists("WordsNum",$param) and $param["WordsNum"] !== null) {
            $this->WordsNum = $param["WordsNum"];
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new SentenceWords();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("SpeechSpeed",$param) and $param["SpeechSpeed"] !== null) {
            $this->SpeechSpeed = $param["SpeechSpeed"];
        }

        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("EmotionalEnergy",$param) and $param["EmotionalEnergy"] !== null) {
            $this->EmotionalEnergy = $param["EmotionalEnergy"];
        }

        if (array_key_exists("SilenceTime",$param) and $param["SilenceTime"] !== null) {
            $this->SilenceTime = $param["SilenceTime"];
        }

        if (array_key_exists("EmotionType",$param) and $param["EmotionType"] !== null) {
            $this->EmotionType = $param["EmotionType"];
        }

        if (array_key_exists("KeyWordResults",$param) and $param["KeyWordResults"] !== null) {
            $this->KeyWordResults = [];
            foreach ($param["KeyWordResults"] as $key => $value){
                $obj = new KeyWordResult();
                $obj->deserialize($value);
                array_push($this->KeyWordResults, $obj);
            }
        }

        if (array_key_exists("LangType",$param) and $param["LangType"] !== null) {
            $this->LangType = $param["LangType"];
        }

        if (array_key_exists("SpeakerRoleName",$param) and $param["SpeakerRoleName"] !== null) {
            $this->SpeakerRoleName = $param["SpeakerRoleName"];
        }
    }
}
