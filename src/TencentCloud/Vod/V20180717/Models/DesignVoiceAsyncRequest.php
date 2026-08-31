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
 * @method VoiceSettings getVoiceSettings() 获取<p>音色设置</p>
 * @method void setVoiceSettings(VoiceSettings $VoiceSettings) 设置<p>音色设置</p>
 * @method string getPreviewText() 获取<p>试听合成文本，最大 500 字符</p>
 * @method void setPreviewText(string $PreviewText) 设置<p>试听合成文本，最大 500 字符</p>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p>
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
     * @var VoiceSettings <p>音色设置</p>
     */
    public $VoiceSettings;

    /**
     * @var string <p>试听合成文本，最大 500 字符</p>
     */
    public $PreviewText;

    /**
     * @var string <p>扩展参数，json字符串</p>
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
     * @param VoiceSettings $VoiceSettings <p>音色设置</p>
     * @param string $PreviewText <p>试听合成文本，最大 500 字符</p>
     * @param string $ExtParam <p>扩展参数，json字符串</p>
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
