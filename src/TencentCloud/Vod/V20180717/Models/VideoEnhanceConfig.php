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
 * 视频增强配置。
 *
 * @method string getEnhanceScenarioType() 获取增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
<li>填空字符串代表不使用增强场景</li>
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) 设置增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
<li>填空字符串代表不使用增强场景</li>
 * @method SuperResolutionInfo getSuperResolution() 获取超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperResolution(SuperResolutionInfo $SuperResolution) 设置超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HDRInfo getHdr() 获取HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHdr(HDRInfo $Hdr) 设置HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoDenoiseInfo getDenoise() 获取视频降噪配置。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDenoise(VideoDenoiseInfo $Denoise) 设置视频降噪配置。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageQualityEnhanceInfo getImageQualityEnhance() 获取综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageQualityEnhance(ImageQualityEnhanceInfo $ImageQualityEnhance) 设置综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
 * @method ColorEnhanceInfo getColorEnhance() 获取色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorEnhance(ColorEnhanceInfo $ColorEnhance) 设置色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LowLightEnhanceInfo getLowLightEnhance() 获取低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowLightEnhance(LowLightEnhanceInfo $LowLightEnhance) 设置低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScratchRepairInfo getScratchRepair() 获取去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScratchRepair(ScratchRepairInfo $ScratchRepair) 设置去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ArtifactRepairInfo getArtifactRepair() 获取去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArtifactRepair(ArtifactRepairInfo $ArtifactRepair) 设置去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiffusionEnhanceInfo getDiffusionEnhance() 获取大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiffusionEnhance(DiffusionEnhanceInfo $DiffusionEnhance) 设置大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FrameRateWithDenInfo getFrameRateWithDen() 获取插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameRateWithDen(FrameRateWithDenInfo $FrameRateWithDen) 设置插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var string 增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
<li>填空字符串代表不使用增强场景</li>
     */
    public $EnhanceScenarioType;

    /**
     * @var SuperResolutionInfo 超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperResolution;

    /**
     * @var HDRInfo HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hdr;

    /**
     * @var VideoDenoiseInfo 视频降噪配置。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceInfo 综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceInfo 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorEnhance;

    /**
     * @var LowLightEnhanceInfo 低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairInfo 去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairInfo 去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArtifactRepair;

    /**
     * @var DiffusionEnhanceInfo 大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenInfo 插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameRateWithDen;

    /**
     * @param string $EnhanceScenarioType 增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
<li>填空字符串代表不使用增强场景</li>
     * @param SuperResolutionInfo $SuperResolution 超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HDRInfo $Hdr HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoDenoiseInfo $Denoise 视频降噪配置。注意与大模型增强不可同时开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageQualityEnhanceInfo $ImageQualityEnhance 综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
     * @param ColorEnhanceInfo $ColorEnhance 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LowLightEnhanceInfo $LowLightEnhance 低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScratchRepairInfo $ScratchRepair 去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ArtifactRepairInfo $ArtifactRepair 去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiffusionEnhanceInfo $DiffusionEnhance 大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FrameRateWithDenInfo $FrameRateWithDen 插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EnhanceScenarioType",$param) and $param["EnhanceScenarioType"] !== null) {
            $this->EnhanceScenarioType = $param["EnhanceScenarioType"];
        }

        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionInfo();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("Hdr",$param) and $param["Hdr"] !== null) {
            $this->Hdr = new HDRInfo();
            $this->Hdr->deserialize($param["Hdr"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new VideoDenoiseInfo();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("ImageQualityEnhance",$param) and $param["ImageQualityEnhance"] !== null) {
            $this->ImageQualityEnhance = new ImageQualityEnhanceInfo();
            $this->ImageQualityEnhance->deserialize($param["ImageQualityEnhance"]);
        }

        if (array_key_exists("ColorEnhance",$param) and $param["ColorEnhance"] !== null) {
            $this->ColorEnhance = new ColorEnhanceInfo();
            $this->ColorEnhance->deserialize($param["ColorEnhance"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceInfo();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }

        if (array_key_exists("ScratchRepair",$param) and $param["ScratchRepair"] !== null) {
            $this->ScratchRepair = new ScratchRepairInfo();
            $this->ScratchRepair->deserialize($param["ScratchRepair"]);
        }

        if (array_key_exists("ArtifactRepair",$param) and $param["ArtifactRepair"] !== null) {
            $this->ArtifactRepair = new ArtifactRepairInfo();
            $this->ArtifactRepair->deserialize($param["ArtifactRepair"]);
        }

        if (array_key_exists("DiffusionEnhance",$param) and $param["DiffusionEnhance"] !== null) {
            $this->DiffusionEnhance = new DiffusionEnhanceInfo();
            $this->DiffusionEnhance->deserialize($param["DiffusionEnhance"]);
        }

        if (array_key_exists("FrameRateWithDen",$param) and $param["FrameRateWithDen"] !== null) {
            $this->FrameRateWithDen = new FrameRateWithDenInfo();
            $this->FrameRateWithDen->deserialize($param["FrameRateWithDen"]);
        }
    }
}
