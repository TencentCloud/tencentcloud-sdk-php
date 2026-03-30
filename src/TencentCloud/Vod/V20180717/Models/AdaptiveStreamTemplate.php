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
 * 自适应转码流参数模板
 *
 * @method VideoTemplateInfo getVideo() 获取<p>视频参数信息。</p>
 * @method void setVideo(VideoTemplateInfo $Video) 设置<p>视频参数信息。</p>
 * @method AudioTemplateInfo getAudio() 获取<p>音频参数信息。</p>
 * @method void setAudio(AudioTemplateInfo $Audio) 设置<p>音频参数信息。</p>
 * @method integer getRemoveAudio() 获取<p>是否移除音频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置<p>是否移除音频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method integer getRemoveVideo() 获取<p>是否移除视频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置<p>是否移除视频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method TEHDConfig getTEHDConfig() 获取<p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) 设置<p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EnhanceConfig getEnhanceConfig() 获取<p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnhanceConfig(EnhanceConfig $EnhanceConfig) 设置<p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStdExtInfo() 获取<p>扩展参数。</p>
 * @method void setStdExtInfo(string $StdExtInfo) 设置<p>扩展参数。</p>
 */
class AdaptiveStreamTemplate extends AbstractModel
{
    /**
     * @var VideoTemplateInfo <p>视频参数信息。</p>
     */
    public $Video;

    /**
     * @var AudioTemplateInfo <p>音频参数信息。</p>
     */
    public $Audio;

    /**
     * @var integer <p>是否移除音频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
     */
    public $RemoveAudio;

    /**
     * @var integer <p>是否移除视频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
     */
    public $RemoveVideo;

    /**
     * @var TEHDConfig <p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TEHDConfig;

    /**
     * @var EnhanceConfig <p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnhanceConfig;

    /**
     * @var string <p>扩展参数。</p>
     */
    public $StdExtInfo;

    /**
     * @param VideoTemplateInfo $Video <p>视频参数信息。</p>
     * @param AudioTemplateInfo $Audio <p>音频参数信息。</p>
     * @param integer $RemoveAudio <p>是否移除音频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
     * @param integer $RemoveVideo <p>是否移除视频流，取值范围：</p><li>0：否，</li><li>1：是。</li>
     * @param TEHDConfig $TEHDConfig <p>极速高清转码参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EnhanceConfig $EnhanceConfig <p>音视频增强配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StdExtInfo <p>扩展参数。</p>
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
        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new VideoTemplateInfo();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = new AudioTemplateInfo();
            $this->Audio->deserialize($param["Audio"]);
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("EnhanceConfig",$param) and $param["EnhanceConfig"] !== null) {
            $this->EnhanceConfig = new EnhanceConfig();
            $this->EnhanceConfig->deserialize($param["EnhanceConfig"]);
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
