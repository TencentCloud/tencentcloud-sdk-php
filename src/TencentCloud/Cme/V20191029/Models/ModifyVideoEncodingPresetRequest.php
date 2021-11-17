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
 * ModifyVideoEncodingPreset请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method integer getId() 获取配置 ID。
 * @method void setId(integer $Id) 设置配置 ID。
 * @method string getName() 获取更改后的视频编码配置名，不填则不修改。
 * @method void setName(string $Name) 设置更改后的视频编码配置名，不填则不修改。
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
 * @method VideoEncodingPresetVideoSettingForUpdate getVideoSetting() 获取更改后的编码配置的视频设置。
 * @method void setVideoSetting(VideoEncodingPresetVideoSettingForUpdate $VideoSetting) 设置更改后的编码配置的视频设置。
 * @method VideoEncodingPresetAudioSettingForUpdate getAudioSetting() 获取更改后的编码配置的音频设置。
 * @method void setAudioSetting(VideoEncodingPresetAudioSettingForUpdate $AudioSetting) 设置更改后的编码配置的音频设置。
 */
class ModifyVideoEncodingPresetRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var integer 配置 ID。
     */
    public $Id;

    /**
     * @var string 更改后的视频编码配置名，不填则不修改。
     */
    public $Name;

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
     * @var VideoEncodingPresetVideoSettingForUpdate 更改后的编码配置的视频设置。
     */
    public $VideoSetting;

    /**
     * @var VideoEncodingPresetAudioSettingForUpdate 更改后的编码配置的音频设置。
     */
    public $AudioSetting;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param integer $Id 配置 ID。
     * @param string $Name 更改后的视频编码配置名，不填则不修改。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留；</li>
<li>1：去除。</li>
默认值：0。
     * @param VideoEncodingPresetVideoSettingForUpdate $VideoSetting 更改后的编码配置的视频设置。
     * @param VideoEncodingPresetAudioSettingForUpdate $AudioSetting 更改后的编码配置的音频设置。
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("VideoSetting",$param) and $param["VideoSetting"] !== null) {
            $this->VideoSetting = new VideoEncodingPresetVideoSettingForUpdate();
            $this->VideoSetting->deserialize($param["VideoSetting"]);
        }

        if (array_key_exists("AudioSetting",$param) and $param["AudioSetting"] !== null) {
            $this->AudioSetting = new VideoEncodingPresetAudioSettingForUpdate();
            $this->AudioSetting->deserialize($param["AudioSetting"]);
        }
    }
}
