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
 * 自定义视频转码参数。
 *
 * @method string getContainer() 获取<p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
 * @method void setContainer(string $Container) 设置<p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
 * @method integer getRemoveVideo() 获取<p>是否去除视频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置<p>是否去除视频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
 * @method integer getRemoveAudio() 获取<p>是否去除音频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置<p>是否去除音频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
 * @method VideoTemplateInfoForUpdate getVideoTemplate() 获取<p>视频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoTemplate(VideoTemplateInfoForUpdate $VideoTemplate) 设置<p>视频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioTemplateInfoForUpdate getAudioTemplate() 获取<p>音频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioTemplate(AudioTemplateInfoForUpdate $AudioTemplate) 设置<p>音频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TEHDConfigForUpdate getTEHDConfig() 获取<p>极速高清转码配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTEHDConfig(TEHDConfigForUpdate $TEHDConfig) 设置<p>极速高清转码配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStdExtInfo() 获取<p>标准扩展字段，特殊用途使用。</p>
 * @method void setStdExtInfo(string $StdExtInfo) 设置<p>标准扩展字段，特殊用途使用。</p>
 */
class OverrideTranscodeParameter extends AbstractModel
{
    /**
     * @var string <p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
     */
    public $Container;

    /**
     * @var integer <p>是否去除视频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
     */
    public $RemoveVideo;

    /**
     * @var integer <p>是否去除音频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfoForUpdate <p>视频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfoForUpdate <p>音频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfigForUpdate <p>极速高清转码配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TEHDConfig;

    /**
     * @var string <p>标准扩展字段，特殊用途使用。</p>
     */
    public $StdExtInfo;

    /**
     * @param string $Container <p>封装格式，可选值：mp4、flv、hls、mp3、flac、ogg、m4a、wav。其中，mp3、flac、ogg、m4a、wav 为纯音频文件。</p>
     * @param integer $RemoveVideo <p>是否去除视频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
     * @param integer $RemoveAudio <p>是否去除音频数据，取值：<br>&lt;li&gt;0：保留；&lt;\li&gt;<br>&lt;li&gt;1：去除。&lt;\li&gt;</p>
     * @param VideoTemplateInfoForUpdate $VideoTemplate <p>视频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioTemplateInfoForUpdate $AudioTemplate <p>音频流配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TEHDConfigForUpdate $TEHDConfig <p>极速高清转码配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StdExtInfo <p>标准扩展字段，特殊用途使用。</p>
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

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfoForUpdate();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfoForUpdate();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfigForUpdate();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
