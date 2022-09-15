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
 * 视频增强配置
 *
 * @method FrameRateConfig getFrameRate() 获取插帧帧率配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameRate(FrameRateConfig $FrameRate) 设置插帧帧率配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SuperResolutionConfig getSuperResolution() 获取超分配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperResolution(SuperResolutionConfig $SuperResolution) 设置超分配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HdrConfig getHdr() 获取HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHdr(HdrConfig $Hdr) 设置HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoDenoiseConfig getDenoise() 获取视频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDenoise(VideoDenoiseConfig $Denoise) 设置视频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageQualityEnhanceConfig getImageQualityEnhance() 获取综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageQualityEnhance(ImageQualityEnhanceConfig $ImageQualityEnhance) 设置综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ColorEnhanceConfig getColorEnhance() 获取色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorEnhance(ColorEnhanceConfig $ColorEnhance) 设置色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SharpEnhanceConfig getSharpEnhance() 获取细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharpEnhance(SharpEnhanceConfig $SharpEnhance) 设置细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FaceEnhanceConfig getFaceEnhance() 获取人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceEnhance(FaceEnhanceConfig $FaceEnhance) 设置人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LowLightEnhanceConfig getLowLightEnhance() 获取低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowLightEnhance(LowLightEnhanceConfig $LowLightEnhance) 设置低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScratchRepairConfig getScratchRepair() 获取去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScratchRepair(ScratchRepairConfig $ScratchRepair) 设置去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ArtifactRepairConfig getArtifactRepair() 获取去伪影（毛刺）配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArtifactRepair(ArtifactRepairConfig $ArtifactRepair) 设置去伪影（毛刺）配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var FrameRateConfig 插帧帧率配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameRate;

    /**
     * @var SuperResolutionConfig 超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperResolution;

    /**
     * @var HdrConfig HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hdr;

    /**
     * @var VideoDenoiseConfig 视频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceConfig 综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceConfig 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorEnhance;

    /**
     * @var SharpEnhanceConfig 细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharpEnhance;

    /**
     * @var FaceEnhanceConfig 人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceEnhance;

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
     * @var ArtifactRepairConfig 去伪影（毛刺）配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArtifactRepair;

    /**
     * @param FrameRateConfig $FrameRate 插帧帧率配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SuperResolutionConfig $SuperResolution 超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HdrConfig $Hdr HDR配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoDenoiseConfig $Denoise 视频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageQualityEnhanceConfig $ImageQualityEnhance 综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ColorEnhanceConfig $ColorEnhance 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SharpEnhanceConfig $SharpEnhance 细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FaceEnhanceConfig $FaceEnhance 人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LowLightEnhanceConfig $LowLightEnhance 低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScratchRepairConfig $ScratchRepair 去划痕配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ArtifactRepairConfig $ArtifactRepair 去伪影（毛刺）配置。
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

        if (array_key_exists("SharpEnhance",$param) and $param["SharpEnhance"] !== null) {
            $this->SharpEnhance = new SharpEnhanceConfig();
            $this->SharpEnhance->deserialize($param["SharpEnhance"]);
        }

        if (array_key_exists("FaceEnhance",$param) and $param["FaceEnhance"] !== null) {
            $this->FaceEnhance = new FaceEnhanceConfig();
            $this->FaceEnhance->deserialize($param["FaceEnhance"]);
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
    }
}
