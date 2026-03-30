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
namespace TencentCloud\Tts\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToVoice请求参数结构体
 *
 * @method string getText() 获取<p>合成语音的源文本，按UTF-8编码统一计算。<br>中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
 * @method void setText(string $Text) 设置<p>合成语音的源文本，按UTF-8编码统一计算。<br>中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
 * @method string getSessionId() 获取<p>一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。</p>
 * @method void setSessionId(string $SessionId) 设置<p>一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。</p>
 * @method float getVolume() 获取<p>音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
 * @method void setVolume(float $Volume) 设置<p>音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
 * @method float getSpeed() 获取<p>语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。<br>参数值与实际语速转换，可参考<a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">代码示例</a></p>
 * @method void setSpeed(float $Speed) 设置<p>语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。<br>参数值与实际语速转换，可参考<a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">代码示例</a></p>
 * @method integer getProjectId() 获取<p>项目id，用户自定义，默认为0。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目id，用户自定义，默认为0。</p>
 * @method integer getModelType() 获取<p>模型类型，1-默认模型。</p>
 * @method void setModelType(integer $ModelType) 设置<p>模型类型，1-默认模型。</p>
 * @method integer getVoiceType() 获取<p>音色 ID，包括精品音色、大模型音色与基础版复刻音色。不同音色价格有差异，详情请参见<a href="https://cloud.tencent.com/document/product/1073/34112">购买指南</a>。完整的音色 ID 列表请参见<a href="https://cloud.tencent.com/document/product/1073/92668">音色列表</a>。<br>若使用一句话版声音复刻，请填入固定值“200000000”。</p>
 * @method void setVoiceType(integer $VoiceType) 设置<p>音色 ID，包括精品音色、大模型音色与基础版复刻音色。不同音色价格有差异，详情请参见<a href="https://cloud.tencent.com/document/product/1073/34112">购买指南</a>。完整的音色 ID 列表请参见<a href="https://cloud.tencent.com/document/product/1073/92668">音色列表</a>。<br>若使用一句话版声音复刻，请填入固定值“200000000”。</p>
 * @method string getFastVoiceType() 获取<p>一句话版声音复刻音色ID，使用一句话版声音复刻音色时需填写。</p>
 * @method void setFastVoiceType(string $FastVoiceType) 设置<p>一句话版声音复刻音色ID，使用一句话版声音复刻音色时需填写。</p>
 * @method integer getPrimaryLanguage() 获取<p>主语言类型：<li>1-中文（默认）</li><li>2-英文</li></p>
 * @method void setPrimaryLanguage(integer $PrimaryLanguage) 设置<p>主语言类型：<li>1-中文（默认）</li><li>2-英文</li></p>
 * @method integer getSampleRate() 获取<p>音频采样率：</p><li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li><li>16000：16k（默认）</li><li>8000：8k</li>
 * @method void setSampleRate(integer $SampleRate) 设置<p>音频采样率：</p><li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li><li>16000：16k（默认）</li><li>8000：8k</li>
 * @method string getCodec() 获取<p>返回音频格式，可取值：wav（默认），mp3，pcm</p>
 * @method void setCodec(string $Codec) 设置<p>返回音频格式，可取值：wav（默认），mp3，pcm</p>
 * @method boolean getEnableSubtitle() 获取<p>是否开启时间戳功能，默认为false。部分超自然音色不支持时间戳</p>
 * @method void setEnableSubtitle(boolean $EnableSubtitle) 设置<p>是否开启时间戳功能，默认为false。部分超自然音色不支持时间戳</p>
 * @method integer getSegmentRate() 获取<p>断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。</p>
 * @method void setSegmentRate(integer $SegmentRate) 设置<p>断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。</p>
 * @method string getEmotionCategory() 获取<p>控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)<br>示例值：neutral</p>
 * @method void setEmotionCategory(string $EmotionCategory) 设置<p>控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)<br>示例值：neutral</p>
 * @method integer getEmotionIntensity() 获取<p>控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；</p>
 * @method void setEmotionIntensity(integer $EmotionIntensity) 设置<p>控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；</p>
 */
class TextToVoiceRequest extends AbstractModel
{
    /**
     * @var string <p>合成语音的源文本，按UTF-8编码统一计算。<br>中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
     */
    public $Text;

    /**
     * @var string <p>一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。</p>
     */
    public $SessionId;

    /**
     * @var float <p>音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
     */
    public $Volume;

    /**
     * @var float <p>语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。<br>参数值与实际语速转换，可参考<a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">代码示例</a></p>
     */
    public $Speed;

    /**
     * @var integer <p>项目id，用户自定义，默认为0。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>模型类型，1-默认模型。</p>
     */
    public $ModelType;

    /**
     * @var integer <p>音色 ID，包括精品音色、大模型音色与基础版复刻音色。不同音色价格有差异，详情请参见<a href="https://cloud.tencent.com/document/product/1073/34112">购买指南</a>。完整的音色 ID 列表请参见<a href="https://cloud.tencent.com/document/product/1073/92668">音色列表</a>。<br>若使用一句话版声音复刻，请填入固定值“200000000”。</p>
     */
    public $VoiceType;

    /**
     * @var string <p>一句话版声音复刻音色ID，使用一句话版声音复刻音色时需填写。</p>
     */
    public $FastVoiceType;

    /**
     * @var integer <p>主语言类型：<li>1-中文（默认）</li><li>2-英文</li></p>
     */
    public $PrimaryLanguage;

    /**
     * @var integer <p>音频采样率：</p><li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li><li>16000：16k（默认）</li><li>8000：8k</li>
     */
    public $SampleRate;

    /**
     * @var string <p>返回音频格式，可取值：wav（默认），mp3，pcm</p>
     */
    public $Codec;

    /**
     * @var boolean <p>是否开启时间戳功能，默认为false。部分超自然音色不支持时间戳</p>
     */
    public $EnableSubtitle;

    /**
     * @var integer <p>断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。</p>
     */
    public $SegmentRate;

    /**
     * @var string <p>控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)<br>示例值：neutral</p>
     */
    public $EmotionCategory;

    /**
     * @var integer <p>控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；</p>
     */
    public $EmotionIntensity;

    /**
     * @param string $Text <p>合成语音的源文本，按UTF-8编码统一计算。<br>中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
     * @param string $SessionId <p>一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复。</p>
     * @param float $Volume <p>音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
     * @param float $Speed <p>语速，范围：[-2，6]，分别对应不同语速：<li>-2代表0.6倍</li><li>-1代表0.8倍</li><li>0代表1.0倍（默认）</li><li>1代表1.2倍</li><li>2代表1.5倍</li><li>6代表2.5倍</li>如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。<br>参数值与实际语速转换，可参考<a href="https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz">代码示例</a></p>
     * @param integer $ProjectId <p>项目id，用户自定义，默认为0。</p>
     * @param integer $ModelType <p>模型类型，1-默认模型。</p>
     * @param integer $VoiceType <p>音色 ID，包括精品音色、大模型音色与基础版复刻音色。不同音色价格有差异，详情请参见<a href="https://cloud.tencent.com/document/product/1073/34112">购买指南</a>。完整的音色 ID 列表请参见<a href="https://cloud.tencent.com/document/product/1073/92668">音色列表</a>。<br>若使用一句话版声音复刻，请填入固定值“200000000”。</p>
     * @param string $FastVoiceType <p>一句话版声音复刻音色ID，使用一句话版声音复刻音色时需填写。</p>
     * @param integer $PrimaryLanguage <p>主语言类型：<li>1-中文（默认）</li><li>2-英文</li></p>
     * @param integer $SampleRate <p>音频采样率：</p><li>24000：24k（部分音色支持，请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)）</li><li>16000：16k（默认）</li><li>8000：8k</li>
     * @param string $Codec <p>返回音频格式，可取值：wav（默认），mp3，pcm</p>
     * @param boolean $EnableSubtitle <p>是否开启时间戳功能，默认为false。部分超自然音色不支持时间戳</p>
     * @param integer $SegmentRate <p>断句敏感阈值，默认值为：0，取值范围：[0,1,2]。该值越大越不容易断句，模型会更倾向于仅按照标点符号断句。此参数建议不要随意调整，可能会影响合成效果。</p>
     * @param string $EmotionCategory <p>控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)<br>示例值：neutral</p>
     * @param integer $EmotionIntensity <p>控制合成音频情感程度，取值范围为[50,200],默认为100；只有EmotionCategory不为空时生效；</p>
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

        if (array_key_exists("FastVoiceType",$param) and $param["FastVoiceType"] !== null) {
            $this->FastVoiceType = $param["FastVoiceType"];
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
