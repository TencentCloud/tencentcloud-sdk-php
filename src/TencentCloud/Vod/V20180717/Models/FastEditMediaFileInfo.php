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
 * 快速媒体编辑操作的输入媒体类型
 *
 * @method string getFileId() 获取媒体的 ID。
 * @method void setFileId(string $FileId) 设置媒体的 ID。
 * @method string getAudioVideoType() 获取操作的音视频类型，可选值有：
<li>Transcode：转码输出；</li>
<li>Original：原始音视频。</li>
注意：操作的音视频，必须为 HLS 格式。
 * @method void setAudioVideoType(string $AudioVideoType) 设置操作的音视频类型，可选值有：
<li>Transcode：转码输出；</li>
<li>Original：原始音视频。</li>
注意：操作的音视频，必须为 HLS 格式。
 * @method integer getTranscodeDefinition() 获取当 AudioVideoType 为 Transcode 时有效，表示操作媒体的的转码模板 ID。
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) 设置当 AudioVideoType 为 Transcode 时有效，表示操作媒体的的转码模板 ID。
 * @method float getStartTimeOffset() 获取媒体剪辑起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置媒体剪辑起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取媒体剪辑结束的时间偏移，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置媒体剪辑结束的时间偏移，单位：秒。
 */
class FastEditMediaFileInfo extends AbstractModel
{
    /**
     * @var string 媒体的 ID。
     */
    public $FileId;

    /**
     * @var string 操作的音视频类型，可选值有：
<li>Transcode：转码输出；</li>
<li>Original：原始音视频。</li>
注意：操作的音视频，必须为 HLS 格式。
     */
    public $AudioVideoType;

    /**
     * @var integer 当 AudioVideoType 为 Transcode 时有效，表示操作媒体的的转码模板 ID。
     */
    public $TranscodeDefinition;

    /**
     * @var float 媒体剪辑起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 媒体剪辑结束的时间偏移，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId 媒体的 ID。
     * @param string $AudioVideoType 操作的音视频类型，可选值有：
<li>Transcode：转码输出；</li>
<li>Original：原始音视频。</li>
注意：操作的音视频，必须为 HLS 格式。
     * @param integer $TranscodeDefinition 当 AudioVideoType 为 Transcode 时有效，表示操作媒体的的转码模板 ID。
     * @param float $StartTimeOffset 媒体剪辑起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 媒体剪辑结束的时间偏移，单位：秒。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("AudioVideoType",$param) and $param["AudioVideoType"] !== null) {
            $this->AudioVideoType = $param["AudioVideoType"];
        }

        if (array_key_exists("TranscodeDefinition",$param) and $param["TranscodeDefinition"] !== null) {
            $this->TranscodeDefinition = $param["TranscodeDefinition"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
