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
 * 图片增强参数
 *
 * @method SuperResolutionConfig getSuperResolution() 获取超分配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperResolution(SuperResolutionConfig $SuperResolution) 设置超分配置。
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
 */
class ImageEnhanceConfig extends AbstractModel
{
    /**
     * @var SuperResolutionConfig 超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperResolution;

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
     * @param SuperResolutionConfig $SuperResolution 超分配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ColorEnhanceConfig $ColorEnhance 色彩增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SharpEnhanceConfig $SharpEnhance 细节增强配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FaceEnhanceConfig $FaceEnhance 人脸增强配置。
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
            $this->SuperResolution = new SuperResolutionConfig();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
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
    }
}
