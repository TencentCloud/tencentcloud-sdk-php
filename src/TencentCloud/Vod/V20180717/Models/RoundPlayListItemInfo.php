<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 加权轮播媒体文件信息
 *
 * @method string getFileId() 获取媒体文件标识。
 * @method void setFileId(string $FileId) 设置媒体文件标识。
 * @method string getAudioVideoType() 获取播放的音视频类型，可选值：
<li>Transcode：转码输出；转码输出会有多个模版，必须指定 Definition 字段</li>
<li>Original：原始音视频。</li>
Type 对应的格式必须为 HLS 格式。
 * @method void setAudioVideoType(string $AudioVideoType) 设置播放的音视频类型，可选值：
<li>Transcode：转码输出；转码输出会有多个模版，必须指定 Definition 字段</li>
<li>Original：原始音视频。</li>
Type 对应的格式必须为 HLS 格式。
 * @method integer getDefinition() 获取指定播放的转码模版，当 AudioVideoType 为 Transcode 时必须指定。
 * @method void setDefinition(integer $Definition) 设置指定播放的转码模版，当 AudioVideoType 为 Transcode 时必须指定。
 */
class RoundPlayListItemInfo extends AbstractModel
{
    /**
     * @var string 媒体文件标识。
     */
    public $FileId;

    /**
     * @var string 播放的音视频类型，可选值：
<li>Transcode：转码输出；转码输出会有多个模版，必须指定 Definition 字段</li>
<li>Original：原始音视频。</li>
Type 对应的格式必须为 HLS 格式。
     */
    public $AudioVideoType;

    /**
     * @var integer 指定播放的转码模版，当 AudioVideoType 为 Transcode 时必须指定。
     */
    public $Definition;

    /**
     * @param string $FileId 媒体文件标识。
     * @param string $AudioVideoType 播放的音视频类型，可选值：
<li>Transcode：转码输出；转码输出会有多个模版，必须指定 Definition 字段</li>
<li>Original：原始音视频。</li>
Type 对应的格式必须为 HLS 格式。
     * @param integer $Definition 指定播放的转码模版，当 AudioVideoType 为 Transcode 时必须指定。
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
