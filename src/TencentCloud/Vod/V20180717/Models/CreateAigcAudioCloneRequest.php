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
 * CreateAigcAudioClone请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method AigcAudioCloneInputFileInfo getAudioFileInfo() 获取<p>原音频文件（需要确保可访问） 模型将以此参数中传入的音频音色为示例对音色进行复刻。  </p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应不低于 10 秒，最长应不超过 5 分钟； 注3：上传的音频文件大小需不超过20mb； 注4：音频内容免涉版权，否则会被下架或销毁。</p>
 * @method void setAudioFileInfo(AigcAudioCloneInputFileInfo $AudioFileInfo) 设置<p>原音频文件（需要确保可访问） 模型将以此参数中传入的音频音色为示例对音色进行复刻。  </p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应不低于 10 秒，最长应不超过 5 分钟； 注3：上传的音频文件大小需不超过20mb； 注4：音频内容免涉版权，否则会被下架或销毁。</p>
 * @method string getVoiceId() 获取<p>自定义的声音ID，示例：&quot;vidu01&quot;。</p><p>入参限制：</p><ul><li>自定义的 voice_id 长度范围[8,256];</li><li>首字符必须为英文字母;</li><li>允许数字、字母、横线、下划线;</li><li>末位字符不可为 -、_</li><li>voice_id 不可与已有 id 重复，否则会报错.</li></ul>
 * @method void setVoiceId(string $VoiceId) 设置<p>自定义的声音ID，示例：&quot;vidu01&quot;。</p><p>入参限制：</p><ul><li>自定义的 voice_id 长度范围[8,256];</li><li>首字符必须为英文字母;</li><li>允许数字、字母、横线、下划线;</li><li>末位字符不可为 -、_</li><li>voice_id 不可与已有 id 重复，否则会报错.</li></ul>
 * @method string getText() 获取<p>复刻试听参数。</p><p>参数格式：限制 1000 字符以内，模型将使用复刻后的音色朗读本段文本内容，并返回试听音频链接。 注：试听将根据字符数正常收取语音合成费用。</p>
 * @method void setText(string $Text) 设置<p>复刻试听参数。</p><p>参数格式：限制 1000 字符以内，模型将使用复刻后的音色朗读本段文本内容，并返回试听音频链接。 注：试听将根据字符数正常收取语音合成费用。</p>
 * @method AigcAudioCloneInputFileInfo getPromptAudioFileInfo() 获取<p>音色复刻示例音频。提供本参数将有助于增强语音合成的音色相似度和稳定性，若使用本参数，需同时上传一小段示例音频。</p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应小于 8 秒； 注3：上传的音频文件大小需不超过20mb。</p>
 * @method void setPromptAudioFileInfo(AigcAudioCloneInputFileInfo $PromptAudioFileInfo) 设置<p>音色复刻示例音频。提供本参数将有助于增强语音合成的音色相似度和稳定性，若使用本参数，需同时上传一小段示例音频。</p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应小于 8 秒； 注3：上传的音频文件大小需不超过20mb。</p>
 * @method string getPromptText() 获取<p>示例音频对应的文本内容 需确保和音频内容一致，句末需有标点符号做结尾。</p>
 * @method void setPromptText(string $PromptText) 设置<p>示例音频对应的文本内容 需确保和音频内容一致，句末需有标点符号做结尾。</p>
 * @method string getPayload() 获取<p>透传参数。  入参限制：不做任何处理，仅数据传输 注：最多 1048576个字符</p>
 * @method void setPayload(string $Payload) 设置<p>透传参数。  入参限制：不做任何处理，仅数据传输 注：最多 1048576个字符</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。</p>
 */
class CreateAigcAudioCloneRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var AigcAudioCloneInputFileInfo <p>原音频文件（需要确保可访问） 模型将以此参数中传入的音频音色为示例对音色进行复刻。  </p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应不低于 10 秒，最长应不超过 5 分钟； 注3：上传的音频文件大小需不超过20mb； 注4：音频内容免涉版权，否则会被下架或销毁。</p>
     */
    public $AudioFileInfo;

    /**
     * @var string <p>自定义的声音ID，示例：&quot;vidu01&quot;。</p><p>入参限制：</p><ul><li>自定义的 voice_id 长度范围[8,256];</li><li>首字符必须为英文字母;</li><li>允许数字、字母、横线、下划线;</li><li>末位字符不可为 -、_</li><li>voice_id 不可与已有 id 重复，否则会报错.</li></ul>
     */
    public $VoiceId;

    /**
     * @var string <p>复刻试听参数。</p><p>参数格式：限制 1000 字符以内，模型将使用复刻后的音色朗读本段文本内容，并返回试听音频链接。 注：试听将根据字符数正常收取语音合成费用。</p>
     */
    public $Text;

    /**
     * @var AigcAudioCloneInputFileInfo <p>音色复刻示例音频。提供本参数将有助于增强语音合成的音色相似度和稳定性，若使用本参数，需同时上传一小段示例音频。</p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应小于 8 秒； 注3：上传的音频文件大小需不超过20mb。</p>
     */
    public $PromptAudioFileInfo;

    /**
     * @var string <p>示例音频对应的文本内容 需确保和音频内容一致，句末需有标点符号做结尾。</p>
     */
    public $PromptText;

    /**
     * @var string <p>透传参数。  入参限制：不做任何处理，仅数据传输 注：最多 1048576个字符</p>
     */
    public $Payload;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>保留字段，特殊用途时使用。</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param AigcAudioCloneInputFileInfo $AudioFileInfo <p>原音频文件（需要确保可访问） 模型将以此参数中传入的音频音色为示例对音色进行复刻。  </p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应不低于 10 秒，最长应不超过 5 分钟； 注3：上传的音频文件大小需不超过20mb； 注4：音频内容免涉版权，否则会被下架或销毁。</p>
     * @param string $VoiceId <p>自定义的声音ID，示例：&quot;vidu01&quot;。</p><p>入参限制：</p><ul><li>自定义的 voice_id 长度范围[8,256];</li><li>首字符必须为英文字母;</li><li>允许数字、字母、横线、下划线;</li><li>末位字符不可为 -、_</li><li>voice_id 不可与已有 id 重复，否则会报错.</li></ul>
     * @param string $Text <p>复刻试听参数。</p><p>参数格式：限制 1000 字符以内，模型将使用复刻后的音色朗读本段文本内容，并返回试听音频链接。 注：试听将根据字符数正常收取语音合成费用。</p>
     * @param AigcAudioCloneInputFileInfo $PromptAudioFileInfo <p>音色复刻示例音频。提供本参数将有助于增强语音合成的音色相似度和稳定性，若使用本参数，需同时上传一小段示例音频。</p><p>入参限制：注1：音频仅支持格式：mp3、m4a、wav； 注2：上传的音频文件的时长最少应小于 8 秒； 注3：上传的音频文件大小需不超过20mb。</p>
     * @param string $PromptText <p>示例音频对应的文本内容 需确保和音频内容一致，句末需有标点符号做结尾。</p>
     * @param string $Payload <p>透传参数。  入参限制：不做任何处理，仅数据传输 注：最多 1048576个字符</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。</p>
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

        if (array_key_exists("AudioFileInfo",$param) and $param["AudioFileInfo"] !== null) {
            $this->AudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->AudioFileInfo->deserialize($param["AudioFileInfo"]);
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("PromptAudioFileInfo",$param) and $param["PromptAudioFileInfo"] !== null) {
            $this->PromptAudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->PromptAudioFileInfo->deserialize($param["PromptAudioFileInfo"]);
        }

        if (array_key_exists("PromptText",$param) and $param["PromptText"] !== null) {
            $this->PromptText = $param["PromptText"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
