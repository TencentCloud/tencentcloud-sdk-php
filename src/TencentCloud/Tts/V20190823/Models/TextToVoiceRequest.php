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
 * TextToVoice请求参数结构体
 *
 * @method string getText() 获取合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
 * @method void setText(string $Text) 设置合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
 * @method string getSessionId() 获取一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
 * @method void setSessionId(string $SessionId) 设置一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
 * @method float getVolume() 获取音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
 * @method void setVolume(float $Volume) 设置音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
 * @method float getSpeed() 获取语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
 * @method void setSpeed(float $Speed) 设置语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
 * @method integer getProjectId() 获取项目id，用户自定义，默认为0。
 * @method void setProjectId(integer $ProjectId) 设置项目id，用户自定义，默认为0。
 * @method integer getModelType() 获取模型类型，1-默认模型。
 * @method void setModelType(integer $ModelType) 设置模型类型，1-默认模型。
 * @method integer getVoiceType() 获取音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
 * @method void setVoiceType(integer $VoiceType) 设置音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
 * @method integer getPrimaryLanguage() 获取主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
 * @method void setPrimaryLanguage(integer $PrimaryLanguage) 设置主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
 * @method integer getSampleRate() 获取音频采样率：
<li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li>
<li>16000：16k（默认）</li>
<li>8000：8k</li>
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：
<li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li>
<li>16000：16k（默认）</li>
<li>8000：8k</li>
 * @method string getCodec() 获取返回音频格式，可取值：wav（默认），mp3，pcm
 * @method void setCodec(string $Codec) 设置返回音频格式，可取值：wav（默认），mp3，pcm
 * @method boolean getEnableSubtitle() 获取是否开启时间戳功能，默认为false。
 * @method void setEnableSubtitle(boolean $EnableSubtitle) 设置是否开启时间戳功能，默认为false。
 * @method integer getSegmentRate() 获取断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
 * @method void setSegmentRate(integer $SegmentRate) 设置断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
 * @method string getEmotionCategory() 获取控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
 * @method void setEmotionCategory(string $EmotionCategory) 设置控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
 * @method integer getEmotionIntensity() 获取控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
 * @method void setEmotionIntensity(integer $EmotionIntensity) 设置控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
 */
class TextToVoiceRequest extends AbstractModel
{
    /**
     * @var string 合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
     */
    public $Text;

    /**
     * @var string 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
     */
    public $SessionId;

    /**
     * @var float 音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
     */
    public $Volume;

    /**
     * @var float 语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
     */
    public $Speed;

    /**
     * @var integer 项目id，用户自定义，默认为0。
     */
    public $ProjectId;

    /**
     * @var integer 模型类型，1-默认模型。
     */
    public $ModelType;

    /**
     * @var integer 音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
     */
    public $VoiceType;

    /**
     * @var integer 主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
     */
    public $PrimaryLanguage;

    /**
     * @var integer 音频采样率：
<li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li>
<li>16000：16k（默认）</li>
<li>8000：8k</li>
     */
    public $SampleRate;

    /**
     * @var string 返回音频格式，可取值：wav（默认），mp3，pcm
     */
    public $Codec;

    /**
     * @var boolean 是否开启时间戳功能，默认为false。
     */
    public $EnableSubtitle;

    /**
     * @var integer 断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
     */
    public $SegmentRate;

    /**
     * @var string 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
     */
    public $EmotionCategory;

    /**
     * @var integer 控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
     */
    public $EmotionIntensity;

    /**
     * @param string $Text 合成语音的源文本，按UTF-8编码统一计算。
中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
     * @param string $SessionId 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。
     * @param float $Volume 音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
     * @param float $Speed 语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5 1.1 1.8等。<br>参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
     * @param integer $ProjectId 项目id，用户自定义，默认为0。
     * @param integer $ModelType 模型类型，1-默认模型。
     * @param integer $VoiceType 音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见[购买指南](https://cloud.tencent.com/document/product/1073/34112)。完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
     * @param integer $PrimaryLanguage 主语言类型：<li>1-中文（默认）</li><li>2-英文</li><li>3-日文</li>
     * @param integer $SampleRate 音频采样率：
<li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li>
<li>16000：16k（默认）</li>
<li>8000：8k</li>
     * @param string $Codec 返回音频格式，可取值：wav（默认），mp3，pcm
     * @param boolean $EnableSubtitle 是否开启时间戳功能，默认为false。
     * @param integer $SegmentRate 断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。
     * @param string $EmotionCategory 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、撒娇(sajiao)、厌恶(disgusted)、震惊(amaze)、平静(peaceful)、兴奋(exciting)、傲娇(aojiao)、解说(jieshuo)
     * @param integer $EmotionIntensity 控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
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

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
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

        if (array_key_exists("EnableSubtitle",$param) and $param["EnableSubtitle"] !== null) {
            $this->EnableSubtitle = $param["EnableSubtitle"];
        }

        if (array_key_exists("SegmentRate",$param) and $param["SegmentRate"] !== null) {
            $this->SegmentRate = $param["SegmentRate"];
        }

        if (array_key_exists("EmotionCategory",$param) and $param["EmotionCategory"] !== null) {
            $this->EmotionCategory = $param["EmotionCategory"];
        }

        if (array_key_exists("EmotionIntensity",$param) and $param["EmotionIntensity"] !== null) {
            $this->EmotionIntensity = $param["EmotionIntensity"];
        }
    }
}
