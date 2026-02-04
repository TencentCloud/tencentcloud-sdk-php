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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VoicePrintUpdate请求参数结构体
 *
 * @method integer getVoiceFormat() 获取<p>音频格式 0: pcm, 1: wav</p>
 * @method void setVoiceFormat(integer $VoiceFormat) 设置<p>音频格式 0: pcm, 1: wav</p>
 * @method integer getSampleRate() 获取<p>音频采样率 目前仅支持16000 单位Hz</p>
 * @method void setSampleRate(integer $SampleRate) 设置<p>音频采样率 目前仅支持16000 单位Hz</p>
 * @method string getVoicePrintId() 获取<p>说话人id， 说话人唯一标识</p>
 * @method void setVoicePrintId(string $VoicePrintId) 设置<p>说话人id， 说话人唯一标识</p>
 * @method string getData() 获取<p>音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M</p>
 * @method void setData(string $Data) 设置<p>音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M</p>
 * @method string getSpeakerNick() 获取<p>说话人昵称  不超过32字节</p>
 * @method void setSpeakerNick(string $SpeakerNick) 设置<p>说话人昵称  不超过32字节</p>
 * @method string getAudioUrl() 获取<p>声纹cos url 注意:仅支持腾讯云cos url 地址</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>声纹cos url 注意:仅支持腾讯云cos url 地址</p>
 */
class VoicePrintUpdateRequest extends AbstractModel
{
    /**
     * @var integer <p>音频格式 0: pcm, 1: wav</p>
     */
    public $VoiceFormat;

    /**
     * @var integer <p>音频采样率 目前仅支持16000 单位Hz</p>
     */
    public $SampleRate;

    /**
     * @var string <p>说话人id， 说话人唯一标识</p>
     */
    public $VoicePrintId;

    /**
     * @var string <p>音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M</p>
     */
    public $Data;

    /**
     * @var string <p>说话人昵称  不超过32字节</p>
     */
    public $SpeakerNick;

    /**
     * @var string <p>声纹cos url 注意:仅支持腾讯云cos url 地址</p>
     */
    public $AudioUrl;

    /**
     * @param integer $VoiceFormat <p>音频格式 0: pcm, 1: wav</p>
     * @param integer $SampleRate <p>音频采样率 目前仅支持16000 单位Hz</p>
     * @param string $VoicePrintId <p>说话人id， 说话人唯一标识</p>
     * @param string $Data <p>音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M</p>
     * @param string $SpeakerNick <p>说话人昵称  不超过32字节</p>
     * @param string $AudioUrl <p>声纹cos url 注意:仅支持腾讯云cos url 地址</p>
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
        if (array_key_exists("VoiceFormat",$param) and $param["VoiceFormat"] !== null) {
            $this->VoiceFormat = $param["VoiceFormat"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("SpeakerNick",$param) and $param["SpeakerNick"] !== null) {
            $this->SpeakerNick = $param["SpeakerNick"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }
    }
}
