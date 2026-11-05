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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DesignVoiceAsync请求参数结构体
 *
 * @method string getPrompt() 获取<p>音色描述</p>
 * @method void setPrompt(string $Prompt) 设置<p>音色描述</p>
 * @method string getSubAppId() 获取<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method void setSubAppId(string $SubAppId) 设置<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method string getModelName() 获取<p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
 * @method void setModelName(string $ModelName) 设置<p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
 * @method VoiceSettings getVoiceSettings() 获取<p>音色设置</p>
 * @method void setVoiceSettings(VoiceSettings $VoiceSettings) 设置<p>音色设置</p>
 * @method string getPreviewText() 获取<p>试听合成文本，最大 500 字符</p>
 * @method void setPreviewText(string $PreviewText) 设置<p>试听合成文本，最大 500 字符</p>
 * @method string getExtParam() 获取<p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级设计参数。</p><hr><h3 id="ElevenLabs">ElevenLabs</h3><ul><li>model_id（string）：TTV 模型，可选 eleven_multilingual_ttv_v2（默认）、eleven_ttv_v3</li><li>voice_name（string）：音色名称，用于设计完成后正式创建音色</li><li>labels（map&lt;string,string&gt;）：音色标签，最多 16 项，键值各不超过 256 字节</li><li>auto_generate_text（boolean）：是否自动生成与描述匹配的试听文本，默认 false</li><li>loudness（float）：音量，取值范围 [-1, 1]，默认 0.5</li><li>seed（integer）：采样种子，取值范围 [0, 2147483647]</li><li>guidance_scale（float）：提示词遵循程度，取值范围 [0, 100]，默认 5</li><li>quality（float）：输出质量，取值范围 [-1, 1]，越高质量越好但多样性越低</li><li>should_enhance（boolean）：是否用 AI 扩写音色描述，默认 false</li><li>reference_audio_base64（string）：参考音频 base64，仅 eleven_ttv_v3 支持</li><li>prompt_strength（float）：提示词与参考音频权重，取值范围 [0, 1]，仅 eleven_ttv_v3 支持</li><li>audio_setting.format（string）：音频格式，可选 mp3、opus、alaw、pcm</li><li>audio_setting.sample_rate（integer）：采样率，与 format 组合受限</li><li>audio_setting.bitrate（integer）：比特率，需与 format、sample_rate 匹配</li></ul><hr>
 * @method void setExtParam(string $ExtParam) 设置<p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级设计参数。</p><hr><h3 id="ElevenLabs">ElevenLabs</h3><ul><li>model_id（string）：TTV 模型，可选 eleven_multilingual_ttv_v2（默认）、eleven_ttv_v3</li><li>voice_name（string）：音色名称，用于设计完成后正式创建音色</li><li>labels（map&lt;string,string&gt;）：音色标签，最多 16 项，键值各不超过 256 字节</li><li>auto_generate_text（boolean）：是否自动生成与描述匹配的试听文本，默认 false</li><li>loudness（float）：音量，取值范围 [-1, 1]，默认 0.5</li><li>seed（integer）：采样种子，取值范围 [0, 2147483647]</li><li>guidance_scale（float）：提示词遵循程度，取值范围 [0, 100]，默认 5</li><li>quality（float）：输出质量，取值范围 [-1, 1]，越高质量越好但多样性越低</li><li>should_enhance（boolean）：是否用 AI 扩写音色描述，默认 false</li><li>reference_audio_base64（string）：参考音频 base64，仅 eleven_ttv_v3 支持</li><li>prompt_strength（float）：提示词与参考音频权重，取值范围 [0, 1]，仅 eleven_ttv_v3 支持</li><li>audio_setting.format（string）：音频格式，可选 mp3、opus、alaw、pcm</li><li>audio_setting.sample_rate（integer）：采样率，与 format 组合受限</li><li>audio_setting.bitrate（integer）：比特率，需与 format、sample_rate 匹配</li></ul><hr>
 * @method string getSessionContext() 获取<p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getSessionId() 获取<p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 */
class DesignVoiceAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>音色描述</p>
     */
    public $Prompt;

    /**
     * @var string <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     */
    public $SubAppId;

    /**
     * @var string <p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
     */
    public $ModelName;

    /**
     * @var VoiceSettings <p>音色设置</p>
     */
    public $VoiceSettings;

    /**
     * @var string <p>试听合成文本，最大 500 字符</p>
     */
    public $PreviewText;

    /**
     * @var string <p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级设计参数。</p><hr><h3 id="ElevenLabs">ElevenLabs</h3><ul><li>model_id（string）：TTV 模型，可选 eleven_multilingual_ttv_v2（默认）、eleven_ttv_v3</li><li>voice_name（string）：音色名称，用于设计完成后正式创建音色</li><li>labels（map&lt;string,string&gt;）：音色标签，最多 16 项，键值各不超过 256 字节</li><li>auto_generate_text（boolean）：是否自动生成与描述匹配的试听文本，默认 false</li><li>loudness（float）：音量，取值范围 [-1, 1]，默认 0.5</li><li>seed（integer）：采样种子，取值范围 [0, 2147483647]</li><li>guidance_scale（float）：提示词遵循程度，取值范围 [0, 100]，默认 5</li><li>quality（float）：输出质量，取值范围 [-1, 1]，越高质量越好但多样性越低</li><li>should_enhance（boolean）：是否用 AI 扩写音色描述，默认 false</li><li>reference_audio_base64（string）：参考音频 base64，仅 eleven_ttv_v3 支持</li><li>prompt_strength（float）：提示词与参考音频权重，取值范围 [0, 1]，仅 eleven_ttv_v3 支持</li><li>audio_setting.format（string）：音频格式，可选 mp3、opus、alaw、pcm</li><li>audio_setting.sample_rate（integer）：采样率，与 format 组合受限</li><li>audio_setting.bitrate（integer）：比特率，需与 format、sample_rate 匹配</li></ul><hr>
     */
    public $ExtParam;

    /**
     * @var string <p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @param string $Prompt <p>音色描述</p>
     * @param string $SubAppId <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     * @param string $ModelName <p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
     * @param VoiceSettings $VoiceSettings <p>音色设置</p>
     * @param string $PreviewText <p>试听合成文本，最大 500 字符</p>
     * @param string $ExtParam <p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级设计参数。</p><hr><h3 id="ElevenLabs">ElevenLabs</h3><ul><li>model_id（string）：TTV 模型，可选 eleven_multilingual_ttv_v2（默认）、eleven_ttv_v3</li><li>voice_name（string）：音色名称，用于设计完成后正式创建音色</li><li>labels（map&lt;string,string&gt;）：音色标签，最多 16 项，键值各不超过 256 字节</li><li>auto_generate_text（boolean）：是否自动生成与描述匹配的试听文本，默认 false</li><li>loudness（float）：音量，取值范围 [-1, 1]，默认 0.5</li><li>seed（integer）：采样种子，取值范围 [0, 2147483647]</li><li>guidance_scale（float）：提示词遵循程度，取值范围 [0, 100]，默认 5</li><li>quality（float）：输出质量，取值范围 [-1, 1]，越高质量越好但多样性越低</li><li>should_enhance（boolean）：是否用 AI 扩写音色描述，默认 false</li><li>reference_audio_base64（string）：参考音频 base64，仅 eleven_ttv_v3 支持</li><li>prompt_strength（float）：提示词与参考音频权重，取值范围 [0, 1]，仅 eleven_ttv_v3 支持</li><li>audio_setting.format（string）：音频格式，可选 mp3、opus、alaw、pcm</li><li>audio_setting.sample_rate（integer）：采样率，与 format 组合受限</li><li>audio_setting.bitrate（integer）：比特率，需与 format、sample_rate 匹配</li></ul><hr>
     * @param string $SessionContext <p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param string $SessionId <p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("VoiceSettings",$param) and $param["VoiceSettings"] !== null) {
            $this->VoiceSettings = new VoiceSettings();
            $this->VoiceSettings->deserialize($param["VoiceSettings"]);
        }

        if (array_key_exists("PreviewText",$param) and $param["PreviewText"] !== null) {
            $this->PreviewText = $param["PreviewText"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
