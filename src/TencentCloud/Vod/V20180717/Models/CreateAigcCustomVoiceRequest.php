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
 * CreateAigcCustomVoice请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getVoiceName() 获取<p>音色名称，文本内容最大长度 20 个字符</p>
 * @method void setVoiceName(string $VoiceName) 设置<p>音色名称，文本内容最大长度 20 个字符</p>
 * @method string getVoiceUrl() 获取<p>音色数据文件获取链接，支持 .mp3 / .wav / .mp4 / .mov 格式的音视频文件。音频中人声需干净无杂音，有且只能有一种人声，时长不短于 5 秒且不长于 30 秒。</p>
 * @method void setVoiceUrl(string $VoiceUrl) 设置<p>音色数据文件获取链接，支持 .mp3 / .wav / .mp4 / .mov 格式的音视频文件。音频中人声需干净无杂音，有且只能有一种人声，时长不短于 5 秒且不长于 30 秒。</p>
 * @method string getVideoId() 获取<p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
 * @method void setVideoId(string $VideoId) 设置<p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 */
class CreateAigcCustomVoiceRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>音色名称，文本内容最大长度 20 个字符</p>
     */
    public $VoiceName;

    /**
     * @var string <p>音色数据文件获取链接，支持 .mp3 / .wav / .mp4 / .mov 格式的音视频文件。音频中人声需干净无杂音，有且只能有一种人声，时长不短于 5 秒且不长于 30 秒。</p>
     */
    public $VoiceUrl;

    /**
     * @var string <p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
     */
    public $VideoId;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $VoiceName <p>音色名称，文本内容最大长度 20 个字符</p>
     * @param string $VoiceUrl <p>音色数据文件获取链接，支持 .mp3 / .wav / .mp4 / .mov 格式的音视频文件。音频中人声需干净无杂音，有且只能有一种人声，时长不短于 5 秒且不长于 30 秒。</p>
     * @param string $VideoId <p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
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

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceUrl",$param) and $param["VoiceUrl"] !== null) {
            $this->VoiceUrl = $param["VoiceUrl"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
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
    }
}
