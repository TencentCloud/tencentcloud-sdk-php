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
 * @method string getFileName() 获取文件名称，最长 64 个字符。
 * @method void setFileName(string $FileName) 设置文件名称，最长 64 个字符。
 * @method string getDescription() 获取描述信息，最长 128 个字符。
 * @method void setDescription(string $Description) 设置描述信息，最长 128 个字符。
 * @method string getContainer() 获取封装格式，可选值：mp4、mp3。其中，mp3 为纯音频文件。
 * @method void setContainer(string $Container) 设置封装格式，可选值：mp4、mp3。其中，mp3 为纯音频文件。
 * @method OutputVideoStream getVideoStream() 获取输出的视频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoStream(OutputVideoStream $VideoStream) 设置输出的视频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OutputAudioStream getAudioStream() 获取输出的音频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioStream(OutputAudioStream $AudioStream) 设置输出的音频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemoveVideo() 获取是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
 * @method integer getRemoveAudio() 获取是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
 */

/**
 *输出的媒体文件信息。
 */
class ComposeMediaOutput extends AbstractModel
{
    /**
     * @var string 文件名称，最长 64 个字符。
     */
    public $FileName;

    /**
     * @var string 描述信息，最长 128 个字符。
     */
    public $Description;

    /**
     * @var string 封装格式，可选值：mp4、mp3。其中，mp3 为纯音频文件。
     */
    public $Container;

    /**
     * @var OutputVideoStream 输出的视频信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoStream;

    /**
     * @var OutputAudioStream 输出的音频信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioStream;

    /**
     * @var integer 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
     */
    public $RemoveAudio;
    /**
     * @param string $FileName 文件名称，最长 64 个字符。
     * @param string $Description 描述信息，最长 128 个字符。
     * @param string $Container 封装格式，可选值：mp4、mp3。其中，mp3 为纯音频文件。
     * @param OutputVideoStream $VideoStream 输出的视频信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OutputAudioStream $AudioStream 输出的音频信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值：0。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new OutputVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("AudioStream",$param) and $param["AudioStream"] !== null) {
            $this->AudioStream = new OutputAudioStream();
            $this->AudioStream->deserialize($param["AudioStream"]);
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }
    }
}
