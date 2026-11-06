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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterTRTCVoicePrint请求参数结构体
 *
 * @method string getSpeakerId() 获取业务方自定义的说话人唯一标识，同一 (AppId, SdkAppId, SpeakerId) 重复调用会覆盖旧声纹（软删旧记录 + 新建一行，返回新的 VoicePrintId）
 * @method void setSpeakerId(string $SpeakerId) 设置业务方自定义的说话人唯一标识，同一 (AppId, SdkAppId, SpeakerId) 重复调用会覆盖旧声纹（软删旧记录 + 新建一行，返回新的 VoicePrintId）
 * @method string getData() 获取音频数据的 Base64 字符串。要求：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后大小 ≤ 2MB；PCM 裸数据时长 10s ≤ 时长 ≤ 45s（WAV 去掉 header 后按相同标准校验）
 * @method void setData(string $Data) 设置音频数据的 Base64 字符串。要求：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后大小 ≤ 2MB；PCM 裸数据时长 10s ≤ 时长 ≤ 45s（WAV 去掉 header 后按相同标准校验）
 * @method string getSdkAppId() 获取SdkAppId
 * @method void setSdkAppId(string $SdkAppId) 设置SdkAppId
 * @method string getAudioFormat() 获取音频格式，可选 pcm 或 wav，大小写不敏感，不传默认为 pcm
 * @method void setAudioFormat(string $AudioFormat) 设置音频格式，可选 pcm 或 wav，大小写不敏感，不传默认为 pcm
 */
class RegisterTRTCVoicePrintRequest extends AbstractModel
{
    /**
     * @var string 业务方自定义的说话人唯一标识，同一 (AppId, SdkAppId, SpeakerId) 重复调用会覆盖旧声纹（软删旧记录 + 新建一行，返回新的 VoicePrintId）
     */
    public $SpeakerId;

    /**
     * @var string 音频数据的 Base64 字符串。要求：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后大小 ≤ 2MB；PCM 裸数据时长 10s ≤ 时长 ≤ 45s（WAV 去掉 header 后按相同标准校验）
     */
    public $Data;

    /**
     * @var string SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 音频格式，可选 pcm 或 wav，大小写不敏感，不传默认为 pcm
     */
    public $AudioFormat;

    /**
     * @param string $SpeakerId 业务方自定义的说话人唯一标识，同一 (AppId, SdkAppId, SpeakerId) 重复调用会覆盖旧声纹（软删旧记录 + 新建一行，返回新的 VoicePrintId）
     * @param string $Data 音频数据的 Base64 字符串。要求：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后大小 ≤ 2MB；PCM 裸数据时长 10s ≤ 时长 ≤ 45s（WAV 去掉 header 后按相同标准校验）
     * @param string $SdkAppId SdkAppId
     * @param string $AudioFormat 音频格式，可选 pcm 或 wav，大小写不敏感，不传默认为 pcm
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
        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = $param["AudioFormat"];
        }
    }
}
