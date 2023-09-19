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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务 目标视频信息。
 *
 * @method string getContainer() 获取封装容器格式，可选值：
<li>mp4：视频文件（默认）。</li>
<li>mp3：纯音频文件。</li>
 * @method void setContainer(string $Container) 设置封装容器格式，可选值：
<li>mp4：视频文件（默认）。</li>
<li>mp3：纯音频文件。</li>
 * @method integer getRemoveVideo() 获取是否去除视频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
 * @method integer getRemoveAudio() 获取是否去除音频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
 * @method ComposeVideoStream getVideoStream() 获取输出视频流信息。
 * @method void setVideoStream(ComposeVideoStream $VideoStream) 设置输出视频流信息。
 * @method ComposeAudioStream getAudioStream() 获取输出音频流信息。
 * @method void setAudioStream(ComposeAudioStream $AudioStream) 设置输出音频流信息。
 */
class ComposeTargetInfo extends AbstractModel
{
    /**
     * @var string 封装容器格式，可选值：
<li>mp4：视频文件（默认）。</li>
<li>mp3：纯音频文件。</li>
     */
    public $Container;

    /**
     * @var integer 是否去除视频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
     */
    public $RemoveAudio;

    /**
     * @var ComposeVideoStream 输出视频流信息。
     */
    public $VideoStream;

    /**
     * @var ComposeAudioStream 输出音频流信息。
     */
    public $AudioStream;

    /**
     * @param string $Container 封装容器格式，可选值：
<li>mp4：视频文件（默认）。</li>
<li>mp3：纯音频文件。</li>
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留（默认）。</li>
<li>1：去除。</li>
     * @param ComposeVideoStream $VideoStream 输出视频流信息。
     * @param ComposeAudioStream $AudioStream 输出音频流信息。
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new ComposeVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("AudioStream",$param) and $param["AudioStream"] !== null) {
            $this->AudioStream = new ComposeAudioStream();
            $this->AudioStream->deserialize($param["AudioStream"]);
        }
    }
}
