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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AsyncTextToSpeech请求参数结构体
 *
 * @method string getText() 获取需要转语音的文字内容，最大允许50000字符，注意 1汉字=2字符
 * @method void setText(string $Text) 设置需要转语音的文字内容，最大允许50000字符，注意 1汉字=2字符
 * @method Voice getVoice() 获取文本转语音的声音配置
 * @method void setVoice(Voice $Voice) 设置文本转语音的声音配置
 * @method integer getSdkAppId() 获取TRTC的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SdkAppId
 * @method AudioFormat getAudioFormat() 获取文本转语音的输出音频的格式
 * @method void setAudioFormat(AudioFormat $AudioFormat) 设置文本转语音的输出音频的格式
 * @method string getModel() 获取TTS的模型，当前固定为：flow_01_turbo
 * @method void setModel(string $Model) 设置TTS的模型，当前固定为：flow_01_turbo
 * @method array getPronunciationDict() 获取多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。
 * @method void setPronunciationDict(array $PronunciationDict) 设置多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。
 * @method integer getAlignmentMode() 获取默认为0，0表示不生成字幕，1表示生成字幕
 * @method void setAlignmentMode(integer $AlignmentMode) 设置默认为0，0表示不生成字幕，1表示生成字幕
 * @method string getLanguageCode() 获取需要合成的语言（ISO 639-1），默认自动识别，支持的语言如下：  zh（中文） en（英文） yue（粤语） ja（日语） ko（韩语） ar（阿拉伯语） id（印尼语） th（泰语）
 * @method void setLanguageCode(string $LanguageCode) 设置需要合成的语言（ISO 639-1），默认自动识别，支持的语言如下：  zh（中文） en（英文） yue（粤语） ja（日语） ko（韩语） ar（阿拉伯语） id（印尼语） th（泰语）
 */
class AsyncTextToSpeechRequest extends AbstractModel
{
    /**
     * @var string 需要转语音的文字内容，最大允许50000字符，注意 1汉字=2字符
     */
    public $Text;

    /**
     * @var Voice 文本转语音的声音配置
     */
    public $Voice;

    /**
     * @var integer TRTC的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var AudioFormat 文本转语音的输出音频的格式
     */
    public $AudioFormat;

    /**
     * @var string TTS的模型，当前固定为：flow_01_turbo
     */
    public $Model;

    /**
     * @var array 多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。
     */
    public $PronunciationDict;

    /**
     * @var integer 默认为0，0表示不生成字幕，1表示生成字幕
     */
    public $AlignmentMode;

    /**
     * @var string 需要合成的语言（ISO 639-1），默认自动识别，支持的语言如下：  zh（中文） en（英文） yue（粤语） ja（日语） ko（韩语） ar（阿拉伯语） id（印尼语） th（泰语）
     */
    public $LanguageCode;

    /**
     * @param string $Text 需要转语音的文字内容，最大允许50000字符，注意 1汉字=2字符
     * @param Voice $Voice 文本转语音的声音配置
     * @param integer $SdkAppId TRTC的SdkAppId
     * @param AudioFormat $AudioFormat 文本转语音的输出音频的格式
     * @param string $Model TTS的模型，当前固定为：flow_01_turbo
     * @param array $PronunciationDict 多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。
     * @param integer $AlignmentMode 默认为0，0表示不生成字幕，1表示生成字幕
     * @param string $LanguageCode 需要合成的语言（ISO 639-1），默认自动识别，支持的语言如下：  zh（中文） en（英文） yue（粤语） ja（日语） ko（韩语） ar（阿拉伯语） id（印尼语） th（泰语）
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new Voice();
            $this->Voice->deserialize($param["Voice"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = new AudioFormat();
            $this->AudioFormat->deserialize($param["AudioFormat"]);
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("PronunciationDict",$param) and $param["PronunciationDict"] !== null) {
            $this->PronunciationDict = [];
            foreach ($param["PronunciationDict"] as $key => $value){
                $obj = new PronunciationDict();
                $obj->deserialize($value);
                array_push($this->PronunciationDict, $obj);
            }
        }

        if (array_key_exists("AlignmentMode",$param) and $param["AlignmentMode"] !== null) {
            $this->AlignmentMode = $param["AlignmentMode"];
        }

        if (array_key_exists("LanguageCode",$param) and $param["LanguageCode"] !== null) {
            $this->LanguageCode = $param["LanguageCode"];
        }
    }
}
