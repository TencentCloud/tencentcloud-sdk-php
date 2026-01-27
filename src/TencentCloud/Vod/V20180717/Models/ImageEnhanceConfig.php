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
 * 图片增强参数
 *
 * @method SuperResolutionInfo getSuperResolution() 获取超分配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperResolution(SuperResolutionInfo $SuperResolution) 设置超分配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedSuperResolutionConfig getAdvancedSuperResolution() 获取高级超分配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedSuperResolution(AdvancedSuperResolutionConfig $AdvancedSuperResolution) 设置高级超分配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageDenoiseConfig getDenoise() 获取降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDenoise(ImageDenoiseConfig $Denoise) 设置降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageQualityEnhanceInfo getImageQualityEnhance() 获取综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageQualityEnhance(ImageQualityEnhanceInfo $ImageQualityEnhance) 设置综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ColorEnhanceInfo getColorEnhance() 获取色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorEnhance(ColorEnhanceInfo $ColorEnhance) 设置色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SharpEnhanceInfo getSharpEnhance() 获取细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharpEnhance(SharpEnhanceInfo $SharpEnhance) 设置细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FaceEnhanceInfo getFaceEnhance() 获取人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceEnhance(FaceEnhanceInfo $FaceEnhance) 设置人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LowLightEnhanceInfo getLowLightEnhance() 获取低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowLightEnhance(LowLightEnhanceInfo $LowLightEnhance) 设置低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageEnhanceConfig extends AbstractModel
{
    /**
     * @var SuperResolutionInfo 超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperResolution;

    /**
     * @var AdvancedSuperResolutionConfig 高级超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedSuperResolution;

    /**
     * @var ImageDenoiseConfig 降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceInfo 综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceInfo 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorEnhance;

    /**
     * @var SharpEnhanceInfo 细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharpEnhance;

    /**
     * @var FaceEnhanceInfo 人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceEnhance;

    /**
     * @var LowLightEnhanceInfo 低光照增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LowLightEnhance;

    /**
     * @param SuperResolutionInfo $SuperResolution 超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedSuperResolutionConfig $AdvancedSuperResolution 高级超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageDenoiseConfig $Denoise 降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageQualityEnhanceInfo $ImageQualityEnhance 综合增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ColorEnhanceInfo $ColorEnhance 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SharpEnhanceInfo $SharpEnhance 细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FaceEnhanceInfo $FaceEnhance 人脸增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LowLightEnhanceInfo $LowLightEnhance 低光照增强配置。
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
        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionInfo();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("AdvancedSuperResolution",$param) and $param["AdvancedSuperResolution"] !== null) {
            $this->AdvancedSuperResolution = new AdvancedSuperResolutionConfig();
            $this->AdvancedSuperResolution->deserialize($param["AdvancedSuperResolution"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new ImageDenoiseConfig();
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

        if (array_key_exists("SharpEnhance",$param) and $param["SharpEnhance"] !== null) {
            $this->SharpEnhance = new SharpEnhanceInfo();
            $this->SharpEnhance->deserialize($param["SharpEnhance"]);
        }

        if (array_key_exists("FaceEnhance",$param) and $param["FaceEnhance"] !== null) {
            $this->FaceEnhance = new FaceEnhanceInfo();
            $this->FaceEnhance->deserialize($param["FaceEnhance"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceInfo();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }
    }
}
