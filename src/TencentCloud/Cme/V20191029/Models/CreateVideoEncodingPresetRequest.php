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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoEncodingPreset请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getName() 获取配置名，可用来简单描述该配置的作用。
 * @method void setName(string $Name) 设置配置名，可用来简单描述该配置的作用。
 * @method string getContainer() 获取封装格式，可选值：
<li>mp4 ；</li>
<li>mov 。</li>
默认值：mp4。
 * @method void setContainer(string $Container) 设置封装格式，可选值：
<li>mp4 ；</li>
<li>mov 。</li>
默认值：mp4。
 * @method integer getRemoveVideo() 获取是否去除视频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
 * @method integer getRemoveAudio() 获取是否去除音频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
 * @method VideoEncodingPresetVideoSetting getVideoSetting() 获取编码配置的视频设置。默认值参考VideoEncodingPresetVideoSetting 定义。
 * @method void setVideoSetting(VideoEncodingPresetVideoSetting $VideoSetting) 设置编码配置的视频设置。默认值参考VideoEncodingPresetVideoSetting 定义。
 * @method VideoEncodingPresetAudioSetting getAudioSetting() 获取编码配置的音频设置。默认值参考VideoEncodingPresetAudioSetting 定义。
 * @method void setAudioSetting(VideoEncodingPresetAudioSetting $AudioSetting) 设置编码配置的音频设置。默认值参考VideoEncodingPresetAudioSetting 定义。
 */
class CreateVideoEncodingPresetRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 配置名，可用来简单描述该配置的作用。
     */
    public $Name;

    /**
     * @var string 封装格式，可选值：
<li>mp4 ；</li>
<li>mov 。</li>
默认值：mp4。
     */
    public $Container;

    /**
     * @var integer 是否去除视频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
     */
    public $RemoveAudio;

    /**
     * @var VideoEncodingPresetVideoSetting 编码配置的视频设置。默认值参考VideoEncodingPresetVideoSetting 定义。
     */
    public $VideoSetting;

    /**
     * @var VideoEncodingPresetAudioSetting 编码配置的音频设置。默认值参考VideoEncodingPresetAudioSetting 定义。
     */
    public $AudioSetting;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $Name 配置名，可用来简单描述该配置的作用。
     * @param string $Container 封装格式，可选值：
<li>mp4 ；</li>
<li>mov 。</li>
默认值：mp4。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
     * @param VideoEncodingPresetVideoSetting $VideoSetting 编码配置的视频设置。默认值参考VideoEncodingPresetVideoSetting 定义。
     * @param VideoEncodingPresetAudioSetting $AudioSetting 编码配置的音频设置。默认值参考VideoEncodingPresetAudioSetting 定义。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("VideoSetting",$param) and $param["VideoSetting"] !== null) {
            $this->VideoSetting = new VideoEncodingPresetVideoSetting();
            $this->VideoSetting->deserialize($param["VideoSetting"]);
        }

        if (array_key_exists("AudioSetting",$param) and $param["AudioSetting"] !== null) {
            $this->AudioSetting = new VideoEncodingPresetAudioSetting();
            $this->AudioSetting->deserialize($param["AudioSetting"]);
        }
    }
}
