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
 * CloneVoiceAsync请求参数结构体
 *
 * @method string getSubAppId() 获取<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method void setSubAppId(string $SubAppId) 设置<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method string getAudioData() 获取<p>克隆音频base64编码。</p>
 * @method void setAudioData(string $AudioData) 设置<p>克隆音频base64编码。</p>
 * @method string getAudioUrl() 获取<p>克隆音频Url，AudioData为空时有效</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>克隆音频Url，AudioData为空时有效</p>
 * @method string getAudioFileId() 获取<p>克隆文件FileID，AudioData及AudioUrl为空时有效</p>
 * @method void setAudioFileId(string $AudioFileId) 设置<p>克隆文件FileID，AudioData及AudioUrl为空时有效</p>
 * @method string getLanguageBoost() 获取<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) 设置<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method string getExtParam() 获取<p>音色克隆拓展参数。<code>ExtParam</code> 支持的字段： </p><ul><li><code>text</code> (string)：试听合成文本，最大 1000 字符；为空或不传时不返回试听音频。</li></ul>
 * @method void setExtParam(string $ExtParam) 设置<p>音色克隆拓展参数。<code>ExtParam</code> 支持的字段： </p><ul><li><code>text</code> (string)：试听合成文本，最大 1000 字符；为空或不传时不返回试听音频。</li></ul>
 * @method string getSessionContext() 获取<p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getSessionId() 获取<p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 */
class CloneVoiceAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     */
    public $SubAppId;

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
     * @var string <p>音色克隆拓展参数。<code>ExtParam</code> 支持的字段： </p><ul><li><code>text</code> (string)：试听合成文本，最大 1000 字符；为空或不传时不返回试听音频。</li></ul>
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
     * @param string $SubAppId <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     * @param string $AudioData <p>克隆音频base64编码。</p>
     * @param string $AudioUrl <p>克隆音频Url，AudioData为空时有效</p>
     * @param string $AudioFileId <p>克隆文件FileID，AudioData及AudioUrl为空时有效</p>
     * @param string $LanguageBoost <p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
     * @param string $ExtParam <p>音色克隆拓展参数。<code>ExtParam</code> 支持的字段： </p><ul><li><code>text</code> (string)：试听合成文本，最大 1000 字符；为空或不传时不返回试听音频。</li></ul>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
