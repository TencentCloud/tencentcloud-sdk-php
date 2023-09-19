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
namespace TencentCloud\Tts\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTtsTask请求参数结构体
 *
 * @method string getText() 获取合成语音的源文本，按UTF-8编码统一计算，最多支持10万字符
 * @method void setText(string $Text) 设置合成语音的源文本，按UTF-8编码统一计算，最多支持10万字符
 * @method integer getModelType() 获取模型类型，1-默认模型。
 * @method void setModelType(integer $ModelType) 设置模型类型，1-默认模型。
 * @method float getVolume() 获取音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
 * @method void setVolume(float $Volume) 设置音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
 * @method float getSpeed() 获取语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
 * @method void setSpeed(float $Speed) 设置语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
 * @method integer getProjectId() 获取项目id，用户自定义，默认为0。
 * @method void setProjectId(integer $ProjectId) 设置项目id，用户自定义，默认为0。
 * @method integer getVoiceType() 获取音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
 * @method void setVoiceType(integer $VoiceType) 设置音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
 * @method integer getPrimaryLanguage() 获取主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
 * @method void setPrimaryLanguage(integer $PrimaryLanguage) 设置主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
 * @method integer getSampleRate() 获取音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
 * @method string getCodec() 获取返回音频格式，可取值：mp3（默认），wav，pcm
 * @method void setCodec(string $Codec) 设置返回音频格式，可取值：mp3（默认），wav，pcm
 * @method string getCallbackUrl() 获取回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。[回调说明](https://cloud.tencent.com/document/product/1073/55746)
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。[回调说明](https://cloud.tencent.com/document/product/1073/55746)
 * @method boolean getEnableSubtitle() 获取是否开启时间戳功能，默认为false。
 * @method void setEnableSubtitle(boolean $EnableSubtitle) 设置是否开启时间戳功能，默认为false。
 * @method boolean getVoiceoverDialogueSplit() 获取旁白与对白文本解析，分别合成相应风格（仅适用于旁对白音色10510000、100510000），默认 false
 * @method void setVoiceoverDialogueSplit(boolean $VoiceoverDialogueSplit) 设置旁白与对白文本解析，分别合成相应风格（仅适用于旁对白音色10510000、100510000），默认 false
 * @method string getEmotionCategory() 获取控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
 * @method void setEmotionCategory(string $EmotionCategory) 设置控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
 * @method integer getEmotionIntensity() 获取控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效。
 * @method void setEmotionIntensity(integer $EmotionIntensity) 设置控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效。
 */
class CreateTtsTaskRequest extends AbstractModel
{
    /**
     * @var string 合成语音的源文本，按UTF-8编码统一计算，最多支持10万字符
     */
    public $Text;

    /**
     * @var integer 模型类型，1-默认模型。
     */
    public $ModelType;

    /**
     * @var float 音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
     */
    public $Volume;

    /**
     * @var float 语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
     */
    public $Speed;

    /**
     * @var integer 项目id，用户自定义，默认为0。
     */
    public $ProjectId;

    /**
     * @var integer 音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
     */
    public $VoiceType;

    /**
     * @var integer 主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
     */
    public $PrimaryLanguage;

    /**
     * @var integer 音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
     */
    public $SampleRate;

    /**
     * @var string 返回音频格式，可取值：mp3（默认），wav，pcm
     */
    public $Codec;

    /**
     * @var string 回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。[回调说明](https://cloud.tencent.com/document/product/1073/55746)
     */
    public $CallbackUrl;

    /**
     * @var boolean 是否开启时间戳功能，默认为false。
     */
    public $EnableSubtitle;

    /**
     * @var boolean 旁白与对白文本解析，分别合成相应风格（仅适用于旁对白音色10510000、100510000），默认 false
     */
    public $VoiceoverDialogueSplit;

    /**
     * @var string 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
     */
    public $EmotionCategory;

    /**
     * @var integer 控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效。
     */
    public $EmotionIntensity;

    /**
     * @param string $Text 合成语音的源文本，按UTF-8编码统一计算，最多支持10万字符
     * @param integer $ModelType 模型类型，1-默认模型。
     * @param float $Volume 音量大小，范围：[0，10]，分别对应11个等级的音量，默认为0，代表正常音量。没有静音选项。
     * @param float $Speed 语速，范围：[-2，2]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
     * @param integer $ProjectId 项目id，用户自定义，默认为0。
     * @param integer $VoiceType 音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
     * @param integer $PrimaryLanguage 主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
     * @param integer $SampleRate 音频采样率：<li>16000：16k（默认）</li><li>8000：8k</li>
     * @param string $Codec 返回音频格式，可取值：mp3（默认），wav，pcm
     * @param string $CallbackUrl 回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。[回调说明](https://cloud.tencent.com/document/product/1073/55746)
     * @param boolean $EnableSubtitle 是否开启时间戳功能，默认为false。
     * @param boolean $VoiceoverDialogueSplit 旁白与对白文本解析，分别合成相应风格（仅适用于旁对白音色10510000、100510000），默认 false
     * @param string $EmotionCategory 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
     * @param integer $EmotionIntensity 控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效。
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

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("PrimaryLanguage",$param) and $param["PrimaryLanguage"] !== null) {
            $this->PrimaryLanguage = $param["PrimaryLanguage"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("EnableSubtitle",$param) and $param["EnableSubtitle"] !== null) {
            $this->EnableSubtitle = $param["EnableSubtitle"];
        }

        if (array_key_exists("VoiceoverDialogueSplit",$param) and $param["VoiceoverDialogueSplit"] !== null) {
            $this->VoiceoverDialogueSplit = $param["VoiceoverDialogueSplit"];
        }

        if (array_key_exists("EmotionCategory",$param) and $param["EmotionCategory"] !== null) {
            $this->EmotionCategory = $param["EmotionCategory"];
        }

        if (array_key_exists("EmotionIntensity",$param) and $param["EmotionIntensity"] !== null) {
            $this->EmotionIntensity = $param["EmotionIntensity"];
        }
    }
}
