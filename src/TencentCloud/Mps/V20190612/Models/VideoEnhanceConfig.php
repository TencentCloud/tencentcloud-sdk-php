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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频增强配置
 *
 * @method FrameRateConfig getFrameRate() 获取插帧帧率配置（旧）。新用户建议使用FrameRateWithDen配置插帧帧率，支持分数，且效果更好。注意，FrameRate 与FrameRateWithDen 只能二选一，同时配置可能导致任务失败。源帧率大于等于目标帧率时能力不会生效。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameRate(FrameRateConfig $FrameRate) 设置插帧帧率配置（旧）。新用户建议使用FrameRateWithDen配置插帧帧率，支持分数，且效果更好。注意，FrameRate 与FrameRateWithDen 只能二选一，同时配置可能导致任务失败。源帧率大于等于目标帧率时能力不会生效。

注意：此字段可能返回 null，表示取不到有效值。
 * @method SuperResolutionConfig getSuperResolution() 获取超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperResolution(SuperResolutionConfig $SuperResolution) 设置超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
 * @method HdrConfig getHdr() 获取HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHdr(HdrConfig $Hdr) 设置HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoDenoiseConfig getDenoise() 获取视频降噪配置。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDenoise(VideoDenoiseConfig $Denoise) 设置视频降噪配置。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageQualityEnhanceConfig getImageQualityEnhance() 获取综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageQualityEnhance(ImageQualityEnhanceConfig $ImageQualityEnhance) 设置综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
 * @method ColorEnhanceConfig getColorEnhance() 获取色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorEnhance(ColorEnhanceConfig $ColorEnhance) 设置色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LowLightEnhanceConfig getLowLightEnhance() 获取低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowLightEnhance(LowLightEnhanceConfig $LowLightEnhance) 设置低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScratchRepairConfig getScratchRepair() 获取去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScratchRepair(ScratchRepairConfig $ScratchRepair) 设置去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ArtifactRepairConfig getArtifactRepair() 获取去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArtifactRepair(ArtifactRepairConfig $ArtifactRepair) 设置去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnhanceSceneType() 获取增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
<li>填空字符串代表不使用增强场景</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnhanceSceneType(string $EnhanceSceneType) 设置增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
<li>填空字符串代表不使用增强场景</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiffusionEnhanceConfig getDiffusionEnhance() 获取大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiffusionEnhance(DiffusionEnhanceConfig $DiffusionEnhance) 设置大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。

注意：此字段可能返回 null，表示取不到有效值。
 * @method FrameRateWithDenConfig getFrameRateWithDen() 获取新插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameRateWithDen(FrameRateWithDenConfig $FrameRateWithDen) 设置新插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。

注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var FrameRateConfig 插帧帧率配置（旧）。新用户建议使用FrameRateWithDen配置插帧帧率，支持分数，且效果更好。注意，FrameRate 与FrameRateWithDen 只能二选一，同时配置可能导致任务失败。源帧率大于等于目标帧率时能力不会生效。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameRate;

    /**
     * @var SuperResolutionConfig 超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperResolution;

    /**
     * @var HdrConfig HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hdr;

    /**
     * @var VideoDenoiseConfig 视频降噪配置。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceConfig 综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceConfig 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorEnhance;

    /**
     * @var LowLightEnhanceConfig 低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairConfig 去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairConfig 去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArtifactRepair;

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnhanceSceneType;

    /**
     * @var DiffusionEnhanceConfig 大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenConfig 新插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameRateWithDen;

    /**
     * @param FrameRateConfig $FrameRate 插帧帧率配置（旧）。新用户建议使用FrameRateWithDen配置插帧帧率，支持分数，且效果更好。注意，FrameRate 与FrameRateWithDen 只能二选一，同时配置可能导致任务失败。源帧率大于等于目标帧率时能力不会生效。

注意：此字段可能返回 null，表示取不到有效值。
     * @param SuperResolutionConfig $SuperResolution 超分配置。源分辨率高于目标分辨率时不对视频做处理。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
     * @param HdrConfig $Hdr HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoDenoiseConfig $Denoise 视频降噪配置。注意与大模型增强不可同时开启。

注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageQualityEnhanceConfig $ImageQualityEnhance 综合增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
     * @param ColorEnhanceConfig $ColorEnhance 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LowLightEnhanceConfig $LowLightEnhance 低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScratchRepairConfig $ScratchRepair 去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ArtifactRepairConfig $ArtifactRepair 去伪影（毛刺）配置。注意大模型、综合增强、去毛刺三项里最多配置一项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnhanceSceneType 增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
<li>填空字符串代表不使用增强场景</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiffusionEnhanceConfig $DiffusionEnhance 大模型增强配置。注意大模型、综合增强、去毛刺三项里最多配置一项。且不可与超分、降噪同时开启。

注意：此字段可能返回 null，表示取不到有效值。
     * @param FrameRateWithDenConfig $FrameRateWithDen 新插帧帧率配置，支持分数。注意与FrameRate二选一。源帧率大于等于目标帧率时能力不会生效。

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
        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = new FrameRateConfig();
            $this->FrameRate->deserialize($param["FrameRate"]);
        }

        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionConfig();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("Hdr",$param) and $param["Hdr"] !== null) {
            $this->Hdr = new HdrConfig();
            $this->Hdr->deserialize($param["Hdr"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new VideoDenoiseConfig();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("ImageQualityEnhance",$param) and $param["ImageQualityEnhance"] !== null) {
            $this->ImageQualityEnhance = new ImageQualityEnhanceConfig();
            $this->ImageQualityEnhance->deserialize($param["ImageQualityEnhance"]);
        }

        if (array_key_exists("ColorEnhance",$param) and $param["ColorEnhance"] !== null) {
            $this->ColorEnhance = new ColorEnhanceConfig();
            $this->ColorEnhance->deserialize($param["ColorEnhance"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceConfig();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }

        if (array_key_exists("ScratchRepair",$param) and $param["ScratchRepair"] !== null) {
            $this->ScratchRepair = new ScratchRepairConfig();
            $this->ScratchRepair->deserialize($param["ScratchRepair"]);
        }

        if (array_key_exists("ArtifactRepair",$param) and $param["ArtifactRepair"] !== null) {
            $this->ArtifactRepair = new ArtifactRepairConfig();
            $this->ArtifactRepair->deserialize($param["ArtifactRepair"]);
        }

        if (array_key_exists("EnhanceSceneType",$param) and $param["EnhanceSceneType"] !== null) {
            $this->EnhanceSceneType = $param["EnhanceSceneType"];
        }

        if (array_key_exists("DiffusionEnhance",$param) and $param["DiffusionEnhance"] !== null) {
            $this->DiffusionEnhance = new DiffusionEnhanceConfig();
            $this->DiffusionEnhance->deserialize($param["DiffusionEnhance"]);
        }

        if (array_key_exists("FrameRateWithDen",$param) and $param["FrameRateWithDen"] !== null) {
            $this->FrameRateWithDen = new FrameRateWithDenConfig();
            $this->FrameRateWithDen->deserialize($param["FrameRateWithDen"]);
        }
    }
}
