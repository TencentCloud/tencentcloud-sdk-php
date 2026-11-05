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
 * CloneVoiceSync请求参数结构体
 *
 * @method string getSubAppId() 获取<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method void setSubAppId(string $SubAppId) 设置<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method string getModelName() 获取<p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
 * @method void setModelName(string $ModelName) 设置<p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
 * @method string getAudioData() 获取<p>克隆音频base64编码。</p>
 * @method void setAudioData(string $AudioData) 设置<p>克隆音频base64编码。</p>
 * @method string getAudioUrl() 获取<p>克隆音频Url，AudioData为空时有效</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>克隆音频Url，AudioData为空时有效</p>
 * @method string getAudioFileId() 获取<p>克隆文件FileID，AudioData及AudioUrl为空时有效</p>
 * @method void setAudioFileId(string $AudioFileId) 设置<p>克隆文件FileID，AudioData及AudioUrl为空时有效</p>
 * @method string getLanguageBoost() 获取<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) 设置<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method string getExtParam() 获取<p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级音色参数。</p><hr><h3 id="Clone">通用参数</h3><ul><li>text（string）：试听文本，最大 1000 字符；传入后返回试听音频 DemoAudio</li><li>tts_model（string）：试听文本合成模型，text 非空时必填；按 ModelName 模型系列白名单校验</li><li>text_lang（string）：试听文本语言，如 zh</li><li>voice_profile.name（string）：音色名称</li><li>voice_profile.description（string）：音色描述</li><li>voice_profile.gender（string）：性别，可选 male、female、unknown</li><li>voice_profile.age（string）：年龄段，可选 child、teenager、youth、middle_aged、senior、unknown</li><li>voice_profile.languages（array of string）：语言，如 ["zh"]</li><li>voice_profile.labels（array of string）：标签，如 ["磁性"]</li><li>voice_profile.scenes（array of string）：场景，如 ["解说"]</li></ul><hr><h3 id="CloneElevenLabs">ElevenLabs</h3><ul><li>voice_name（string）：音色名称；未传时回退取 voice_profile.name，两者都缺时使用默认名称</li><li>description（string）：音色描述；未传时回退取 voice_profile.description</li><li>labels（map&lt;string,string&gt;）：音色标签，官方推荐键 language、accent、gender、age；最多 16 项，键值各不超过 256 字节</li><li>remove_background_noise（boolean）：是否用音频隔离模型去除背景噪声，默认 false；样本本身无噪声时开启可能降低质量</li></ul><hr>
 * @method void setExtParam(string $ExtParam) 设置<p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级音色参数。</p><hr><h3 id="Clone">通用参数</h3><ul><li>text（string）：试听文本，最大 1000 字符；传入后返回试听音频 DemoAudio</li><li>tts_model（string）：试听文本合成模型，text 非空时必填；按 ModelName 模型系列白名单校验</li><li>text_lang（string）：试听文本语言，如 zh</li><li>voice_profile.name（string）：音色名称</li><li>voice_profile.description（string）：音色描述</li><li>voice_profile.gender（string）：性别，可选 male、female、unknown</li><li>voice_profile.age（string）：年龄段，可选 child、teenager、youth、middle_aged、senior、unknown</li><li>voice_profile.languages（array of string）：语言，如 ["zh"]</li><li>voice_profile.labels（array of string）：标签，如 ["磁性"]</li><li>voice_profile.scenes（array of string）：场景，如 ["解说"]</li></ul><hr><h3 id="CloneElevenLabs">ElevenLabs</h3><ul><li>voice_name（string）：音色名称；未传时回退取 voice_profile.name，两者都缺时使用默认名称</li><li>description（string）：音色描述；未传时回退取 voice_profile.description</li><li>labels（map&lt;string,string&gt;）：音色标签，官方推荐键 language、accent、gender、age；最多 16 项，键值各不超过 256 字节</li><li>remove_background_noise（boolean）：是否用音频隔离模型去除背景噪声，默认 false；样本本身无噪声时开启可能降低质量</li></ul><hr>
 */
class CloneVoiceSyncRequest extends AbstractModel
{
    /**
     * @var string <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     */
    public $SubAppId;

    /**
     * @var string <p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
     */
    public $ModelName;

    /**
     * @var string <p>克隆音频base64编码。</p>
     */
    public $AudioData;

    /**
     * @var string <p>克隆音频Url，AudioData为空时有效</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>克隆文件FileID，AudioData及AudioUrl为空时有效</p>
     */
    public $AudioFileId;

    /**
     * @var string <p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级音色参数。</p><hr><h3 id="Clone">通用参数</h3><ul><li>text（string）：试听文本，最大 1000 字符；传入后返回试听音频 DemoAudio</li><li>tts_model（string）：试听文本合成模型，text 非空时必填；按 ModelName 模型系列白名单校验</li><li>text_lang（string）：试听文本语言，如 zh</li><li>voice_profile.name（string）：音色名称</li><li>voice_profile.description（string）：音色描述</li><li>voice_profile.gender（string）：性别，可选 male、female、unknown</li><li>voice_profile.age（string）：年龄段，可选 child、teenager、youth、middle_aged、senior、unknown</li><li>voice_profile.languages（array of string）：语言，如 ["zh"]</li><li>voice_profile.labels（array of string）：标签，如 ["磁性"]</li><li>voice_profile.scenes（array of string）：场景，如 ["解说"]</li></ul><hr><h3 id="CloneElevenLabs">ElevenLabs</h3><ul><li>voice_name（string）：音色名称；未传时回退取 voice_profile.name，两者都缺时使用默认名称</li><li>description（string）：音色描述；未传时回退取 voice_profile.description</li><li>labels（map&lt;string,string&gt;）：音色标签，官方推荐键 language、accent、gender、age；最多 16 项，键值各不超过 256 字节</li><li>remove_background_noise（boolean）：是否用音频隔离模型去除背景噪声，默认 false；样本本身无噪声时开启可能降低质量</li></ul><hr>
     */
    public $ExtParam;

    /**
     * @param string $SubAppId <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     * @param string $ModelName <p>模型名，不填默认为MiniMax模型。</p> 枚举值： <ul><li>MiniMax</li><li>ElevenLabs</li></ul>
     * @param string $AudioData <p>克隆音频base64编码。</p>
     * @param string $AudioUrl <p>克隆音频Url，AudioData为空时有效</p>
     * @param string $AudioFileId <p>克隆文件FileID，AudioData及AudioUrl为空时有效</p>
     * @param string $LanguageBoost <p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
     * @param string $ExtParam <p><strong>ExtParam</strong> JSON 字符串字段，用于指定各模型的高级音色参数。</p><hr><h3 id="Clone">通用参数</h3><ul><li>text（string）：试听文本，最大 1000 字符；传入后返回试听音频 DemoAudio</li><li>tts_model（string）：试听文本合成模型，text 非空时必填；按 ModelName 模型系列白名单校验</li><li>text_lang（string）：试听文本语言，如 zh</li><li>voice_profile.name（string）：音色名称</li><li>voice_profile.description（string）：音色描述</li><li>voice_profile.gender（string）：性别，可选 male、female、unknown</li><li>voice_profile.age（string）：年龄段，可选 child、teenager、youth、middle_aged、senior、unknown</li><li>voice_profile.languages（array of string）：语言，如 ["zh"]</li><li>voice_profile.labels（array of string）：标签，如 ["磁性"]</li><li>voice_profile.scenes（array of string）：场景，如 ["解说"]</li></ul><hr><h3 id="CloneElevenLabs">ElevenLabs</h3><ul><li>voice_name（string）：音色名称；未传时回退取 voice_profile.name，两者都缺时使用默认名称</li><li>description（string）：音色描述；未传时回退取 voice_profile.description</li><li>labels（map&lt;string,string&gt;）：音色标签，官方推荐键 language、accent、gender、age；最多 16 项，键值各不超过 256 字节</li><li>remove_background_noise（boolean）：是否用音频隔离模型去除背景噪声，默认 false；样本本身无噪声时开启可能降低质量</li></ul><hr>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("AudioFileId",$param) and $param["AudioFileId"] !== null) {
            $this->AudioFileId = $param["AudioFileId"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
