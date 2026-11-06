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
 * UpdateTRTCVoicePrint请求参数结构体
 *
 * @method string getVoicePrintId() 获取待更新的声纹 ID（由 RegisterTRTCVoicePrint 返回）。更新采用覆盖模式——只保留一条最新音频，VoicePrintId 保持不变。
 * @method void setVoicePrintId(string $VoicePrintId) 设置待更新的声纹 ID（由 RegisterTRTCVoicePrint 返回）。更新采用覆盖模式——只保留一条最新音频，VoicePrintId 保持不变。
 * @method string getData() 获取新的音频数据的 Base64 字符串。要求与 RegisterTRTCVoicePrint一致：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后 ≤ 2MB；PCM 裸数据 10s ≤ 时长 ≤ 45s。
 * @method void setData(string $Data) 设置新的音频数据的 Base64 字符串。要求与 RegisterTRTCVoicePrint一致：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后 ≤ 2MB；PCM 裸数据 10s ≤ 时长 ≤ 45s。
 * @method string getSdkAppId() 获取SdkAppId
 * @method void setSdkAppId(string $SdkAppId) 设置SdkAppId
 * @method string getAudioFormat() 获取音频格式，可选 pcm 或 wav，大小写不敏感，不传默认为 pcm
 * @method void setAudioFormat(string $AudioFormat) 设置音频格式，可选 pcm 或 wav，大小写不敏感，不传默认为 pcm
 */
class UpdateTRTCVoicePrintRequest extends AbstractModel
{
    /**
     * @var string 待更新的声纹 ID（由 RegisterTRTCVoicePrint 返回）。更新采用覆盖模式——只保留一条最新音频，VoicePrintId 保持不变。
     */
    public $VoicePrintId;

    /**
     * @var string 新的音频数据的 Base64 字符串。要求与 RegisterTRTCVoicePrint一致：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后 ≤ 2MB；PCM 裸数据 10s ≤ 时长 ≤ 45s。
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
     * @param string $VoicePrintId 待更新的声纹 ID（由 RegisterTRTCVoicePrint 返回）。更新采用覆盖模式——只保留一条最新音频，VoicePrintId 保持不变。
     * @param string $Data 新的音频数据的 Base64 字符串。要求与 RegisterTRTCVoicePrint一致：16kHz/16bit/单声道 PCM 或 WAV；Base64 解码后 ≤ 2MB；PCM 裸数据 10s ≤ 时长 ≤ 45s。
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
        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
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
